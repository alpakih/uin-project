@extends('frontend.landing_layout.app')

@section('title', $menu.' | ')
@section('content')
    @include('frontend.landing_layout.navigation')
    <div class="row">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="col-md-6  col-md-offset-3 animate-box">
            <center><h2>Register</h2></center>
            <form action="{{url('/student/register')}}" method="POST">
                {{ csrf_field() }}
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="nim" class="control-label">Nim :</label>
                        <input type="text" id="nim" name="nim" class="form-control" placeholder="Nim">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="nim" class="control-label">Nama :</label>
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama">
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
                        <select class="form-control select2" name="kelas">
                            <option></option>
                            {{--                            @foreach ($kelas as $k)--}}
                            {{--                                <option value="{!! $k->id !!}"{!! old('kelas')==$k->id ? ' selected' : '' !!}>{!! $k->name !!}</option>--}}
                            {{--                            @endforeach--}}
                        </select>
                        {{--                        @if ($errors->has('kelas'))--}}
                        {{--                            <span class="help-block">--}}
                        {{--                    <strong>{{ $errors->first('kelas') }}</strong>--}}
                        {{--                </span>--}}
                        {{--                        @endif--}}
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="noHandphone" class="control-label">Nomor Hp :</label>
                        <input type="number" id="noHandphone" class="form-control" name="no_hp"
                               placeholder="Nomor Handphone">
                    </div>
                </div>
                {{--<div class="row form-group">
                    <div class="col-md-12">
                        <label for="alamatAsal" class="control-label">Alamat Asal :</label>
                        <textarea id="alamatAsal" name="alamat_asal" class="form-control" placeholder="Alamat Asal"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="alamatDomisili">Alamat Domisili :</label>
                        <textarea id="alamatDomisili" name="alamat_domisili" class="form-control" placeholder="Alamat Domisili"></textarea>
                    </div>
                </div>--}}
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="username">Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control"
                               placeholder="Password">
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" value="Register" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection
