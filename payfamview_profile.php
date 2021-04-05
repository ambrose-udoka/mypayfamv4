

<link type = 'text/css' href = 'bootstrap.css' rel ='stylesheet'>
<?php
session_start();
if(!$_POST){
require_once('User.php');
$obj = new User();
	if(!isset($_SESSION['userid'])){
  header('location:mypayfamlogin.php');
}
$id = $_SESSION['userid'];
$dat = $obj->get_user($_SESSION['userid']);

// die($dat);
}

include('payfamheader.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div class ='container'>
	<div class = 'row'>
		<div class ='col-lg-3'></div>
		
		<div class ='col-lg-6'>
<div class ='card-head'><h1> My Profile</h1></div>

<table class ='table table-striped table-hover'>
	<tr>
		<th>First Name</th><td><?php echo $dat['user_fname'];?></td>
	</tr>
	<tr>
		<th>Last Name</th><td><?php echo $dat['user_lname'];?></td>
	</tr>

	<tr>
		<th>Email</th><td><?php echo $dat['user_email'];?></td>
	</tr>

	<tr>
		<th>Phone</th><td><?php echo $dat['user_phone'];?></td>
	</tr>
	<tr>
		<th>Country</th><td><?php echo $dat['user_country'];?></td>
	</tr>
	<tr>
		<th>State</th><td><?php echo $dat['user_state'];?></td>
	</tr>

	<tr>
		<th>Address 1</th><td><?php echo $dat['user_addrs1'];?></td>
	</tr>

	<tr>
		<th>Address 2</th><td><?php echo $dat['user_addrs2'];?></td>
	</tr>
	<tr>
		<th>Birthyday</th><td><?php echo $dat['user_dob'];?></td>
	</tr>

	<tr>
		<th>Gender</th><td><?php echo $dat['user_gender'];?></td>
	</tr>
</table>
<br>
<a class = 'btn col-3 col' href = 'mypayfamtrans.php'> <span class ='txtcol'>Dashboard</span></a> <a class = 'btn col-3 col' href = 'payfamedit_profile.php'> <span class ='txtcol'>Edit profile</span></a> <br><br>
</div>
<div class ='col-lg-3'></div>
</div>
</div>

<?php
include('payfamfooter.php');
?>