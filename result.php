<?php
session_start();
//$name = $_POST['name'];
$score = isset($_SESSION['score']) ? $_SESSION['score'] : 0;
$totalQuestions = $_GET['total'];
$correctAnswers = $score;
$incorrectAnswers = $totalQuestions - $correctAnswers;

// Clear the session variable
unset($_SESSION['score']);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Quiz Result</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
    background-color: #f2f2f2;
    font-family: Arial, sans-serif;
}

h1 {
    text-align: center;
    color: #333;
}

#result-container {
    display: flex;
    justify-content: center;
    margin-top: 50px;
}

.result {
    margin: 20px;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    text-align: center;
}

h2 {
    color: #333;
}

p {
    font-size: 24px;
    color: #f00;
}
    </style>
</head>
<body>
    <h1>Quiz Result</h1>
    <div id="result-container">
        <div class="result">
            <h2>Score:</h2>
            <p><?php echo $score; ?></p>
        </div>
        <div class="result">
            <h2>Correct Answers:</h2>
            <p><?php echo $correctAnswers; ?></p>
        </div>
        <div class="result">
            <h2>Incorrect Answers:</h2>
            <p><?php echo $incorrectAnswers; ?></p>
        </div>
    </div>
    <div id="name-container">
        <
    </div>
</body>
</html>