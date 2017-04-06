<!doctype html>
<html>
<head>
@include('layouts.head')

</head>
<body>
@include('layouts.navAdmin')

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

<div class="form-content">
    <div class="sub-form">
        <div class="sub-1">
        <a>Welcome</a>
        <h2>Add new avalibility</h2>
        </div>



            <form id="day_form" name="day_form" action="{{ action('AdminController@updateEmployeeTimes') }}" method="POST" class="ajax">

            <label id="monday"></label>
                <input type="hidden" id="mon" name="date1" value="" />
                <input placeholder="Start Time" name="start1" type="time">
                <input placeholder="End Time" name="end1" type="time">

            <label id="tuesday"></label><br>
                <input type="hidden" id="tue" name="date2" value="" />
                <input placeholder="Start Time" name="start2" type="time">
                <input placeholder="End Time" name="end2" type="time">

            <label id="wednesday"></label><br>
                <input type="hidden" id="wed" name="date3" value="" />
                <input placeholder="Start Time" name="start3" type="time">
                <input placeholder="End Time" name="end3" type="time">

            <label id="thursday"></label><br>
                <input type="hidden" id="thu" name="date4" value="" />
                <input placeholder="Start Time" name="start4" type="time">
                <input placeholder="End Time" name="end4" type="time">

            <label id="friday"></label><br>
                <input type="hidden" id="fri" name="date5" value="" />
                <input placeholder="Start Time" name="start5" type="time">
                <input placeholder="End Time" name="end5" type="time"><br>

<a><input type="change1" onclick="prevWeek()" value="Previous Week">
<input type="change1" onclick="nextWeek()" value="Next Week"></a>
                    <div class="sub">
                        <input placeholder="I DONT KNOW WHAT THIS INPUT FIELD IS HERE FOR" name="id" type="text">
                        <input type="submit" value="Submit"></a>
                    </div>
            </form>
        </div>
    </div>

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

@include('layouts.foot')
