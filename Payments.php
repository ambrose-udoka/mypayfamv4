
<link type = 'text/css' href = 'bootstrap.css' rel ='stylesheet'>

<?php

class Payments{
public $conn;

// require_once('User.php');

function __construct(){
  $this->conn = new Mysqli('localhost', 'mypaohvn_mypayfam', 'eze40755', 'mypaohvn_mypayfam');
}


public function initializePaystack($email, $amount){

  $url = "https://api.paystack.co/transaction/initialize";
  $callback = "http://localhost/mypayfamv1/verifypaystack.php";
  $fields = [
    'email' => $email,
    'amount' => $amount,
    'callback_url' => $callback
  ];
  $fields_string = http_build_query($fields);
  // step 1 open connection
  $ch = curl_init();
  
  // step 2 set the url, number of POST vars, POST data
  curl_setopt($ch,CURLOPT_URL, $url);
  curl_setopt($ch,CURLOPT_POST, true);
  curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Authorization: Bearer sk_test_c312d4a198b6077a15b2f3b3ba26d865043c6c15",
    "Cache-Control: no-cache",
  ));
  
  //So that curl_exec returns the contents of the cURL; rather than echoing it
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  //note the SSL should be true when doing real live transaction
  // step 3 execute post
  $response = curl_exec($ch);
$errors = curl_error($ch);
  //step 4
curl_close($ch);


if($errors){
	$output = $errors;
}

  $output = json_decode($response);
  return $output;
}

// verify paystack transaction

public function verifypaystack($reference, $userid){

	$url = "https://api.paystack.co/transaction/verify/$reference";
	//step 1 Initialize curl session
	$curlsession = curl_init();

	//step 2 set the url headers 

	curl_setopt($curlsession,CURLOPT_URL, $url);
  curl_setopt($curlsession,CURLOPT_CUSTOMREQUEST, 'GET');
  curl_setopt($curlsession,CURLOPT_HTTPHEADER, array(

  "Authorization: Bearer sk_test_c312d4a198b6077a15b2f3b3ba26d865043c6c15",
    "Cache-Control: no-cache"
));
    curl_setopt($curlsession,CURLOPT_RETURNTRANSFER, true); 
  curl_setopt($curlsession, CURLOPT_SSL_VERIFYPEER, false);

  //step 3 execute curl
   $response = curl_exec($curlsession);
   $errors =curl_error($curlsession);

   //step 4 close curl session

   curl_close($curlsession);

   if($errors){
   	echo $errors;
   }

   // echo "<pre>";
   // print_r($response);
   // echo "</pre>";

   //then do what ever you want with the response generated in json. and insert into subsciption table in db.

   $result = json_decode($response);

   return $result; 
}

//insert into subscription db

public function insertpaystack_payment($userid, $amount, $paymentmode, $pay_ref, $transid, $start_date, $end_date){


  
//format start date
	
//write the insert query
	$sql = "INSERT INTO payments SET user_payid = '$userid', pay_amt = '$amount', pay_mode = '$paymentmode', paystack_ref = '$pay_ref', trans_ref = '$transid', pay_status = 'completed', trans_date = '$start_date', end_date = '$end_date'";

	//run the query
if($this->conn->query($sql)==true){
//redirect to success page
	header('location: http://localhost/mypayfamv1/mypayfamtrans.php?msg=Your Payment Was Successful, wait for your partner\'s response');
}else{
	echo 'errors'.$this->conn->error;
}
}


public function get_payamount($id, $transid){
  $q = "SELECT pay_amt, partner_id, trans_ref from payments JOIN trans_summary on user_orderid = user_payid WHERE user_payid ='$id' and trans_ref = '$transid'";
   // die($q);

  $res = $this->conn->query($q);

  $result = $res->fetch_assoc();
  return $result;
}


public function getpartner_pendamount($id, $transid){
  $q = "SELECT pay_amt, partner_id, trans_ref from payments JOIN trans_summary on user_orderid = user_payid WHERE partner_id ='$id' and trans_ref = '$transid'";
   // die($q);

  $res = $this->conn->query($q);

  $result = $res->fetch_assoc();
  return $result;
}


}
?>