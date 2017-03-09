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
					

			<div class="logo">
			<a href="index.php">
			<img src="img/logo.png" alt="Logo" class="logo-img" style="width: 25%; height: 25%">
            </a>
			</div>
			<ul class="nav">
				<li class="nav-link">
					<a href="javascript:;" class="linkmenu">
                    <img border="0" alt="Menu" src="img/menu.png" width="40" height="40">
                    </a>
				</li>
			</ul>
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