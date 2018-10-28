@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        {{-- Pop up post --}}
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Post</button>
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content margin">
                    {!! Form::open(['action' => 'PostController@store', 'method' => 'POST']) !!}
                    <div class="form-group margin">
                        {{-- {{Form::label('title', 'Title')}} --}}
                        {{Form::text('title', '', ['class'=>'form-control', 'placeholder' => 'Title', 'aria-label' => 'small', 'aria-describedby' => 'inputGroup-sizing-sm'])}}
                    </div>
                    <div class="form-group margin">
                        {{-- {{Form::label('body', 'Body')}} --}}
                        {{Form::textarea('body', '', ['class' => 'form-control','style'=>'border:1px solid blue; height:80px', 'placeholder' => 'Text Body'])}}
                    </div>
                    {{Form::submit('submit',['class' => 'btn btn-primary margin pull-right'])}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

        {{-- Loop post --}}
        @if (count($posts) > 1)
        @foreach ($posts as $post)
             {{-- <div class="card gedf-card margin"> --}}
             <div class="card margin-top5">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-2">
                                <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                            </div>
                            <div class="ml-2">
                                <div class="h5 m-0">
                                    <a href="/posts/{{$post->id}}">
                                        {{-- {{$post->user->name}} --}}
                                        Name's Post
                                    </a>
                                </div>
                                <div class="h7 text-muted">
                                    {{--  --}}
                                    Place's Post
                                </div>
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
                        {{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo recusandae nulla rem eos ipsa praesentium esse magnam nemo dolor
                        sequi fuga quia quaerat cum, obcaecati hic, molestias minima iste voluptates. --}}
                    </p>
                </div>
                <div class="card-footer">
                    <a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
                    <a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
                    <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
                </div>
            </div>
            @endforeach
            @else
                <p>No posts found</p>
            @endif
            {{-- end loop post --}}
        </div>
    </div>
    <script>
        function post(){
            window.location.href ="/posts/create";
        }
    </script>
@endsection

{{-- MVC --}}
{{-- model --}}
{{-- View --}}
{{-- Controller --}}
{{-- Route push data to api and cover all data example url:www.example.com--}}
{{-- backend -> controller example login -> API--}}

{{-- MVC --}}
{{-- view -> controller -> model --}}
{{-- Composer install dependency for laravel --}}