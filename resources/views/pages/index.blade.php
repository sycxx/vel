@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is the laravel application from nol</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">login</a> <a class="btn btn-success btn-lg" href="/register" role="button">register</a></p>
    </div>
@endsection