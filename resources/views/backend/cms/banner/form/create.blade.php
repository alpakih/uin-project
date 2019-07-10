{!! Form::open(['route' => $route.'.store', 'method' => 'POST','files'=>true]) !!}
<div class="box-body">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label class="control-label">Nama {!! trans('icon.mandatory') !!}</label>
                <input type="text" class="form-control" name="name" value="{!! old('name') !!}" placeholder="Nama">
                @if ($errors->has('name'))
                    <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                <label class="control-label">Deskripsi</label>
                <input type="text" class="form-control" name="description" value="{!! old('description') !!}"
                       placeholder="Deskripsi">
                @if ($errors->has('description'))
                    <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
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
        </div>
    </div>
</div>
<div class="box-footer">
    <button type="submit" class="btn btn-primary">{!! trans('button.save') !!}</button>
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