
<?php

session_start();
require_once('payfamheader.php');


?>



<?php
//session_start();
require('User.php');
$obj = new User ;

if(!isset($_SESSION['userid'])){
  header('location:mypayfamreg.php');
}
$dat = $obj->get_details($_SESSION['userid']);
$message =''; 


if($_POST || $_FILES){ //if($_FILES)

$message = $obj->upload($_FILES, $_SESSION['userid']);

// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";
}

?>





<div class="container-fluid">
        <h1 class="mt-4">Upload Picture</h1>
       <?php echo  '<div class="alert alert-info">'.$message.'</div>';?>
<form method="post" action="upload_submit.php" enctype="multipart/form-data"> 
  <input type='file' name="profilepic">
  <button class="btn btn-warning" name="btn">Upload</button>
</form>

      </div>


      <?php
require_once('payfamfooter.php');
?>