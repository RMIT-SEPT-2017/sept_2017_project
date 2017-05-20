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
            <h2>Add Business</h2>
        </div>
            <form class="" onsubmit="return validateForm();">
	        <label>Business successfully added</label>

        <div class="sub">
                        <a href="{{ url('/create_business') }}"><input type="change" value="Add another business">
                    </div>
            </form>
    </div>
</div>

@include('layouts.foot')
