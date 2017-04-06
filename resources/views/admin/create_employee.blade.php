<!doctype html>
<html>
<head>
@include('layouts.head')

</head>
<body>
@include('layouts.navAdmin')

<div class="form-content">
    <div class="sub-form">
        <div class="sub-1">
            <a>Welcome</a>
            <h2>Add Employee</h2>
        </div>
            <form method="POST" action="{{ action('AdminController@updateEmployees') }}">
            <input placeholder="Full Name" name="name" type="text">
            <input placeholder="email" name="email" type="text">
                <div class="sub">
                    <input type="submit" value="Submit"></a>

                </div>
            </form>
    </div>
</div>

@include('layouts.foot')


