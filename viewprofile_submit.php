<?php
session_start();
if($_POST){
require_once('User.php');
$obj = new User();
	if(!isset($_SESSION['userid'])){
  header('location:mypayfamlogin.php');
}
$id = $_SESSION['userid'];
$dat = $obj->get_details($_SESSION['userid']);

//die($deets);

$view =$obj->verify_account($_POST,$id);

}



