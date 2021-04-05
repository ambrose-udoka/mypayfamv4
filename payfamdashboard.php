
<?php

// session_start();
// require('User.php');
$obj = new User ;
require_once('payfamheader.php');
// require('Products.php');
$prod = new Products;
include('Payments.php');
$amt = new Payments;
?>



<?php
//session_start();


if(!isset($_SESSION['userid'])){
  header('location:mypayfamreg.php');
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

$count = $prod->openorder_count($transid);
$counts = $prod->pendorder_count($transid);
// if($_POST || $_FILES){ //if($_FILES)

// $message = $obj->upload($_FILES, $_SESSION['userid']);
// }



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
  <img id = 'profilepix'class="ml-2 mt-1" src= "<?php 
        if($dat['user_pic']!=''){
          echo "image/".$dat['user_pic'];
        }else{ 
          echo "image/man.png";
        } ?>">
</div><br>

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
        <button class="btn btn-link btn-block text-center"><b class = 'txtcol' id = 'userid'><?php echo $dat['user_id'];?></b></button>
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
        <button class="btn btn-link btn-block text-center"><b class = 'txtcol'>Account Verified</b></button>
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
        <button class="btn btn-link btn-block text-center"><span class = 'txtcol'><b>Initiate a Transaction</b></span></button>
      </div>
    </div>
    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body hub">
           <a href = 'open_ordersubmit.php'><button class="btn btn-link btn-block text-center"><b class = 'txtcol'>Open Transactions</b><span class = 'text-light badge badge-info badge-pill'>&nbsp<?php 

            foreach($count as $key){
                    echo $key;
                  }

            ;?></span></button></a>
      </div>
    </div>
    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body hub">
        <a href = 'pending_ordersubmit.php'><button class="btn btn-link btn-block text-center"><span class = 'txtcol'><b class = 'txtcol'>Pending Transactions</b><span class = 'text-light badge badge-warning badge-pill'>&nbsp<?php 

            foreach($counts as $key){
                    echo $key;
                  }

            ;?></span></button></a>
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
        <a href ='payfamlogout.php'><button class="btn btn-link btn-block text-center"><b class = 'txtcol'>Logout</b></button></a>
      </div>
    </div>
  </div>
</div>

</div>