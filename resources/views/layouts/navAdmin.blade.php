

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
				<a href="{!! url('/booking'); !!}">View Bookings</a>
				<a href="{!! url('/create_service'); !!}">Add Service</a>
				<a href="{!! url('/create_employee'); !!}">Add Employee</a>
				<a href="{!! url('/view_employees'); !!}">View Availability</a>
				</br>
				<a href="{!! url('/create_business'); !!}">Update Business Details</a>
				<a href="{!! url('/create_business_times'); !!}">Change Business Times</a>
				</br>
				<a href="{!! url('/logout'); !!}">Log out</a>
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
