<!doctype html>
<html>
<head>
@include('layouts.head')
<style>
table, th, td {
    border: 1px solid black;
}
</style>
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
          <h2>Employee availability</h2>
       </div>           
          <div class="wrapper">
              <div class="table">
                  <div class="row header blue">
                      <div class="cell">Name</div>
                      <div class="cell">Day</div>
                      <div class="cell">Start Time</div>
                      <div class="cell">End Time</div>
                  </div>
          @foreach ($employeeTimes as $employeeTimes)
                  <div class="row">
                      <div class="cell">{{$employeeTimes->employee_name}}</div>
                      <div class="cell">{{$employeeTimes->day}}</div>
                      <div class="cell">{{$employeeTimes->start}}</div>
                      <div class="cell">{{$employeeTimes->end}}</div>
                  </div>
      	@endforeach
                  
              </div> 
              <div class="sub">
                                <a href="{{ url('/add_employee_times') }}"><input type="changea" value="Add new availability">
                    </div>
        </div>
        
    </div>
</div>
    
@include('layouts.foot')
