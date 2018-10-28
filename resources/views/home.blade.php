@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
    
        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Dashboard</div>
            
                            <div class="card-body">
                                @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            You are logged in!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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