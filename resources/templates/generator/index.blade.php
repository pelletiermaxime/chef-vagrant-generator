@extends('_layouts.default')

@section('main')

{!! Form::open(array('route' => 'generator.store')) !!}
    <div class="form-group">
        <label for="vmName">VM name</label>
        {!! Form::text('vmName', $general->vmName, ["class" => "form-control"]) !!}
    </div>

    <div class="form-group">
        <label for="memory">Memory</label>
        {!! Form::text('memory', $general->memory, ["class" => "form-control"]) !!}
    </div>

    <div class="form-group">
        <label for="ipAddress">IP Address</label>
        {!! Form::text('ipAddress', $general->ipAddress, ["class" => "form-control"]) !!}
    </div>

    <div class="form-group">
        <label for="distro">Linux Distribution</label>
        {!! Form::select('distro', $general->distros(), null, ["class" => "form-control"]) !!}
    </div>

    <button type="submit" class="btn btn-primary">Create</button>
</form>

@stop
