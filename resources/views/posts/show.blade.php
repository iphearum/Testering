@extends('layout.app')
@section('content')
<span class="btn btn-primary" style="margin-top:5px" onclick="backPage()">back</span>
    {{-- <a href="/posts"></a> --}}
    <h3 class="uppercase">{{$post->title}}</h3>
    <small>Writen on {{$post->created_at}}</small>
    <p>{{$post->body}}</p>
    <script>
        // var back = document.getElementById('home-goback');
        function backPage(){
            window.location.href ="/posts";
        }
    </script>
@endsection