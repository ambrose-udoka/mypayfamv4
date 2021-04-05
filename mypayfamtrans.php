<?php
session_start();
require('User.php');
require('Products.php');
require('Payments.php');
$prod = new Products;
$obj = new User ;
$amt = new Payments;

if(!isset($_SESSION['userid'])){
  header('mypayfamlogin.php');
}

$dat = $obj->get_details($_SESSION['userid']);

$message =''; 

$id = $_SESSION['userid'];

$transid = $_SESSION['transid'];
$amount = $amt->get_payamount($id, $transid);

// $partid = $_SESSION['userid'];

$res = $prod->sendorder_topartnerid($id);
$ref = $res['trans_reference'];
// $ref = $amount['trans_ref'];
// echo $ref;
// echo "<pre>";
// print_r($amount);
// echo "</pre>";
$pend_amt = $amt->getpartner_pendamount($id, $ref);


$transid = $_SESSION['transid'];
$count = $prod->openorder_count($transid);
$counts = $prod->pendorder_count($transid);

// if($_POST || $_FILES){ //if($_FILES)

// $message = $obj->upload($_FILES, $_SESSION['userid']);
// }
// echo '<pre>';
// print_r($dat);
// echo '</pre>';

?>

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

<br><br><br>



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
        <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" id = 'acctverify1'>
          <span class = 'txtcol'><b>Account Status</b></span>
        </button>
      </h2>
    </div>
    <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordionExample">
      <div class="card-body hub">
      	<a href="mypayfamverify.php" id = 'acctverifyh'>
        <button class="btn btn-link btn-block text-center" id = 'acctverify' ><b class = 'txtcol'><?php if($dat['user_state']!=''){echo "Account Verified";}else{
          echo "Verify Your Account";
        }
        ?></b></button></a>
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
        <a href ='mypayfaminitialtrans.php' id = 'initiateh'><button class="btn btn-link btn-block text-center" id = 'initiatetrans'><span class = 'txtcol'><b>Initiate a Transaction</b></span></button></a>
      </div>
    </div>
    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body hub">
        <a href = 'open_ordersubmit.php' id = 'openh'><button class="btn btn-link btn-block text-center"><b class = 'txtcol' id = 'opentrans'>Open Transactions</b><span class = 'text-light badge badge-info badge-pill'>&nbsp<?php 

            foreach($count as $key){
                    echo $key;
                  }

            ;?></span></button></a>
      </div>
    </div>
    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body hub">
            <a href = 'pending_ordersubmit.php' id = 'pendingh'><button class="btn btn-link btn-block text-center" id = 'pendingtrans'><span class = 'txtcol'><b class = 'txtcol'>Pending Transactions</b><span class = 'text-light badge badge-warning badge-pill'>&nbsp<?php 

            foreach($counts as $key){
                    echo $key;
                  }

            ;?></span></button></a>
      </div>
    </div>
    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body hub">
       <a href = 'cancelled_ordersubmit.php' id = 'cancelledh'><button class="btn btn-link btn-block text-center" id = 'cancelledtrans'> <b class = 'txtcol'>Cancelled Transactions</b><span class = 'text-light badge badge-danger badge-pill'>&nbsp0</span></button></a>
      </div>
    </div>
    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body hub">
        <a href = 'complete_ordersubmit.php' id = 'completeh'><button class="btn btn-link btn-block text-center" id = 'completetrans'><b class = 'txtcol'>Completed Transactions</b><span class = 'text-light badge badge-success badge-pill'>&nbsp0</span></button></a>
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
        <button class="btn btn-link btn-block text-center"><b class = 'txtcol'>My Wallet Amount &nbsp </b><span class = 'txtcol'><?php 
        if($amount['pay_amt']!=''){
          echo $amount['pay_amt']. "&nbsp NGN";
        }else{ 
          echo "0000";
        } ?></span></button>
      </div>
    </div>

    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body hub">
        <button class="btn btn-link btn-block text-center"><b class = 'txtcol'>My Pending Amount &nbsp </b><span class = 'txtcol'><?php 
        if($pend_amt['pay_amt']!=''){
          echo $pend_amt['pay_amt']. "&nbsp NGN";
        }else{ 
          echo "0000";
        } ?></span></button>
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
<!-- Collapse -->

<!-- </div> -->

<!-- Dashboard ends -->



<div class='col-lg-9' id = 'transactionbgimg'>
<?php
if(isset($_GET)){
  ?>
  <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
  <?php
  
if($msg = $_GET['msg']){
echo $msg;
}

  ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php
}
?>
<div class ='col-lg'>
  <div class = 'row'>
  <div class = 'col-lg-9'></div>

  <p id = 'confirmverification'></p>
  <span class = 'btn col-lg-3' style = 'background-color:#0033A1; color: #F5EF28;'><b>Welcome, <?php if($dat['user_fname']!=''){ echo $dat['user_fname']."!"  ;}?></b></span>
</div><br><br><br>
<p id ='ptxt'>My Pay Fam is poised to connecting families and firms together to actaulize a safe, easy, fast and secure transactions.</p>
<p id ='ptxt'>A walk with us is a definition of your online business transaction security.</p>
<p id ='ptxt'>Are you a buyer? Be assured of safe and secure delivery of your orders through us without compromise from any of your vendors.</p>
<p id ='ptxt'>Are you a seller? Be assurred of due payment from your buyers as soon as their orders are confirmed.</p>
<p id ='ptxt'>Your Online business transaction security and freedom from fraud and scammers is our priority, make the reight choice today.</p>
	</div>
</div>
</div>

</div>

	<!-- <div class='col-lg-6'> -->

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

		
<!-- 
<form action="mypayfamtrans.php" method = 'POST'>
				<div class = 'col-lg'>
					<p>Complete the form below to verify your account and proceed.</p>		
						<p class ='col-lg text-danger' id ='alltext'></p>
						<label for = 'fname2'>First Name <span class = 'text-danger'>*</span></label>
					<div class="input-group">
  				<p class="input-group-prepend"><span class="input-group-text col"><img src ='image/user_1.png' width='25px'></span></p>
  			<input type='text' name='firstname' id='fname2' class ='form-control' value = "<?php //echo $deets['user_fname'];?>" placeholder=' Enter your First Name' aria-label="image">
		</div>
	<p class ='col-lg small' id ='firsttext2'></p>
</div>


<div class = 'col-lg'>		
						<p class ='col-lg text-danger' id ='alltext'></p>
						<label for = 'lname2'>Last Name <span class = 'text-danger'>*</span></label>
					<div class="input-group">
  				<p class="input-group-prepend"><span class="input-group-text col"><img src ='image/user_1.png' width='25px'></span></p>
  			<input type='text' name='lastname' id='lname2' class ='form-control' value = "<?php //echo $deets['user_lname'];?>" placeholder=' Enter your Last Name' aria-label="image">
		</div>
	<p class ='col-lg small' id ='lasttext2'></p>
</div>

<div class = 'col-lg'>
						<label for = 'phone2'>Phone <span class = 'text-danger'>*</span></label>
					<div class="input-group">
  				<p class="input-group-prepend"><span class="input-group-text col"><img src ='image/phone1.png' width='25px'></span></p>
  			<input type='text' name='phone' id='phone' class ='form-control' value = "<?php //echo $deets['user_phone'];?>" placeholder=' Enter your Phone Number' aria-label="image">
		</div>
	<p class ='col-lg small' id ='phonetext2'></p>
</div>
				

<div class = 'col-lg'>
						<label for = 'email2'>Email Address <span class = 'text-danger'>*</span></label>
					<div class="input-group">
  				<p class="input-group-prepend"><span class="input-group-text col"><img src ='image/email2.png' width='25px'></span></p>
  			<input type='text' name='email' id='email2' class ='form-control' value = "<?php //echo $deets['user_email'];?>" placeholder=' Enter your Email Address' aria-label="image" required>
		</div>
	<p class ='col-lg small' id ='emailtext2'></p>
</div>


<div class = 'col-lg'>
	<label for = 'add1'>Address line1 <span class = 'text-danger'>*</span></label>
		<div class="input-group">
 			<p class="input-group-prepend">
    			<span class="input-group-text col"><img src ='image/placeholder1.png'></span></p>
  					<textarea id='add1' name ='address1' class ='form-control' placeholder ='Enter your Primary Address' aria-label="image" maxlength="100"><?php //echo $deets['user_addrs1'];?> </textarea>
		</div>
	<p class ='col-lg small' id ='add1text2'></p>		
</div>


<div class = 'col-lg'>
	<label for = 'add2'>Address line2 <span class = 'text-danger'>*</span></label>
		<div class="input-group">
 			<p class="input-group-prepend">
    			<span class="input-group-text col"><img src ='image/placeholder1.png'></span></p>
  					<textarea id='add1' name ='address2' class ='form-control' placeholder ='Enter your Primary Address' aria-label="image" maxlength="100"><?php //echo $deets['user_addrs2'];?> </textarea>
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

<input type = 'date' name ='dob' id ='birthday' class ='form-control'>

</div><br>

<div class ='col-lg'>
	<label for = 'rad'>Gender<span class = 'text-danger'>*</span></label><br>
	
<input type="radio" name="gender" value ='M' id ='male' <?php// if($deets['user_gender']=='M'){echo "checked";} ?>>Male<br>
<input type="radio" name="gender" value ='F' id ='fmale' <?php //if($deets['user_gender']=='F'){echo "checked";} ?>>Female

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
<!-- 

	</div> -->
	

<!-- end of verify div -->

	<!-- <div class='col-lg-3'></div>


	</div>		
 -->




<!-- Verification Modal div Container start -->


		


<?php require_once('payfamfooter.php');?>

<!-- Verification maodal div end -->

<script>
$(document).ready(function(){
  $('#acctverify').click(function(){
var acct = $('#acctverify').text()
if(acct == 'Account Verified'){
// $('#acctverify').attr('disabled', 'disabled')
$('#acctverifyh').removeAttr("href")
$('#confirmverification').html('Account already Verified!')
$('#confirmverification').addClass('alert alert-success')
}
})
})

$(document).ready(function(){
  $('#initiatetrans').click(function(){
var acct = $('#acctverify').text()
if(acct != 'Account Verified'){
// $('#acctverify').attr('disabled', 'disabled')
$('#initiateh').removeAttr("href")
$('#confirmverification').html('Kindly Verify your account before you proceed!')
$('#confirmverification').addClass('alert alert-success')
}
})
})


</script>
</body>
</html>
