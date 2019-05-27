
<!-- Animate.css -->
<link rel="stylesheet" href="/{{ config('path.css') }}/animate.css">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="/{{ config('path.css') }}/icomoon.css">
<!-- Bootstrap  -->
<link rel="stylesheet" href="/{{ config('path.css') }}/bootstrap.css">
<!-- Magnific Popup -->
<link rel="stylesheet" href="/{{ config('path.css') }}/magnific-popup.css">

<!-- Flexslider  -->
<link rel="stylesheet" href="/{{ config('path.css') }}/flexslider.css">

<!-- Owl Carousel -->
<link rel="stylesheet" href="/{{ config('path.css') }}/owl.carousel.min.css">
<link rel="stylesheet" href="/{{ config('path.css') }}/owl.theme.default.min.css">

<!-- Flaticons  -->
<link rel="stylesheet" href="/{{ config('path.css') }}/flaticon.css">

<!-- Theme style  -->
<link rel="stylesheet" href="/{{ config('path.css') }}/style.css">

<!-- Modernizr JS -->
<script src="/{{ config('path.js') }}/modernizr-2.6.2.min.js"></script>
<!-- FOR IE9 below -->
<!--[if lt IE 9]>
<script src="/{{ config('path.js') }}/respond.min.js"></script>
<![endif]-->
@yield('styles')
@stack('styles')