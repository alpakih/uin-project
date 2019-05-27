<!-- jQuery -->
<script src="/{{ config('path.js') }}/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="/{{ config('path.js') }}/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="/{{ config('path.js') }}/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="/{{ config('path.js') }}/jquery.waypoints.min.js"></script>
<!-- Stellar Parallax -->
<script src="/{{ config('path.js') }}/jquery.stellar.min.js"></script>
<!-- Flexslider -->
<script src="/{{ config('path.js') }}/jquery.flexslider-min.js"></script>
<!-- Owl carousel -->
<script src="/{{ config('path.js') }}/owl.carousel.min.js"></script>
<!-- Magnific Popup -->
<script src="/{{ config('path.js') }}/jquery.magnific-popup.min.js"></script>
<script src="/{{ config('path.js') }}/magnific-popup-options.js"></script>
<!-- Counters -->
<script src="/{{ config('path.js') }}/jquery.countTo.js"></script>
<!-- Main -->
<script src="/{{ config('path.js') }}/main.js"></script>
@yield('scripts')
@stack('scripts')
