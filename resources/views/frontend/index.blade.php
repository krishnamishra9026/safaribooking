@extends('frontend.app')
@section('title', 'Welcome')
@section('content')
     <div class="home-page">
        <div class="container">
            <div class="sweep-slot">
                <div class="row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6">  
                        <h1>Sweeps Slots   & Fish Games</h1>
                        <button class="glossy-button glossy-button--gold">Download Now</button>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>About <br>Smash!</h2>
                    <img src="assets/front/images/smash.png" class="img-responsive img-smash hidden-xs" alt="About Smash">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="fish-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p><br>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    
                </div>
                <div class="col-sm-6">
                    <img src="assets/front/images/fish-jump.png" class="img-responsive fish-jump" style="display:none;" alt="Fish Jump">
                </div>
            </div>
            <div class="row coin-box">
                <div class="col-sm-6">
                    <img src="assets/front/images/coin-box.png" class="img-responsive hidden-xs" alt="Coin Box">
                </div>
                <div class="col-sm-6">
                    <div class="fish-text">
                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p><br>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>  
                    </div>
                </div>
            </div>
            <div class="margin-top"></div>   
            @include('frontend.sections.footer')   
        </div>
    </div> 
@endsection
