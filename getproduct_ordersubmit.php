
<?php
session_start();
include('Products.php');

if(!isset($_SESSION['userid'])){
  header('location:mypayfamlogin.php');
}
$id = $_SESSION['transid'];

$prod = new Products;
$res = $prod->get_products($id);

if($res){
	// Unset($_SESSION['transid']);
	header('location:mypayfamstarttrans.php');
}
// echo "<pre>";
// print_r($res);
// echo "</pre>";
?>
