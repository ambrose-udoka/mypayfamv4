<?php
session_start();
require('User.php');
$obj = new User ;

if(!isset($_SESSION['userid'])){
  header('mypayfamlogin.php');
}

$dat = $obj->get_details($_SESSION['userid']);

// echo '<pre>';
// print_r($deets);
// echo '</pre>';
?>