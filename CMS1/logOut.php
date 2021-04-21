<?php
require_once 'includes/helpers.php';
    session_start();
    $_SESSION = array();
    session_unset($_SESSION['username']);
    session_destroy();
    redirect('index.php');

?>