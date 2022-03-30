@extends('frontend.app')
@section('title', 'Welcome')
@section('content')
     <div class="contact-bg">
        <div class="container">
            <div class="games-content">
                <div class="row">
                    <div class="col-sm-12">
                        <h1>Contact Us</h1>
                        <div class="registration-form">
                            @if (\Session::has('success'))
                            <div class="alert alert-success">
                                <ul>
                                    <li>{!! \Session::get('success') !!}</li>
                                </ul>
                            </div>
                            @endif
                            <div class="text-center">
                            <form method="POST" action={{ route('contact-us') }}>
                                @csrf
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="mdi mdi-account"></i></span>
                                    <input type="text" class="form-control" required="true" name="name" value="{{ old('name') }}" placeholder="Full Name*">
                                </div>
                                @error('name')
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
                                    <input type="number" class="form-control" required name="mobile" value="{{ old('mobile') }}" placeholder="Phone*">
                                </div>
                                @error('mobile')
                                <p class="text-danger" style="font-size: 13px;">{{ $message }}</p>
                                @enderror
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="mdi mdi-text-subject"></i></span>
                                    <input type="text" class="form-control" required name="subject" value="{{ old('subject') }}" placeholder="Subject*">
                                </div>
                                @error('subject')
                                <p class="text-danger" style="font-size: 13px;">{{ $message }}</p>
                                @enderror

                                <!-- <div class="input-group">
                                    <span class="input-group-addon"><i class="mdi mdi-scale-balance"></i></span>
                                    <select class="form-control" name="distributor" id="exampleFormControlSelect1" placeholder="Distributor*" required>
                                      <option value="">Please select distributor</option>
                                      <option @if(old('distributor') == '1') selected @endif value="1">1</option>
                                      <option @if(old('distributor') == '2') selected @endif value="2">2</option>
                                      <option @if(old('distributor') == '3') selected @endif value="3">3</option>
                                      <option @if(old('distributor') == '4') selected @endif value="4">4</option>
                                      <option @if(old('distributor') == '5') selected @endif value="5">5</option>
                                    </select>
                                </div>
                                @error('distributor')
                                <p class="text-danger" style="font-size: 13px;">{{ $message }}</p>
                                @enderror -->
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Message..." required id="exampleFormControlTextarea1" name="message" rows="3">{{ old('message') }}</textarea>
                                </div>
                                @error('message')
                                <p class="text-danger" style="font-size: 13px;">{{ $message }}</p>
                                @enderror
                                <div class="form-group">
                                    <button type="submit" class="btn btn-play">Send</button>
                                </div>  
                            </form>
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
