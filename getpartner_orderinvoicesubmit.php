
<!DOCTYPE html>
<html>
<head>
	<title>Transaction Summary</title>


	<link type = 'text/css' href = 'bootstrap.css' rel ='stylesheet'>


	<style type ='text/css'>

.hub{
	background-color: #0033A1;
}

.txtcol{
	color:#F5EF28;
}

</style>
</head>
<body>

<br><br><br>
<div class ='container-fluid'>
<div class ='row'>
<div class='col-lg-2'></div>
	<div class='col-lg-8'>
   <div class="card">
    <div class="card-header" style = 'background-color:#0033A1; color: #F5EF28; '>
     <h5 class="card-title" style = 'text-align:center'  id="registration">Transaction Invoice</h5>
    </div>
    <div class="card-body">

<?php
session_start();
include('Products.php');

if(!isset($_SESSION['userid'])){
  header('location:mypayfamlogin.php');
}
if(!isset($_SESSION['transid'])){
  header('location:mypayfamlogin.php');
}
$id = $_GET['partid'];
// $user_id = $_GET['user_orderid'];
$partid = $_SESSION['userid'];
$prod = new Products;
$res = $prod->get_order_summary($id).'<br><br>';
$part = $prod->getpartner_orderinvoice($partid, $id);
$res =$prod->get_sumamount($id);

$acpt =	$prod->getopen_acceptdetails($id);

if($part){
	// Unset($_SESSION['transid']);
	header('location:mypayfamstarttrans.php');
}
// echo "<pre>";
// print_r($part);
// echo "</pre>";
?>
</div>
</div><br>

<?php

if($acpt['trans_status']=='open'){

echo "<input type = 'checkbox' name = 'check' id ='boxcheck2'> &nbsp <span>I agree to Mypayfam <span class ='badge badge-warning'><a href ='#'>terms and conditions</a></span> for this transaction</span>";

}
	?>


<input type ='hidden' name = 'pending' value ='2' id = 'pending2'><br><r>
<button class = 'btn btn-success col-lg-2' style = ' color: #F5EF28;' id = 'accept2'><b>ACCEPT</b></button>
<a href ='mypayfamstarttrans.php'><button class = 'btn btn-danger col-lg-2' style = ' color: #F5EF28;' id = 'decline2'><b>DECLINE</b></button></a><br><br>
<p id = 'message'></p>
<div><a href ='mypayfamstarttrans.php'><b class ='btn col-lg-1' style = 'background-color:#0033A1; color: #F5EF28;'>back</b></a></div>
</div>
</div>


<script src ='js/jquery-3.5.1.min.js'></script>
	<script src ='js/popper.min.js'></script>
	<script src ='js/bootstrap.js'></script>


<script>

$(document).ready(function(){

$('#accept2').hide();
$('#decline2').hide();
	//$.ajax({key:value, key:value, key:value})
$('#boxcheck2').click(function(){
	var res = $('#boxcheck2').prop('checked')
	if(res==true){
$('#accept2').show();
$('#decline2').show();
}else{
	$('#accept2').hide();
$('#decline2').hide();
$('#message').html('')
}
	//$.ajax({key:value, key:value, key:value})
$('#accept2').click(function(){

var pending2 = $('#pending2').val();
// alert(id)
var data2send = {pend2:pending2};
$.ajax({
	url:'pendingorder_ajaxsubmit.php',
	type:'post',
	data:data2send,
	dataType:'text',
	success:function(serverrsp){
		$('#accept2').hide()
		$('#decline2').hide()
		$('#message').html('You have successfully accepted your order, wait for your partner to make payment so you can proceed')
	}
 })

})	

})

})

</script>


</body>
</html>


