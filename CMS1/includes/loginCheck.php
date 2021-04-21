<?php 
require_once 'helpers.php';
if(!isset($_SESSION['username']) || empty($_SESSION) ){
    redirect('index.php');
}