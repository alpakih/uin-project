<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">{!! trans('label.name') !!}</label>
            {!! Form::viewText($data->name) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">Deskripsi</label>
            {!! Form::viewText($data->description) !!}
        </div>
    </div>

    <div class="col-md-12" align="center" id="images">
        <div class="form-group">
            @if($data->image_id  == null)
                <strong>Foto Kosong</strong>
            @else
                <img width="150" height="150" id="images"
                     class="img-responsive"{!! $data->image_id ? ' src="'.asset(Storage::url($data->corousel_image->image)).'"' : ' data-src="holder.js/150x150?text=Foto"' !!}>
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
