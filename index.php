<!DOCTYPE html>
<html>
<head>
    <title>Quiz</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="quiz.js"></script>
</head>
<style>

body {
    background-color: #f2f2f2;
    font-family: Arial, sans-serif;
}

h1 {
    text-align: center;
    color: #333;
}

form {
    text-align: center;
    margin-top: 50px;
}

label {
    display: block;
    font-size: 20px;
    margin-bottom: 10px;
    color: #333;
}

input[type="text"] {
    padding: 10px;
    width: 200px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 20px;
}

button {
    padding: 10px 20px;
    background-color: #4caf50;
    color: #fff;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

#result {
    text-align: center;
    margin-top: 20px;
    font-size: 18px;
    color: #f00;
}
</style>

<body>
    <h1>Welcome to the Quiz</h1>
    <form id="start-form">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Start Quiz</button>
    </form>
    <div id="result"></div>
</body>
</html>
</html>

<script>
$(document).ready(function() {
    $('#start-form').submit(function(e) {
        e.preventDefault();

        var name = $('#name').val();

        $.ajax({
            url: 'start_quiz.php',
            method: 'POST',
            data: { name: name },
            success: function(response) {
                if (response === 'success') {
                    window.location.href = 'quiz.php';
                } else {
                    $('#result').text('Error starting the quiz. Please try again.');
                }
            },
            error: function() {
                $('#result').text('Error starting the quiz. Please try again.');
            }
        });
    });
});
</script>