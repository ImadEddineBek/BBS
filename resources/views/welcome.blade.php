@extends('layouts.app')

@section('content')

    <div class="jumbotron jumbotron-fluid jumbotron-main" style="height:100vh;width:100%;">
        <div id="particles-js" style="background-image:url({{ asset('storage/images/pexels-photo-861103.jpeg') }})">
            <canvas class="particles-js-canvas-el" width="1409" height="319"
                    style="width: 100%; height: 100%;  "></canvas>
        </div>
        <div class="container center-vertically-holder" style="margin-top:-20px;">
            <div class="row center-vertically">
                <div class="col-md-8 offset-sm-0 offset-md-2 text-center" style="margin-top:100px;margin-bottom:100px;">
                    <h1 data-aos="fade-down" data-aos-duration="1000" data-aos-delay="700" id="hero-title"
                        style="margin-bottom:0;"><br>Simple BBS for Widsley. Inc<br><br></h1>
                    <p data-aos="fade-up" data-aos-duration="650" data-aos-delay="1450" id="hero-subtitle"
                       style="margin-top:19px;font-size:7;font-family:Poppins, sans-serif;"><br>Users can create topics
                        and add messages.<br><br></p>
                    <button class="btn btn-primary" type="button" data-aos="fade-up" data-aos-duration="1100"
                            data-aos-delay="1500" id="hero-btn">Read More&nbsp;<i
                                class="fa fa-angle-double-right tada animated"></i>&nbsp;
                    </button>
                </div>
            </div>
        </div>
    </div>
    <main class="page landing-page">
        <section class="clean-block clean-info dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Info</h2>
                    <p>This website is used as forum like where we can put topics and communicate using messages through
                        that topic.</p>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6"><img class="img-thumbnail"
                                               src="{{asset('storage/images/me.jpg')}}"></div>
                    <div class="col-md-6">
                        <h3>BEKKOUCHE IMAD EDDINE IBRAHIM</h3>
                        <div class="getting-started-info">
                            <p>A data scientist, mobile developer and web developer. <br> I know in computer science you
                                can never master everything, but I belive that if one has the basics of algorithms, one
                                can master any technology one wants.</p>
                        </div>
                        <button class="btn btn-outline-primary btn-lg" type="button">Learn more</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block features">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Features</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in,
                        mattis vitae leo.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5 feature-box"><i class="icon-star icon"></i>
                        <h4>Bootstrap 4</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor
                            in, mattis vitae leo.</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-pencil icon"></i>
                        <h4>Customizable</h4>
                        <p>Users can create delete edit there messages and topics with extream ease and intuitivity.</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-screen-smartphone icon"></i>
                        <h4>Responsive</h4>
                        <p>Works in all shapes and sizes&nbsp;</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-refresh icon"></i>
                        <h4>All Browser Compatibility</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor
                            in, mattis vitae leo.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="card-section-imagia">
            <h1>The Creator&nbsp;</h1>
            <h2>computer science student at ntic&nbsp;</h2>
            <div class="container">
                <div class="row no-gutters justify-content-center">
                    <div class="col-sm-6 col-md-4">
                        <div class="card-container-imagia">
                            <div class="card-imagia">
                                <div class="front-imagia">
                                    <div class="cover-imagia cover-gradient"></div>
                                    <div class="user-imagia"><img src="{{asset('storage/images/me.jpg')}}"
                                                                  class="img-circle" alt=""></div>
                                    <div class="content-imagia">
                                        <h3 class="name-imagia">BEKKOUCH Imad</h3>
                                        <p class="subtitle-imagia">Web developer </p>
                                        <p class="text-center"><em>I am a third year computer science student at NTIC
                                                university Abdel hamid Mehri Constantine . </em></p>
                                    </div>
                                    <div class="footer-imagia"><span><i class="fa fa-plus"></i> More info</span></div>
                                </div>
                                <div class="back-imagia">
                                    <div class="content-imagia content-back-imagia">
                                        <div>
                                            <h3 class="text-center">Prostats</h3>
                                            <p class="text-center">I have been working as a freelancer for more than 4
                                                years before I even started college, and then
                                                I became the valedictorian which allowed me to get a job at BIG MAMA
                                                technologies and at Prostats.</p>
                                        </div>
                                    </div>
                                    <div class="footer-imagia">
                                        <div class="social-imagia text-center"><a href="#"><i
                                                        class="fa fa-facebook"></i></a><a href="#"><i
                                                        class="fa fa-linkedin"></i></a><a href="#"><i
                                                        class="fa fa-twitter"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
    </main>
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Log In</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2018 Copyright Text</p>
        </div>
    </footer>

@endsection
