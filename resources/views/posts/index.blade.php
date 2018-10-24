@extends('layout.app')
@section('content')
    <h1>Post</h1>
    @if (count($posts)>1)
        @foreach ($posts as $post)
            <div class="well">
                <h2>{{$post->title}}</h2>
                <small>Writen on {{$post->create_at}}</small>
            </div>
        @endforeach
    @else
        <p>No posts found</p>
    @endif
@endsection