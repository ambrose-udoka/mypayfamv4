<form action="verify_submit.php" method = 'POST'>
				<div class = 'col-lg'>
					<p id = 'notify'>Complete the form below to verify your account and proceed.</p>		<h3 id = 'confirmverification'>rrr</h3>
						<p class ='col-lg text-danger' id ='alltext'></p>
						<label for = 'fname2'>First Name <span class = 'text-danger'>*</span></label>
					<div class="input-group">
  				<p class="input-group-prepend"><span class="input-group-text col"><img src ='image/user_1.png' width='25px'></span></p>
  			<input type='text' name='firstname' id='fname2' class ='form-control' value ="<?php echo $dat['user_fname'];?>" placeholder=' Enter your First Name' aria-label="image">
		</div>
	<p class ='col-lg small' id ='firsttext2'></p>
</div>


<div class = 'col-lg'>		
						<p class ='col-lg text-danger' id ='alltext'></p>
						<label for = 'lname2'>Last Name <span class = 'text-danger'>*</span></label>
					<div class="input-group">
  				<p class="input-group-prepend"><span class="input-group-text col"><img src ='image/user_1.png' width='25px'></span></p>
  			<input type='text' name='lastname' id='lname2' class ='form-control' value ="<?php echo $dat['user_lname'];?>"  placeholder=' Enter your Last Name' aria-label="image">
		</div>
	<p class ='col-lg small' id ='lasttext2'></p>
</div>

<div class = 'col-lg'>
						<label for = 'phone2'>Phone <span class = 'text-danger'>*</span></label>
					<div class="input-group">
  				<p class="input-group-prepend"><span class="input-group-text col"><img src ='image/phone1.png' width='25px'></span></p>
  			<input type='text' name='phone' id='phone' class ='form-control' value ="<?php echo $dat['user_phone'];?>" placeholder=' Enter your Phone Number' aria-label="image">
		</div>
	<p class ='col-lg small' id ='phonetext2'></p>
</div>
				

<div class = 'col-lg'>
						<label for = 'email2'>Email Address <span class = 'text-danger'>*</span></label>
					<div class="input-group">
  				<p class="input-group-prepend"><span class="input-group-text col"><img src ='image/email2.png' width='25px'></span></p>
  			<input type='text' name='email' id='email2' class ='form-control' value ="<?php echo $dat['user_email'];?>"  placeholder=' Enter your Email Address' aria-label="image" required>
		</div>
	<p class ='col-lg small' id ='emailtext2'></p>
</div>


<div class = 'col-lg'>
	<label for = 'add1'>Address line1 <span class = 'text-danger'>*</span></label>
		<div class="input-group">
 			<p class="input-group-prepend">
    			<span class="input-group-text col"><img src ='image/placeholder1.png'></span></p>
  					<input type='text' name='address1' id='add1' class ='form-control'  placeholder=' Enter your Primary address' value ="<?php echo $dat['user_addrs1'];?>" aria-label="image">
		</div>
	<p class ='col-lg small' id ='add1text2'></p>		
</div>


<div class = 'col-lg'>
	<label for = 'add2'>Address line2 <span class = 'text-danger'>*</span></label>
		<div class="input-group">
 			<p class="input-group-prepend">
    			<span class="input-group-text col"><img src ='image/placeholder1.png'></span></p>
  					<input type='text' name='address2' id='add2' class ='form-control' value ="<?php echo $dat['user_addrs2'];?>"  placeholder=' Enter your Other address' aria-label="image">
		</div>
	<p class ='col-lg small' id ='add2text2'></p>		
</div>


<div class ='col-lg'>
	<label for = 'country'>Country<span class = 'text-danger'>*</span></label><br>
<div class="input-group">
 			<p class="input-group-prepend">
    			<span class="input-group-text col"><img src ='image/flag1.png'></span></p>
<select name="country" class= 'form-control'id ='country' >
	<option value="">...Country...</option>
	<option value="Nigeria">Brazil</option>
	<option value="Nigeria">Nigeria</option>
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
    			<span class="input-group-text col"><img src ='image/city1.png'></span></p>
<select name="state" class= 'form-control'id ='state' >
	<option value="">...state...</option>
	<option value="Lagos">Lagos</option>
	<option value="Enugu">Enugu</option>
	<option value="Imo">Imo</option>
	<option value="Oyo">Oyo</option>
	<option value="Kaduna">Kaduna</option>
	<option value="Rivers">Rivers</option>
</select>
</div>
</div>

<div class ='col-lg'>
	<label for = 'day'>Date of Birth<span class = 'text-danger'>*</span></label><br>

<input type = 'date' name ='dob' id ='birthday' class ='form-control' value ="<?php echo $dat['user_dob'];?>">

</div><br>

<div class ='col-lg'>
	<label for = 'rad'>Gender<span class = 'text-danger'>*</span></label><br>
	
<input type="radio" name="gender"  class = 'gend' value ="M" <?php if($dat['user_gender']=='M'){echo "checked";}?> id ='male'>Male<br>
<input type="radio" name="gender"   class = 'gend' value ="F" <?php if($dat['user_gender']=='M'){echo "checked";}?> id ='fmale'>Female

</div><br>

					<button type='submit' class =' btn col col-lg form-control' onclick="validate3(event)" id = 'submitverify'><span class = 'txtcol'><b>Submit</b></span></button><br><br>
				<p class ='col-lg text-success' id ='welcome2'></p>	
			</form>