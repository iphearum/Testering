@extends('layout.app')
@section('content')
    <h1>This is a Web page Post</h1>
    @if (count($posts) > 1)
        @foreach ($posts as $post)
            <div class="container" style="border:1px solid blue; border-radius:20px; margin:4px; padding: 5px 20px;">
                <h2><a href="/posts/{{$post->id}}">{{$post->story}}</a></h2>
                <small>Writen on {{$post->created_at}}</small>
            </div>
        @endforeach
    @else
    <p>No posts found</p>
    @endif
@endsection