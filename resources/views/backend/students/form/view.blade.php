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
<div class="row">
    <table width="100%" class="table table-striped">
        <thead style="background-color: #3c8dbc !important;color: white !important;">
        <tr><th style="text-align: left;
            background-image: linear-gradient(to right, #3c8dbc, white);
            border: none;
            margin-left: -10px;
            width: 100%;
            position: absolute">Foto</th></tr>
        <tr>
    </table>
    <br>
    <div class="col-md-12" align="center" id="images">
        <div class="form-group">
            @if($data->image_id  == null)
                <strong>Foto Kosong</strong>
            @else
                <img width="150" height="150" id="images" class="img-responsive"{!! $data->student_image->image ? ' src="'.asset(Storage::url($data->student_image->image)).'"' : ' data-src="holder.js/150x150?text=Foto"' !!}>
                <p>Klik gambar untuk memperbesar</p>
            @endif

        </div>
    </div>
</div>

<script type="text/javascript">
    var viewerApk = new Viewer(document.getElementById('images'), {
        button: false,
        navbar: false,
        title: false,
        toolbar: false
    });
</script>
