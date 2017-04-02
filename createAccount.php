<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Booking System</title>
		<link href="css/main.css" rel="stylesheet">
		<link href="css/overlay.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	</head>
	<body>
		<div class="header">
			<a href="index.php">
			<img src="img/logo.png" alt="Logo" class="logo-img" height="80" width="176">
			</a>
		</div>
        
        <!-- The overlay -->
        <div id="myNav" class="overlay">
			
			  <!-- Button to close the overlay navigation -->
			  <a href="javascript:void(0)" class="closebtn">&times;</a>
			
			  <!-- Overlay content -->
			  <<div class="overlay-content">
				<a href="#">Home</a>
				<a href="#">Make Booking</a>
				<a href="#">View Bookings</a>
				<a href="#">Log in/out</a>
			  </div>

			</div>

			
			</div>
        <script>
    	$(function(){
    		$(".closebtn").on("click",function(e){
    			$("#myNav").css({
	    			"height":"0%"
    			})
    		})
    		
    		$(".linkmenu").on("click",function(e){
    			$("#myNav").css({
	    			"height":"100%"
    			})
    		})
    	})
	function validation(){
		var validatePass = document.forms["formInput"]["Password"].value;
		var validateCPass = document.forms["formInput"]["CPassword"].value;
		var validateEmail = document.forms["formInput"]["UName"].value;
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var bolPass = false;
		var bolEmail =  false;
		if (validatePass != validateCPass){
			bolPass = true
			alert("Passwords do not match.");
			return false;
		}
		if (!filter.test(validateEmail)){
			alert("Email is invalid.");
			return false;
		}
	}
        </script>

<!--Log in form-->
<div class="form-content">
	<div class="sub-form">	
	<div class="sub-1">
			<a>Welcome to Booking</a>
			<h2>Create an account</h2>
		</div>
		<form name="formInput" method="post" action="process_register.php" onsubmit="return validation()">
			<input placeholder="First Name" name="FName" class="user" type="text" required="">
			<input placeholder="Last Name" name="LName" class="user" type="text" required="">
			<input placeholder="Email" name="UName" class="user" type="text" required="">
			<input placeholder="Password" name="Password" class="pass" type="password" required="">
			<input placeholder="Confirm Password" name="CPassword" class="pass" type="password" required="">
		<div class="sub">
			<input type="submit" value="Create Account">
			<a href="index.php"><input type="change" value="Already Have an Account?"></a>
		</div>
		</form>
	</div>
</div>
<!--//form-->



<?php include 'footer.php'; ?>

