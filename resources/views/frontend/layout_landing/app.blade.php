@extends('layouts.front')

@section('styles')
    @include('frontend.layouts.styles')
@endsection

@section('scripts')
    @include('frontend.layouts.scripts')
@endsection

@section('wrapper')
        @yield('content')
        @include('frontend.layout_landing.footer')
    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
    </div>
@endsection
