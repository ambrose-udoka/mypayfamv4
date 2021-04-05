<?php

session_start();
require('User.php');
$obj = new User ;

if(!isset($_SESSION['userid'])){
  header('mypayfamlogin.php');
}


$com = $_POST['pid']; 

$patName = $obj->get_details($com);
// file_put_contents('post.txt', $com);
echo $patName['user_fname'] . " " .$patName['user_lname'];

// echo "<pre>";
//   print_r($patName);
//   echo "</pre>";
?>