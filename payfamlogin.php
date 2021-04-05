








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