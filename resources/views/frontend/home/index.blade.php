@extends('frontend.landing_layout.app')

@section('title', $menu.' | ')
@section('content')
    <div id="colorlib-intro">
        @include('frontend.landing_layout.navigation')
        @include('frontend.landing_layout.slider')
        @include('frontend.landing_layout.header')
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
                    @foreach($announcements as $announcement)
                    <div class="col-md-4 animate-box">
                        <div class="classes">
                            <div class="classes-img" style="background-image: url({!!  asset(Storage::url($announcement->announcement_image->image)) !!})">
                                <span class="text-center price">Posted by:<br>{!! $announcement->posted_by !!}</span>
                            </div>
                            <div class="desc">
                                <h3><a href="#">{!! $announcement->title !!}</a></h3>
                                <p>{!! substr($announcement->contents,0,300) !!}....</p>
                                <p><a href="/announcement/{!! $announcement->id !!}" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
                            </div>
                        </div>
                    </div>
                        @endforeach
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
                    @foreach($teachers as $teacher)
                    <div class="col-md-3 col-sm-3 animate-box">
                        <div class="trainers-entry">
                            <div class="trainer-img" style="background-image: url({!! asset(Storage::url($teacher->lecture_image->image))  !!})"></div>
                            <div class="desc">
                                <h3>{!! $teacher->nama !!}</h3>
                                @if($teacher->lecture_type == 0)
                                <span>Akademik</span>
                                @else
                                <span>Tahfiz</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
