<?php
session_start();
// Read the JSON file
$jsonData = file_get_contents('questions.json');

// Convert JSON data to an associative array
$questions = json_decode($jsonData, true);

// Get the selected answer from the AJAX request
$selectedAnswer = $_POST['answer'];


// Find the current question based on the question index
$currentQuestion = $questions[$_POST['questionIndex']];

// Check if the selected answer is correct
if ($selectedAnswer === urldecode($currentQuestion['correct_answer'])) {
    // Return 'correct' if the answer is correct
    $_SESSION['score'] = isset($_SESSION['score']) ? $_SESSION['score'] + 1 : 1;
    echo 'correct';
} else {
    // Return 'incorrect' if the answer is incorrect
    echo 'incorrect';
}
?>
