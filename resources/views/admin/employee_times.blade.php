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
	// var days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
	// var daysLabel = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];
	// var daysForm = ['mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun'];
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

            <form id="day_form" name="day_form" action="{{ action('EmployeeTimesController@updateEmployeeTimes') }}" method="POST" class="addEmployeeTimes">
								<h3 align="center" style="color:{{ Session::get('confirmationColor') }};">{{ Session::get('confirmation') }}</h3>
								<h3 align="center" style="color:{{ Session::get('errorTimeColor') }};">{{ Session::get('errorTime') }}</h3>
                <label>Select Employee</label><br>
                        <select name="id">
                        <?php $i = 0?>
                        @foreach ($ids as $id)
                                  <option value="{{$id}}">{{$names[$i++]}}</option>
                        @endforeach
                        </select><br><br>

						<label id="sunday">Sunday</label>
		            <input type="hidden" id="sun" name="day0" value="0" />
								<select name="start0" type="text" id="duration" style="width: 30%">
									<option value="--:--">--:--</option>
									<option value="09:00">09:00</option>
									<option value="09:30">09:30</option>
									<option value="10:00">10:00</option>
									<option value="10:30">10:30</option>
									<option value="11:00">11:00</option>
									<option value="11:30">11:30</option>
									<option value="12:00">12:00</option>
									<option value="12:30">12:30</option>
									<option value="13:00">13:00</option>
									<option value="13:30">13:30</option>
									<option value="14:00">14:00</option>
									<option value="14:30">14:30</option>
									<option value="15:00">15:00</option>
									<option value="15:30">15:30</option>
									<option value="16:00">16:00</option>
									<option value="16:30">16:30</option>
									<option value="17:00">17:00</option>
									<option value="17:30">17:30</option>
									<option value="18:00">18:00</option>
									<option value="19:30">19:30</option>
									<option value="20:00">20:00</option>
								</select>
								<a> to </a>
								<select name="end0" type="text" id="duration" style="width: 30%">
									<option value="--:--">--:--</option>
									<option value="09:00">09:00</option>
									<option value="09:30">09:30</option>
									<option value="10:00">10:00</option>
									<option value="10:30">10:30</option>
									<option value="11:00">11:00</option>
									<option value="11:30">11:30</option>
									<option value="12:00">12:00</option>
									<option value="12:30">12:30</option>
									<option value="13:00">13:00</option>
									<option value="13:30">13:30</option>
									<option value="14:00">14:00</option>
									<option value="14:30">14:30</option>
									<option value="15:00">15:00</option>
									<option value="15:30">15:30</option>
									<option value="16:00">16:00</option>
									<option value="16:30">16:30</option>
									<option value="17:00">17:00</option>
									<option value="17:30">17:30</option>
									<option value="18:00">18:00</option>
									<option value="19:30">19:30</option>
									<option value="20:00">20:00</option>
								</select>
						</br></br>

            <label id="monday">Monday</label>
                <input type="hidden" id="mon" name="day1" value="1" />
								<select name="start1" type="text" id="duration" style="width: 30%">
									<option value="--:--">--:--</option>
									<option value="09:00">09:00</option>
									<option value="09:30">09:30</option>
									<option value="10:00">10:00</option>
									<option value="10:30">10:30</option>
									<option value="11:00">11:00</option>
									<option value="11:30">11:30</option>
									<option value="12:00">12:00</option>
									<option value="12:30">12:30</option>
									<option value="13:00">13:00</option>
									<option value="13:30">13:30</option>
									<option value="14:00">14:00</option>
									<option value="14:30">14:30</option>
									<option value="15:00">15:00</option>
									<option value="15:30">15:30</option>
									<option value="16:00">16:00</option>
									<option value="16:30">16:30</option>
									<option value="17:00">17:00</option>
									<option value="17:30">17:30</option>
									<option value="18:00">18:00</option>
									<option value="19:30">19:30</option>
									<option value="20:00">20:00</option>
								</select>
								<a> to </a>
								<select name="end1" type="text" id="duration" style="width: 30%">
									<option value="--:--">--:--</option>
									<option value="09:00">09:00</option>
									<option value="09:30">09:30</option>
									<option value="10:00">10:00</option>
									<option value="10:30">10:30</option>
									<option value="11:00">11:00</option>
									<option value="11:30">11:30</option>
									<option value="12:00">12:00</option>
									<option value="12:30">12:30</option>
									<option value="13:00">13:00</option>
									<option value="13:30">13:30</option>
									<option value="14:00">14:00</option>
									<option value="14:30">14:30</option>
									<option value="15:00">15:00</option>
									<option value="15:30">15:30</option>
									<option value="16:00">16:00</option>
									<option value="16:30">16:30</option>
									<option value="17:00">17:00</option>
									<option value="17:30">17:30</option>
									<option value="18:00">18:00</option>
									<option value="19:30">19:30</option>
									<option value="20:00">20:00</option>
								</select>
						</br></br>

            <label id="tuesday">Tuesday</label>
                <input type="hidden" id="tue" name="day2" value="2" />
								<select name="start2" type="text" id="duration" style="width: 30%">
									<option value="--:--">--:--</option>
									<option value="09:00">09:00</option>
									<option value="09:30">09:30</option>
									<option value="10:00">10:00</option>
									<option value="10:30">10:30</option>
									<option value="11:00">11:00</option>
									<option value="11:30">11:30</option>
									<option value="12:00">12:00</option>
									<option value="12:30">12:30</option>
									<option value="13:00">13:00</option>
									<option value="13:30">13:30</option>
									<option value="14:00">14:00</option>
									<option value="14:30">14:30</option>
									<option value="15:00">15:00</option>
									<option value="15:30">15:30</option>
									<option value="16:00">16:00</option>
									<option value="16:30">16:30</option>
									<option value="17:00">17:00</option>
									<option value="17:30">17:30</option>
									<option value="18:00">18:00</option>
									<option value="19:30">19:30</option>
									<option value="20:00">20:00</option>
								</select>
								<a> to </a>
								<select name="end2" type="text" id="duration" style="width: 30%">
									<option value="--:--">--:--</option>
									<option value="09:00">09:00</option>
									<option value="09:30">09:30</option>
									<option value="10:00">10:00</option>
									<option value="10:30">10:30</option>
									<option value="11:00">11:00</option>
									<option value="11:30">11:30</option>
									<option value="12:00">12:00</option>
									<option value="12:30">12:30</option>
									<option value="13:00">13:00</option>
									<option value="13:30">13:30</option>
									<option value="14:00">14:00</option>
									<option value="14:30">14:30</option>
									<option value="15:00">15:00</option>
									<option value="15:30">15:30</option>
									<option value="16:00">16:00</option>
									<option value="16:30">16:30</option>
									<option value="17:00">17:00</option>
									<option value="17:30">17:30</option>
									<option value="18:00">18:00</option>
									<option value="19:30">19:30</option>
									<option value="20:00">20:00</option>
								</select>
						</br></br>

            <label id="wednesday">Wednesday</label>
                <input type="hidden" id="wed" name="day3" value="3" />
								<select name="start3" type="text" id="duration" style="width: 30%">
									<option value="--:--">--:--</option>
									<option value="09:00">09:00</option>
									<option value="09:30">09:30</option>
									<option value="10:00">10:00</option>
									<option value="10:30">10:30</option>
									<option value="11:00">11:00</option>
									<option value="11:30">11:30</option>
									<option value="12:00">12:00</option>
									<option value="12:30">12:30</option>
									<option value="13:00">13:00</option>
									<option value="13:30">13:30</option>
									<option value="14:00">14:00</option>
									<option value="14:30">14:30</option>
									<option value="15:00">15:00</option>
									<option value="15:30">15:30</option>
									<option value="16:00">16:00</option>
									<option value="16:30">16:30</option>
									<option value="17:00">17:00</option>
									<option value="17:30">17:30</option>
									<option value="18:00">18:00</option>
									<option value="19:30">19:30</option>
									<option value="20:00">20:00</option>
								</select>
								<a> to </a>
								<select name="end3" type="text" id="duration" style="width: 30%">
									<option value="--:--">--:--</option>
									<option value="09:00">09:00</option>
									<option value="09:30">09:30</option>
									<option value="10:00">10:00</option>
									<option value="10:30">10:30</option>
									<option value="11:00">11:00</option>
									<option value="11:30">11:30</option>
									<option value="12:00">12:00</option>
									<option value="12:30">12:30</option>
									<option value="13:00">13:00</option>
									<option value="13:30">13:30</option>
									<option value="14:00">14:00</option>
									<option value="14:30">14:30</option>
									<option value="15:00">15:00</option>
									<option value="15:30">15:30</option>
									<option value="16:00">16:00</option>
									<option value="16:30">16:30</option>
									<option value="17:00">17:00</option>
									<option value="17:30">17:30</option>
									<option value="18:00">18:00</option>
									<option value="19:30">19:30</option>
									<option value="20:00">20:00</option>
								</select>
						</br></br>

            <label id="thursday">Thursday</label>
                <input type="hidden" id="thu" name="day4" value="4" />
								<select name="start4" type="text" id="duration" style="width: 30%">
									<option value="--:--">--:--</option>
									<option value="09:00">09:00</option>
									<option value="09:30">09:30</option>
									<option value="10:00">10:00</option>
									<option value="10:30">10:30</option>
									<option value="11:00">11:00</option>
									<option value="11:30">11:30</option>
									<option value="12:00">12:00</option>
									<option value="12:30">12:30</option>
									<option value="13:00">13:00</option>
									<option value="13:30">13:30</option>
									<option value="14:00">14:00</option>
									<option value="14:30">14:30</option>
									<option value="15:00">15:00</option>
									<option value="15:30">15:30</option>
									<option value="16:00">16:00</option>
									<option value="16:30">16:30</option>
									<option value="17:00">17:00</option>
									<option value="17:30">17:30</option>
									<option value="18:00">18:00</option>
									<option value="19:30">19:30</option>
									<option value="20:00">20:00</option>
								</select>
								<a> to </a>
								<select name="end4" type="text" id="duration" style="width: 30%">
									<option value="--:--">--:--</option>
									<option value="09:00">09:00</option>
									<option value="09:30">09:30</option>
									<option value="10:00">10:00</option>
									<option value="10:30">10:30</option>
									<option value="11:00">11:00</option>
									<option value="11:30">11:30</option>
									<option value="12:00">12:00</option>
									<option value="12:30">12:30</option>
									<option value="13:00">13:00</option>
									<option value="13:30">13:30</option>
									<option value="14:00">14:00</option>
									<option value="14:30">14:30</option>
									<option value="15:00">15:00</option>
									<option value="15:30">15:30</option>
									<option value="16:00">16:00</option>
									<option value="16:30">16:30</option>
									<option value="17:00">17:00</option>
									<option value="17:30">17:30</option>
									<option value="18:00">18:00</option>
									<option value="19:30">19:30</option>
									<option value="20:00">20:00</option>
								</select>
						</br></br>

            <label id="friday">Friday</label>
                <input type="hidden" id="fri" name="day5" value="5" />
								<select name="start5" type="text" id="duration" style="width: 30%">
									<option value="--:--">--:--</option>
									<option value="09:00">09:00</option>
									<option value="09:30">09:30</option>
									<option value="10:00">10:00</option>
									<option value="10:30">10:30</option>
									<option value="11:00">11:00</option>
									<option value="11:30">11:30</option>
									<option value="12:00">12:00</option>
									<option value="12:30">12:30</option>
									<option value="13:00">13:00</option>
									<option value="13:30">13:30</option>
									<option value="14:00">14:00</option>
									<option value="14:30">14:30</option>
									<option value="15:00">15:00</option>
									<option value="15:30">15:30</option>
									<option value="16:00">16:00</option>
									<option value="16:30">16:30</option>
									<option value="17:00">17:00</option>
									<option value="17:30">17:30</option>
									<option value="18:00">18:00</option>
									<option value="19:30">19:30</option>
									<option value="20:00">20:00</option>
								</select>
								<a> to </a>
								<select name="end5" type="text" id="duration" style="width: 30%">
									<option value="--:--">--:--</option>
									<option value="09:00">09:00</option>
									<option value="09:30">09:30</option>
									<option value="10:00">10:00</option>
									<option value="10:30">10:30</option>
									<option value="11:00">11:00</option>
									<option value="11:30">11:30</option>
									<option value="12:00">12:00</option>
									<option value="12:30">12:30</option>
									<option value="13:00">13:00</option>
									<option value="13:30">13:30</option>
									<option value="14:00">14:00</option>
									<option value="14:30">14:30</option>
									<option value="15:00">15:00</option>
									<option value="15:30">15:30</option>
									<option value="16:00">16:00</option>
									<option value="16:30">16:30</option>
									<option value="17:00">17:00</option>
									<option value="17:30">17:30</option>
									<option value="18:00">18:00</option>
									<option value="19:30">19:30</option>
									<option value="20:00">20:00</option>
								</select>
						</br></br>

						<label id="saturday">Saturday</label>
                <input type="hidden" id="sat" name="day6" value="6" />
								<select name="start6" type="text" id="duration" style="width: 30%">
									<option value="--:--">--:--</option>
									<option value="09:00">09:00</option>
									<option value="09:30">09:30</option>
									<option value="10:00">10:00</option>
									<option value="10:30">10:30</option>
									<option value="11:00">11:00</option>
									<option value="11:30">11:30</option>
									<option value="12:00">12:00</option>
									<option value="12:30">12:30</option>
									<option value="13:00">13:00</option>
									<option value="13:30">13:30</option>
									<option value="14:00">14:00</option>
									<option value="14:30">14:30</option>
									<option value="15:00">15:00</option>
									<option value="15:30">15:30</option>
									<option value="16:00">16:00</option>
									<option value="16:30">16:30</option>
									<option value="17:00">17:00</option>
									<option value="17:30">17:30</option>
									<option value="18:00">18:00</option>
									<option value="19:30">19:30</option>
									<option value="20:00">20:00</option>
								</select>
								<a> to </a>
								<select name="end6" type="text" id="duration" style="width: 30%">
									<option value="--:--">--:--</option>
									<option value="09:00">09:00</option>
									<option value="09:30">09:30</option>
									<option value="10:00">10:00</option>
									<option value="10:30">10:30</option>
									<option value="11:00">11:00</option>
									<option value="11:30">11:30</option>
									<option value="12:00">12:00</option>
									<option value="12:30">12:30</option>
									<option value="13:00">13:00</option>
									<option value="13:30">13:30</option>
									<option value="14:00">14:00</option>
									<option value="14:30">14:30</option>
									<option value="15:00">15:00</option>
									<option value="15:30">15:30</option>
									<option value="16:00">16:00</option>
									<option value="16:30">16:30</option>
									<option value="17:00">17:00</option>
									<option value="17:30">17:30</option>
									<option value="18:00">18:00</option>
									<option value="19:30">19:30</option>
									<option value="20:00">20:00</option>
								</select>
						</br></br>

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
