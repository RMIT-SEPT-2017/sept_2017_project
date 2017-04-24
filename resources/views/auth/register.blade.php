<!doctype html>
<html>

    <head>
        @include('layouts.head')

        @include('layouts.google_style')

    <script type="text/javascript">
    function validateForm() { 
       
        var name = document.getElementById("name").value;

        
        document.getElementById('nameValidation').innerHTML = "";


        re = /^([^0-9!@#$%^&*()_+=~`<>,.?]*)$/;
        if(!re.test(name)) {
            document.getElementById('nameValidation').innerHTML = "Please enter a valid name";
            //document.getElementById('nameValidation').innerHTML = name;
            return false;   
        }
        //return false;
    }

    </script>
    </head>
        <body>
            
            
            
<div class="form-content">
    <div class="sub-form">
        <div class="sub-1">
            <h2>Register</h2>
        </div>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}" onsubmit="return validateForm();">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input placeholder="Name" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus><br>
                                <label id="nameValidation"></label>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            

                            <div class="col-md-6">
                                <input placeholder="E-Mail Address" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required><br>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        

                        


                            <div class="col-md-6">
                                @include('layouts.googleApi')
                                
                                <br>

                            </div>
                        
                        
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input placeholder="Password" id="password" type="password" class="form-control" name="password" required><br>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-md-6">
                                <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <input type="submit" class="btn btn-primary"
                                    value="Register">
                                <a href="{{ url('/login') }}"><input type="change" value="Already have an account?">
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>

@include('layouts.foot')