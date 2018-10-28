<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .signup,.login{
            display: none;
        }
        .btn01{
            display: none;
            width: 60px;
        }
        .margin{
            margin: 10px;
        }
        .margin-top5{
            margin-top: 5px;
        }
        .margin-top10{
            margin-top: 50px;
        }
        tr,td{
            padding: 5px;
        }
        .margin-bottom{
            margin-bottom: 20px;
        }
        .margin-right{
            margin-right:100px;
        }
    </style>
</head>
<body>
    <div class="fixed-top">
        @include('inc.navbar')
    </div>
    <div class="container-fluid">
        <div class="margin-top10">
            @include('inc.messager')
        </div>
        @yield('content')
    </div>
</body>
</html>
