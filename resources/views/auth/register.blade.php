<!doctype html>
<html>
    <head>
        @include('layouts.head')

    </head>
        <body>
            
            
            
<div class="form-content">
    <div class="sub-form">
        <div class="sub-1">
            <h2>Register</h2>
        </div>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input placeholder="Name" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" maxlength="255" required  autofocus><br>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            

                            <div class="col-md-6">
                                <input placeholder="E-Mail Address" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" maxlength="255" required><br>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input placeholder="Address" id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" maxlength="255" required><br>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group{{ $errors->has('suburb') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input placeholder="Suburb" id="suburb" type="text" class="form-control" name="suburb" value="{{ old('suburb') }}" maxlength="255" required><br>

                                @if ($errors->has('suburb'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('suburb') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group{{ $errors->has('post_code') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input placeholder="Post Code" id="post_code" type="text" class="form-control" name="post_code" value="{{ old('post_code') }}" maxlength="4" onkeyup="this.value = this.value.replace(/[^0-9]/, '')" required><br>

                                @if ($errors->has('post_code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input placeholder="Password" id="password" type="password" class="form-control" name="password" maxlength="255" required><br>

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