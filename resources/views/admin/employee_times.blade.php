<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> <!-- load jquery via CDN -->
<script type="text/javascript">

	var d = new Date();
	d.setDate(d.getDate() + (1 + 7 - d.getDay()) % 7);
	var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
	var daysLabel = ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'];
	var daysForm = ['sun', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat'];
function setDateFormat(){
	
	var d2 = d;
	d2.setDate(d2.getDate() - 1);
	for(var i=0;i<5;i++){
		d2.setDate(d2.getDate() + 1);
		var dd = d2.getDate();
		var mm = d2.getMonth()+1; //January is 0!
		var yyyy = d2.getFullYear();

		if(dd<10) {
		    dd='0'+dd
		} 

		if(mm<10) {
		    mm='0'+mm
		} 

		var date = dd+'/'+mm+'/'+yyyy;
		var phpDate = yyyy+'-'+mm+'-'+dd;
		document.getElementById(daysLabel[d2.getDay()]).innerHTML = days[d2.getDay()] + ' '+(date);
		document.getElementById(daysForm[d2.getDay()]).value = phpDate;
	}
}

function nextWeek(){
	d.setDate(d.getDate() + 7);
	d.setDate(d.getDate() + (1 - d.getDay()) % 7);
	setDateFormat();
}
function prevWeek(){
	d.setDate(d.getDate() - 7);
	d.setDate(d.getDate() + (1 - d.getDay()) % 7);
	setDateFormat();
}




window.onload = setDateFormat;

</script>


<div id="date"></div>
<div id="phpDate"></div>
<button onclick="prevWeek()">Previous Week</button>
<button onclick="nextWeek()">Next Week</button>
<br><br>
<form id="day_form" name="day_form" action="{{ action('AdminController@updateEmployeeTimes') }}" method="POST" class="ajax">
<label id="monday"></label><br>

	<input type="hidden" id="mon" name="date1" value="" />
	<input type="time" name="start1" />
	<input type="time" name="end1" />
	<br>
<label id="tuesday"></label><br>

	<input type="hidden" id="tue" name="date2" value="" />
	<input type="time" name="start2" />
	<input type="time" name="end2" />
	<br>
<label id="wednesday"></label><br>

	<input type="hidden" id="wed" name="date3" value="" />
	<input type="time" name="start3" />
	<input type="time" name="end3" />
	<br>
<label id="thursday"></label><br>

	<input type="hidden" id="thu" name="date4" value="" />
	<input type="time" name="start4" />
	<input type="time" name="end4" />
	<br>
<label id="friday"></label><br>

	<input type="hidden" id="fri" name="date5" value="" />
	<input type="time" name="start5" />
	<input type="time" name="end5" />

	<br>
	<input type="text" name="id">
	<button type="submit">Add days</button>
</form><br>

<script type="text/javascript">

$('form.ajax').on('submit',function(){

	var postData = $(this).serializeArray();
    var formURL = $(this).attr("action");
    $.ajax(
    {
        url : formURL,
        type: "POST",
        data : postData,
        success:function(response) 
        {
            console.log(response);
        },
        error: function(response) 
        {
            console.log(response);
        }
    });



	return false;
});

</script>