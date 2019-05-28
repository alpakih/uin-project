@extends('frontend.landing_layout.app')

@section('title', $menu.' | ')
@section('content')
    @include('frontend.landing_layout.navigation')

    <div class="row">
        <div class="col-md-6  col-md-offset-3 animate-box">
            @if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{\Session::get('alert')}}</div>
                </div>
            @endif
            @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{\Session::get('alert-success')}}</div>
                </div>
            @endif
            <center><h2>Selamat Datang  {{Session::get('nama')}}</h2></center>
        </div>
    </div>
@endsection
