

	<style type ='text/css'>

			
#loginbackgroundimg{
background-image: url('image/fam4.png');
background-attachment: fixed;
background-repeat: none;
max-width :100%;
 height:auto;
}





</style>			


<?php require_once('payfamheader.php');


?>





<div class ='container-fluid log'>
<div class ='row'>
	<div class ='col-lg-5'></div>
	<div class ='col-lg-5'></div>
	<div class ='col-lg'><span><b>New?</b></span></div>
	<div class ='col-lg'><a href ='mypayfamreg.php'><button class ='btn col'><span class="txtcol"><b>Register</b></span></button></a></div>
</div>
</div><br>


	<div class='col-lg-9' id ='loginbackgroundimg' >

    <?php
if($_GET){
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

<!-- Modal login -->

<!-- div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mt-2 col txtcol badge-pill" style = 'text-align:center'  id="log"> User Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> -->
<!-- modal login --><br><br><br><br><br>
<div class ='row'>
<div class = 'col-lg-4'></div>
<div class ='col-lg-4'>		

        
<!-- Modal -->

   <div class="card">
    <div class="card-header col txtcol">
        <h5 class="card-title" style = 'text-align:center'  id="registration">User Login </h5>
    </div>
    <div class="card-body">





<form action="payfamlogin_submit.php" method = 'POST'>
							
						<p class ='col-lg text-danger' id ='alltext'></p>
						<label for = 'email'>Email <span class = 'text-danger'>*</span></label>
					<div class="input-group">
  				<p class="input-group-prepend"><span class="input-group-text col"><img src ='image/email2.png' width='25px'></span></p>
  			<input type='email' name='email' id='username' class ='form-control' placeholder=' Enter your User Name' aria-label="image">
		</div>
	<p class ='col-lg small' id ='usertext'></p>


	<label for = 'pwd'>Password <span class = 'text-danger'>*</span></label>
		<div class="input-group">
 			<p class="input-group-prepend">
    			<span class="input-group-text col"><img src ='image/padlock1.png' width='25px'></span></p>
  					<input type='password' name ='password' id='pwd' class ='form-control' placeholder ='Enter your Password' aria-label="image">
  						<p class="input-group-append">
   						  <span class="input-group-text col"><img src ='image/visual1.png' id = 'eye' style ='width:20px' > </span></p>
						</div>
						<p class ='col-lg small' id ='passtext'></p><br>
					<button type='submit' class =' btn col col-lg-4' onclick="validate2(event)"><span class = 'txtcol'><b>Login</b></span></button><br><br>
				<p class ='col-lg text-success' id ='welcome'></p>	
			</form>


			<p style = 'color: red'><a href =''><b>Forgort Password?<b></p></a>
			<p>Don't have an account?</p><a href ='mypayfamreg.php' class = 'btn btn-dark'> Register</a>
</div>
</div>
</div>
</div>
</div>
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

</div>

<?php require_once('payfamfooter.php');?>



