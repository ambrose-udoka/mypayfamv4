<link type = 'text/css' href = 'bootstrap.css' rel ='stylesheet'>

<?php
class Products{
public $conn;

// require_once('User.php');

function __construct(){
	$this->conn = new Mysqli('localhost', 'mypaohvn_mypayfam', 'eze40755', 'mypaohvn_mypayfam');
}

public function place_order($name, $qnt, $descpt, $amt, $id, $cart, $transid){
	$q ="INSERT INTO order_details SET prod_name = '$name', prod_qnt ='$qnt', prod_descpt = '$descpt', prod_amt = '$amt', prod_userid = '$id', cart_orderid = '$cart', transid ='$transid'";
// die($q);
	$res = $this->conn->query($q); 

// // $id = $this->conn->insert_id;
// die($res);
return $res;
	
}

public function get_category(){

	$q = "SELECT * FROM product_category";
	$result = $this->conn->query($q);
	// $data = $result->fetch_assoc();
	// return $data; 

	//or
	$row = array(); 
while($data = $result->fetch_assoc()){
	$row[] =$data;

}

return $row;
}


public function delete_order($orderid){
	$q = "DELETE FROM order_details WHERE prod_orderid = '$orderid'";
	 //die($q);
	$result = $this->conn->query($q);
	// $data = $result->fetch_assoc();
// ($result);
// $orderid 
	//echo '<pre>';
	// print_r($result);
	//echo '</pre>';
		return $result;
	
}

public function get_products($id){
	$q = "SELECT prod_orderid, prod_name, prod_qnt, prod_descpt, cart_name, prod_amt FROM order_details JOIN product_category on cart_id = cart_orderid WHERE transid = '$id'";
	 // die($q);

	$res = $this->conn->query($q);
echo "<table class = 'table table-striped table-responsive-sm'>";
echo "<thead class = 'col txtcol'><tr><th>S/N</th><th>Cartegory</th><th>Name</th><th>Quantity</th><th>Description</th><th>Amount</th><th>Delete</th></tr></thead>";
$i =0;
	while($result = $res->fetch_assoc()){
 // echo '<pre>';
	// print_r($result);
	// echo '</pre>';
$i++;
	// }
$orderid = $result['prod_orderid'];
$cartname = $result['cart_name'];
$prodname = $result['prod_name'];
$prodqnt = $result['prod_qnt'];
$proddescpt = $result['prod_descpt'];
$prodamt = $result['prod_amt'];

echo "<tbody><tr><td>$i</td><td>$cartname</td><td>$prodname</td><td>$prodqnt</td><td>$proddescpt</td><td>$prodamt</td><td><a href ='delete_ordersubmit.php?id=$orderid'>delete</a></td></tr></tbody>";


}

echo "</table >";

}



public function get_order_invoice($id){
	$q = "SELECT prod_name, prod_qnt, prod_descpt, cart_name, prod_amt, (prod_qnt *prod_amt) as total_amt FROM order_details JOIN product_category on cart_id = cart_orderid WHERE transid = '$id'";
	 // die($q);

	$res = $this->conn->query($q);
echo "<table class = 'table table-striped table-responsive-md'>";
echo "<thead class = 'txtcol' style ='background-color:#0033A1'><tr><th>S/N</th><th>Cartegory</th><th>Name</th><th>Quantity</th><th>Description</th><th>Amount</th><th>Total Amount (NGN)</th></tr></thead>";
$i =0;
	while($result = $res->fetch_assoc()){
 // echo '<pre>';
	// print_r($result);
	// echo '</pre>';
$i++;
	// }
$cartname = $result['cart_name'];
$prodname = $result['prod_name'];
$prodqnt = $result['prod_qnt'];
$proddescpt = $result['prod_descpt'];
$prodamt = $result['prod_amt'];
$totalamt = $result['total_amt'];
echo "<tbody><tr><td>$i</td><td>$cartname</td><td>$prodname</td><td>$prodqnt</td><td>$proddescpt</td><td>$prodamt</td><td>$totalamt</td></tr></tbody>";


}

echo "</table >";
}



// return $result;

public function trans_summary($partid, $duration, $transid, $userid){
	$q ="INSERT INTO trans_summary SET partner_id = '$partid',trans_duration ='$duration', trans_reference = '$transid', user_orderid = '$userid'";
// die($q);
	$res = $this->conn->query($q); 

$id = $this->conn->insert_id;



return $id;
	// die($res);
}

public function trans_summary_openstatus($status, $ref){
	$q ="UPDATE trans_summary SET status_sumid ='$status' WHERE trans_reference = '$ref'";
// die($q);
	$res = $this->conn->query($q); 


return $res;
	// die($res);
}


public function trans_summary_pendstatus($status, $ref){
	$q ="UPDATE trans_summary SET status_sumid ='$status' WHERE trans_reference = '$ref'";
 // die($q);
	$res = $this->conn->query($q); 


return $res;
	// die($res);
}


public function productorder_count($ref, $orderid){
	$q ="SELECT count(prod_userid) FROM `order_details` WHERE transid = '$ref' and prod_userid = '$orderid'";
// die($q);
	$res = $this->conn->query($q); 

$result =$res->fetch_assoc();


return $result;
	// die($res);
}


public function pendorder_count($ref){
	$q ="SELECT count(status_sumid) FROM `trans_summary` WHERE trans_reference = '$ref' and status_sumid = '2'";
// die($q);
	$res = $this->conn->query($q); 

$result =$res->fetch_assoc();
	return $result;




	// die($res);
}


public function openorder_count($ref){
	$q ="SELECT count(status_sumid) FROM `trans_summary` WHERE trans_reference = '$ref' and status_sumid = '1'";
// die($q);
	$res = $this->conn->query($q); 

$result =$res->fetch_assoc();


return $result;
	// die($res);
}



public function get_order_summary($id){
	$q = "SELECT * FROM trans_summary WHERE trans_reference = '$id'";
	 // die($q);

	$res = $this->conn->query($q);

	$result =$res->fetch_assoc();

	echo "Partner ID: " .$result['partner_id']."<br>";
	echo "Buyer ID: " .$result['user_orderid']."<br>";
	echo "Transaction Duration: " .$result['trans_duration']."<br>";
	echo "Transaction Reference: " .$result['trans_reference']."<br>";
	echo "Transaction Date: " .$result['trans_date']."<br>";

}

public function get_order_details($id){
	$q = "SELECT * FROM trans_summary JOIN trans_status on status_id = status_sumid WHERE trans_reference = '$id'";
	 // die($q);

	$res = $this->conn->query($q);

echo "<table class = 'table table-striped table-responsive-sm'>";
echo "<thead class = 'col txtcol'><tr><th>S/N</th><th>Partner ID</th><th>User ID</th><th>Duration</th><th>Reference</th><th>Status</th><th>Date</th><th>View details</th></tr></thead>";
$i =0;
	while($result = $res->fetch_assoc()){
 // echo '<pre>';
	$i++;
	// echo '</pre>';

	// }
$partid = $result['partner_id'];
$userid = $result['user_orderid'];
$duration = $result['trans_duration'];
$ref = $result['trans_reference'];
$status = $result['trans_status'];
$date = $result['trans_date'];

echo "<tbody><tr><td>$i</td><td>$partid</td><td>$userid</td><td>$duration</td><td>$ref</td><td>$status</td><td>$date</td><td><a href ='getproduct_orderinvoice.php'>View details</a></td></tr></tbody>";


}

echo "</table >";
}

public function get_sumamount($id){
$q = "SELECT sum(prod_qnt * prod_amt) as ground_total FROM order_details WHERE transid = '$id'";
$res = $this->conn->query($q);

while($result = $res->fetch_assoc()){


	echo "<span style = 'background-color:#0033A1; color: #F5EF28;' class = 'btn col-lg-4'><b>Sum Total = ".$result['ground_total']. " NGN</b></span>";
}

}


public function getpaystack_sumamount($id){
$q = "SELECT sum(prod_qnt * prod_amt) as ground_total FROM order_details WHERE transid = '$id'";
$res = $this->conn->query($q);

$result = $res->fetch_assoc();


	return $result;


}


public function sendorder_topartnerid($id){
	$q = "SELECT * FROM trans_summary JOIN trans_status on status_id = status_sumid WHERE partner_id = '$id'";
	 // die($q);

	$res = $this->conn->query($q);



	$result = $res->fetch_assoc();
 // echo '<pre>';
	// echo '</pre>';

	// }

return $result;
}


public function getorder_byuser($id){
	$q = "SELECT trans_reference, trans_duration FROM trans_summary WHERE user_orderid = '$id' and status_sumid ='2'";
	 // die($q);

	$res = $this->conn->query($q);



	$result = $res->fetch_assoc();
 // echo '<pre>';
	// echo '</pre>';

	// }

return $result;
}

public function getpartner_orderinvoice($id, $transid){
	$q = "SELECT prod_name, prod_qnt, prod_descpt, cart_name, prod_amt, (prod_qnt *prod_amt) as total_amt FROM order_details JOIN product_category on cart_id = cart_orderid JOIN trans_summary on prod_userid = user_orderid WHERE partner_id = '$id' and trans_reference = '$transid'";
	 // die($q);

	$res = $this->conn->query($q);
echo "<table class = 'table table-striped table-responsive-sm'>";
echo "<thead class = 'txtcol' style ='background-color:#0033A1'><tr><th>S/N</th><th>Cartegory</th><th>Name</th><th>Quantity</th><th>Description</th><th>Amount</th><th>Total Amount (NGN)</th></tr></thead>";
$i =0;
	while($result = $res->fetch_assoc()){
 // echo '<pre>';
	// print_r($result);
	// echo '</pre>';
$i++;
	// }
$cartname = $result['cart_name'];
$prodname = $result['prod_name'];
$prodqnt = $result['prod_qnt'];
$proddescpt = $result['prod_descpt'];
$prodamt = $result['prod_amt'];
$totalamt = $result['total_amt'];
echo "<tbody><tr><td>$i</td><td>$cartname</td><td>$prodname</td><td>$prodqnt</td><td>$proddescpt</td><td>$prodamt</td><td>$totalamt</td></tr></tbody>";


}

echo "</table >";
}


public function get_openorder_details($id){
	$q = "SELECT * FROM trans_summary JOIN trans_status on status_id = status_sumid WHERE partner_id = '$id' and status_sumid ='1'";
	 // die($q);

	$res = $this->conn->query($q);

echo "<table class = 'table table-striped table-responsive-sm'>";
echo "<thead class = 'col txtcol'><tr><th>S/N</th><th>Partner ID</th><th>User ID</th><th>Duration</th><th>Reference</th><th>Status</th><th>Date</th><th>View details</th></tr></thead>";
$i =0;
	while($result = $res->fetch_assoc()){
 // echo '<pre>';
	$i++;
	// echo '</pre>';

	// }
$partid = $result['partner_id'];
$userid = $result['user_orderid'];
$duration = $result['trans_duration'];
$ref = $result['trans_reference'];
$status = $result['trans_status'];
$date = $result['trans_date'];

echo "<tbody><tr><td>$i</td><td>$partid</td><td>$userid</td><td>$duration</td><td>$ref</td><td>$status</td><td>$date</td><td><a href ='getpartner_orderinvoicesubmit.php?partid=$ref'>View details</a></td></tr></tbody>";

}

echo "</table >";
}


public function get_pendorder_details($id){
	$q = "SELECT * FROM trans_summary JOIN trans_status on status_id = status_sumid WHERE partner_id = '$id' and status_sumid ='2'";
	 // die($q);

	$res = $this->conn->query($q);

echo "<table class = 'table table-striped table-responsive-sm'>";
echo "<thead class = 'col txtcol'><tr><th>S/N</th><th>Partner ID</th><th>User ID</th><th>Duration</th><th>Reference</th><th>Status</th><th>Date</th><th>View details</th></tr></thead>";
$i =0;
	while($result = $res->fetch_assoc()){
 // echo '<pre>';
	$i++;
	// echo '</pre>';

	// }
$partid = $result['partner_id'];
$userid = $result['user_orderid'];
$duration = $result['trans_duration'];
$ref = $result['trans_reference'];
$status = $result['trans_status'];
$date = $result['trans_date'];

echo "<tbody><tr><td>$i</td><td>$partid</td><td>$userid</td><td>$duration</td><td>$ref</td><td>$status</td><td>$date</td><td><a href ='getpartner_orderinvoicesubmit.php?partid=$ref'>View details</a></td></tr></tbody>";


}

echo "</table >";
}


public function get_completeorder_details($id){
	$q = "SELECT * FROM trans_summary JOIN trans_status on status_id = status_sumid WHERE partner_id = '$id' and status_sumid ='3'";
	 // die($q);

	$res = $this->conn->query($q);

echo "<table class = 'table table-striped table-responsive-sm'>";
echo "<thead class = 'col txtcol'><tr><th>S/N</th><th>Partner ID</th><th>User ID</th><th>Duration</th><th>Reference</th><th>Status</th><th>Date</th><th>View details</th></tr></thead>";
$i =0;
	while($result = $res->fetch_assoc()){
 // echo '<pre>';
	$i++;
	// echo '</pre>';

	// }
$partid = $result['partner_id'];
$userid = $result['user_orderid'];
$duration = $result['trans_duration'];
$ref = $result['trans_reference'];
$status = $result['trans_status'];
$date = $result['trans_date'];

echo "<tbody><tr><td>$i</td><td>$partid</td><td>$userid</td><td>$duration</td><td>$ref</td><td>$status</td><td>$date</td><td><a href ='getpartner_orderinvoicesubmit.php?partid=$ref'>View details</a></td></tr></tbody>";


}

echo "</table >";
}


public function get_cancelledorder_details($id){
	$q = "SELECT * FROM trans_summary JOIN trans_status on status_id = status_sumid WHERE partner_id = '$id' and status_sumid ='5'";
	 // die($q);

	$res = $this->conn->query($q);

echo "<table class = 'table table-striped table-responsive-sm'>";
echo "<thead class = 'col txtcol'><tr><th>S/N</th><th>Partner ID</th><th>User ID</th><th>Duration</th><th>Reference</th><th>Status</th><th>Date</th><th>View details</th></tr></thead>";
$i =0;
	while($result = $res->fetch_assoc()){
 // echo '<pre>';
	$i++;
	// echo '</pre>';

	// }
$partid = $result['partner_id'];
$userid = $result['user_orderid'];
$duration = $result['trans_duration'];
$ref = $result['trans_reference'];
$status = $result['trans_status'];
$date = $result['trans_date'];

echo "<tbody><tr><td>$i</td><td>$partid</td><td>$userid</td><td>$duration</td><td>$ref</td><td>$status</td><td>$date</td><td><a href ='getpartner_orderinvoicesubmit.php?partid=$ref'>View details</a></td></tr></tbody>";


}

echo "</table >";
}

public function getpend_acceptdetails($id){
	$q = "SELECT * FROM trans_summary JOIN trans_status on status_id = status_sumid WHERE trans_reference = '$id' and status_sumid ='2'";
	 // die($q);

	$res = $this->conn->query($q);

	$result = $res->fetch_assoc();
	return $result;
}


public function getopen_acceptdetails($id){
	$q = "SELECT * FROM trans_summary JOIN trans_status on status_id = status_sumid WHERE trans_reference = '$id' and status_sumid ='1'";
	 // die($q);

	$res = $this->conn->query($q);

	$result = $res->fetch_assoc();
	return $result;
}

}
?>