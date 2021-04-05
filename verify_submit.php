<?php
session_start();
if($_POST){
require_once('User.php');
$obj = new User();
	if(!isset($_SESSION['userid'])){
  header('location:mypayfamlogin.php');
}

$fname = strip_tags(trim($_POST['firstname']));
$lname = strip_tags(trim($_POST['lastname']));
$phone = strip_tags(trim($_POST['phone']));
$add1 = strip_tags(trim($_POST['address1']));
$add2 = strip_tags(trim($_POST['address2']));
$country = strip_tags(trim($_POST['country']));
$state = strip_tags(trim($_POST['state']));
$gender = strip_tags(trim($_POST['gender']));
$dob = strip_tags(trim($_POST['dob']));


$dat = $obj->get_details($_SESSION['userid']);
$id = $_SESSION['userid'];
//die($deets);

if(!empty($fname) && !empty($lname) && !empty($phone) && !empty($add1) && !empty($add2) && !empty($country) && !empty($state) && !empty($gender) && !empty($dob)){

$verify =$obj->verify_account($fname, $lname, $phone, $add1, $add2, $country, $state, $gender, $dob, $id);
}
if($verify){
	header('location:mypayfamtrans.php?msg=Account Succefully verified, upload your profile picture and proceed with your transaction.');

}else{
	header('location:mypayfamverify.php?msg=Account verification failed, kindly complete all the fields and retry.');
}

}



