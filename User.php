<?php

class User{

public $conn;


public function __construct(){
$this->conn = new Mysqli('localhost', 'mypaohvn_mypayfam', 'eze40755', 'mypaohvn_mypayfam');
// session_start();
if($this->conn->connect_error){
	die("Kindly contact web admin");
}

}

public function register($pass, $email, $phone){
	$encrypt = md5($pass);
$q = "INSERT INTO user SET user_pass = '$encrypt', user_email ='$email', user_phone ='$phone'";
$this->conn->query($q);
$id = $this->conn->insert_id;

return $id;

}


public function login($pass, $email){

$encrypt = md5($pass);
$qq = "SELECT * FROM user WHERE user_pass = '$encrypt' AND user_email = '$email'";
// die($qq);
	$res = $this->conn->query($qq);

	$data = $res->fetch_assoc();
	$id =0;
	if(!empty($data)){
		$id = $data['user_id'];
	}

// 	echo '<pre>';
// print_r($data);
// echo '</pre>';

	return $id;
}


public function verify_account($fname, $lname, $phone, $add1, $add2, $country, $state, $gender, $dob, $id){


$q = "UPDATE user SET user_fname ='$fname', user_lname ='$lname', user_phone ='$phone', user_state ='$state', user_country ='$country', user_gender ='$gender', user_dob ='$dob', user_addrs1 ='$add1', user_addrs2 ='$add2' WHERE user_id = '$id'";

// die($q);
$res = $this->conn->query($q);
// if($this->conn->error){
// die($this->conn->error);
$id = $this->conn->insert_id;

return $res;
// }
// if($res){

// 	header('location:mypayfamtrans.php');
// }else{
// 	header('location:mypayfamhome.php');
// }

}


public function update_account($verify,$id){

	$fname = strip_tags(trim($verify['firstname']));
$lname = strip_tags(trim($verify['lastname']));
$phone = strip_tags(trim($verify['phone']));
$add1 = strip_tags(trim($verify['address1']));
$add2 = strip_tags(trim($verify['address2']));
$country = strip_tags(trim($verify['country']));
$state = strip_tags(trim($verify['state']));
$gender = strip_tags(trim($verify['gender']));
$dob = strip_tags(trim($verify['dob']));



$q = "UPDATE user SET user_fname ='$fname', user_lname ='$lname', user_phone ='$phone', user_state ='$state', user_country ='$country', user_gender ='$gender', user_dob ='$dob', user_addrs1 ='$add1', user_addrs2 ='$add2' WHERE user_id = '$id'";

// die($q);
$res = $this->conn->query($q);
// if($this->conn->error){
// die($this->conn->error);
$id = $this->conn->insert_id;

return $id;
// }
if($res){

	header('location:mypayfamtrans.php');
}else{
	header('location:mypayfamhome.php');
}

}



public function get_details($id){
	$q = "SELECT * FROM user WHERE user_id = '$id'";
	 // die($q);
	$result = $this->conn->query($q);
	$data = $result->fetch_assoc();

		return $data ;
	
}


public function upload($profile,$id){

$filename = $profile['profilepic']['name'];
$type =$profile['profilepic']['type'];
$tmp =$profile['profilepic']['tmp_name'];
$size =$profile['profilepic']['size'];
$feedback ='';

$ext = pathinfo($filename, PATHINFO_EXTENSION);

$newfilename = time().rand().".$ext";

$destination = "image/$newfilename";

//if you don't want to use the comparison 'or' operator, you can use:
//$allowed = array('jpg', 'jpeg', 'png', 'gif');
//if(in_array($ext, $allowed)){}...

if(strtolower($ext) =='jpeg' || strtolower($ext) =='png' || strtolower($ext) =='jpg'){

  if($size<=20000000){

move_uploaded_file($tmp, $destination);

$q = "UPDATE user SET user_pic ='$newfilename' WHERE user_id='$id'";
	            $this->conn->query($q);

$feedback = 'Successfully uploaded';
}else{ 
	$feedback = "file too large";
}
}else{
  $feedback = 'Kindly choose the recommended file type';
}
return $feedback;
}



public function get_user($id){
	$q = "SELECT * FROM user WHERE user_id = '$id'";
	 // die($q);
	$result = $this->conn->query($q);
	$data = $result->fetch_assoc();

		return $data ;
	
}


public function delete_user($userid){
	$q = "DELETE FROM user WHERE user_id = '$userid'";
	 // die($q);
	$result = $this->conn->query($q);
	// $data = $result->fetch_assoc();
// die($result);
		return $result;
	
}


function logout(){
session_destroy();
header('location:mypayfamlogin.php');
}

}


?>