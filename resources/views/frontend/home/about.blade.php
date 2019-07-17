@extends('frontend.landing_layout.app')

@section('title', 'About'.' | ')
@section('content')
        @include('frontend.landing_layout.navigation')
        <aside id="colorlib-hero">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background-image: url(images/img_bg_2.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                                    <div class="slider-text-inner text-center">
                                        <h1>About Us</h1>
                                        <h2><span><a href="index.html">Home</a> | About</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>
        <div id="colorlib-about" class="colorlib-light-grey">

        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-8 col-md-offset-2 row-pb-md animate-box">
                    <div class="video colorlib-video" style="background-image: url(images/img_bg_1.jpg);">
                        <a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i class="icon-play3"></i></a>
                        <div class="overlay"></div>
                    </div>
                </div>
                <div class="col-md-10 col-md-offset-1 text-center animate-box">
                    <div class="about-wrap">
                        <div class="heading-2">
                            <h2>Robust Gym the leading fitness site</h2>
                        </div>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 animate-box">
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                </div>
                <div class="col-md-4 animate-box">
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                </div>
                <div class="col-md-4 animate-box">
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                </div>
            </div>
        </div>
    </div>

@endsection
