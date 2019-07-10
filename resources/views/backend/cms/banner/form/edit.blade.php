{!! Form::open(['route' => [$route.'.update', encodeids($data->id)], 'method' => 'PUT']) !!}
<div class="box-body">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label class="control-label">Nama{!!trans('icon.mandatory') !!}</label>
                <input type="text" class="form-control" name="name"
                       value="{!! old('name')!==null ? old('name') : $data->name !!}" placeholder="Nama">
                @if ($errors->has('name'))
                    <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                <label class="control-label">Deskripsi{!! trans('icon.mandatory') !!}</label>
                <input type="text" class="form-control" name="description"
                       value="{!! old('description')!==null ? old('description') : $data->description !!}" placeholder="Deskripsi">
                @if ($errors->has('description'))
                    <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="col-md-12" align="center">
            <div class="form-group{!! $errors->has('image_id') ? ' has-error' : '' !!}">
                <input type="file" class="hidden img-responsive" name="image_id" id="image_id"
                       value="{{ old('image_id') }}"
                       placeholder="Foto" accept="image/*">
                <input type="hidden" name="foto_old" value="{{ $data->image_id!=null?$data->corousel_image->image:""}}">
                <img id="preview-foto" width="150" height="150"
                     class="img-responsive"{!! $data->image_id!=null ? ' src="'.asset(Storage::url($data->corousel_image->image)).'"' : ' data-src="holder.js/150x150?text=Klik untuk meng-upload gambar"' !!}>

                <p>Klik gambar untuk mengedit</p>
                @if ($errors->has('image_id'))
                    <span class="help-block">
                    <strong>{!! $errors->first('image_id') !!}</strong>
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
    });

</script>
