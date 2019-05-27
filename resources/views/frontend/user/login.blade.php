@extends('frontend.layout_landing.app')

@section('title', $menu.' | ')
@section('content')
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
    <div class="row">

        <div class="col-md-6  col-md-offset-3 animate-box">
            <center><h2>Login Form</h2></center>
            <form action="#">
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="username">Username</label>
                        <input type="text" id="username" class="form-control" placeholder="Username">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="password">Password</label>
                        <input type="password" id="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" value="Login" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection
