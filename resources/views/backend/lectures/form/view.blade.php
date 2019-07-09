<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">Nip</label>
            {!! Form::viewText($data->nip) !!}
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
            <label class="control-label">Tipe Dosen</label>
            @if($data->lecture_type==0)
            {!! Form::viewText("Akademik") !!}
            @else
                {!! Form::viewText("Tahfiz") !!}
            @endif
        </div>
    </div>
    <div class="col-md-12" align="center" id="images">
        <div class="form-group">
            @if($data->image_id  == null)
                <strong>Foto Kosong</strong>
            @else
                <img width="150" height="150" id="images"
                     class="img-responsive"{!! $data->lecture_image->image ? ' src="'.asset(Storage::url($data->lecture_image->image)).'"' : ' data-src="holder.js/150x150?text=Foto"' !!}>
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
