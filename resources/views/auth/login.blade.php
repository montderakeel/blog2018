@extends('layouts/app')

@section('content')

    <div class="well">
        <h3>Login To Your Profile</h3>
        {!! Form::open(array('route' => 'login', 'class' => 'form')) !!}
            {!! Form::token() !!}
            <div class="form-group">
                {!! Form::label('Username', 'Enter Your User Name', array('class' => 'control-label')) !!}
                {!! Form::text('username', '', array('class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Password', 'Enter Your Password', array('class' => 'control-label')) !!}
                {!! Form::password('password', array('class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Login', array('class' => 'btn btn-primary')) !!}
            </div>
        {!! Form::close() !!}
    </div>

@endsection