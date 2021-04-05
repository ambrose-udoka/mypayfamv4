<?php
session_start();
// var_dump($_SERVER);
// exit;

//if($_SERVER['REQUEST_METHOD']=='POST'){
// create object of subscription class

include ('Payments.php');
include ('Products.php');
include ('User.php');
$user = new User; 
$obj = new Payments;

// $id = $_SESSION['transid'];

$prod = new Products;
$res_amt =$prod->getpaystack_sumamount($_SESSION['transid']);
$amt = $res_amt['ground_total'];
$bonus = 1;
if($amt<=50000){
$bonus = $amt*0.03;
}elseif($amt>50000 && $amt<=200000){
	$bonus = $amt*0.01;
}elseif($amt>200000 && $amt<=1000000) {
 	$bonus = $amt*0.005;

}elseif ($amt>1000000 && $amt<=5000000) {
 	$bonus = $amt*0.0008;
	
}else{
 	$bonus = $amt*0.0002;
}
$dat = $user->get_details($_SESSION['userid']);
 $amount = ($amt+$bonus)*100;

$email = $dat['user_email'];

$res = $obj->initializePaystack($email, $amount);

// echo "<pre>";
// print_r($res_amt);
// echo "<pre>";

 // echo $amount;

$output = $res->data->authorization_url;
header("location:$output");
//}

