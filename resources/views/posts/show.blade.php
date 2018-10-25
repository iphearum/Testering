@extends('layout.app')
@section('content')
    <h1>This is a Web page Show</h1>
    <span class="btn btn-outline-primary margin"><a href="/posts">back</a></span>
    <h2>{{$post->story}}</h2>
    <small>Writen on {{$post->created_at}}</small>
         
@endsection