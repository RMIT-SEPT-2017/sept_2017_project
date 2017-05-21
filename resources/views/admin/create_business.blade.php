<!doctype html>
<html>
<head>
@include('layouts.head')
<script type="text/javascript">
    function validateForm() {
        var name = document.getElementById("name").value;
        var lengthName = name.length;

        document.getElementById('validationWarn').innerHTML = "";
        // re = /^([^0-9!@#$%^&*()_+=]*)$/;
        // if(!re.test(name)) {
        //     document.getElementById('validationWarn').innerHTML = "Please enter a valid name";
        //     return false;
        // }
        if(lengthName > 254) {
            document.getElementById('validationWarn').innerHTML = "Name is too long";
            return false;
        }
}

</script>
<style>
    input.jscolor {
        border-radius: 50px;
        border: none;
        width: 50px;
        height: 50px;
        margin-left: 20px;
    }
</style>
</head>
<body>
@include('layouts.navAdmin')

<div class="form-content">
    <div class="sub-form">
        <div class="sub-1">
            <a>Welcome</a>
            <h2>Update Business</h2>
        </div>
            <form class="addBusiness" method="POST" action="{{ action('BusinessController@updateBusinesses') }}" onsubmit="return validateForm();">
          	    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <label class="input">Business Name:</label>
                    <input placeholder="" name="name" type="text" id="name">
                <br><label class="input">Business Address: </label>
			     
                <label class="input">Business Primary Colour:</label>
                    <script src="js/jscolor.js"></script>
                    <input name="colorPrimary" class="jscolor" value="#005696">
                <label class="input">Business Secondary Colour:</label>
                    <script src="js/jscolor.js"></script>
                    <input name="colorSeconary" class="jscolor" value="#005696">
                <div class="sub">
                    <input type="submit" value="Submit" ></a>
                </div>
            </form>
            <label id="validationWarn" class="warning"></label>
    </div>
</div>

@include('layouts.foot')
