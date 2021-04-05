

<?php
session_start();
include('Products.php');
$prod = new Products;
if(!isset($_SESSION['userid'])){
  header('location:mypayfamlogin.php');
}

$partid = $_SESSION['userid'];

$res = $prod->sendorder_topartnerid($partid);
if($res){
	$i = 0;
echo "<table class = 'table table-striped table-responsive-sm'>";
echo "<thead class = 'col txtcol'><tr><th>S/N</th><th>Partner ID</th><th>User ID</th><th>Duration</th><th>Reference</th><th>Status</th><th>Date</th><th>View details</th></tr></thead>";

$partid = $res['partner_id'];
$userid = $res['user_orderid'];
$duration = $res['trans_duration'];
$ref = $res['trans_reference'];
$status = $res['trans_status'];
$date = $res['trans_date'];

$i++;

echo "<tbody><tr><td>$i</td><td>$partid</td><td>$userid</td><td>$duration</td><td>$ref</td><td>$status</td><td>$date</td><td><a href ='getpartner_orderinvoicesubmit.php?partid=$ref'>View details</a></td></tr></tbody>";




echo "</table >";

	// Unset($_SESSION['transid']);
	// header('location:mypayfamtrans.php');

echo "<pre>";
print_r($res);
echo "</pre>";
}
?>


