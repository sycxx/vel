@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 1)
        @foreach($posts as $post) 
            <div class="card card-body bg-light">
                <ul class="list-group">
                    <h3>{{$post->title}}</h3>
                        <small>Written on {{$post->created_at}}</small>
                </ul>        
            </div>
        @endforeach
    @else
        <p>No Post Founds</p>
    @endif

@endsection

