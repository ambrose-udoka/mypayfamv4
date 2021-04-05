<?php
require_once('payfamheader.php');


?>


<div class ='container-fluid log'>
<div class ='row'>
	<div class ='col-lg'><a href ='#'><button id = 'reglogins' class ='btn col' data-toggle="modal" data-target = '#login'><span class ='txtcol'><b>Login</b></span></button></a></div>
	<div class ='col-lg-5'></div>
	<div class ='col-lg-5'></div><br>
	<div class ='col-lg'><a href ='#'><button id = 'reg'  class ='btn col' data-toggle="modal" data-target = '#register'><span class="txtcol"><b>Register</b></span></button></a></div>
</div>
</div><br>

<hr style ='border-bottom: 1px solid #0033A1'>
<p class ='btn txtcol col'><b>MypayFam general overview</b></p>
<hr style ='border-bottom: 1px solid #0033A1'>

<div class ='container-fluid'>
	
<div class ='row'>
<div class='col-lg-3 col-md-6' style ='height: 370px'>
	<div class="card" style="width: 18rem;" height ='370px'>
  <img src="image/firmc.png" class="card-img-top" alt="..." height="180px">
  <div class="card-body">
    <h6 class="card-title"> MyPayFam Account</h6>
    <p class="card-text">To initiate any transaction, both users (buyers and sellers) create Mypayfam account.</p>
    <hr style = 'border-top: 3px solid #0033A1'>
  </div>
</div>
</div>
<div class='col-lg-3 col-md-6' style ='height: 370px'>
	<div class="card" style="width: 18rem;" height ='370px'>
  <img src="image/refresh1.png" class="card-img-top" alt="..." height="180px">
  <div class="card-body">
    <h6 class="card-title">Start a new Transaction</h6>
    <p class="card-text">Any of the partners can initiate a transaction (weather the buyer or the seller).
    </p>
    <hr style = 'border-top: 3px solid #0033A1'>
  </div>
</div>
</div>

<div class='col-lg-3 col-md-6' style ='height: 370px'>
	<div class="card" style="width: 18rem;" height ='370px'>
  <img src="image/escrow2.jpg" class="card-img-top" alt="..." height="180px">
  <div class="card-body">
    <h6 class="card-title">Agreement</h6>
    <p class="card-text">The transaction initiated by one party is sealed with the agreement from the other party.
    </p>
    <hr style = 'border-top: 3px solid #0033A1'>
  </div>
</div>
</div>

<div class='col-lg-3 col-md-6' style ='height: 370px'>
	<div class="card" style="width: 18rem;" height ='370px'>
  <img src="image/firm6.jpg" class="card-img-top" alt="..." height="180px" width="100$">
  <div class="card-body">
    <h6 class="card-title">Account Funding</h6>
    <p class="card-text">The buyer funds the Mypayfam account which in turn is credited to his mypayfam wallet.
    </p>
    <hr style = 'border-top: 3px solid #0033A1'>
  </div>
</div>
</div>

</div>



<div class ='row'>
<div class='col-lg-3 col-md-6' style ='height: 370px'>
	<div class="card" style="width: 18rem;" height ='370px'>
  <img src="image/trolley-cart.png" class="card-img-top" alt="..." height="180px">
  <div class="card-body">
    <h6 class="card-title">Delivery/Shiping</h6>
    <p class="card-text">On receiving the payment by mypayfam, the seller ships the products to the buyer.
    </p>
    <hr style = 'border-top: 3px solid #0033A1'>
  </div>
</div>
</div>

	<div class='col-lg-3 col-md-6' style ='height: 370px'>
	<div class="card" style="width: 18rem;" height ='370px'>
  <img src="image/confirm.jpg" class="card-img-top" alt="..." height="180px">
  <div class="card-body">
    <h6 class="card-title">Confirmation</h6>
    <p class="card-text">On receiving the products from the seller, the buyer confirms them okay.
    </p>
    <hr style = 'border-top: 3px solid #0033A1'>
  </div>
</div>
</div>

	<div class='col-lg-3 col-md-6' style ='height: 370px'>
	<div class="card" style="width: 18rem;" height ='370px'>
  <img src="image/transaction.png" class="card-img-top" alt="..." height="180px">
  <div class="card-body">
    <h6 class="card-title">Fund transfer to seller</h6>
    <p class="card-text">On confirming the products receiption, the fund leaves buyer's wallet to the seller's.
    </p>
    <hr style = 'border-top: 3px solid #0033A1'>
  </div>
</div>
</div>

	<div class='col-lg-3 col-md-6' style ='height: 370px'>
	<div class="card" style="width: 18rem;" height ='370px'>
  <img src="image/confirm2.jpg" class="card-img-top" alt="..." height="180px">
  <div class="card-body">
    <h6 class="card-title">Close Out</h6>
    <p class="card-text">Once the seller receives the fund, the particular transaction is completed and closed out.
    </p>
    <hr style = 'border-top: 3px solid #0033A1'>
  </div>
</div>
</div>

</div>
</div>



<!-- Modal login -->

<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="logn" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mt-2 col txtcol badge-pill" style = 'text-align:center'  id="log"> User Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<!-- modal login -->
		
<form action="mypayfamverified.php" method = 'get' id = 'formlogin'>
				<div class = 'col-lg'>
							
						<p class ='col-lg text-danger' id ='alltext'></p>
						<label for = 'username'>User Name <span class = 'text-danger'>*</span></label>
					<div class="input-group">
  				<p class="input-group-prepend"><span class="input-group-text col"><img src ='image/user1.png' width='25px'></span></p>
  			<input type='text' name='username' id='username' class ='form-control' placeholder=' Enter your User Name' aria-label="image">
		</div>
	<p class ='col-lg small' id ='usertext'></p>
</div>


<div class = 'col-lg'>
	<label for = 'pwd'>Password <span class = 'text-danger'>*</span></label>
		<div class="input-group">
 			<p class="input-group-prepend">
    			<span class="input-group-text col"><img src ='image/padlock1.png' width='25px'></span></p>
  					<input type='password' id='pwd' class ='form-control' placeholder ='Enter your Password' aria-label="image">
  						<p class="input-group-append">
   						  <span class="input-group-text col"><img src ='image/visual1.png' id = 'eye' style ='width:20px' > </span></p>
						</div>
						<p class ='col-lg small' id ='passtext'></p></div><br>
					<button type='submit' class =' btn col col-lg form-control' onclick="validate2(event)"><span class = 'txtcol'><b>Login</b></span></button><br><br>
				<p class ='col-lg small' id ='welcome'></p>	
			</form>

<!-- Modal -->
 </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->




<!-- Modal Registration begins-->


<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="registration" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mt-2 col txtcol badge-pill" style = 'text-align:center'  id="registration">New User Sign Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
<!-- Modal -->
		
<form action="mypayfamtrans.php" method = 'get'>
				<div class = 'col-lg'>		
						<p class ='col-lg text-danger' id ='alltext'></p>
						<label for = 'username2'>User Name <span class = 'text-danger'>*</span></label>
					<div class="input-group">
  				<p class="input-group-prepend"><span class="input-group-text col"><img src ='image/user1.png' width='25px'></span></p>
  			<input type='text' name='username2' id='username2' class ='form-control' placeholder=' Enter your User Name' aria-label="image">
		</div>
	<p class ='col-lg small' id ='usertext2'></p>
</div>

<div class = 'col-lg'>
						<label for = 'username2'>Phone <span class = 'text-danger'>*</span></label>
					<div class="input-group">
  				<p class="input-group-prepend"><span class="input-group-text col"><img src ='image/phone1.png' width='25px'></span></p>
  			<input type='number' name='phone' id='phone' class ='form-control' placeholder=' Enter your Phone Number' aria-label="image">
		</div>
	<p class ='col-lg small' id ='phonetext2'></p>
</div>
				

<div class = 'col-lg'>
						<label for = 'email2'>Email Address <span class = 'text-danger'>*</span></label>
					<div class="input-group">
  				<p class="input-group-prepend"><span class="input-group-text col"><img src ='image/email2.png'></span></p>
  			<input type='text' name='email' id='email2' class ='form-control' placeholder=' Enter your Email Address' aria-label="image" required>
		</div>
	<p class ='col-lg small' id ='emailtext2'></p>
</div>


<div class = 'col-lg'>
	<label for = 'pwd2'>Password <span class = 'text-danger'>*</span></label>
		<div class="input-group">
 			<p class="input-group-prepend">
    			<span class="input-group-text col"><img src ='image/padlock1.png' width='25px'></span></p>
  					<input type='password' id='pwd2' class ='form-control' placeholder ='Enter your Password' aria-label="image">
  				<p class="input-group-append">
   			<span class="input-group-text col"><img src ='image/visual1.png' id = 'eye3' style ='width:20px' > </span></p>
		</div>
	<p class ='col-lg small' id ='passtext2'></p>		
</div>


<div class = 'col-lg'>
	<label for = 'confirmpwd'>Confirm Password <span class = 'text-danger'>*</span></label>
		<div class="input-group">
 			 <p class="input-group-prepend">
    			<span class="input-group-text col"><img src ='image/web-security1.png' width='25px'></span></p>
  					<input type='password' id='confirmpwd' class ='form-control' placeholder ='Confirm your Password' aria-label="images">
 						<p class="input-group-append">
    					   <span class="input-group-text col"><img src ='image/visual1.png' id = 'eye4' style ='width:20px'> </span></p>
								</div>	
							<p class ='col-lg small' id ='cpasstext'></p>	
						</div><br>
					<button type='submit' id ='signup' class =' btn col col-lg form-control' onclick="validate3(event)"><span class = 'txtcol'><b>Sign Up</b></span></button><br><br>
				<p class ='col-lg small' id ='welcome2'></p>	
			</form>
<!-- Modal -->
 </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<?php
require_once('payfamfooter.php');


?>




<script src ='js/jquery-3.5.1.min.js'></script>
	<script src ='js/popper.min.js'></script>
	<script src ='js/bootstrap.js'></script>


	<script src ='project4validation.js'></script>

