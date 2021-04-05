<?php
session_start();
require ('Products.php');
require ('User.php');

$obj = new User;
$prod = new Products;


if($_POST){

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// die();

$partid = strip_tags(trim($_POST['userid']));
$duration = strip_tags(trim($_POST['duration']));

$userid = $_SESSION['userid'];
$transid = $_SESSION['transid'];

$summary = $prod->trans_summary($partid, $duration, $transid, $userid);


if($summary){
	// Unset($_SESSION['transid']);
	header('location:mypayfamstarttrans.php');
}
}
