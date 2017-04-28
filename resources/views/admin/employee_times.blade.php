<!doctype html>
<html>
<head>
@include('layouts.head')

</head>
<body>
@include('layouts.navAdmin')

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> <!-- load jquery via CDN -->
<script type="text/javascript">

//	var d = new Date();
//	d.setDate(d.getDate() + (1 + 7 - d.getDay()) % 7);
	var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
	var daysLabel = ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'];
	var daysForm = ['sun', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat'];
//function setDateFormat(){
//	
//	var d2 = d;
//	d2.setDate(d2.getDate() - 1);
//	for(var i=0;i<5;i++){
//		d2.setDate(d2.getDate() + 1);
//		var dd = d2.getDate();
//		var mm = d2.getMonth()+1; //January is 0!
//		var yyyy = d2.getFullYear();
//
//		if(dd<10) {
//		    dd='0'+dd
//		} 
//
//		if(mm<10) {
//		    mm='0'+mm
//		} 
//
//		var date = dd+'/'+mm+'/'+yyyy;
//		var phpDate = yyyy+'-'+mm+'-'+dd;
//		document.getElementById(daysLabel[d2.getDay()]).innerHTML = days[d2.getDay()] + ' '+(date);
//		document.getElementById(daysForm[d2.getDay()]).value = phpDate;
//	}
//}
//
//function nextWeek(){
//	d.setDate(d.getDate() + 7);
//	d.setDate(d.getDate() + (1 - d.getDay()) % 7);
//	setDateFormat();
//}
//function prevWeek(){
//	d.setDate(d.getDate() - 7);
//	d.setDate(d.getDate() + (1 - d.getDay()) % 7);
//	setDateFormat();
//}




//window.onload = setDateFormat;

</script>

<div class="form-content">
    <div class="sub-form">
        <div class="sub-1">
        <a>Welcome</a>
        <h2>Add new availability</h2>
        </div>



            <form id="day_form" name="day_form" action="{{ action('EmployeeTimesController@updateEmployeeTimes') }}" method="POST" class="ajax">
                <label >Select Employee</label><br>
                        <select name="id">
                        <?php $i = 0?>
                        @foreach ($ids as $id)
                                  <option value="{{$id}}">{{$names[$i++]}}</option>                  
                        @endforeach
                        </select><br><br>

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
