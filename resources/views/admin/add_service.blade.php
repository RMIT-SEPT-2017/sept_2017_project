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
    <style>
        body {
          font-family: "Helvetica Neue", Helvetica, Arial;
          font-size: 14px;
          line-height: 20px;
          font-weight: 400;
          color: #3b3b3b;
          background: #2b2b2b;
        }

        .wrapper {
          margin: 0 auto;
          padding: 40px;
          max-width: 800px;
        }

        .table {
          margin: 0 0 40px 0;
          width: 100%;
          box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
          display: table;
        }
        @media screen and (max-width: 580px) {
          .table {
            display: block;
          }
        }

        .row {
          display: table-row;
          background: #f6f6f6;
        }
        .row:nth-of-type(odd) {
          background: #e9e9e9;
        }
        .row.header {
          font-weight: 900;
          color: #ffffff;
          background: #ea6153;
        }
        .row.blue {
          background: #2980b9;
        }
        @media screen and (max-width: 580px) {
          .row {
            padding: 8px 0;
            display: block;
          }
        }

        .cell {
          padding: 6px 12px;
          display: table-cell;
        }
        @media screen and (max-width: 580px) {
          .cell {
            padding: 2px 12px;
            display: block;
          }
        }
        .sub-form input[type="changea"] {
            color: white;
            background: #767676;
            border: none;
            padding:10px 31px;
            outline:none;
            font-size: 1.1em;
            cursor: pointer;
            letter-spacing: 1px;
            font-weight: 400;
            font-family: 'Josefin Sans', sans-serif;
            transition: 0.5s all;
            -webkit-transition: 0.5s all;
            -o-transition: 0.5s all;
            -moz-transition: 0.5s all;
            -ms-transition: 0.5s all;
            width: 100%;
            text-align: center;
        }
        .sub-form input[type="changea"]:hover {
            background: #fff;
            color: black;
            transition:0.5s all;
            -webkit-transition:0.5s all;
            -o-transition:0.5s all;
            -moz-transition:0.5s all;
            -ms-transition:0.5s all;
        }
        
        
    </style>
</head>
<body>
@include('layouts.navAdmin')

<div class="form-content">
    <div class="sub-form">
        <div class="sub-1">
            <a>Welcome</a>
            <h2>Add a new service</h2>
        </div>
            <form class="addEmployee" method="POST" action="{{ action('EmployeeController@updateEmployees') }}" onsubmit="return validateForm();">
            <input placeholder="Service Name" name="name" type="text" id="name">
            <input placeholder="Duration" name="email" type="text" id="email">
                <div class="sub">
                    <input type="submit" value="Submit" ></a>

                </div>
            </form>
            <label id="emailValidation"></label>
            <label id="nameValidation"></label>
    
            <div class="wrapper">
              <div class="table">
                  <div class="row header blue">
                      <div class="cell">Current Services</div>
                      <div class="cell"> </div>
                  </div>
                  <div class="row header blue">
                      <div class="cell">Service</div>
                      <div class="cell">Duration</div>
                  </div>
          
                  <div class="row">
                      <div class="cell">Mens Haircut</div>
                      <div class="cell">30 Minutes</div>
                  </div>
                  <div class="row">
                      <div class="cell">Womens Haircut</div>
                      <div class="cell">60 Minutes</div>
                  </div>
                  
              </div> 
              <div class="sub">
                                <a href="{{ url('/add_employee_times') }}"><input type="changea" value="Add new availability">
                    </div>
        </div>
    </div>
</div>

@include('layouts.foot')


