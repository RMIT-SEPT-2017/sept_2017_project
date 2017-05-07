

		<div class="header">
			<img src="img/logo.png" alt="Logo" class="logo-img" height="80" width="176">
            </a>
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
			  <div class="overlay-content">
<!--				<a href="<?php echo url('/home');; ?>">Home</a>-->
				<a href="<?php echo url('/booking');; ?>">Make Booking</a>
<!--				<a href="#">View Bookings</a>-->
				<a href="<?php echo url('/logout');; ?>">Log out</a>

<!--Future reference
<a href="<?php echo e(url('/logout')); ?>"
onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
Logout
</a>

<form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
<?php echo e(csrf_field()); ?>

</form>-->

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
