<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">

<meta name ='viewport' content = 'width = device-width, initial-scale =1, shrink-to-fit =no'>
	<title>MY PAY FAM PROJECT</title>
	
	
	<link type = 'text/css' href = 'bootstrap.css' rel ='stylesheet'>


	<style type ='text/css'>



			#transactionbgimg{
background-image: url('image/firmc.png');
background-attachment: fixed;
background-repeat: none;
max-width :100%;
 height:auto;
}



			

			.small{
				color: red !important
			}
			.hub{
background-color:#08192B;
position:relative; 
bottom: 0px;
			}
			#nav2{
				position: sticky;
				top:0px;
				z-index: 1
			}

.col{
	background-color: #0033A1
}

.txtcol{
	color:#F5EF28;
}

.log{
				position: sticky;
				top:105px;
				z-index: 1
			}



#footer{
		display:flex;
		background-color:rgb(29,13,68);
		color:white;
		box-sizing:border-box;
		text-align:center;
		flex-direction:row;
		}
		
		
								#footer h3{
								position:relative; 
								top:50px; 
								font-size:26px;
											}
		
								#footer p{
								line-height: 30px;
								color:rgba(255,255,255,0.5);
								font-size:18px;
										}
		
								.footer1{
								width:32%;
								box-sizing:border-box;
										}
		
								.footer1 button{
								position:relative; 
								top:50px; 
								background-color:rgb(97,77,217);
								padding:5px;
								border:0px;
												}
		
								.footer1 span{
								position:relative; 
								top:50px; 
								font-size:36px;
											}
		
								.footer2{
								width:17%;
										}
		
								.footer3{
								width:25.3%;
										}
		
								.footer4{
								width:25.3%;
										}
		
		.footnote{
		min-height:80px; 
		text-align:center; 
		background-color:rgb(29,13,68);
		color:rgba(255,255,255,0.5); 
		border-top: 1px solid rgba(255,255,255,0.1); 
		box-sizing:border-box;
		}
								
								.footnote p{
								padding:5px;
							}



		@media all and (min-width:320px) and (max-width:780px){
		#footer{
		flex-direction:column;
		}
		
		}
		
					@media all and (min-width:320px) and (max-width:780px){
					.footer1, .footer2, .footer3, .footer4{
					flex-direction:column;
					box-sizing:border-box;
					width:100%;
							}
		
							}
		



		@media all and (max-width: 320px){

			.fonth1{
				font-size: 18px;
			}
		}




		</style>
	</head>	
<body class= 'bg-light'>		
	<nav aria-label="Page navigation example" class = "hub">
  <ul class="pagination justify-content-end">
    <li class="page-item"><a class="page-link text-dark" href="#"><img src ='image/home.png' style="width: 13px;"></a></li>
    <li class="page-item"><a class="page-link " href="#"><img src ='image/user_5.png' style="width: 13px"></a></li>
    <li class="page-item"><a class="page-link" href="#"><img src ='image/facebook.png' style="width: 13px"></a></li>
    <li class="page-item"><a class="page-link" href="#"><img src ='image/whatsapp.png' style="width: 13px"></a></li>
    <li class="page-item"><a class="page-link" href="#"><img src ='image/twitter.png' style="width: 13px"></a></li>
    <li class="page-item"><a class="page-link" href="#"><img src ='image/instagram.png' style="width: 13px"></a></li>
    <li class="page-item"><a class="page-link" href="#"><img src ='image/add-user.png' style="width: 13px"></a></li>
    <li class="page-item"><a class="page-link" href="#"><img src ='image/bell.png' style="width: 15px"></a></li>
  </ul>
	</nav>
		


	<nav class="navbar navbar-expand-lg navbar-light col" id ='nav2'>
  <a class="navbar-brand" href="#"><img src ='image/fam3.jpg' width='60px'></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end  text-white" id="navbarNavDropdown" >
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link " href="mypayfamhome.html"><b>Home</b> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><b>About Us</b></a>
      </li>
      
      <li class="nav-item" >
        <a class="nav-link" href="mypayfamoverview.html"><b>Overview</b></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="mypayfamtrans.html"><b>Transactions</b></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#"><b>My payfam</b></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#"><b>Contact Us</b></a>
      </li>

    </ul>

    <form class="d-flex">
        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline txtcol" type="submit">Search</button>
      </form>
  </div>
</nav>
<br><br>

<button class ='btn btn-block col txtcol'><strong>My Payfam!</strong> Securely Connecting Families and Firms in all legit Business Transactions.</button><br><br>



<div class ='container-fluid'>
	
<div class ='row'>
	<div class='col-lg-3'>

<div>
<div class ='ml-2 mt-1 mb-1' style='border-radius: 50%; height: 280px; width: 250px'><img src ='image/man.png' width='225px' height="270px" class="ml-2 mt-1" id = 'profilepic'></div>

<button class ='btn col btn-block' data-toggle="modal" data-target = '#verify'> <span class = 'txtcol'><b>Verify your Account</b></span></button>	
<button class ='btn col btn-block'> <span class = 'txtcol'><b>User ID</b></span></button><br>

<button class ='btn col btn-block'> <span class = 'txtcol'><b>Transactions</b></span></button>
<button class ='btn col btn-block'> <span class = 'txtcol'><b>Initiate a Transaction</b></span></button>
<button class ='btn col btn-block'> <span class = 'txtcol'><b>Open Transactions</b></span></button>
<button class ='btn col btn-block'> <span class = 'txtcol'><b>Pending Transactions</b></span></button>
<button class ='btn col btn-block'> <span class = 'txtcol'><b>Cancelled Transactions</b></span></button>
<button class ='btn col btn-block'> <span class = 'txtcol'><b>Complete Transactions</b></span></button>
</div>


</div>

	<div class='col-lg-9' id = 'transactionbgimg'><br><br><br><br><br><br>

<div class ='col-lg'>
<p id ='ptxt'>My Pay Fam is poised to connecting families and firms together to actaulize a safe, easy, fast and secure transactions.</p>
<p id ='ptxt'>A walk with us is a definition of your online business transaction security.</p>
<p id ='ptxt'>Are you a buyer? Be assured of safe and secure delivery of your orders through us without compromise from any of your vendors.</p>
<p id ='ptxt'>Are you a seller? Be assurred of due payment from your buyers as soon as their orders are confirmed.</p>
<p id ='ptxt'>Your Online business transaction security and freedom from fraud and scammers is our priority, make the reight choice today.</p>
	</div>

	</div>		
</div>


<div class = 'row' id="footer">
	<div class = 'col-lg footer1'>

				<button> My Pay</button> <span> Fam</span><br><br><br><br><br>
				<p>It is the leading escrow platform<br> establishment providing high-<br>quality online transaction <br>security. Our success is<br> attributed to our loyal <br>customers. We provide <br>reliable & ssecure services for you.</p>	

	</div>
	<div class = 'col-lg footer2'>
		 
				<h3>Quick Links</h3><br><br>
				<p>About Us<br> Blog Posts<br>Pricing Plans<br> Services<br>Contact Us</p>	
	</div>
	<div class = 'col-lg footer3 '>
		
				<h3>Head Office</h3><br><br>
				<p>Bank Card, 343 banking<br> lane, #2214 cravel street,<br> NY.<br>+1(21) 234 4567<br> info@gmail.com<br>info@support.com</p>
	</div>
	<div class = 'col-lg footer4'>
		
				<h3>Latest posts</h3><br><br>
				<p>Easy sale, safe buy <br>That Can save both partners<br> Money <br>January 28,2021 <br>Stocks Could Surge<br> 10% between Now And <br>2021<br> September 28,2021</p>
	</div>
</div>

<div class = 'row'>
	<div class = 'col footnote'>
		
		<p> &#169; 2021 My Pay Fam. All rights reserved. Designed by Engr. Ambrose Eze</p>
	</div>
</div>


</div>




<!-- Verification Modal div Container start -->



<div class ='container-fluid'>
	
<div class ='row'>
<div class='col-lg-3'>


</div>

	<div class='col-lg-6'>

<!-- Modal -->


<div class="modal fade" id="verify" tabindex="-1" role="dialog" aria-labelledby="verification" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mt-2 col txtcol" style = 'text-align:center'  id="verification">Account Verification</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
<!-- Modal -->

		
<form action="submittrans.php" method = 'GET'>
				<div class = 'col-lg'>
					<p>You are almost there! Complete the form below to verify your account and proceed.</p>		
						<p class ='col-lg text-danger' id ='alltext'></p>
						<label for = 'fname2'>First Name <span class = 'text-danger'>*</span></label>
					<div class="input-group">
  				<p class="input-group-prepend"><span class="input-group-text col"><img src ='image/user_1.png' width='25px'></span></p>
  			<input type='text' name='firstname2' id='fname2' class ='form-control' placeholder=' Enter your First Name' aria-label="image">
		</div>
	<p class ='col-lg small' id ='firsttext2'></p>
</div>


<div class = 'col-lg'>		
						<p class ='col-lg text-danger' id ='alltext'></p>
						<label for = 'lname2'>Last Name <span class = 'text-danger'>*</span></label>
					<div class="input-group">
  				<p class="input-group-prepend"><span class="input-group-text col"><img src ='image/user_1.png' width='25px'></span></p>
  			<input type='text' name='lastname2' id='lname2' class ='form-control' placeholder=' Enter your Last Name' aria-label="image">
		</div>
	<p class ='col-lg small' id ='lasttext2'></p>
</div>

<div class = 'col-lg'>
						<label for = 'phone2'>Phone <span class = 'text-danger'>*</span></label>
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
	<label for = 'add1'>Address line1 <span class = 'text-danger'>*</span></label>
		<div class="input-group">
 			<p class="input-group-prepend">
    			<span class="input-group-text col"><img src ='image/placeholder1.png'></span></p>
  					<input type='text' id='add1' class ='form-control' placeholder ='Enter your Primary Address' aria-label="image" maxlength="60">
		</div>
	<p class ='col-lg small' id ='add1text2'></p>		
</div>


<div class = 'col-lg'>
	<label for = 'add2'>Address line2 <span class = 'text-danger'>*</span></label>
		<div class="input-group">
 			<p class="input-group-prepend">
    			<span class="input-group-text col"><img src ='image/placeholder1.png'></span></p>
  					<input type='text' id='add2' class ='form-control' placeholder ='Enter your Secodary Address if different from above' aria-label="image" maxlength="60">
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
	<option value="Nigeria" selected>Nigeria</option>
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
	<option value="Enugu" selected>Enugu</option>
	<option value="Imo">Imo</option>
	<option value="Oyo">Oyo</option>
	<option value="Kaduna">Kaduna</option>
	<option value="Rivers">Rivers</option>
</select>
</div>
</div>

<div class ='col-lg'>
	<label for = 'day'>Date of Birth<span class = 'text-danger'>*</span></label><br>

<select name="day" id ='day'>
	<option value="">...Day...</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="26">26</option>
	<option value="28">28</option>
</select>

<select name="month" id ='month' >
	<option value="">...Month...</option>
	<option value="Jan">Jan</option>
	<option value="March">March</option>
	<option value="April">April</option>
	<option value="Sept">Sept</option>
	<option value="Nov">Nov</option>
	<option value="Dec">Dec</option>
</select>

<select name="year" id ='year' >
	<option value="">...Year...</option>
	<option value="1990">1990</option>
	<option value="1994">1994</option>
	<option value="1985">1985</option>
	<option value="1996">1996</option>
	<option value="1978">1978</option>
	<option value="2000">2000</option>
</select>

</div><br>

<div class ='col-lg'>
	<label for = 'rad'>Gender<span class = 'text-danger'>*</span></label><br>
	
<input type="radio" name="reg" id ='male'>Male<br>
<input type="radio" name="reg" id ='fmale'>Female

</div><br>

<div class = 'col-lg'>
	<label for = 'pic'>Profile Picture <span class = 'text-danger'>*</span></label>
		<div class="input-group">
 			 <p class="input-group-prepend">
    			<span class="input-group-text col"><img src ='image/user_2.png' width='25px'></span></p>
  					<input type='file' name ='profilepic' id='pic' class ='form-control' placeholder ='Upload Your Picture' aria-label="images" data-target ='#profilepic'>
								</div>	
							<p class ='col-lg small' id ='pictext'></p>	
						</div><br>
					<button type='submit' class =' btn col col-lg form-control' onclick="validate3(event)"><span class = 'txtcol'><b>Submit</b></span></button><br><br>
				<p class ='col-lg small' id ='welcome2'></p>	
			</form>


<!-- Modal -->
 </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->


	</div>
	

<!-- end of verify div -->

	<div class='col-lg-3'></div>		

</div>



<!-- Verification maodal div end -->


<script src ='js/jquery-3.5.1.min.js'></script>
	<script src ='js/popper.min.js'></script>
	<script src ='js/bootstrap.js'></script>


	<script src ='project4validation.js'></script>

</body>




</html>	