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
$name = strip_tags(trim($_POST['name']));
$qnt = strip_tags(trim($_POST['qnt']));
$descrpt = strip_tags(trim($_POST['descrpt']));
$amount = strip_tags(trim($_POST['amt']));
$cart = strip_tags(trim($_POST['cart']));
// $amt = number_format($amount);

$id = $_SESSION['userid'];
$transid = $_SESSION['transid'];
$obj->get_user($_SESSION['userid']);

$order = $prod->place_order($name, $qnt, $descrpt, $amount, $id, $cart, $transid);
 

 echo "<pre>";
print_r(count($order));
echo "</pre>";


if($order){
	header('location:mypayfamstarttrans.php');
// 	if(count($order)=5){
// 	 Unset($_SESSION['transid']);
// }
}
}

?>