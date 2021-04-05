<?php

session_start();
require('Products.php');
$obj = new Products;

if(!isset($_SESSION['userid'])){
  header('mypayfamlogin.php');
}
// var_dump($_POST);

 $com = $_POST['cart']; 

$patName = $obj->get_products($com);
// file_put_contents('post.txt', $com);
 // echo $patName['prod_name'] . " " .$patName['prod_qnt'];

echo "<pre>";
  print_r($patName);
  echo "</pre>";
?>