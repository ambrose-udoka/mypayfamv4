

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



<div class ='container-fluid'>
	
<div class ='row'>
	<div class='col-lg-3' height ='600px'>

<div class="card" style="width: 18rem;" height ='550px'>
  <img src="image/firm4.png" class="card-img-top" alt="..." height="200px">
  <div class="card-body">
    <h5 class="card-title"> No one should be a victim of fraud. </h5>
    <p class="card-text">At MyPayFam, your onliine business transaction is safe. 
    We provide a secure platform for buyers and sellers to safely carry out their online business transactions without falling prey to fraudsters.</p>
    <a href="#" class="btn col btn-block"></a>
  </div>
</div>


</div>

	<div class='col-lg-9' id = 'homebgimg'><br><br>

	</div>		
</div>
</div>







<!-- Modal login -->

<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="logn" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="card">
    <div class="card-header col txtcol">
        <h5 class="card-title" style = 'text-align:center'  id="registration">User Login</h5>
    </div>
    <div class="card-body">
<!-- modal login -->
		
<?php require_once('payfamlogin.php');?>

<!-- Modal -->
 </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
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
  
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
<!-- Modal -->

   <div class="card">
    <div class="card-header col txtcol">
        <h5 class="card-title" style = 'text-align:center'  id="registration">Create an Account</h5>
    </div>
    <div class="card-body">
        
<!-- Registration Modal -->
		
<?php require_once('payfamreg.php'); ?>

<!-- Modal -->
 </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<!-- Modal Registration -->


<?php
require_once('payfamfooter.php');


?>




	









</body>




</html>	