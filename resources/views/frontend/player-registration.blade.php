@extends('frontend.app')
@section('title', 'Welcome')
@section('content')

      <div class="player-registration">
        <div class="container">
            <div class="games-content">
                <div class="row">
                    <div class="col-sm-12">
                        <h1>Player Registration</h1>
                        <div class="registration-form">
                            @if (\Session::has('success'))
                            <div class="alert alert-success">
                                <ul>
                                    <li>{!! \Session::get('success') !!}</li>
                                </ul>
                            </div>
                            @endif
                            <div class="text-center">
                                <form method="POST" action={{ route('player-registration') }}>
                                    @csrf
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="mdi mdi-account"></i></span>
                                        <input type="text" class="form-control" required="true" id="firstname" name="firstname" placeholder="First Name*" value="{{ old('firstname') }}">
                                    </div>
                                     @error('firstname')
                                        <p class="text-danger" style="font-size: 13px;">{{ $message }}</p>
                                        @enderror        
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="mdi mdi-account"></i></span>
                                        <input type="text" class="form-control" required="true" name="lastname" value="{{ old('lastname') }}" placeholder="Last Name*">
                                    </div>
                                    @error('lastname')
                                        <p class="text-danger" style="font-size: 13px;">{{ $message }}</p>
                                        @enderror
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="mdi mdi-email"></i></span>
                                        <input type="email" class="form-control" required="true" name="email" value="{{ old('email') }}" placeholder="Email*">
                                    </div>
                                    @error('email')
                                        <p class="text-danger" style="font-size: 13px;">{{ $message }}</p>
                                        @enderror
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="mdi mdi-phone-in-talk"></i></span>
                                        <input type="text" required class="form-control" name="mobile" value="{{ old('mobile') }}" placeholder="Phone*">                                        
                                    </div>
                                    @error('mobile')
                                        <p class="text-danger" style="font-size: 13px;">{{ $message }}</p>
                                        @enderror
                                    <input type="hidden" class="form-control" id="password" name="password" value="password">
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label><input required value="accepted" id="invalidCheck"
                                        name="terms" type="checkbox"> I am 18 and over and <a href="#">Accept the
                                            Terms and Conditions</a></label>
                                        </div>
                                        @error('terms')
                                        <p class="text-danger ml-2" style="font-size: 13px; margin-left: 16px;">
                                        {{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-play">Register</button>
                                    </div>  
                                </form>
                            </div>
                            <div class="step-content">
                                <div class="step-one">
                                <h3>Step 1</h3>
                                <p>Fill Out Registration Form Above</p>
                            </div>
                            <div class="step-one">
                                <h3>Step 2</h3>
                                <p>Download Smash App<br><a href="#">DOWNLOAD THE APP</a></p>
                            </div>
                            <div class="step-one">
                                <h3>Step 3</h3>
                                <p>Player Confirmation - Login - Account Activation</p>
                                <h6>After you have completed the registration form and downloaded the APP, we will contact you with your username and password.</h6>
                            </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="margin-top"></div>
        @include('frontend.sections.footer')
         
    </div>
@endsection
