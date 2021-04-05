

<?php require_once('payfamheader.php');?>

<style type="text/css">
	


</style>

<div class ='container-fluid log'>
<div class ='row'>
	<div class ='col-lg-5'></div>
	<div class ='col-lg-5'></div>
	<div class ='col-lg'><span><b>User?</b></span></div>
	<div class ='col-lg'><a href = 'mypayfamlogin.php'><button class ='btn col'><span class="txtcol"><b>Login</b></span></button></a></div>
</div>
</div><br>


 <?php
if(isset($_GET)){
  ?>
  <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
  <?php
  
$msg = $_GET['msg'];
echo $msg;

  ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php
}
?>


<div class ='container-fluid'>
	
<div class ='row'>
<div class='col-lg-4'>


</div>


<!-- reg div begins -->

	<div class='col-lg-4'>

<!-- Modal -->


<!-- Modal -->

   <div class="card">
    <div class="card-header col txtcol">
        <h5 class="card-title" style = 'text-align:center'  id="registration">Create an Account</h5>
    </div>
    <div class="card-body">

<!-- <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="registration" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mt-2 col txtcol" style = 'text-align:center'  id="registration">New User Sign Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         -->
<!-- Modal -->
		




<form action="payfamreg_submit.php" method = 'POST'>
				
<div class = 'col-lg'>
						<label for = 'phone'>Phone <span class = 'text-danger'>*</span></label>
					<div class="input-group">
  				<p class="input-group-prepend"><span class="input-group-text col"><img src ='image/phone1.png' width='25px'></span></p>
  			<input type='number' name='phone' id='phone' class ='form-control' placeholder=' Enter your Phone Number' aria-label="image">
		</div>
	<p class ='col-lg small' id ='phonetext2'></p>
</div>
				

<div class = 'col-lg'>
						<label for = 'email2'>Email Address <span class = 'text-danger'>*</span></label>
					<div class="input-group">
  				<p class="input-group-prepend"><span class="input-group-text col"><img src ='image/email2.png' width='25px'></span></p>
  			<input type='text' name='email' id='email2' class ='form-control' placeholder=' Enter your Email Address' aria-label="image" required>
		</div>
	<p class ='col-lg small' id ='emailtext2'></p>
</div>


<div class = 'col-lg'>
	<label for = 'pwd2'>Password <span class = 'text-danger'>*</span></label>
		<div class="input-group">
 			<p class="input-group-prepend">
    			<span class="input-group-text col"><img src ='image/padlock1.png' width='25px'></span></p>
  					<input type='password' id='pwd2' name ='password' class ='form-control' placeholder ='Enter your Password' aria-label="image">
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
  					<input type='password' id='confirmpwd' name = 'cpassword' class ='form-control' placeholder ='Confirm your Password' aria-label="images">
 						<p class="input-group-append">
    					   <span class="input-group-text col"><img src ='image/visual1.png' id = 'eye4' style ='width:20px'> </span></p>
								</div>	
							<p class ='col-lg small' id ='cpasstext'></p>	
						</div><br>
					<button type='submit' class =' btn col col-lg form-control' onclick="validate3(event)"><span class = 'txtcol'><b>Sign Up</b></span></button><br><br>
				<p class ='col-lg text-success' id ='welcome2'></p>	
			</form>


<!-- Modal -->
 <!-- </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
 -->
<!-- Modal -->
<p>Have an account?</p><a href ='mypayfamlogin.php' class = 'btn btn-dark'> Login</a>

</div>
</div>
</div>
	</div>	
<!-- div end -->


	<div class='col-lg-4'></div>		

</div><br><br><br>


<?php require_once('payfamfooter.php');?>