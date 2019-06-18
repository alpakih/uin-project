{!! Form::open(['route' => $route.'.store', 'method' => 'POST']) !!}
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
    </div>
</div>
<div class="box-footer">
    <button type="submit" class="btn btn-primary">{!! trans('button.save') !!}</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">{!! trans('button.close') !!}</button>
</div>
{!! Form::close() !!}
