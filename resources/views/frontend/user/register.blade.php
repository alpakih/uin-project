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
                        <div id="colorlib-logo"><a href="/">UIN SGD</a></div>
                    </div>
                    <div class="col-md-10 text-right menu-1">
                        <ul>
                            <li class="active"><a href="/">Home</a></li>
                            <li class="has-dropdown">
                                <a href="#">Ujian</a>
                            </li>
                            <li><a href="#">Tentang</a></li>
                            <li><a href="#">Berita</a></li>
                            <li><a href="#">Kontak</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="col-md-6  col-md-offset-3 animate-box">
            <center><h2>Register</h2></center>
            <form action="#">
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="nim" class="control-label">Nim :</label>
                        <input type="text" id="nim" class="form-control" placeholder="Nim">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="nim" class="control-label">Semester :</label>
                        <select id="semester" class="form-control">
                            <option value="">--Pilih Semester--</option>
                            <option value="1">Semester 1</option>
                            <option value="2">Semester 2</option>
                            <option value="3">Semester 3</option>
                            <option value="4">Semester 4</option>
                            <option value="5">Semester 5</option>
                            <option value="6">Semester 6</option>
                            <option value="7">Semester 7</option>
                            <option value="8">Semester 8</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="nim" class="control-label">Kelas :</label>
                        <select id="kelas" class="form-control">
                            <option value="">--Pilih Kelas--</option>
                            <option value="1">Kelas 1</option>
                            <option value="2">Kelas 2</option>
                            <option value="3">Kelas 3</option>
                            <option value="4">Kelas 4</option>
                            <option value="5">Kelas 5</option>
                            <option value="6">Kelas 6</option>
                            <option value="7">Kelas 7</option>
                            <option value="8">Kelas 8</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="noHandphone" class="control-label">Nomor Hp :</label>
                        <input type="number" id="noHandphone" class="form-control" placeholder="Nomor Handphone">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="alamatAsal" class="control-label">Alamat Asal :</label>
                        <textarea id="alamatAsal" class="form-control" placeholder="Alamat Asal"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="alamatDomisili">Alamat Domisili :</label>
                        <textarea id="alamatDomisili" class="form-control" placeholder="Alamat Domisili"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="nim" class="control-label">Dosen Pembingbing :</label>
                        <select id="kelas" class="form-control">
                            <option value="">--Pilih Dosen Pembimbing--</option>
                            <option value="1">Dosen 1</option>
                            <option value="2">Dosen 2</option>
                            <option value="3">Dosen 3</option>
                            <option value="4">Dosen 4</option>
                            <option value="5">Dosen 5</option>
                            <option value="6">Dosen 6</option>
                            <option value="7">Dosen 7</option>
                            <option value="8">Dosen 8</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="nim" class="control-label">Dosen Tahfiz :</label>
                        <select id="kelas" class="form-control">
                            <option value="">--Pilih Dosen Tahfiz--</option>
                            <option value="1">Dosen 1</option>
                            <option value="2">Dosen 2</option>
                            <option value="3">Dosen 3</option>
                            <option value="4">Dosen 4</option>
                            <option value="5">Dosen 5</option>
                            <option value="6">Dosen 6</option>
                            <option value="7">Dosen 7</option>
                            <option value="8">Dosen 8</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" value="Register" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection
