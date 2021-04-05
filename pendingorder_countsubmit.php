<?php
session_start();
include('Products.php');
$prod = new Products;
if(!isset($_SESSION['userid'])){
  header('location:mypayfamlogin.php');
}

$transid = $_SESSION['transid'];
$counts = $prod->pendorder_count($transid);
if($count){
foreach ($count as $key) {
	echo $key;
}
// echo $count->num_rows;
// 	echo "<pre>";
// print_r($count);
// echo "</pre>";
	// Unset($_SESSION['transid']);
	// header('location:mypayfamtrans.php');

// echo "<pre>";
// print_r($res);
// echo "</pre>";
}