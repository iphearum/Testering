@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1>{{$title}}</h1>
        <p>This is the information page</p>
        @if(count($services) > 0)
        <ul class="list-group">
            @foreach ($services as $service)
                <li class="form-control margin-top5">{{$service}}</li>
            @endforeach
        </ul>
        @endif
    </div>
@endsection
