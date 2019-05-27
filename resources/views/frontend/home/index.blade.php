@extends('frontend.layout_landing.app')

@section('title', $menu.' | ')
@section('content')
    <div id="colorlib-intro">
        <nav class="colorlib-nav" role="navigation">
            <div class="upper-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-4">
                            <p>Simak Akademik Aqidah dan Filsafat Islam</p>
                        </div>
                        <div class="col-xs-6 col-md-push-2 text-right">
                            @if (auth()->guest())
                                <p class="btn-apply"><a
                                            href="/register">{!! trans('button.register') !!}</a>
                                </p>
                                &nbsp;&nbsp;
                                <p class="btn-apply"><a
                                            href="/login">{!! trans('button.login') !!}</a>
                                </p>
                            @else
                                <p class="navbar-text navbar-right">Signed in as <a href="javascript:void(0);"
                                                                                    class="navbar-link">{!! auth()->user()->name !!}</a>
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <div id="colorlib-logo"><a href="index.html">UIN SGD</a></div>
                        </div>
                        <div class="col-md-10 text-right menu-1">
                            <ul>
                                <li class="active"><a href="index.html">Home</a></li>
                                <li class="has-dropdown">
                                    <a href="courses.html">Ujian</a>
                                </li>
                                <li><a href="about.html">Tentang</a></li>
                                <li><a href="news.html">Berita</a></li>
                                <li><a href="contact.html">Kontak</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <aside id="colorlib-hero">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background-image: url(images/img_bg_1.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                                    <div class="slider-text-inner text-center">
                                        <h1>Best Online Learning System</h1>
                                        <p><a href="#" class="btn btn-primary btn-lg btn-learn">Register Now</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(images/img_bg_2.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                                    <div class="slider-text-inner text-center">
                                        <h1>Online Free Course</h1>
                                        <p><a href="#" class="btn btn-primary btn-lg btn-learn">Free Trial</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(images/img_bg_3.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                                    <div class="slider-text-inner text-center">
                                        <h1>Education is a Key to Success</h1>
                                        <p><a href="#" class="btn btn-primary btn-lg btn-learn">Register Now</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(images/img_bg_4.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                                    <div class="slider-text-inner text-center">
                                        <h1>Best Online Learning Center</h1>
                                        <p><a href="#" class="btn btn-primary btn-lg btn-learn">Register Now</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>
        <div class="container">
            <div class="row">
                <div class="col-md-4 intro-wrap">
                    <div class="intro-flex">
                        <div class="one-third color-1 animate-box">
                            <span class="icon"><i class="flaticon-professor"></i></span>
                            <div class="desc">
                                <h3>Daftar Komprehesif</h3>
                                <p><a href="#" class="view-more">Lihat</a></p>
                            </div>
                        </div>
                        <div class="one-third color-2 animate-box">
                            <span class="icon"><i class="flaticon-open-book"></i></span>
                            <div class="desc">
                                <h3>Daftar Ujian Proposal</h3>
                                <p><a href="#" class="view-more">Lihat</a></p>
                            </div>
                        </div>
                        <div class="one-third color-2 animate-box">
                            <span class="icon"><i class="flaticon-diploma"></i></span>
                            <div class="desc">
                                <h3>Daftar Munaqosah</h3>
                                <p><a href="#" class="view-more">Lihat</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="about-desc animate-box">
                        <h2>Simak Akademik Aqidah dan Filsafat Islam</h2>
                        <p>When she reached the first hills of the Italic Mountains, she had a last view back on the
                            skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of
                            her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she
                            continued her way.</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="colorlib-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 text-center animate-box">
                        <div class="services">
							<span class="icon">
								<i class="flaticon-books"></i>
							</span>
                            <div class="desc">
                                <h3>Professional Courses</h3>
                                <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center animate-box">
                        <div class="services">
							<span class="icon">
								<i class="flaticon-professor"></i>
							</span>
                            <div class="desc">
                                <h3>Experienced Instructor</h3>
                                <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center animate-box">
                        <div class="services">
							<span class="icon">
								<i class="flaticon-book"></i>
							</span>
                            <div class="desc">
                                <h3>Practical Training</h3>
                                <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center animate-box">
                        <div class="services">
							<span class="icon">
								<i class="flaticon-diploma"></i>
							</span>
                            <div class="desc">
                                <h3>Validated Certificate</h3>
                                <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="colorlib-counter" class="colorlib-counters" style="background-image: url(images/img_bg_2.jpg);"
             data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="col-md-3 col-sm-6 animate-box">
                            <div class="counter-entry">
                                <span class="icon"><i class="flaticon-book"></i></span>
                                <div class="desc">
                                    <span class="colorlib-counter js-counter" data-from="0" data-to="1539"
                                          data-speed="5000" data-refresh-interval="50"></span>
                                    <span class="colorlib-counter-label">Courses</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 animate-box">
                            <div class="counter-entry">
                                <span class="icon"><i class="flaticon-student"></i></span>
                                <div class="desc">
                                    <span class="colorlib-counter js-counter" data-from="0" data-to="3653"
                                          data-speed="5000" data-refresh-interval="50"></span>
                                    <span class="colorlib-counter-label">Students</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 animate-box">
                            <div class="counter-entry">
                                <span class="icon"><i class="flaticon-professor"></i></span>
                                <div class="desc">
                                    <span class="colorlib-counter js-counter" data-from="0" data-to="2300"
                                          data-speed="5000" data-refresh-interval="50"></span>
                                    <span class="colorlib-counter-label">Teachers</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 animate-box">
                            <div class="counter-entry">
                                <span class="icon"><i class="flaticon-earth-globe"></i></span>
                                <div class="desc">
                                    <span class="colorlib-counter js-counter" data-from="0" data-to="200"
                                          data-speed="5000" data-refresh-interval="50"></span>
                                    <span class="colorlib-counter-label">Countries</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="colorlib-classes colorlib-light-grey">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                        <h2>Our Classes</h2>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic life One day however a small line of blind text by the name</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 animate-box">
                        <div class="classes">
                            <div class="classes-img" style="background-image: url(images/classes-1.jpg);">
                                <span class="price text-center"><small>$450</small></span>
                            </div>
                            <div class="desc">
                                <h3><a href="#">Developing Mobile Apps</a></h3>
                                <p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
                                <p><a href="#" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="classes">
                            <div class="classes-img" style="background-image: url(images/classes-2.jpg);">
                                <span class="price text-center"><small>$450</small></span>
                            </div>
                            <div class="desc">
                                <h3><a href="#">Convert PSD to HTML</a></h3>
                                <p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
                                <p><a href="#" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="classes">
                            <div class="classes-img" style="background-image: url(images/classes-3.jpg);">
                                <span class="price text-center"><small>$450</small></span>
                            </div>
                            <div class="desc">
                                <h3><a href="#">Convert HTML to WordPress</a></h3>
                                <p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
                                <p><a href="#" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="classes">
                            <div class="classes-img" style="background-image: url(images/classes-4.jpg);">
                                <span class="price text-center"><small>$450</small></span>
                            </div>
                            <div class="desc">
                                <h3><a href="#">Developing Mobile Apps</a></h3>
                                <p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
                                <p><a href="#" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="classes">
                            <div class="classes-img" style="background-image: url(images/classes-5.jpg);">
                                <span class="price text-center"><small>$450</small></span>
                            </div>
                            <div class="desc">
                                <h3><a href="#">Learned Smoke Effects</a></h3>
                                <p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
                                <p><a href="#" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="classes">
                            <div class="classes-img" style="background-image: url(images/classes-6.jpg);">
                                <span class="price text-center"><small>$450</small></span>
                            </div>
                            <div class="desc">
                                <h3><a href="#">Convert HTML to WordPress</a></h3>
                                <p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
                                <p><a href="#" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="colorlib-trainers">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                        <h2>Our Experienced Professor</h2>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic life One day however a small line of blind text by the name</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-3 animate-box">
                        <div class="trainers-entry">
                            <div class="trainer-img" style="background-image: url(images/person1.jpg)"></div>
                            <div class="desc">
                                <h3>Olivia Young</h3>
                                <span>Teacher</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-3 animate-box">
                        <div class="trainers-entry">
                            <div class="trainer-img" style="background-image: url(images/person2.jpg)"></div>
                            <div class="desc">
                                <h3>Daniel Anderson</h3>
                                <span>Professor</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-3 animate-box">
                        <div class="trainers-entry">
                            <div class="trainer-img" style="background-image: url(images/person3.jpg)"></div>
                            <div class="desc">
                                <h3>David Brook</h3>
                                <span>Teacher</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-3 animate-box">
                        <div class="trainers-entry">
                            <div class="trainer-img" style="background-image: url(images/person4.jpg)"></div>
                            <div class="desc">
                                <h3>Brigeth Smith</h3>
                                <span>Teacher</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
