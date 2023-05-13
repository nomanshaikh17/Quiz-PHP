<?php

session_start();

if (isset($_POST['name'])) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['score'] = 0;
    echo 'success';
} else {
    echo 'error';
}

?>