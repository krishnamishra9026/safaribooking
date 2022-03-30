@extends('frontend.app')
@section('title', 'Welcome')
@section('content')
   <div class="stores-distributors">
        <div class="container">
            <div class="games-content">
                <div class="row">
                    <div class="col-sm-12">
                        <h1>STORES AND DISTRIBUTORS</h1>
                        <div class="distributors">
                            <h3>Lorem Ipsum Dolor</h3>
                            <p>sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                        </div>
                        <div class="distributors" id="myDiv">
                            <h3>Distributions/Store Form</h3>
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. </p>
                        </div>
                        <div class="registration-form">
                            @if (\Session::has('success'))
                            <div class="alert alert-success">
                                <ul>
                                    <li>{!! \Session::get('success') !!}</li>
                                </ul>
                            </div>
                            @endif
                            <div class="text-center">
                            <form method="POST" action={{ route('stores-distributors') }}>
                                @csrf
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="mdi mdi-account"></i></span>
                                    <input type="text" class="form-control" required="true" name="name"  value="{{ old('name') }}" placeholder="Full Name*">
                                </div>
                                @error('name')
                                <p class="text-danger" style="font-size: 13px;">{{ $message }}</p>
                                @enderror
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="mdi mdi-email"></i></span>
                                    <input type="email" class="form-control" required="true" name="email"  value="{{ old('email') }}" placeholder="Email*">
                                </div>
                                @error('email')
                                <p class="text-danger" style="font-size: 13px;">{{ $message }}</p>
                                @enderror
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="mdi mdi-map-marker-radius"></i></span>
                                    <input type="text" class="form-control" required="true" name="city"  value="{{ old('city') }}" placeholder="City*">
                                </div>
                                @error('city')
                                <p class="text-danger" style="font-size: 13px;">{{ $message }}</p>
                                @enderror
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="mdi mdi-flag"></i></span>
                                    <input type="text" class="form-control" required="true" name="state"  value="{{ old('state') }}" placeholder="State*">
                                </div>
                                @error('state')
                                <p class="text-danger" style="font-size: 13px;">{{ $message }}</p>
                                @enderror
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="mdi mdi-cassette"></i></span>
                                    <input type="text" class="form-control" required="true" name="zip_code"  value="{{ old('zip_code') }}" placeholder="Zip Code*">
                                </div>
                                @error('zip_code')
                                <p class="text-danger" style="font-size: 13px;">{{ $message }}</p>
                                @enderror
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="mdi mdi-phone-in-talk"></i></span>
                                    <input type="number" required class="form-control" name="mobile"  value="{{ old('mobile') }}" placeholder="Phone*">
                                </div>
                                @error('mobile')
                                <p class="text-danger" style="font-size: 13px;">{{ $message }}</p>
                                @enderror
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="mdi mdi-spider-web"></i></span>
                                    <select class="form-control" required id="exampleFormControlSelect1" name="distributor" value="{{ old('distributor') }}" placeholder="Distributor*">
                                      <option value="">Please select..</option>
                                      <option @if(old('distributor') == 'Distributor') selected @endif value="Distributor">Distributor</option>
                                      <option @if(old('distributor') == 'Store Operator') selected @endif value="Store Operator">Store Operator</option>
                                    </select>
                                </div>
                                @error('distributor')
                                <p class="text-danger" style="font-size: 13px;">{{ $message }}</p>
                                @enderror
                                <div class="form-group">
                                    <textarea class="form-control" required name="message" placeholder="Message..." id="exampleFormControlTextarea1" rows="3">{{ old('message') }}</textarea>
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
@push('scripts')
 @if (\Session::has('success'))
<script type="text/javascript">
     $('html, body').animate({
        scrollTop: $("#myDiv").offset().top
    }, 1500);
</script>
@endif

@if($errors->has('*'))
<script type="text/javascript">
     $('html, body').animate({
        scrollTop: $("#myDiv").offset().top
    }, 1500);
</script>
@endif

@endpush
