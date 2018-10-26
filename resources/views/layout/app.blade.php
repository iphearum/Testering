<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        {{-- @include('css.style') --}}
        <meta charset="utf-8">
        <title>{{config('app.name','myWeb')}}</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
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
                margin-top: 10px;
            }
            tr,td{
                padding: 5px;
            }
            .uppercast{
                
            }
        </style>
        
    </head>
    <body>
         @include('inc.navbar')
        <div class="container-fluid">
            <div class="margin-top10">
                @include('inc.messager')
            </div>
            @yield('content')
        </div>
    </body>
</html>