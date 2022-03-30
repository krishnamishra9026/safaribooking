@extends('frontend.app')
@section('title', 'Welcome')
@section('content')
     <div class="games-page">
        <div class="container">
            <div class="games-content">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <h1>games</h1>
                    <div class="game-tab">
                        <ul class="nav nav-pills">
                        <li class="active"><a data-toggle="pill" href="#home">ALL</a></li>
                        <li><a data-toggle="pill" href="#menu1">Fish</a></li>
                        <li><a data-toggle="pill" href="#menu2">Slots</a></li>
                        <li><a data-toggle="pill" href="#menu3">Table</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <ul class="list-inline">
                                <li><a href="#"><img src="assets/front/images/aladin.jpg" alt="Aladin" class="img-responsive"></a></li>
                                <li><a href="#"><img src="assets/front/images/amazon-river.jpg" alt="Amazon" class="img-responsive"></a></li>
                                <li><a href="#"><img src="assets/front/images/croco.jpg" alt="Croco" class="img-responsive"></a></li>
                                <li><a href="#"><img src="assets/front/images/crystal.jpg" alt="Crystal" class="img-responsive"></a></li>
                                <li><a href="#"><img src="assets/front/images/dancing-drum.jpg" alt="Dancing Drum" class="img-responsive"></a></li>
                                <li><a href="#"><img src="assets/front/images/dracula.jpg" alt="Dracula" class="img-responsive"></a></li>
                                <li><a href="#"><img src="assets/front/images/aladin.jpg" alt="Aladin" class="img-responsive"></a></li>
                                <li><a href="#"><img src="assets/front/images/amazon-river.jpg" alt="Amazon" class="img-responsive"></a></li>
                                <li><a href="#"><img src="assets/front/images/aladin.jpg" alt="Aladin" class="img-responsive"></a></li>
                                <li><a href="#"><img src="assets/front/images/amazon-river.jpg" alt="Amazon" class="img-responsive"></a></li>
                                <li><a href="#"><img src="assets/front/images/croco.jpg" alt="Croco" class="img-responsive"></a></li>
                                <li><a href="#"><img src="assets/front/images/crystal.jpg" alt="Crystal" class="img-responsive"></a></li>
                            </ul>

                        </div>
                        <div id="menu1" class="tab-pane fade">
                          <ul class="list-inline">
                                <li><a href="#"><img src="assets/front/images/aladin.jpg" alt="Aladin" class="img-responsive"></a></li>
                                <li><a href="#"><img src="assets/front/images/amazon-river.jpg" alt="Amazon" class="img-responsive"></a></li>
                                <li><a href="#"><img src="assets/front/images/croco.jpg" alt="Croco" class="img-responsive"></a></li>
                                <li><a href="#"><img src="assets/front/images/crystal.jpg" alt="Crystal" class="img-responsive"></a></li>
                                <li><a href="#"><img src="assets/front/images/dancing-drum.jpg" alt="Dancing Drum" class="img-responsive"></a></li>
                                <li><a href="#"><img src="assets/front/images/dracula.jpg" alt="Dracula" class="img-responsive"></a></li>
                                <li><a href="#"><img src="assets/front/images/aladin.jpg" alt="Aladin" class="img-responsive"></a></li>
                                <li><a href="#"><img src="assets/front/images/amazon-river.jpg" alt="Amazon" class="img-responsive"></a></li>
                            </ul>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                          <ul class="list-inline">
                                <li><a href="#"><img src="assets/front/images/aladin.jpg" alt="Aladin" class="img-responsive"></a></li>
                                <li><a href="#"><img src="assets/front/images/amazon-river.jpg" alt="Amazon" class="img-responsive"></a></li>
                                <li><a href="#"><img src="assets/front/images/croco.jpg" alt="Croco" class="img-responsive"></a></li>
                                <li><a href="#"><img src="assets/front/images/crystal.jpg" alt="Crystal" class="img-responsive"></a></li>
                                <li><a href="#"><img src="assets/front/images/dancing-drum.jpg" alt="Dancing Drum" class="img-responsive"></a></li>
                                <li><a href="#"><img src="assets/front/images/dracula.jpg" alt="Dracula" class="img-responsive"></a></li>
                                <li><a href="#"><img src="assets/front/images/aladin.jpg" alt="Aladin" class="img-responsive"></a></li>
                                <li><a href="#"><img src="assets/front/images/amazon-river.jpg" alt="Amazon" class="img-responsive"></a></li>
                                <li><a href="#"><img src="assets/front/images/aladin.jpg" alt="Aladin" class="img-responsive"></a></li>
                            </ul>
                        </div>
                        <div id="menu3" class="tab-pane fade">
                          <ul class="list-inline">
                                <li><a href="#"><img src="assets/front/images/aladin.jpg" alt="Aladin" class="img-responsive"></a></li>
                                <li><a href="#"><img src="assets/front/images/amazon-river.jpg" alt="Amazon" class="img-responsive"></a></li>
                                <li><a href="#"><img src="assets/front/images/croco.jpg" alt="Croco" class="img-responsive"></a></li>
                                <li><a href="#"><img src="assets/front/images/crystal.jpg" alt="Crystal" class="img-responsive"></a></li>
                                <li><a href="#"><img src="assets/front/images/dancing-drum.jpg" alt="Dancing Drum" class="img-responsive"></a></li>
                                <li><a href="#"><img src="assets/front/images/dracula.jpg" alt="Dracula" class="img-responsive"></a></li>
                                <li><a href="#"><img src="assets/front/images/aladin.jpg" alt="Aladin" class="img-responsive"></a></li>
                                <li><a href="#"><img src="assets/front/images/amazon-river.jpg" alt="Amazon" class="img-responsive"></a></li>
                                <li><a href="#"><img src="assets/front/images/aladin.jpg" alt="Aladin" class="img-responsive"></a></li>
                                <li><a href="#"><img src="assets/front/images/amazon-river.jpg" alt="Amazon" class="img-responsive"></a></li>
                            </ul>
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
