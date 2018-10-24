@extends('layout.app')

@section('content')
    <h1>{{$title}}</h1>
    <div>
        <h1>Wellcome to Page Home</h1>
        <p><a href="">click here</a><button class="btn btn-primary">Sign Up</button></p>
    </div>
    @if(count($services) > 0)
    <ul class="list-group">
        @foreach ($services as $service)
            <li class="list-group-item">{{$service}}</li>
        @endforeach
    </ul>
    @endif
    @include('inc.services')
@endsection