<!doctype html>
<html>
<head>
@include('layouts.head')
<script type="text/javascript">
</script>
</head>
<body>
@include('layouts.navAdmin')

<div class="form-content">
    <div class="sub-form">
        <div class="sub-1">
            <a>Welcome</a>
            <h2>Add Employee</h2>
        </div>
            <form class="" onsubmit="return validateForm();">
	        <label>Employee time successfully added</label>
		<div class="sub">
		    <input type="button" value="Add another time" onClick="document.location.href='/add_employee_times'"></a>
		</div>
            </form>
    </div>
</div>

@include('layouts.foot')
