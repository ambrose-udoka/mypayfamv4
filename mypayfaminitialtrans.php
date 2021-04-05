<?php
session_start();
require('User.php');
require('Products.php');
$obj = new User ;

if(!isset($_SESSION['userid'])){
  header('mypayfamlogin.php');
}

$dat = $obj->get_details($_SESSION['userid']);

// echo '<pre>';
// print_r($dat);
// echo '</pre>';
?>


<?php require_once('payfamheader.php');?>


<style type ='text/css'>



			#initialtransactionbgimg{
background-image: url('image/fam22.png');
background-position: fixed;
background-repeat: none;
max-width :100%;
 min-height:500px;
}




		</style>
	



<?php require_once('payfamdashboard.php');?>

	<div class='col-lg-9' id = 'initialtransactionbgimg'>
		<!-- <div class="alert alert-success alert-dismissible fade show text-center" role="alert"> -->
  <!-- <?php
//$msg = $_GET['msg'];
//echo $msg;
  ?> -->
  <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div> -->
		<div class ='row' style ='position: sticky; top:105px'>

		<div class ='col-lg-4'></div><br><br>
		<div class ='col-lg-2'><a href = 'mypayfamstarttrans.php' title ='Click to start your Transaction'><button class="btn btn-block col" style ='height: 50px'><span class ='txtcol'><b>Buyer?</b></span></button></a></div><br><br><br>
		<div class ='col-lg-2'><a href = 'mypayfamstarttrans.php' title ='Click to start your Transaction'><button class="btn btn-block col" style ='height: 50px'><span class ='txtcol'><b>Seller?</b></span></button></a></div>
		<div class ='col-lg-4'></div>
		</div><br><br><br><br><br><br>



<h1 style = 'color:white'> Have an Order to place?
</h1><br><br>

<h2 style = 'color:white'>Buying or Selling?</h2><br><br>


<h3 style = 'color:white'>Just a click away!</h3>
<!-- Modal -->


<!-- <div class="modal fade" id="verify" tabindex="-1" role="dialog" aria-labelledby="verification" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mt-2 col txtcol" style = 'text-align:center'  id="verification">Account Verification</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> -->
        
<!-- Modal -->

		
<!-- <form action="mypayfamtrans.html" method = 'get'>
				<div class = 'col-lg'>
					<p>You are almost there! Complete the form below to verify your account and proceed.</p>		
						<p class ='col-lg text-danger' id ='alltext'></p>
						<label for = 'fname2'>First Name <span class = 'text-danger'>*</span></label>
					<div class="input-group">
  				<p class="input-group-prepend"><span class="input-group-text col"><img src ='image/user_1.png' width='25px'></span></p>
  			<input type='text' name='firstname2' id='fname2' class ='form-control' placeholder=' Enter your First Name' aria-label="image">
		</div>
	<p class ='col-lg small' id ='firsttext2'></p>
</div>


<div class = 'col-lg'>		
						<p class ='col-lg text-danger' id ='alltext'></p>
						<label for = 'lname2'>Last Name <span class = 'text-danger'>*</span></label>
					<div class="input-group">
  				<p class="input-group-prepend"><span class="input-group-text col"><img src ='image/user_4.png' width='25px'></span></p>
  			<input type='text' name='lastname2' id='lname2' class ='form-control' placeholder=' Enter your Last Name' aria-label="image">
		</div>
	<p class ='col-lg small' id ='lasttext2'></p>
</div>

<div class = 'col-lg'>
						<label for = 'phone2'>Phone <span class = 'text-danger'>*</span></label>
					<div class="input-group">
  				<p class="input-group-prepend"><span class="input-group-text col"><img src ='image/phone.png' width='25px'></span></p>
  			<input type='number' name='phone' id='phone' class ='form-control' placeholder=' Enter your Phone Number' aria-label="image">
		</div>
	<p class ='col-lg small' id ='phonetext2'></p>
</div>
				

<div class = 'col-lg'>
						<label for = 'email2'>Email Address <span class = 'text-danger'>*</span></label>
					<div class="input-group">
  				<p class="input-group-prepend"><span class="input-group-text col"><img src ='image/email.png' width='25px'></span></p>
  			<input type='text' name='email' id='email2' class ='form-control' placeholder=' Enter your Email Address' aria-label="image" required>
		</div>
	<p class ='col-lg small' id ='emailtext2'></p>
</div>


<div class = 'col-lg'>
	<label for = 'add1'>Address line1 <span class = 'text-danger'>*</span></label>
		<div class="input-group">
 			<p class="input-group-prepend">
    			<span class="input-group-text col"><img src ='image/map-pointer.png' width='25px'></span></p>
  					<input type='text' id='add1' class ='form-control' placeholder ='Enter your Primary Address' aria-label="image" maxlength="60">
		</div>
	<p class ='col-lg small' id ='add1text2'></p>		
</div>


<div class = 'col-lg'>
	<label for = 'add2'>Address line2 <span class = 'text-danger'>*</span></label>
		<div class="input-group">
 			<p class="input-group-prepend">
    			<span class="input-group-text col"><img src ='image/location.png' width='25px'></span></p>
  					<input type='text' id='add2' class ='form-control' placeholder ='Enter your Secodary Address if different from above' aria-label="image" maxlength="60">
		</div>
	<p class ='col-lg small' id ='add2text2'></p>		
</div>


<div class ='col-lg'>
	<label for = 'country'>Country<span class = 'text-danger'>*</span></label><br>
<div class="input-group">
 			<p class="input-group-prepend">
    			<span class="input-group-text col"><img src ='image/flag.png' width='25px'></span></p>
<select name="country" class= 'form-control'id ='country' >
	<option value="">...Country...</option>
	<option value="Nigeria">Brazil</option>
	<option value="Nigeria" selected>Nigeria</option>
	<option value="Ghana">Ghana</option>
	<option value="England">England</option>
	<option value="Algeria">Algeria</option>
	<option value="Germany">Germany</option>
	
</select>
</div>
</div>

<div class ='col-lg'>
	<label for = 'state'>State<span class = 'text-danger'>*</span></label><br>
<div class="input-group">
 			<p class="input-group-prepend">
    			<span class="input-group-text col"><img src ='image/city.png' width='25px'></span></p>
<select name="state" class= 'form-control'id ='state' >
	<option value="">...state...</option>
	<option value="Lagos">Lagos</option>
	<option value="Enugu" selected>Enugu</option>
	<option value="Imo">Imo</option>
	<option value="Oyo">Oyo</option>
	<option value="Kaduna">Kaduna</option>
	<option value="Rivers">Rivers</option>
</select>
</div>
</div>

<div class ='col-lg'>
	<label for = 'day'>Date of Birth<span class = 'text-danger'>*</span></label><br>

<select name="day" id ='day'>
	<option value="">...Day...</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="26">26</option>
	<option value="28">28</option>
</select>

<select name="month" id ='month' >
	<option value="">...Month...</option>
	<option value="Jan">Jan</option>
	<option value="March">March</option>
	<option value="April">April</option>
	<option value="Sept">Sept</option>
	<option value="Nov">Nov</option>
	<option value="Dec">Dec</option>
</select>

<select name="year" id ='year' >
	<option value="">...Year...</option>
	<option value="1990">1990</option>
	<option value="1994">1994</option>
	<option value="1985">1985</option>
	<option value="1996">1996</option>
	<option value="1978">1978</option>
	<option value="2000">2000</option>
</select>

</div><br>

<div class ='col-lg'>
	<label for = 'rad'>Gender<span class = 'text-danger'>*</span></label><br>
	
<input type="radio" name="reg" id ='male'>Male<br>
<input type="radio" name="reg" id ='fmale'>Female

</div><br>

<div class = 'col-lg'>
	<label for = 'pic'>Profile Picture <span class = 'text-danger'>*</span></label>
		<div class="input-group">
 			 <p class="input-group-prepend">
    			<span class="input-group-text col"><img src ='image/user_3.png' width='25px'></span></p>
  					<input type='file' id='pic' class ='form-control' placeholder ='Upload Your Picture' aria-label="images">
								</div>	
							<p class ='col-lg small' id ='pictext'></p>	
						</div><br>
					<button type='submit' class =' btn col col-lg form-control' onclick="validate3(event)"><span class = 'txtcol'><b>Submit</b></span></button><br><br>
				<p class ='col-lg small' id ='welcome2'></p>	
			</form>

 -->
<!-- Modal -->
 <!-- </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> -->

<!-- Modal -->


	</div>
	

<!-- end of verify div -->		

</div>


<?php require_once('payfamfooter.php');?>






</body>




</html>	