


<?php
require ('Products.php');
$cart = new Products;

$prod_cart = $cart->get_category();


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>


<body>


<form action = 'mypayfamstarttrans.php' method = 'POST'>
<fieldset>
	<legend class = 'mt-2 col txtcol' style = 'text-align:center'><b> Make a transaction<b></legend>


<div class = 'col-lg'>		
						<p class ='col-lg text-danger' id ='useridtext'></p>
						<label for = 'userid'>Partner ID <span class = 'text-danger'>*</span></label>
					<div class="input-group">
  				<p class="input-group-prepend"><span class="input-group-text col"><img src ='image/user_1.png' width='25px'></span></p>
  			<input type='text' name='userid' id='partnerid' class ='form-control' placeholder=' Enter your User Id' aria-label="image">
		</div>
	<p class ='col-lg small' id ='useridtext2'></p>
</div>

<label for = 'duration'>Transaction duration <span class = 'text-danger'>*</span></label>
<select name="duration" class= 'form-control' id ='duration' >
	<option value="">...Transaction duration...</option>
	<option value="1-4days">1-4days</option>
	<option value="5-10days">5-10days</option>
	<option value="11-15days">11-15days</option>
	<option value="16-20days">16-20days</option>
	<option value="21-30days">21-30days</option>
	<option value="1-3months">1-3months</option>
	
</select><br>

<label>Add Product(s), (<span id = 'kount'>0</span> of 5).</label><img src ='image/cart1.png' data-toggle="modal" data-target = '#products' class="ml-5" id = 'productord'><br>

<div class = 'table-responsive-sm' id = 'transaction_summary'>
	<h3 class = 'productinvoice'>Product(s) Order Invoice</h3>
<div id = 'invoice'></div>
</div>


<div class = 'table-responsive-sm' id ='prodordtable'>
<table class ='table table-striped table-condensed'>
	<thead class = 'col txtcol' id = 'producttblhead'><tr><th>S/N</th><th>product_category</th><th>product_name</th><th>product_quantity</th><th>product_description</th><th>product_amount</th></tr></thead>
	<tbody id = 'addproduct'></tbody>
</table>
<p 1d ='amount'></p>
</div>
<div class ='row'>
<div class ='col-lg-5'></div>
<div class ='col-lg-2'>
<button type="button" class="btn col-lg col" id = 'save'><b class = 'txtcol' >Save</b></button><br><br>
<button type="submit" class="btn col-lg col" id = 'submits'><b class = 'txtcol' >Submit</b></button>
</div>
<div class ='col-lg-5'></div>
</div>
</fieldset>
</form>

	</div>	

</div><br>




<!-- Products modal -->




<!-- product modal -->

<form action = 'order_submit.php' method = 'POST'>

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

<hr>
<label>Product Name</label><br>
<input type='text' name='productname' id='productname' class ='form-control' placeholder=' Enter your product name'><br>
<label>Product Quantity</label><br>
<input type='number' name='productquantity' id='productquantity' class ='form-control' placeholder=' Enter your product quantity'><br>
<label> Product description</label><br>
<textarea name="productdescription" class ='form-control' id = productdescription></textarea><br>
<label>Product Amount</label><br>
<input type='text' name='productamount' id='productamount' class ='form-control' placeholder=' Enter your product amount'><br>


<button type="submit" class="btn col-lg-2 col" id = 'adds' ><b class = 'txtcol' >ADD</b></button><br><br>
</form>

<!-- !-- Modal --> 
 
<script src ='js/jquery-3.5.1.min.js'></script>
	<script src ='js/popper.min.js'></script>
	<script src ='js/bootstrap.js'></script>
<script>

$(document).ready(function(){
var amt = $('#productamount').val()


})

</script>
</body>
</html>



