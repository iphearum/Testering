@extends('layout.app')
@section('content')

<div class="container-fluid gedf-wrapper">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                {{-- <div class="card-body">
                    <div class="h5">@LeeCross</div>
                    <div class="h7 text-muted">Fullname : Miracles Lee Cross</div>
                    <div class="h7">Developer of web applications, JavaScript, PHP, Java, Python, Ruby, Java, Node.js,
                        etc.
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="h6 text-muted">Followers</div>
                        <div class="h5">5.2342</div>
                    </li>
                    <li class="list-group-item">
                        <div class="h6 text-muted">Following</div>
                        <div class="h5">6758</div>
                    </li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul> --}}
            </div>
        </div>
        <div class="col-md-6 gedf-main">
        <button class="btn btn-primary margin" onclick="post()">Post</button>
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