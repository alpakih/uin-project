{!! Form::open(['route' => [$route.'.update', encodeids($data->id)], 'method' => 'PUT']) !!}
<div class="box-body">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('nip') ? ' has-error' : '' }}">
                <label class="control-label">NIP {!! trans('icon.mandatory') !!}</label>
                <input type="text" class="form-control" name="nip"
                       value="{!! old('nip')!==null ? old('nip') : $data->nip !!}" placeholder="NIP">
                @if ($errors->has('nip'))
                    <span class="help-block">
                    <strong>{{ $errors->first('nip') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                <label class="control-label">Nama{!!trans('icon.mandatory') !!}</label>
                <input type="text" class="form-control" name="nama"
                       value="{!! old('nama')!==null ? old('nama') : $data->nama !!}" placeholder="Nama">
                @if ($errors->has('nama'))
                    <span class="help-block">
                    <strong>{{ $errors->first('nama') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('no_hp') ? ' has-error' : '' }}">
                <label class="control-label">No Hp{!! trans('icon.mandatory') !!}</label>
                <input type="text" class="form-control" name="no_hp"
                       value="{!! old('no_hp')!==null ? old('no_hp') : $data->no_hp !!}" placeholder="Nomor Hp">
                @if ($errors->has('no_hp'))
                    <span class="help-block">
                    <strong>{{ $errors->first('no_hp') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">

            <div class="form-group{{ $errors->has('lecture_type') ? ' has-error' : '' }}">
                <label class="control-label">Tipe Dosen</label>
                <select class="form-control select2" name="semester_id" data-placeholder="Tipe Dosen">
                    <option></option>
                    <option value="0"{!! old('lecture_type')!==null ? (old('lecture_type')==$data->lecture_type? ' selected' : '') : ($data->lecture_type==0 ? ' selected' : '') !!}>
                        Akademik
                    </option>
                    <option value="1"{!! old('lecture_type')!==null ? (old('lecture_type')==$data->lecture_type ? ' selected' : '') : ($data->lecture_type==1 ? ' selected' : '') !!}>
                        Tahfiz
                    </option>
                </select>
                @if ($errors->has('lecture_type'))
                    <span class="help-block">
                    <strong>{{ $errors->first('lecture_type') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="col-md-12" align="center">
            <div class="form-group{!! $errors->has('image_id') ? ' has-error' : '' !!}">
                <input type="file" class="hidden img-responsive" name="image_id" id="image_id"
                       value="{{ old('image_id') }}"
                       placeholder="Foto" accept="image/*">
                <input type="hidden" name="foto_old" value="{{ $data->image_id!=null?$data->lecture_image->image:""}}">
                <img id="preview-foto" width="150" height="150"
                     class="img-responsive"{!! $data->image_id!=null ? ' src="'.asset(Storage::url($data->lecture_image->image)).'"' : ' data-src="holder.js/150x150?text=Klik untuk meng-upload gambar"' !!}>

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
