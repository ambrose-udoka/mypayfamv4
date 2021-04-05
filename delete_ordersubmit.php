<?php
session_start();
require('Products.php');
$obj = new Products;

if(!isset($_SESSION['userid'])){
  header('mypayfamlogin.php');
}
$prod_orderid = $_GET['id'];
$delete_order = $obj->delete_order($prod_orderid);

// die($delete_order);
if($delete_order){
	// Unset($_SESSION['transid']);
	header('location:mypayfamstarttrans.php');
}
// echo '<pre>';
// print_r($delete_order);
// echo '</pre>';
?>