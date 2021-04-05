<?php
session_start();
if($_POST){
require_once('User.php');
$obj = new User();
	if(!isset($_SESSION['userid'])){
  header('location:mypayfamlogin.php');
}
$id = $_SESSION['userid'];
// $deets = $obj->get_details($_SESSION['userid']);

//die($deets);

$update =$obj->update_account($_POST,$id);
if(!$update){
	header('location:mypayfamtrans.php?msg=Profile Successfully updated.');

}else{
	header('location:mypayfamverify.php?msg=Profile update failed, kindly retry.');
}
}