
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
$id = $_SESSION['transid'];

$prod = new Products;
$res1 = $prod->get_order_summary($id).'<br><br>';

$res2 = $prod->get_order_invoice($id,);
// $res3 =$prod->get_sumamount($id).'<br><br>';

$res_amt =$prod->getpaystack_sumamount($id);
$amt = $res_amt['ground_total'];

$acpt =	$prod->getpend_acceptdetails($id);
// echo "<pre>"; echo print_r($acpt); echo "</pre>";
// echo $acpt['trans_status'];

?>
<br><br>

<input type ='hidden' name = 'pending' value ='' id = 'pending'><br>
<?php
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
?>

<?php
if($amt){
 echo "<h5>Payment Summary</h5>".
"<p style = 'background-color:#0033A1; color: #F5EF28;' class = 'btn col-lg-4'><b>Sum Total<b> =" .$amt. "</p><br>".
"<p style = 'background-color:#0033A1; color: #F5EF28;' class = 'btn col-lg-4'><b>Mypayfam fee<b> =" .$bonus. "</p><br>".
"<p style = 'background-color:#0033A1; color: #F5EF28;' class = 'btn col-lg-4'><b>Net Total<b> =" .($amt+$bonus). "</p>";
}
?>
<br><br>
<?php

if($acpt['trans_status']=='pending'){

echo "<input type = 'checkbox' name = 'check' id ='boxcheck'> &nbsp <span>I agree to Mypayfam <span class ='badge badge-warning'><a href ='#'>terms and conditions</a></span> for this transaction</span>";

}else{
echo 'Kindly wait for your partner to accept your order before you can proceed to make your payment.';
}
	?>




<br><br>
<button class = 'btn btn-success col-lg-2' style = ' color: #F5EF28;' id = 'accept'><b>ACCEPT</b></button>
<a href ='mypayfamstarttrans.php'><button class = 'btn btn-danger col-lg-2' style = ' color: #F5EF28;' id = 'decline'><b>DECLINE</b></button></a><br><br>


<a href ="initialize_paystack.php"><button class = 'btn col-lg-3' style = 'background-color:#0033A1; color: #F5EF28;' id = 'payment'><b>MAKE PAYMENT</b></button></a><br><br>

<div><a href ='mypayfamstarttrans.php'><b class ='btn col-lg-1' style = 'background-color:#0033A1; color: #F5EF28;'>back</b></a></div>
</div>
</div>
</div>
</div>
</div>

<script src ='js/jquery-3.5.1.min.js'></script>
	<script src ='js/popper.min.js'></script>
	<script src ='js/bootstrap.js'></script>


<script>
// var c = $(this).prop('checked')
// if(c==true){
// 	$('.btn').removeAttr('disabled')
// }else{
// 	$('.btn').attr('disabled', 'disabled')
// }


$(document).ready(function(){
$('#payment').hide();
$('#accept').hide();
$('#decline').hide();
	//$.ajax({key:value, key:value, key:value})
$('#boxcheck').click(function(){
	var res = $('#boxcheck').prop('checked')
	if(res==true){
$('#accept').show();
$('#decline').show();
}else{
	$('#accept').hide();
$('#decline').hide();
}
$('#accept').click(function(){

var pending = $('#pending').val();
var data2send = {pend:pending};
$.ajax({
	url:'openorder_ajaxsubmit.php',
	type:'post',
	data:data2send,
	dataType:'text',
	success:function(serverrsp){
		$('#payment').show();
		$('#accept').hide();
		$('#decline').hide();
	}
})

})	

})

})

</script>



</body>
</html>


