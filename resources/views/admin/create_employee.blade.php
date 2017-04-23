<!doctype html>
<html>
<head>
@include('layouts.head')
<script type="text/javascript">
    function validateForm() { 
        var email = document.getElementById("email").value;
        var name = document.getElementById("name").value;

        document.getElementById('emailValidation').innerHTML = "";
        document.getElementById('nameValidation').innerHTML = "";
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if(!re.test(email)) {
            document.getElementById('emailValidation').innerHTML = "Please enter a valid email address";
            return false;   
        }
        re = /^([^0-9!@#$%^&*()_+=]*)$/;
        if(!re.test(name)) {
            document.getElementById('nameValidation').innerHTML = "Please enter a valid name";
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
            <h2>Add Employee</h2>
        </div>
            <form class="addEmployee" method="POST" action="{{ action('EmployeeController@updateEmployees') }}" onsubmit="return validateForm();">
            <input placeholder="Full Name" name="name" type="text" id="name">
            <input placeholder="email" name="email" type="text" id="email">
                <div class="sub">
                    <input type="submit" value="Submit" ></a>

                </div>
            </form>
            <label id="emailValidation"></label>
            <label id="nameValidation"></label>
    </div>
</div>

@include('layouts.foot')


