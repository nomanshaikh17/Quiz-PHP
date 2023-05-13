$(document).ready(function () {
    var currentQuestion = 0; // Variable to keep track of the current question
  var timerInterval;
  var timeLeft = 300; // 5 minutes in seconds
  var questions;
  var totalQuestions;

  function startTimer() {
    timerInterval = setInterval(updateTimer, 1000);
  }

  function updateTimer() {
    var minutes = Math.floor(timeLeft / 60);
    var seconds = timeLeft % 60;

    $('.timer').text(minutes.toString().padStart(2, '0') + ':' + seconds.toString().padStart(2, '0'));

    if (timeLeft <= 0) {
      clearInterval(timerInterval);
      alert('Time is up!');
      checkResult();
    }

    timeLeft--;
  }

  var progressBar = $('#progress-bar');
  var nextButton = $('#next-button');
  var checkResultButton = $('#check-result-button');
  var progress = 0;

  nextButton.on('click', function () {
    if (progress < 100) {
        currentQuestion++; // Increment the current question index
        progress = (currentQuestion / totalQuestions) * 100; // Calculate the progress based on the current question index and total questions
        progressBar.css('width', progress + '%');
        $('.quiz-container').empty(); // Clear previous question and answers

        if (currentQuestion < totalQuestions) {
            displayQuestion(questions);
        } else {
            // All questions have been answered
            // Display the check result button
            $('.suggestion_row').hide();
            $('.options_row').hide();
            $('.question_row').hide();
            $('.top_row').hide();
            nextButton.hide();
            checkResultButton.show();
        }
    }
  });
  checkResultButton.on('click', function () {
    // Perform action to check the result
    checkResult();
});

function checkResult(){
    window.location.href = "result.php?total="+totalQuestions;
    exit();
}

  // Function to load questions from the PHP script
  function loadQuestions() {
    $.ajax({
      url: 'questions.php',
      dataType: 'json',
      success: function (data) {
        questions = data; // Assign the loaded questions to the variable
        totalQuestions = questions.length; // Set the total number of questions
        displayQuestion(questions);
      },
      error: function (xhr, status, error) {
        console.error('Error:', error);
      }
    });
  }

    function displayQuestion(questions) {

        var questionElement = $('#question');
        var questionNumber = currentQuestion + 1;

        // Update the question number display
        $('.question_no').text('Question ' + questionNumber + ' of ' + totalQuestions);
        $('.quiz-type').text(questions[currentQuestion].type);

        questionElement.text(decodeURIComponent(questions[currentQuestion].question));
        difficulty = questions[currentQuestion].difficulty;
        if(difficulty=="easy"){
            $('.easy').addClass('checked');
            $('.easy').removeClass('unchecked');
            $('.medium').addClass('unchecked');
            $('.medium').removeClass('checked');
            $('.hard').addClass('unchecked');
            $('.hard').removeClass('checked');
        }else if(difficulty=="medium"){
            $('.easy').addClass('checked');
            $('.easy').removeClass('unchecked');
            $('.medium').addClass('checked');
            $('.medium').removeClass('unchecked');
            $('.hard').addClass('unchecked');
            $('.hard').removeClass('checked');
        }else{
            $('.easy').addClass('checked');
            $('.easy').removeClass('unchecked');
            $('.medium').addClass('checked');
            $('.medium').removeClass('unchecked');
            $('.hard').addClass('checked');
            $('.hard').removeClass('unchecked');
        }

        var answers = [];
        answers.push({
            answer: decodeURIComponent(questions[currentQuestion].correct_answer).replace(/%/g, ''),
            correct: true
        });
        questions[currentQuestion].incorrect_answers.forEach(function (answer) {
            answers.push({
                answer: decodeURIComponent(answer).replace(/%/g, ''),
                correct: false
            });
        });
        shuffleArray(answers);

        // Clear previous answers
        $('.quiz-container').empty();

        // Add new answers to their respective divs
        $.each(answers, function (index, answerObj) {
            var answerElement = $('<div class="answer">').text(answerObj.answer);
            answerElement.data('correct', answerObj.correct);
            $('.quiz-container').append(answerElement);
        });

        $('.answer').click(function () {
            var selectedAnswer = $(this);
            var isCorrect = selectedAnswer.data('correct');

            // Disable all answers
            $('.answer').addClass('disabled');

            // Highlight the selected answer
            $('.answer').removeClass('selected');
            selectedAnswer.addClass('selected');

            // Send the selected answer and question index to the PHP script
            var questionIndex = currentQuestion; // Update with the actual question index
            $.ajax({
                url: 'check_answer.php',
                method: 'POST',
                data: { answer: selectedAnswer.text(), correct: isCorrect, questionIndex: questionIndex },
                success: function (response) {
                    console.log(response);
                    // Handle the response from the PHP script
                    if ($.trim(response) === 'correct') {
                        selectedAnswer.addClass('correct');
                        $('.is_correct').text('Correct!');
                    } else {
                        selectedAnswer.addClass('incorrect');
                        $('.is_correct').text('Incorrect');
                    }
                },
                error: function (xhr, status, error) {
                    alert('Error:', error);
                    console.error('Error:', error);
                }
            });
        });
    }


    function shuffleArray(array) {
        var currentIndex = array.length, temporaryValue, randomIndex;

        // While there remain elements to shuffle
        while (0 !== currentIndex) {
            // Pick a remaining element
            randomIndex = Math.floor(Math.random() * currentIndex);
            currentIndex -= 1;

            // Swap it with the current element
            temporaryValue = array[currentIndex];
            array[currentIndex] = array[randomIndex];
            array[randomIndex] = temporaryValue;
        }

        return array;
    }

    startTimer();
  loadQuestions();

});