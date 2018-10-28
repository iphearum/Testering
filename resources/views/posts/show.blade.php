@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <span class="btn btn-primary" style="margin-top:5px" onclick="backPage()">back</span>
        {{-- <a href="/posts"></a> --}}
        {{-- <h3 class="">
            {{$post->title}}
        </h3>
        <small>Writen on {{$post->created_at}}</small>
        <p>{{$post->body}}</p>
        <hr> --}}
        <div class="card margin-top5">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-2">
                                <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                            </div>
                            <div class="ml-2">
                                <div class="h5 m-0"><a href="/posts/{{$post->id}}">Name's Post</a></div>
                                <div class="h7 text-muted">Miracles Lee Cross</div>
                            </div>
                        </div>
                        <div>
                            <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                    {{-- <div class="h6 dropdown-header">Configuration</div> --}}
                                    <a href="/posts/{{$post->id}}/edit" class="dropdown-item">Edit</a>
                                    <a class="dropdown-item" href="#">Save</a>
                                    {{-- <a class="dropdown-item" href="#">Delete</a> --}}
                                    {!!Form::open(['action'=>['PostController@destroy',$post->id], 'method'=>'POST'])!!}
                                        {{Form::hidden('_method','DELETE')}}
                                        {{Form::submit('Delete',['class'=>'dropdown-item'])}}
                                    {!!Form::close()!!}
                                    <a class="dropdown-item" href="#">Report</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i><small>Date: {{$post->created_at}}</small></div>
                    <a class="card-link" href="#">
                        <h5 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h5>
                    </a>

                    <p class="card-text">
                        {{$post->body}}
                    </p>
                </div>
                <div class="card-footer">
                    <a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
                    <a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
                    <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
                </div>
            </div>
</div>
    <script>
        // var back = document.getElementById('home-goback');
        function backPage(){
            window.location.href ="/posts";
        }
    </script>
@endsection