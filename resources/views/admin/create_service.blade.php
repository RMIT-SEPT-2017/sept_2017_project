<!doctype html>
<html>
<head>
@include('layouts.head')
<script type="text/javascript">
    function validateForm() { 
        var title = document.getElementById("title").value;

        document.getElementById('validationWarn').innerHTML = "";
        if(!(title)) {
            document.getElementById('validationWarn').innerHTML = "Please enter a service title";
            return false;   
        }
         
}

</script>
</head>
<body>
@include('layouts.navAdmin')

<div class="form-content">
    <div class="sub-form">
        <div class="sub-1">
            <a>Welcome</a>
            <h2>Add Service</h2>
        </div>
            <form class="addService" method="POST" action="{{ action('ServiceController@updateServices') }}" onsubmit="return validateForm();">
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	        <label class="input">Service Name:</label>
	        <input placeholder="" name="title" type="text" id="title">
	        <label class="input">Duration of Service:</label>
		<select name="duration" type="text" id="duration">
			<option value="15">15 minutes</option>
			<option value="30">30 minutes</option>
			<option value="45">45 minutes</option>
			<option value="60">60 minutes</option>
			<option value="75">75 minutes</option>
			<option value="90">90 minutes</option>
			<option value="105">105 minutes</option>
			<option value="120">120 minutes</option>
			<option value="135">135 minutes</option>
			<option value="150">150 minutes</option>
			<option value="165">165 minutes</option>
			<option value="180">180 minutes</option>
		</select>
		<div class="sub">
		    <input type="submit" value="Submit" ></a>
		</div>
            </form>
            <label id="validationWarn" class="warning"></label>
    </div>
</div>

@include('layouts.foot')


