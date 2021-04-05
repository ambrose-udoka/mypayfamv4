<?php
session_start();
require('User.php');
$obj = new User ;

if(!isset($_SESSION['userid'])){
  header('mypayfamlogin.php');
}

$dat = $obj->delete_user($_SESSION['userid']);
if($dat){
	header('location:mypayfamhome.php');
}
// echo '<pre>';
// print_r($dat);
// echo '</pre>';
?>