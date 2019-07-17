@extends('frontend.landing_layout.app')

@section('title', 'Pengumuman'.' | ')
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
                                    <h1>Pengumuman</h1>
                                    <h2><span><a href="index.html">Home</a> | Pengumuman</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <div class="colorlib-event">
        <div class="container">
            <div class="row">
                @foreach($data as $dt)
                    <div class="col-md-4 animate-box">
                        <div class="classes">
                            <div class="classes-img" style="background-image: url({!!  asset(Storage::url($dt->announcement_image->image)) !!})">
                                <span class="text-center price">Posted by:<br>{!! $dt->posted_by !!}</span>
                            </div>
                            <div class="desc">
                                <h3><a href="#">{!! $dt->title !!}</a></h3>
                                <p>{!! substr($dt->contents,0,300) !!}....</p>
                                <p><a href="/announcement/{!! $dt->id !!}" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
