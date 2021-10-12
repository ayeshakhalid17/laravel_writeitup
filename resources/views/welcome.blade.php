<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WriteItUp</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('favicon.png')}}" />
    <link rel="stylesheet" href="{{asset('css/welcome.css')}}" />
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <div class="container" id="Home"><br><br>
    <img class="logo" src="../images/logo.png" id="logoimage">
        <div class="all">
            <div class="text2">
                <p class="text2" id="covertext">Are you looking for interesting content to read?<br><br>
                    Or have a brilliant idea to share with the world?<br><br>
                    Look no further, because we are offering
                    just that <br><br>and much more!</p>
            </div>
    </div>
    </div>
    @endsection('content')
</body>
</html>