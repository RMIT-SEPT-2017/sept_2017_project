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
            <h2>Add Service</h2>
        </div>
            <form class="" onsubmit="return validateForm();">
	        <label>Service successfully added</label>
		<div class="sub">
		    <input type="button" value="Add another service" onClick="document.location.href='/create_service'"></a>
		</div>
            </form>
    </div>
</div>

@include('layouts.foot')
