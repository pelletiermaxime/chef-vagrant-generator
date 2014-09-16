@extends('_layouts.default')

@section('main')
@include('_layouts.messages')

{{-- Form::model($sysadmin, array('route' => 'generator.create')) --}}
{!! Form::open(array('route' => 'generator.create')) !!}

    <div class="form-group">
        {!! Form::label('vmName', 'VM name') !!}
        {!! Form::text('vmName', 'Vagrant generated VM', ["class" => "form-control"]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('memory', 'Memory') !!}
        {!! Form::text('memory', '512', ["class" => "form-control"]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('ipAddress', 'IP Adresse') !!}
        {!! Form::text('ipAddress', '192.168.66.66', ["class" => "form-control"]) !!}
    </div>

    {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}

@stop
