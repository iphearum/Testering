@extends('layout.app')

@section('content')
    <div class="jumbotron text-center margin" id = "replace">
        <h1>{{$title}}</h1>
        <p>This is the index page</p>
            <span class="btn btn-primary btn-default bs-popover-bottom" onclick="login()">Sign In</span>
            <span class="btn btn-primary btn-danger bs-popover-bottom" onclick="signup()">Sign Up</span>
    </div>
    <span class="btn btn-primary btn-default bs-popover-bottom btn01" id="backbtn1" onclick="back1()">Back</span>
    <div class="login jumbotron margin" id="id02">
        <div class="container">
            <h1>Please Log In</h1>
            <table>
                <tr>
                    <td>Gmail</td>
                    <td><input type="text" class="btn text-left" placeholder="Gmail"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="text" class="btn text-left" placeholder="Password"></td>
                </tr>
            </table>
            <span class="btn btn-primary">Log In</span>
        </div>
    </div>
    <div class="signup jumbotron margin" id="id01">
        <div class="container">
            <table>
                <tr>
                    <td>User ID</td>
                    <td><input type="text" class="btn text-left" placeholder="user id"></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" class="btn text-left" placeholder="username"></td>
                </tr>
                <tr>
                    <td>Gmail</td>
                    <td><input type="text" class="btn text-left" placeholder="gmail"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="text" class="btn text-left" placeholder="password"></td>
                </tr>
                <tr>
                    <td>Require</td>
                    <td><input type="text" class="btn text-left" placeholder="require password"></td>
                </tr>
            </table>
            <span class="btn btn-primary">Sign Up</span>
        </div>
    </div>
    <script>
        var sign_up = document.getElementById('id01');
        var log_in = document.getElementById('id02');
        var yields = document.getElementById('replace');
        var btnshow = document.getElementById('backbtn1');
        function login(){
            btnshow.style.display="block";
            log_in.style.display="block";
            sign_up.style.display="none";
            yields.style.display="none";
        }
        function signup(){
            btnshow.style.display="block";
            sign_up.style.display="block";
            log_in.style.display="none";
            yields.style.display="none";
        }
        function back1(){
            yields.style.display="block";
            sign_up.style.display="none";
            log_in.style.display="none";
            btnshow.style.display="none";
        }
    </script>
@endsection