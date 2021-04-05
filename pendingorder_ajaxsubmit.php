<?php

session_start();
require('Products.php');
$obj = new Products ;

if(!isset($_SESSION['userid'])){
  header('mypayfamlogin.php');
}
$partid = $_SESSION['userid'];

$res = $obj->sendorder_topartnerid($partid);
$ref = $res['trans_reference'];
$com = $_POST['pend2']; 

$status = $obj->trans_summary_pendstatus($com, $ref);
// file_put_contents('post.txt', $com);
echo $status;

// echo "<pre>";
//   print_r($patName);
//   echo "</pre>";
?>