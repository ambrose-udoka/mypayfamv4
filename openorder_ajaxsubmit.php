<?php

session_start();
require('Products.php');
$obj = new Products ;

if(!isset($_SESSION['userid'])){
  header('mypayfamlogin.php');
}
$ref =$_SESSION['transid'];

$com = $_POST['pend']; 

$status = $obj->trans_summary_openstatus($com, $ref);
// file_put_contents('post.txt', $com);
echo $status;

// echo "<pre>";
//   print_r($patName);
//   echo "</pre>";
?>