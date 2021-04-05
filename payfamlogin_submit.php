<?php
session_start();
require_once('User.php');
 
 $obj = new User;
if($_POST){
$email = strip_tags(trim($_POST['email']));
$pwd =strip_tags(trim($_POST['password']));

 $user_id =$obj->login($pwd, $email);
 // die($user_id);
if($user_id>0){
	$_SESSION['userid'] = $user_id['user_id'];
	if(!isset($_SESSION['transid'])){
		$_SESSION['transid'] = time().$user_id['user_id'];

	}
	// if(!isset($_SESSION['verify'])){
	// 	$_SESSION['verify'];
	// }
	header('location:mypayfamtrans.php?msg=Successfully Logged in');
	// $_SESSION['userid'] = $log

// 	echo "<pre>";
// print_r($log);
// echo "</pre>";

}else{
	header("location:mypayfamreg.php?msg=Your details could not be found in our database, kindly register before you login");
}

}


?>