{!! Form::open(['route' => $route.'.store', 'method' => 'POST','files'=>true]) !!}
<div class="box-body">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('nip') ? ' has-error' : '' }}">
                <label class="control-label">NIP{!!trans('icon.mandatory') !!}</label>
                <input type="text" class="form-control" name="nip" value="{!! old('nip') !!}" placeholder="NIP">
                @if ($errors->has('nip'))
                    <span class="help-block">
                    <strong>{{ $errors->first('nip') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                <label class="control-label">Nama {!! trans('icon.mandatory') !!}</label>
                <input type="text" class="form-control" name="nama" value="{!! old('nama') !!}" placeholder="Nama">
                @if ($errors->has('nama'))
                    <span class="help-block">
                    <strong>{{ $errors->first('nama') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('no_hp') ? ' has-error' : '' }}">
                <label class="control-label">Nomor Hp</label>
                <input type="text" class="form-control" name="no_hp" value="{!! old('no_hp') !!}"
                       placeholder="Nomor Hp">
                @if ($errors->has('no_hp'))
                    <span class="help-block">
                    <strong>{{ $errors->first('no_hp') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('lecture_type') ? ' has-error' : '' }}">
                <label class="control-label">Semester</label>
                <select class="form-control select2" name="lecture_type" data-placeholder="Tipe Dosen">
                    <option></option>
                    <option value="0">Akademik</option>
                    <option value="1">Tahfiz</option>
                </select>
                @if ($errors->has('lecture_type'))
                    <span class="help-block">
                    <strong>{{ $errors->first('lecture_type') }}</strong>
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