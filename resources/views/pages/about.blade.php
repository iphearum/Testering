@extends('layout.app')

@section('content')
        <h1>{{$title}}</h1>
        <p>This is the About page</p>
        @include('inc.about')
        <abbr title="Hello to other world" class="btn btn-primary">world</abbr>
@endsection