{!! Form::open(['route' => [$route.'.update', encodeids($data->id)], 'method' => 'PUT']) !!}
<div class="box-body">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                <label class="control-label">Judul{!!trans('icon.mandatory') !!}</label>
                <input type="text" class="form-control" name="title"
                       value="{!! old('title')!==null ? old('title') : $data->title !!}" placeholder="Judul">
                @if ($errors->has('title'))
                    <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
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
        <div class="col-md-12">
            <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                <label class="control-label">Konten</label>
                <textarea class="form-control" name="contens" placeholder="Konten"
                          rows="4">{!! old('content')!==null ? old('content') : $data->content !!}</textarea>
                @if ($errors->has('content'))
                    <span class="help-block">
                    <strong>{{ $errors->first('content') }}</strong>
                </span>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="box-footer">
    <button type="submit" class="btn btn-primary">{!! trans('button.edit') !!}</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">{!! trans('button.close') !!}</button>
</div>
{!! Form::close() !!}

<script>
    $(function () {
        var previewApk = document.getElementById('preview-foto');
        Holder.run({
            images: [previewApk]
        });

        tinyMCE.init({
            theme: "advanced",
            mode: "textareas",
            plugins: "fullpage",
            theme_advanced_buttons3_add: "fullpage"
        });
    });


</script>
