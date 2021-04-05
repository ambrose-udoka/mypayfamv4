<?php

session_start();
require_once('payfamheader.php');


?>



<?php
//session_start();
require('User.php');
$obj = new User ;

if(!isset($_SESSION['userid'])){
  header('location:mypayfamreg.php');
}
$dat = $obj->get_details($_SESSION['userid']);
$message =''; 


if($_POST || $_FILES){ //if($_FILES)

$message = $obj->upload($_FILES, $_SESSION['userid']);

// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";
if($message){
	header('location:mypayfamtrans.php?msg=Profile Picture Successfully Uploaded');
}

}

?>
