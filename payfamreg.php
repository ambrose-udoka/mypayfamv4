



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