<?php 
$jsonData = file_get_contents('questions.json');

// Set the appropriate content type header
header('Content-Type: application/json');

// Output the JSON data
echo $jsonData;
?>