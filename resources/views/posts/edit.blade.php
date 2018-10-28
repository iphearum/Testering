@extends('layouts.app')
@section('content')
    {{-- {!! Form::open(['url'=>'foo/bar']) !!} --}}
    <div class="modal-lg">
        <div class="container-fluid margin">
            {!! Form::open(['action' => ['PostController@update',$post->id], 'method' => 'POST']) !!}
                <div class="form-group margin-top10">
                    <h3>{{Form::label('title', 'Title')}}</h3>
                    {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
                </div>
                <div class="form-group ">
                    <h3>{{Form::label('body', 'Body')}}</h3>
                    {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Body'])}}
                </div>
                {{Form::hidden('_method','PUT')}}
                {{Form::submit('submit',['class' => 'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection