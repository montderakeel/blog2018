@extends('layouts.app')

@section('content')
    <div class="well">
        {!! Form::open(['route' => 'update.profile', 'method' => 'put']) !!}
        {!! Form::hidden('id', $user->id) !!}
        <div class="form-group">
            {!! Form::label('name', 'Username', ['class' => 'control-label']) !!}
            {!! Form::text('name', $user->name, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Save', ['class' => 'btn btn-success btn-sm']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection