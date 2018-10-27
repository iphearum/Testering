@extends('layout.app')
@section('content')

<div class="container-fluid gedf-wrapper">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="h5">NOP PHEARUM</div>
                    <div class="h7 text-muted">Fullname : Phnom Penh, Cambodia</div>
                    <div class="h7">Hello to other world</div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="h6 text-muted">Followers</div>
                        <div class="h5">50K</div>
                    </li>
                    <li class="list-group-item">
                        <div class="h6 text-muted">Following</div>
                        <div class="h5">6758</div>
                    </li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
        </div>
        <div class="col-md-6 gedf-main">
        {{-- <button class="btn btn-primary margin" onclick="post()">Post</button> --}}
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Post</button>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                {!! Form::open(['action' => 'PostController@store', 'method' => 'POST']) !!}
                <div class="form-group margin-top10">
                    <h3>{{Form::label('title', 'Title')}}</h3>
                    {{Form::text('title', '', ['class'=>'form-control', 'placeholder' => 'Title', 'aria-label' => 'small', 'aria-describedby' => 'inputGroup-sizing-sm'])}}
                </div>
                <div class="form-group">
                    <h3>{{Form::label('body', 'Body')}}</h3>
                    {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body'])}}
                </div>
                {{Form::submit('submit',['class' => 'btn btn-primary'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    @if (count($posts) > 1)
        @foreach ($posts as $post)
            {{-- <div class="container" style="border:1px solid blue; border-radius:20px; margin:4px; padding: 5px 20px;">
                <h2><a href="/posts/{{$post->id}}">{{$post->story}}</a></h2>
                <small>Writen on {{$post->created_at}}</small>
            </div> --}}
             <!--- \\\\\\\Post-->
             <div class="card gedf-card margin">
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
                                    <div class="h6 dropdown-header">Configuration</div>
                                    <a class="dropdown-item" href="#">Save</a>
                                    <a class="dropdown-item" href="#">Hide</a>
                                    <a class="dropdown-item" href="#">Report</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i><small>Date: {{$post->created_at}}</small></div>
                    <a class="card-link" href="#">
                        <h5 class="card-title">{{$post->title}}</h5>
                    </a>

                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo recusandae nulla rem eos ipsa praesentium esse magnam nemo dolor
                        sequi fuga quia quaerat cum, obcaecati hic, molestias minima iste voluptates.
                    </p>
                </div>
                <div class="card-footer">
                    <a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
                    <a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
                    <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
                </div>
            </div>
            <!-- Post /////-->
        @endforeach
    @else
    <p>No posts found</p>
    @endif

    <script>
        function post(){
            window.location.href ="/posts/create";
        }
    </script>
@endsection

{{-- Composer install dependency for laravel --}}