<?php
session_start();
require('User.php');
$obj = new User ;
require ('Products.php');
$cart = new Products;

$prod_cart = $cart->get_category();


if(!isset($_SESSION['userid'])){
  header('mypayfamlogin.php');
}

$dat = $obj->get_details($_SESSION['userid']);
// echo $dat['user_id'];
// echo '<pre>';
// print_r($dat);
// echo '</pre>';
?>


<?php require_once('payfamheader.php');

require_once('payfamdashboard.php');


?>


	<div class='col-lg-9'>

		
<form action = 'trans_summarysubmit.php' method = 'POST'>
<fieldset>
	<legend class = 'mt-2 col txtcol' style = 'text-align:center'><b> Make a transaction<b></legend>


<div class = 'col-lg'>		
						<p class ='col-lg text-danger' id ='useridtext'></p>
						<label for = 'userid'>Partner ID <span class = 'text-danger'>*</span></label>
					<div class="input-group">
  				<p class="input-group-prepend"><span class="input-group-text col"><img src ='image/user_1.png' width='25px'></span></p>
  			<input type='text' name='userid' id='partnerid' class ='form-control' placeholder=' Enter your Partner Id' aria-label="image">
		</div>
	<p class ='col-lg small' id ='useridtext2'></p>
</div>

<label for = 'duration'>Transaction duration <span class = 'text-danger'>*</span></label>
<select name="duration" class= 'form-control' id ='duration' >
	<option value="">...Transaction duration...</option>
	<option value="4 days">1-4days</option>
	<option value="10 days">5-10days</option>
	<option value="15 days">11-15days</option>
	<option value="20 days">16-20days</option>
	<option value="30 days">21-30days</option>
	<option value="90 days">1-3months</option>
	
</select><br><?php
$prod = new Products;

$orderid = $_SESSION['userid'];
$transid = $_SESSION['transid'];
$count_order = $prod->productorder_count($transid, $orderid);
?>
<label>Add Product(s), (<span id = 'kount'>
	<?php 

// if($count_order){
foreach($count_order as $key) {
	echo $key;
}

            ;?>

</span> of 5).</label><img src ='image/cart1.png' data-toggle="modal" data-target = '#products' class="ml-5" id = 'productord'><br>

	<h3 class = 'productinvoice'>Product(s) Order Invoice</h3>
	<?php
	if(isset($_SESSION['transid'])){

// $id = $_SESSION['transid'];

$summary = new Products;
$id = $_SESSION['transid'];
$res = $summary->get_order_summary($id);
// if($res){
	// session_unset($_SESSION['transid']);
// 	header('location:mypayfamstarttrans.php');
// }
}

?>
<div id = 'invoice'></div>



<div>
<?php
if(isset($_SESSION['transid'])){

// $id = $_SESSION['transid'];

$prod = new Products;
$id = $_SESSION['transid'];
$res = $prod->get_products($id);
if($res){
	session_unset($_SESSION['transid']);
	header('location:mypayfamstarttrans.php');
}
}

?>
</div>
<div class ='row'>
<div class ='col-lg-5'></div>
<div class ='col-lg-12'>

<?php
if(isset($_SESSION['transid'])){

// $id = $_SESSION['transid'];

$summary = new Products;
$id = $_SESSION['transid'];
$res = $summary->get_order_details($id);
if($res){
	// Unset($_SESSION['transid']);
	header('location:mypayfamstarttrans.php');
}
}

?>

<br><br>
<input type ='hidden' name = 'open' value ='1' id = 'open'>
<button type="button" class="btn col-lg-2 col" id = 'saves'><b class = 'txtcol' >Save</b></button><br><br>

<button type="submit" class="btn col-lg-2 col" id = 'submits'><b class = 'txtcol' >Submit</b></button>


</div>
<div class ='col-lg-5'></div>
</div>
</fieldset>
</form>

	</div>	

</div><br>


<?php require_once('payfamfooter.php');?>


<!-- Products modal -->


<div class="modal fade" id="products" tabindex="-1" role="dialog" aria-labelledby="prodmodal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mt-2 col txtcol badge-pill" style = 'text-align:center'  id="product">Product Categories</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


<!-- product modal -->

<form action = '' method = 'POST'>
<fieldset>

<div class = 'col-lg'>	
<select name="cart" class= 'form-control' id ='productcategory'>
	<option value="">...Select Product Category...</option>
	<?php 

            foreach($prod_cart as $cat){
              $cartname = $cat['cart_name'];
              $cartid = $cat['cart_id'];
              echo "<option value = '$cartid'>$cartname</option>";
            } 
            ?>
</select><br>
<label>Product Name</label><br>
<input type='text' name='productname' id='productname' class ='form-control' placeholder=' Enter your product name'><br>
<label>Product Quantity</label><br>
<input type='number' name='productquantity' id='productquantity' class ='form-control' placeholder=' Enter your product quantity'><br>
<label> Product description</label><br>
<textarea name="productdescription" class ='form-control' id = productdescription></textarea><br>
<label>Product Amount</label><br>
<input type='text' name='productamount' id='productamount' class ='form-control' placeholder=' Enter your product amount'><br>


</fieldset>
<button type="submit" class="btn col-lg-2 col" id = 'adds' ><b class = 'txtcol' >ADD</b></button><br><br>
</form>

<!-- !-- Modal --> 
 </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>

$(document).ready(function(){

	//$.ajax({key:value, key:value, key:value})
$('#partnerid').change(function(){

var id = $('#partnerid').val();
// alert(id)
var data2send = {pid:id};
$.ajax({
	url:'getpartner_name_ajax.php',
	type:'post',
	data:data2send,
	dataType:'text',
	success:function(serverrsp){
		var name = serverrsp

		$('#useridtext2').html(name)
		// alert('Message Posted');
		// alert(serverrsp);
	}
})

})	



})


$(document).ready(function(){

	//$.ajax({key:value, key:value, key:value})
$('#saves').click(function(){

var open = $('#open').val();
// alert(id)
var data2send = {pend:open};
$.ajax({
	url:'openorder_ajaxsubmit.php',
	type:'post',
	data:data2send,
	dataType:'text',
	success:function(serverrsp){
		alert(serverrsp);
	}
})

})	



})


$(document).ready(function(){

	//$.ajax({key:value, key:value, key:value})
$('#adds').click(function(){

var cart = $('#productcategory').val();
var name = $('#productname').val();
var qnt = $('#productquantity').val();
var descrpt = $('#productdescription').val();
var amt = $('#productamount').val();
// alert(id)
if(cart!='' && name!='' && qnt!='' && descrpt!='' &&amt!=''){
var data2send = {cart:cart, name:name, qnt:qnt, descrpt:descrpt, amt:amt};
$.ajax({
	url:'order_ajaxsubmit.php',
	type:'post',
	data:data2send,
	dataType:'text',
	success:function(serverrsp){
		// var name = serverrsp

	}
})
}

})	



})





</script>



	<!-- <script > -->

<!-- $(document).ready(function(){
$('#partnerid').change(function(){
	var partnerName = $('#partnerid').val()
var patnam = "<?php //echo $dat['user_id'];?>"
if(partnerName == patnam){
	$('#useridtext2').append('<?php //echo $dat['user_fname']. " " .$dat['user_lname'];?>')
}

})
 -->


<!-- })


// $(document).ready(function(){
// 	$('#amount').hide()
// $('#producttblhead').hide()
// $('.productinvoice').hide()
// $('#invoice').hide()
// $('#save').attr('disabled', 'disabled')
// $('#submits').attr('disabled', 'disabled')
// var count = 1
// var kount =1
// var maxkount =5

// $('#adds').click(function(){
	
// var prod_cat = $('#productcategory').val()
// var prod_name = $('#productname').val()
// var prod_qnt = $('#productquantity').val()
// var prod_descript = $('#productdescription').val()
// var prod_amt = $('#productamount').val()

// var partner = $('#partnerid').val()
// var duration = $('#duration').val()
// var user = $('#userid').text()
// if(partner != '' && duration != ''){
	
// if(prod_cat.trim() != '' && prod_name.trim() != '' && prod_qnt.trim() != '' && prod_descript.trim() != '' && prod_amt.trim() != ''){

// $('#producttblhead').show()

// $('#addproduct').append("<tr><td>" +count +"</td><td>" +prod_cat +"</td><td>" +prod_name +"</td><td>" + prod_qnt +"</td><td>" +prod_descript +"</td><td>" +prod_amt +" </td></tr>")

// $('#productcategory').val('')
// $('#productname').val('')
// $('#productquantity').val('')
// $('#productdescription').val('')
// $('#productamount').val('')
// $('#save').removeAttr('disabled')

// $('#kount').text(kount)
// kount = kount+1
// if(kount>maxkount){
// 	$('#adds').attr('disabled', 'disabled')
// 	alert(count(prod_qnt))
// 	alert("You have reached the maximum order limit for this Transactions")

// } 
// count = count+1


// }
// }else{
// 	alert("Enter your Partner ID and select transaction duration first, then proceed to add your products. All fields should be filled")
// }
// })

//  	$('#save').click(function(){

// var duration = $('#duration').val()
// var partner = $('#partnerid').val()
// var user = $('#userid').text()
// $('.productinvoice').show()
// $('#invoice').show()
// $('#invoice').append("<p>  Order No:    " + count + "<br> Order_date:    "+ <?php //echo date('Y');?> + "<br> Duration:      " + duration + "<br>  Buyer ID:      " + user+ "<br> Partner ID:      " + partner + "<br><br>")

// $('#submits').removeAttr('disabled')
// $('#save').attr('disabled', 'disabled')

// })


// $('#amount').hide()
// // alert(count(prod_qnt))

// })

	</script> -->





</body>




</html>	

<!-- 
$(document).ready(function(){
$('#producttblhead').hide()
$('.productinvoice').hide()
$('#invoice').hide()
$('#save').attr('disabled', 'disabled')
$('#submits').attr('disabled', 'disabled')
var count = 1
var kount =1
var maxkount =5

$('#adds').click(function(){
	
var prod_cat = $('#productcategory').val()
var prod_name = $('#productname').val()
var prod_qnt = $('#productquantity').val()
var prod_descript = $('#productdescription').val()
var prod_amt = $('#productamount').val()

var partner = $('#partnerid').val()
var duration = $('#duration').val()
var user = $('#userid').text()
if(partner != '' && duration != ''){
	
if(prod_cat.trim() != '' && prod_name.trim() != '' && prod_qnt.trim() != '' && prod_descript.trim() != '' && prod_amt.trim() != ''){

$('#producttblhead').show()

$('#addproduct').append("<tr><td>" +count +"</td><td>" +prod_cat +"</td><td>" +prod_name +"</td><td>" + prod_qnt +"</td><td>" +prod_descript +"</td><td>" +prod_amt +" </td></tr>")

$('#productcategory').val('')
$('#productname').val('')
$('#productquantity').val('')
$('#productdescription').val('')
$('#productamount').val('')
$('#save').removeAttr('disabled')

$('#kount').text(kount)
kount = kount+1
if(kount>maxkount){
	$('#adds').attr('disabled', 'disabled')
	alert("You have reached the maximum order limit for this Transactions")

} 
count = count+1


}
}else{
	alert("Enter your Partner ID and select transaction duration first, then proceed to add your products. All fields should be filled")
}
})

 	$('#save').click(function(){

var duration = $('#duration').val()
var partner = $('#partnerid').val()
var user = $('#userid').text()
$('.productinvoice').show()
$('#invoice').show()
$('#invoice').append("<p>  Order No:    " + count + "<br> Order_date:    "+ <?php //echo date('Y');?> + "<br> Duration:      " + duration + "<br>  Buyer ID:      " + user+ "<br> Partner ID:      " + partner + "<br><br>")

$('#submits').removeAttr('disabled')
$('#save').attr('disabled', 'disabled')

})



}) -->
