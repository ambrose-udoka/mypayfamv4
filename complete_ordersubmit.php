<?php
session_start();
include('Products.php');
$prod = new Products;
if(!isset($_SESSION['userid'])){
  header('location:mypayfamlogin.php');
}

$partid = $_SESSION['userid'];

$res = $prod->get_completeorder_details($partid);
if($res){
	// Unset($_SESSION['transid']);
	header('location:mypayfamtrans.php');

// echo "<pre>";
// print_r($res);
// echo "</pre>";
}
?>
