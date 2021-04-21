<?php
session_start();
require 'config.php';

function login() {
    global $db;

    $username = $_POST['username'];
    $password = $_POST['password'];
    $type =$_POST['type'];

    $sql = "SELECT * FROM `users` WHERE username='$username' AND password='$password' AND type='$type'";
    $result = mysqli_query($db, $sql);

    while($row=mysqli_fetch_array($result)){
        if($row['username']==$username && $row['password']==$password && $row['type']=='Admin'){
            header("Location: dashboard.php");
        }elseif($row['username']==$username && $row['password']==$password && $row['type']=='Vine'){
            header("Location: fruitfulVine.php");
        }elseif($row['username']==$username && $row['password']==$password && $row['type']=='Fruit'){
            header("Location: fruitof.php");
        }elseif($row['username']==$username && $row['password']==$password && $row['type']=='Divinity'){
            header("Location: fruitofDivinity.php");
        }elseif($row['username']==$username && $row['password']==$password && $row['type']=='Dominion'){
            header("Location: fruitofDominion.php");
        }elseif($row['username']==$username && $row['password']==$password && $row['type']=='Greatness'){
            header("Location: fruitofGreatness.php");
        }elseif($row['username']==$username && $row['password']==$password && $row['type']=='Integrity'){
            header("Location: fruitofIntegrity.php");
        }elseif($row['username']==$username && $row['password']==$password && $row['type']=='Life'){
            header("Location: fruitofLife.php");
        }
    
    //escape string
    function e($val){
        global $db;
        return mysqli_escape_string($db, trim($val));
    }

}

}