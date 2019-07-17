@extends('backend.layouts.app')

@section('title', $menu.' | ')

@section('content')
    <section class="content-header">
        <h1>{!! $menu !!}</h1>
    </section>

    <section class="content">
        <div class="box box-primary">
        {!! Form::open(['route' => $route.'.store', 'method' => 'POST','files'=>true]) !!}
        {!! csrf_field() !!}

        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                        <label class="control-label">Judul {!! trans('icon.mandatory') !!}</label>
                        <input type="text" class="form-control" name="title" value="{!! old('title') !!}"
                               placeholder="Judul">
                        @if ($errors->has('title'))
                            <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group{{ $errors->has('posted_by') ? ' has-error' : '' }}">
                        <label class="control-label">Di Post Oleh</label>
                        <input type="text" class="form-control" name="posted_by" value="{!! old('posted_by') !!}"
                               placeholder="Di Post Oleh">
                        @if ($errors->has('posted_by'))
                            <span class="help-block">
                    <strong>{{ $errors->first('posted_by') }}</strong>
                </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group" align="center">
                        <label class="control-label">Foto</label>
                        <div class="form-group{!! $errors->has('image_id') ? ' has-error' : '' !!}">
                            <input type="file" class="hidden" name="image_id" id="image_id" placeholder="Foto"
                                   accept="image/*">
                            <img id="preview-foto" width="150" height="150" class="img-responsive"
                                 data-src="holder.js/150x150?text=Klik untuk meng-upload gambar">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group{{ $errors->has('contents') ? ' has-error' : '' }}">
                        <label class="control-label">Konten</label>
                        <textarea id="contents" class="form-control" name="contents"
                                  rows="580"></textarea>
                        @if ($errors->has('contents'))
                            <span class="help-block">
                    <strong>{{ $errors->first('contents') }}</strong>
                </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary" onclick="get_editor_content()">{!! trans('button.save') !!}</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">{!! trans('button.close') !!}</button>
        </div>
        </div>
    </section>

    {!! Form::close() !!}


@endsection

@push('scripts')
    <script>
        tinyMCE.init({
            selector: '#contents',
            height: 400,
            theme: "silver",
            plugins: "fullpage",
            theme_advanced_buttons3_add: "fullpage"
        });

    </script>
    @include($view.'.scripts')
@endpush