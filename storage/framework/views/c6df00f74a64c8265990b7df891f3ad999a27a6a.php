

		<div class="header">
			<a href="index.php">
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
			  <<div class="overlay-content">
				<a href="<?php echo url('/admin');; ?>">Home</a>
				<a href="">View Bookings</a>
                <a href="<?php echo url('/create_employee');; ?>">Add Employee</a>
                <a href="<?php echo url('/add_employee_times');; ?>">Add availability</a>
				<a href="<?php echo url('/logout');; ?>">Log out</a>
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