<?php


require('User.php');

$logs = new User;

$logs->logout();
if(!isset($_SESSION['userid'])){
header('location:mypayfamlogin.php?msg=You are logged out, login to access your portal');

}





?>