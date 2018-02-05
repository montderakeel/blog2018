@extends('layouts.app')

@section('content')

    {!! Form::open(array('route' => 'tvshow.store', 'files' => true, 'class' => 'form well')) !!}
    {!! Form::token() !!}
    {!! Form::hidden('user_id', Auth::user()->id) !!}
        <div class="form-group">
            {!! Form::label('title', 'Enter Tvshow Name', array('class' => 'control-form')) !!}
            {!! Form::text('title', '', array('class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            {!! Form::label('img', 'Select An Image', array('class' => 'control-label')) !!}
            {!! Form::file('img') !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create', array('class' => 'btn btn-success btn-sm')) !!}
        </div>
    {!! Form::close() !!}

@endsection