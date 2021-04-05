<?php
session_start();

// require('User.php');
// $obj = new User ;
require_once('User.php');
$obj = new User();
  if(!isset($_SESSION['userid'])){
  header('location:mypayfamlogin.php');
}
$dat = $obj->get_details($_SESSION['userid']);

$message =''; 
if($_POST){


$fname = strip_tags(trim($_POST['firstname']));
$lname = strip_tags(trim($_POST['lastname']));
$phone = strip_tags(trim($_POST['phone']));
$add1 = strip_tags(trim($_POST['address1']));
$add2 = strip_tags(trim($_POST['address2']));
$country = strip_tags(trim($_POST['country']));
$state = strip_tags(trim($_POST['state']));
$gender = strip_tags(trim($_POST['gender']));
$dob = strip_tags(trim($_POST['dob']));


$dat = $obj->get_details($_SESSION['userid']);
$id = $_SESSION['userid'];
//die($deets);

if(!empty($fname) && !empty($lname) && !empty($phone) && !empty($add1) && !empty($add2) && !empty($country) && !empty($state) && !empty($gender) && !empty($dob)){

$verify =$obj->verify_account($fname, $lname, $phone, $add1, $add2, $country, $state, $gender, $dob, $id);
}
if($verify){
  header('location:mypayfamtrans.php?msg=Account Succefully verified, upload your profile picture and proceed with your transaction.');

}else{
  header('location:mypayfamverify.php?msg=Account verification failed, kindly complete all the fields and retry.');
}

}

// if(!isset($_SESSION['userid'])){
//   header('mypayfamlogin.php');
// }




// if($_POST || $_FILES){ //if($_FILES)

// $message = $obj->upload($_FILES, $_SESSION['userid']);
// }
// echo '<pre>';
// print_r($dat);
// echo '</pre>';

?>


<?php

require_once('payfamheader.php');

?>



<div class ='container-fluid log'>
<div class ='row'>
	<div class ='col-lg-5'></div>
	<div class ='col-lg-5'></div>
	<div class ='col-lg'><span><b>User?</b></span></div>
	<div class ='col-lg'><a href = 'mypayfamlogin.html'><button class ='btn col'><span class="txtcol"><b>Login</b></span></button></a></div>
</div>
</div><br>





	<style type ='text/css'>



			#transactionbgimg{
background-image: url('image/firmc.png');
background-attachment: fixed;
background-repeat: none;
max-width :100%;
 min-height:500px;
}

		</style>
	

<?php require_once('payfamheader.php');?>


<!-- Dashboard begins -->


<style type= 'text/css'>
#profilepix{
  width:225px;
   height :270px;
   border-radius: 50%
}


</style>




<div class ='container-fluid' min-height ='300px'>
  
<div class ='row '>
  <div class='col-lg-3 col'>


<div class ='ml-4 mt-2 mb-1' style = 'height: 280px; width: 250px'>
  <img id = 'profilepix'class="ml-2 mt-1" src= "image/<?php 
        if($dat['user_pic']!=''){
          echo $dat['user_pic'];
        }else{ 
          echo 'man.png';
        } ?>">

</div>
<br><br>




<!-- Collapse -->

<div class="accordion col" id="accordionExample">


  <div class="card ">
    <div class="card-header col" id="heading2">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
          <span class = 'txtcol'><b>User ID</b></span>
        </button>
      </h2>
    </div>
    <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionExample">
      <div class="card-body hub">
        <button class="btn btn-link btn-block text-center"><b class = 'txtcol' id = 'userid'><?php echo $dat['user_id']  ;?></b></button>
      </div>
    </div>
  </div>


<div class="card">
    <div class="card-header col" id="heading1">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
          <span class = 'txtcol'><b>Account Status</b></span>
        </button>
      </h2>
    </div>
    <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordionExample">
      <div class="card-body hub">
      	<!-- <a href="mypayfamverify.php"> -->
        <button class="btn btn-link btn-block text-center" id = 'accountverification'><b class = 'txtcol'><?php if($dat['user_state']!=''){echo "Account Verified";}else{
          echo "Verify Your Account";
        }
        ?></b></button>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header col" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-center" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <span class = 'txtcol'><b>Transactions</b></span>
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body hub">
        <a href ='mypayfaminitialtrans.php'><button class="btn btn-link btn-block text-center"><span class = 'txtcol'><b>Initiate a Transaction</b></span></button></a>
      </div>
    </div>
    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body hub">
           <a href = 'open_ordersubmit.php'><button class="btn btn-link btn-block text-center"><b class = 'txtcol'>Open Transactions</b><span class = 'text-light badge badge-info badge-pill'>&nbsp0</span></button></a>
      </div>
    </div>
    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body hub">
            <a href = 'pending_ordersubmit.php'><button class="btn btn-link btn-block text-center"><span class = 'txtcol'><b class = 'txtcol'>Pending Transactions</b><span class = 'text-light badge badge-warning badge-pill'>&nbsp0</span></button></a>
      </div>
    </div>
    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body hub">
       <a href = 'cancelled_ordersubmit.php'><button class="btn btn-link btn-block text-center"> <b class = 'txtcol'>Cancelled Transactions</b><span class = 'text-light badge badge-danger badge-pill'>&nbsp0</span></button></a>
      </div>
    </div>
    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body hub">
        <a href = 'complete_ordersubmit.php'><button class="btn btn-link btn-block text-center"><b class = 'txtcol'>Completed Transactions</b><span class = 'text-light badge badge-success badge-pill'>&nbsp0</span></button></a>
      </div>
    </div>
  </div>
  
  <div class="card">
    <div class="card-header col" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         <span class = 'txtcol'><b>My Wallet</b></span>
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body hub">
        <button class="btn btn-link btn-block text-center"><b class = 'txtcol'>My Wallet Amount</b><span class = 'txtcol'>0</span></button>
      </div>
    </div>
  </div>

 
<div class="card">
    <div class="card-header col" id="heading3">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
          <span class = 'txtcol'><b>My Profile</b></span>
        </button>
      </h2>
    </div>
    <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample">
      <div class="card-body hub">
        <a href ='payfamview_profile.php'><button class="btn btn-link btn-block text-center"><b class = 'txtcol'>View Profile</b></button></a>
      </div>
    </div>

    <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample">
      <div class="card-body hub">
        <a href ='payfamedit_profile.php'><button class="btn btn-link btn-block text-center"><b class = 'txtcol'>Update Profile</b></button></a>
      </div>
    </div>

    <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample">
      <div class="card-body hub">
        <a href ='mypayfamupload.php'><button class="btn btn-link btn-block text-center"><b class = 'txtcol'>Upload Profile Picture</b></button></a>
      </div>
    </div>

<div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample">
      <div class="card-body hub">
        <a href ='payfamdelete_usersubmit.php'><button class="btn btn-link btn-block text-center"><b class = 'txtcol'>Delete Profile</b></button></a>
      </div>
    </div>

    <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample">
      <div class="card-body hub">
        <button class="btn btn-link btn-block text-center"><a href ='payfamlogout.php'><b class = 'txtcol'>Logout</b></a></button>
      </div>
    </div>
  </div>
</div>

</div>

	<div class='col-lg-9' id = 'verification'>

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

<!-- <p id = verifystatus>  -->
  <!-- <?php
//$_GET['msg'];
?> -->
  
<!-- </p>
 -->
<form action="" method = 'POST'>
				<div class = 'col-lg'>
					<p id = 'notify'>Complete the form below to verify your account and proceed.</p>		<h3 id = 'confirmverification'></h3>
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
	<option value="Brazil" <?php if($dat['user_country']=='Brazil'){echo "selected";}?>>Brazil</option>
	<option value="Nigeria" <?php if($dat['user_country']=='Nigeria'){echo "selected";}?>>Nigeria</option>
	<option value="Ghana" <?php if($dat['user_country']=='Ghana'){echo "selected";}?>>Ghana</option>
	<option value="England" <?php if($dat['user_country']=='England'){echo "selected";}?>>England</option>
	<option value="Algeria" <?php if($dat['user_country']=='Algeria'){echo "selected";}?>>Algeria</option>
	<option value="Germany" <?php if($dat['user_country']=='Germany'){echo "selected";}?>>Germany</option>
	
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
	<option value="Lagos" <?php if($dat['user_state']=='Lagos'){echo "selected";}?>>Lagos</option>
	<option value="Enugu" <?php if($dat['user_state']=='Enugu'){echo "selected";}?>>Enugu</option>
	<option value="Imo" <?php if($dat['user_state']=='Imo'){echo "selected";}?>>Imo</option>
	<option value="Oyo" <?php if($dat['user_state']=='Oyo'){echo "selected";}?>>Oyo</option>
	<option value="Kaduna" <?php if($dat['user_state']=='Kaduna'){echo "selected";}?>>Kaduna</option>
	<option value="Rivers" <?php if($dat['user_state']=='Rivers'){echo "selected";}?>>Rivers</option>
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
<input type="radio" name="gender"   class = 'gend' value ="F" <?php if($dat['user_gender']=='F'){echo "checked";}?> id ='fmale'>Female

</div><br>

					<button type='submit' class =' btn col col-lg form-control' onclick="validate3(event)" id = 'submitverify'><span class = 'txtcol'><b>Submit</b></span></button><br><br>
				<p class ='col-lg text-success' id ='welcome2'></p>	
			</form>
		</div>
</div>
</div>


<?php
require_once('payfamfooter.php');

?>

<!-- <script src ='js/jquery-3.5.1.min.js'></script>
	<script src ='js/popper.min.js'></script>
	<script src ='js/bootstrap.js'></script> -->

<script>
$(document).ready(function(){

$('#accountverification').click(function(){
	
 var fname = $('#fname2').val()
 var lname = $('#lname2').val()
 var add1 = $('#add1').val()
 var gend = $('.gend').val()

if(fname !='' && lname !='' && add1 !='' 
	&& gend !=''){
	$('#confirmverification').html('Account already Verified!')
$('#confirmverification').addClass('alert alert-success')
 }


})


})

</script>