<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">{!! trans('label.name') !!}</label>
            {!! Form::viewText($data->title) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">Di Post Oleh</label>
            {!! Form::viewText($data->posted_by) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">Konten</label>
            {!! Form::viewText($data->content) !!}
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
