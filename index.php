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
        </script>


<!--Log in form-->

<div class="form-content">
	<div class="sub-form">	
	<div class="sub-1">
			<a>Welcome to Booking</a>
			<h2>Login</h2>
		</div>
		<form action="#" method="post">
			<input placeholder="E-mail" name="Name" class="user" type="text" required="">
			<input  placeholder="Password" name="Password" class="pass" type="password" required="">		
		
		<div class="sub">
			<input type="submit" value="Login"></a>
			<a href="createAccount.php"><input type="change" value="Don't have an account?"></a>
			<a href="makeBooking.php"><input type="change" value="<skip this step>"></a>
		</div>
		
		
		
		</form>
	</div>
</div>
<!--//form-->



<?php include 'footer.php'; ?>

