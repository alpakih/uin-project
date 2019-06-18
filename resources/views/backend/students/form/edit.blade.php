{!! Form::open(['route' => [$route.'.update', encodeids($data->id)], 'method' => 'PUT']) !!}
<div class="box-body">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('nim') ? ' has-error' : '' }}">
                <label class="control-label">NIM {!! trans('icon.mandatory') !!}</label>
                <input type="text" class="form-control" name="nim"
                       value="{!! old('nim')!==null ? old('nim') : $data->nim!!}" placeholder="NIM">
                @if ($errors->has('nim'))
                    <span class="help-block">
                    <strong>{{ $errors->first('nim') }}</strong>
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
                <input type="number" class="form-control" name="no_hp"
                       value="{!! old('no_hp')!==null ? old('no_hp') : $data->no_hp !!}" placeholder="Nomor Hp">
                @if ($errors->has('no_hp'))
                    <span class="help-block">
                    <strong>{{ $errors->first('no_hp') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('anak_ke') ? ' has-error' : '' }}">
                <label class="control-label">Anak Ke{!! trans('icon.mandatory') !!}</label>
                <input type="number" class="form-control" name="anak_ke"
                       value="{!! old('anak_ke')!==null ? old('anak_ke') : $data->anak_ke!!}" placeholder="Anak Ke">
                @if ($errors->has('anak_ke'))
                    <span class="help-block">
                    <strong>{{ $errors->first('anak_ke') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('pekerjaan_ortu') ? ' has-error' : '' }}">
                <label class="control-label">Nama{!!trans('icon.mandatory') !!}</label>
                <input type="text" class="form-control" name="pekerjaan_ortu"
                       value="{!! old('pekerjaan_ortu')!==null ? old('pekerjaan_ortu') : $data->pekerjaan_ortu !!}"
                       placeholder="Pekerjaan Ortu">
                @if ($errors->has('pekerjaan_ortu'))
                    <span class="help-block">
                    <strong>{{ $errors->first('pekerjaan_ortu') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('penghasilan_ortu') ? ' has-error' : '' }}">
                <label class="control-label">Anak Ke{!! trans('icon.mandatory') !!}</label>
                <input type="number" class="form-control" name="penghasilan_ortu"
                       value="{!! old('penghasilan_ortu')!==null ? old('penghasilan_ortu') : $data->penghasilan_ortu!!}"
                       placeholder="Penghasilan Ortu">
                @if ($errors->has('penghasilan_ortu'))
                    <span class="help-block">
                    <strong>{{ $errors->first('penghasilan_ortu') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('semester_id') ? ' has-error' : '' }}">
            <label class="control-label">Semester</label>
            <select class="form-control select2" name="semester_id" data-placeholder="Semester">
                <option></option>
                @foreach ($semesters as $semester)
                    <option value="{!! $semester->id !!}"{!! old('semester_id')!==null ? (old('semester_id')==$semester->id ? ' selected' : '') : ($data->semester_id==$semester->id ? ' selected' : '') !!}>{!! $semester->name !!}</option>
                @endforeach
            </select>
            @if ($errors->has('semester_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('semester_id') }}</strong>
                </span>
            @endif
        </div>
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('angkatan') ? ' has-error' : '' }}">
                <label class="control-label">Angkatan{!! trans('icon.mandatory') !!}</label>
                <input type="number" class="form-control" name="angkatan"
                       value="{!! old('angkatan')!==null ? old('angkatan') : $data->angkatan!!}" placeholder="Angkatan">
                @if ($errors->has('angkatan'))
                    <span class="help-block">
                    <strong>{{ $errors->first('angkatan') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                <label class="control-label">Alamat</label>
                <textarea class="form-control" name="alamat" placeholder="Alamat" rows="4">{!! old('alamat')!==null ? old('alamat') : $data->alamat !!}</textarea>
                @if ($errors->has('alamat'))
                    <span class="help-block">
                    <strong>{{ $errors->first('alamat') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('alamat_domisili') ? ' has-error' : '' }}">
                <label class="control-label">Alamat</label>
                <textarea class="form-control" name="alamat_domisili" placeholder="Alamat Domisili" rows="4">{!! old('alamat_domisili')!==null ? old('alamat_domisili') : $data->alamat_domisili !!}</textarea>
                @if ($errors->has('alamat_domisili'))
                    <span class="help-block">
                    <strong>{{ $errors->first('alamat_domisili') }}</strong>
                </span>
                @endif
            </div>
        </div>
    </div>
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">{!! trans('button.edit') !!}</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">{!! trans('button.close') !!}</button>
    </div>
{!! Form::close() !!}