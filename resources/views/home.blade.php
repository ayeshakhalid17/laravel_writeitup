<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WriteItUp</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="shortcut icon" href="{{asset('favicon.png')}}" />
    <link rel="stylesheet" href="{{asset('css/reader.css')}}"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

<body>
    <div class="container">
        @extends('layouts.app')
        @section('content')
        <br><br><br><br><br><br><br>
        <div class="spikes">
            <h2 class="welcome">Welcome, {{Auth::user()->name}}.</h2>
        </div>
        <!--Continue Reading-->
        <div class="row">
            @if(count($bookmarks)>0)
            <h2>Continue Reading</h2>
            <div class="row-posters">
                @foreach($bookmarks as $bookmark)
                <a href="writeup_details?title={{$bookmark->title}}"><img class="poster" src="/images/cover-pages/{{$bookmark->coverPage}}" alt="book" /></a>
                @endforeach
            </div>
            @endif
        </div>
        <!--Latest-->
        <div class="row">
            <h2>Lastest Story</h2>
            <div class="row-posters trending">
                <div>
                    <a href="writeup_details?title={{$latest_book[0]->title}}"><img class="poster" src="/images/cover-pages/{{$latest_book[0]->coverPage}}" alt="cover" /></a>
                </div>
                <div class="details">
                    <p>Title: {{$latest_book[0]->title}}</p>
                    <p>By: {{$latest_book[0]->authorUsername}}</p>
                    <p>Genre: {{$latest_book[0]->genre}}</p>
                </div>
            </div>
        </div>
        <!--Suggested Stories-->
        <div class="row">
            <h2>Suggested For You</h2>
            <div class="row-posters">
                @foreach($books as $book)
                <a href="writeup_details?title={{$book->title}}"><img class="poster" src="/images/cover-pages/{{$book->coverPage}}" alt="book" /></a>
                @endforeach
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-logo">
            <div class="footer-logo">WriteItUp</div>
            <p>&copy; CopyRight 2021</p>
        </div>
        <div class="write">
            <a href="../Writer/view.php" class="footer-link">
                <p>Want to write your <br>own story? <i class="fas fa-edit"></i></p>
            </a>
        </div>
        <div class="footer-links">
            <ul class="nav footer-nav">
                <li><a href="../index.php" class="navbtn">Home</a></li>
                <li><a href="../index.html#features" class="navbtn">Features</a></li>
                <li><a href="../index.html#scroll" class="navbtn">About</a></li>
                <li><a href="../index.html#footer" class="navbtn">Contact</a></li>
            </ul>
            <ul class="footer-icons">
                <a href="mailto:someone@example.com" target="_blank"><i class="fas fa-envelope f"></i></a>
                <a href="https://www.facebook.com/writeitup" target="_blank"><i class="fab fa-facebook-f f"></i></a>
                <a href="https://www.instagram.com/writeitup" target="_blank"><i class="fab fa-instagram f"></i></a>
            </ul>
        </div>
    </footer>
    <script src="reader.js"></script>
    @endsection
</body>

</html>