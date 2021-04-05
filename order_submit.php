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
$name = strip_tags(trim($_POST['productname']));
$qnt = strip_tags(trim($_POST['productquantity']));
$descpt = strip_tags(trim($_POST['productdescription']));
$amount = strip_tags(trim($_POST['productamount']));
$cart = strip_tags(trim($_POST['cart']));
// $amt = number_format($amount);

$id = $_SESSION['userid'];
$transid = $_SESSION['transid'];
$obj->get_user($_SESSION['userid']);

$order = $prod->place_order($name, $qnt, $descpt, $amount, $id, $cart, $transid);
 

//  echo "<pre>";
// print_r($order);
// echo "</pre>";


if($order){
	header('location:mypayfamstarttrans.php');
	if(count($order)>5){
	 Unset($_SESSION['transid']);
}
}
}

?>