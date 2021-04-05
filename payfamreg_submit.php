<?php

if($_POST){
require_once('User.php');

$obj = new User;

$email = strip_tags(trim($_POST['email']));
$pass =strip_tags(trim($_POST['password']));
$phone =strip_tags(trim($_POST['phone']));

$reg = $obj->register($pass, $email, $phone);

if($reg){
	// echo $reg['user_email'];


	header('location:mypayfamlogin.php?msg=Hi, you have successfully created account with Mypayfam, kindly Login to proceed');
}else{
	header('location:mypayfamhome.php');
}

}
?>