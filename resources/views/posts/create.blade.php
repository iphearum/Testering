@extends('layout.app')
@section('content')
    {{-- {!! Form::open(['url'=>'foo/bar']) !!} --}}
    {!! Form::open(['action' => 'PostController@store', 'method' => 'POST']) !!}
        <div class="form-group margin-top10">
            <h3>{{Form::label('title', 'Title')}}</h3>
            {{Form::text('title', '', ['class' => 'form-conrol', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            <h3>{{Form::label('body', 'Body')}}</h3>
            {{Form::textarea('body', '', ['class' => 'form-conrol', 'placeholder' => 'Body'])}}
        </div>
        {{Form::submit('submit',['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection