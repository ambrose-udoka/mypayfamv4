<?php
session_start();
// var_dump($_REQUEST);
//get the sent refernce key
$reference = $_GET['reference'];

//create obj of subscription class
include('Payments.php');
include('User.php');
include('Products.php');
$prod = new Products;
$obj = new Payments;
$userid = new User;
if(!isset($_SESSION['userid'])){
  header('location:mypayfamlogin.php');
}
$id = $_SESSION['userid'];
// $transid = $_SESSION['transid'];
//access verifypayment method

// $partid = $_SESSION['userid'];

$output = $obj->verifypaystack($reference, $id);

//use the obj to access the status thus...
if($output->data->status =='success'){
 //if its success, then insert into the db.
	$userid = $_SESSION['userid'];
	$res = $prod->getorder_byuser($userid);
	echo "<pre>"; echo print_r($res); echo "</pre>"; 

$ref = $res['trans_reference'];

  $date = $res['trans_duration'];

// $trans_date = $duration['trans_date'];
// $trans_date = date('Y-m-d h:i:s', strtotime($trans_date));


	$amount = $output->data->amount/100;
	$paymentmode = 'paystack';
	$trans_date = $output->data->paid_at;
	$end_date = date('Y-m-d h:i:s', strtotime('+5 days', strtotime($trans_date)));

echo $date; 
	$obj->insertpaystack_payment($id, $amount, $paymentmode, $reference, $ref, $trans_date, $end_date);
}else{
	//redirect to fail page
}
?>