@extends('layout.app')
@section('content')
    <h1>This is a Web page Show</h1>
    <h2>{{$post->story}}</h2>
    <small>Writen on {{$post->created_at}}</small>
         
@endsection