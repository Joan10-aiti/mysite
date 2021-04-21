<?php
function logout()
{
    session_start();
    $_SESSION = array();
    session_destroy();
    unset($_SESSION['username']);
    header("Location:../index.php");
}

logout();