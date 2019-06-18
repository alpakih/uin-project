<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">{!! trans('label.name') !!}</label>
            {!! Form::viewText($data->nim) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">{!! trans('label.name') !!}</label>
            {!! Form::viewText($data->nama) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">{!! trans('label.name') !!}</label>
            {!! Form::viewText($data->no_hp) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">Anak Ke</label>
            {!! Form::viewText($data->anak_ke) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">Pekerjaan Ortu</label>
            {!! Form::viewText($data->pekerjaan_ortu) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">Penghasilan Ortu</label>
            {!! Form::viewText($data->penghasilan_ortu) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">Kelas</label>
            {!! Form::viewText($data->namaKelas) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">Semester</label>
            {!! Form::viewText($data->semester) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">Angkatan</label>
            {!! Form::viewText($data->angkatan) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">Alamat</label>
            {!! Form::viewTextarea($data->alamat) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">Alamat Domisili</label>
            {!! Form::viewTextarea($data->alamat_domisili) !!}
        </div>
    </div>
</div>
