<?php
session_start();
include('Products.php');
require('User.php');
$obj = new User;
$prod = new Products;
if(!isset($_SESSION['userid'])){
  header('location:mypayfamlogin.php');
}
$orderid = $_SESSION['userid'];
$transid = $_SESSION['transid'];
$count_order = $prod->productorder_count($transid, $orderid);
if($count_order<=5){

foreach ($count_order as $key){
	echo $key;
	 Unset($_SESSION['transid']);
}
// echo count(['prod']);
// 	echo "<pre>";
// print_r($count_order);
// echo "</pre>";
// 	// Unset($_SESSION['transid']);
	// header('location:mypayfamtrans.php');

// echo "<pre>";
// print_r($res);
// echo "</pre>";
}
?>