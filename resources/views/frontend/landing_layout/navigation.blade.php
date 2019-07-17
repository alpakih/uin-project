<nav class="colorlib-nav" role="navigation">
    <div class="upper-menu">
        <div class="container">
            <div class="row">
                <div class="col-xs-4">
                    <p>Simak Akademik Aqidah dan Filsafat Islam</p>
                </div>
                <div class="col-xs-6 col-md-push-2 text-right">
                    @if (!\Session::has('login'))
                        <p class="btn-apply"><a
                                    href="/student/register">{!! trans('button.register') !!}</a>
                        </p>
                        &nbsp;&nbsp;
                        <p class="btn-apply"><a
                                    href="/student/login">{!! trans('button.login') !!}</a>
                        </p>
                    @else
                        <p class="navbar-text navbar-right">Signed in as <a href="javascript:void(0);"
                                                                            class="navbar-link">{!! Session::get('nama') !!}</a>
                        </p>
                        &nbsp;&nbsp;
                        <p class="btn-apply"><a
                                    href="/student/logout">Logout</a>
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
                    <div id="colorlib-logo"><a href="/home">UIN SGD</a></div>
                </div>
                <div class="col-md-10 text-right menu-1">
                    @if (!\Session::has('login'))
                        <ul>
                            <li class="active"><a href="/home">Home</a></li>
                            <li><a href="/about">Tentang</a></li>
                            <li><a href="/announcement">Pengumuman</a></li>
                            <li><a href="/contact">Kontak</a></li>
                        </ul>
                    @else
                        <ul>
                            <li><a href="/student/home">Home</a></li>
                            <li class="has-dropdown">
                                <a href="#">Daftar Ujian</a>
                                <ul class="dropdown">
                                    <li><a href="#">Komprehesif</a></li>
                                    <li><a href="#">Proposal</a></li>
                                    <li><a href="#">Munaqosah</a></li>

                                </ul>
                            </li>
                            <li><a href="#">Ujian Saya</a></li>
                            <li><a href="/student/profile">Profile</a></li>
                        </ul>
                </div>
            </div>
            @endif
        </div>
    </div>
</nav>