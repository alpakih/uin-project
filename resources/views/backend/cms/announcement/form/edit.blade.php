@extends('backend.layouts.app')

@section('title', $menu.' | ')

@section('content')
    <section class="content-header">
        <h1>{!! $menu !!}</h1>
    </section>

    <section class="content">
        <div class="box box-primary">
            {!! Form::open(['route' => [$route.'.update', encodeids($data->id)], 'method' => 'PUT']) !!}
            {!! csrf_field() !!}
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label class="control-label">Judul{!!trans('icon.mandatory') !!}</label>
                            <input type="text" class="form-control" name="title"
                                   value="{!! old('title')!==null ? old('title') : $data->title !!}"
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
                            <label class="control-label">Di Post Oleh{!! trans('icon.mandatory') !!}</label>
                            <input type="text" class="form-control" name="posted_by"
                                   value="{!! old('posted_by')!==null ? old('posted_by') : $data->posted_by !!}"
                                   placeholder="Di Post Oleh">
                            @if ($errors->has('posted_by'))
                                <span class="help-block">
                    <strong>{{ $errors->first('posted_by') }}</strong>
                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group{!! $errors->has('image_id') ? ' has-error' : '' !!}">
                            <input type="file" class="hidden img-responsive" name="image_id" id="image_id"
                                   value="{{ old('image_id') }}"
                                   placeholder="Foto" accept="image/*">
                            <input type="hidden" name="foto_old"
                                   value="{{ $data->image_id!=null?$data->announcement_image->image:""}}">
                            <img id="preview-foto" width="150" height="150"
                                 class="img-responsive"{!! $data->image_id!=null ? ' src="'.asset(Storage::url($data->announcement_image->image)).'"' : ' data-src="holder.js/150x150?text=Klik untuk meng-upload gambar"' !!}>

                            <p>Klik gambar untuk mengedit</p>
                            @if ($errors->has('image_id'))
                                <span class="help-block">
                    <strong>{!! $errors->first('image_id') !!}</strong>
                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group{{ $errors->has('contents') ? ' has-error' : '' }}">
                            <label class="control-label">Konten</label>
                            <textarea class="form-control" id="contents" name="contents" placeholder="Konten"
                                      rows="4">{!! old('contents')!==null ? old('contents') : $data->contents !!}</textarea>
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
                <button type="submit" class="btn btn-primary">{!! trans('button.edit') !!}</button>
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">{!! trans('button.close') !!}</button>
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
