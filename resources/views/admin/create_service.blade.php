<!doctype html>
<html>
<head>
@include('layouts.head')
<script type="text/javascript">
    function validateForm() { 
        var title = document.getElementById("title").value;
	var lengthTitle = title.length;

        document.getElementById('validationWarn').innerHTML = "";
        if(!(title)) {
            document.getElementById('validationWarn').innerHTML = "Please enter a service title";
            return false;   
        }
        if(lengthTitle > 254) {
            document.getElementById('validationWarn').innerHTML = "Service title is too long";
            return false;   
        }
        
        var color = document.getElementById("hex-str").value;
         
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
            <h2>Current Services</h2>
                <div class="wrapper">
                    <div class="table">
            <div class="row header blue">
                <div class="cell"> </div>
                <div class="cell">Service</div>
                <div class="cell">Duration</div>
                
            </div>
    @foreach ($services as $services)
                        <div class="row">
                            <div class="cell">
                    <button 
                            class="jscolor {valueElement:null,value:'{{$services->color}}'}" disabled
                            style="border-radius: 50px; border: none; width: 20px; height: 20px; margin-left: 20px;">
                    </button>
                </div>
                <div class="cell">{{$services->title}}</div>
                <div class="cell">{{$services->duration}}</div>
                

            </div>
	@endforeach
        </div>    
  </div>
        </div>
            
    </div>
</div>
    <div class="form-content">
    <div class="sub-form">
        <div class="sub-1">
            <h2>Add Service</h2>
        </div>
            <form class="addService" method="POST" action="{{ action('ServiceController@updateServices') }}" onsubmit="return validateForm();">
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	        <label class="input">Service Name:</label>
	        <input placeholder="" name="title" type="text" id="title">
	        <label class="input">Duration of Service & Display Colour:</label>
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
                <script src="js/jscolor.js"></script>
                <input name="color" class="jscolor" value="#005696">
		<div class="sub">
		    <input type="submit" value="Submit" ></a>
		</div>
            </form>
            <label id="validationWarn" class="warning"></label>
    </div>
</div>


@include('layouts.foot')


