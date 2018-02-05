@extends('layouts/app')

@section('content')

    @if(session('tvshow'))
        <div class="alert alert-success">{{ session('tvshow') }}</div>
    @endif
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>{{ Auth::user()->name }}</h4>
        </div>
        <div class="panel-body">
            <h4>My Favourite Tv-Show</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="well">
                        E-Mial: <strong>{{ Auth::user()->email }}</strong>
                        <br>
                        TV-Show: <strong>{{ count($tvshows->tvshows) }}</strong>
                        <hr>
                        <a class="btn btn-info btn-sm" href="/edit-profile">Edit Settings</a>
                        <a class="btn btn-danger btn-sm" href="/logout">Logout</a>
                    </div>
                </div>
                <div class="col-md-8">
                    @foreach($tvshows->tvshows as $tvshow)
                    <div class="col-sm-3" style="margin-bottom:20px;">
                        {!! Html::image('images/'.$tvshow->img, $tvshow->title, array('class' => 'img-responsive img-rounded')) !!}
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection