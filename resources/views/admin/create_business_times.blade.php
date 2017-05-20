<!doctype html>
<html>
<head>
@include('layouts.head')

</head>
<body>
@include('layouts.navAdmin')

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> <!-- load jquery via CDN -->
<script type="text/javascript">

	var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
	var daysLabel = ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'];
	var daysForm = ['sun', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat'];

</script>

<div class="form-content">
    <div class="sub-form">
        <div class="sub-1">
        <a>Welcome</a>
        <h2>Set business times</h2>
        </div>



            <form id="day_form" name="day_form" action="{{ action('EmployeeTimesController@updateEmployeeTimes') }}" method="POST" class="addEmployeeTimes">


            <label id="monday">Monday</label>
                <input type="hidden" id="mon" name="day1" value="1" />
                <input placeholder="Start Time" name="start1" type="time" value="09:00">
                <input placeholder="End Time" name="end1" type="time" value="17:00">

            <label id="tuesday">Tuesday</label><br>
                <input type="hidden" id="tue" name="day2" value="2" />
                <input placeholder="Start Time" name="start2" type="time" value="09:00">
                <input placeholder="End Time" name="end2" type="time" value="17:00">

            <label id="wednesday">Wednesday</label><br>
                <input type="hidden" id="wed" name="day3" value="3" />
                <input placeholder="Start Time" name="start3" type="time" value="09:00">
                <input placeholder="End Time" name="end3" type="time" value="17:00">

            <label id="thursday">Thursday</label><br>
                <input type="hidden" id="thu" name="day4" value="4" />
                <input placeholder="Start Time" name="start4" type="time" value="09:00">
                <input placeholder="End Time" name="end4" type="time" value="17:00">

            <label id="friday">Friday</label><br>
                <input type="hidden" id="fri" name="day5" value="5" />
                <input placeholder="Start Time" name="start5" type="time" value="09:00">
                <input placeholder="End Time" name="end5" type="time" value="17:00"><br>

						<label id="saturday">Saturday</label><br>
								<input type="hidden" id="sat" name="day6" value="6" />
								<input placeholder="Start Time" name="start6" type="time" value="09:00">
								<input placeholder="End Time" name="end6" type="time" value="17:00"><br>

						<label id="sunday">Sunday</label><br>
								<input type="hidden" id="sun" name="day7" value="7" />
								<input placeholder="Start Time" name="start7" type="time" value="09:00">
								<input placeholder="End Time" name="end7" type="time" value="17:00"><br>

<!--
            <a><input type="change1" onclick="prevWeek()" value="Previous Week">
                <input type="change1" onclick="nextWeek()" value="Next Week"></a>
-->

                <div class="sub">
                        <input type="submit" value="Submit"></a>
                        <a href="{{ url('/view_employees') }}"><input type="change" value="View all employees">
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
	    $sql_delete = "DELETE FROM employeetimes WHERE empid = ".$_POST['id'];
            query($sql_delete)
            console.log(response);
	    window.location.href = "/confirm_employee_times";
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
