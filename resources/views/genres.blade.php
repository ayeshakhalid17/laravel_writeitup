<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WriteItUp</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/writeup_details.css" />
    <link rel="shortcut icon" href="{{asset('favicon.png')}}" />
    <style>
        html {
            font-size: 62.5%;
            scroll-behavior: smooth;
            overflow-x: hidden;
        }

        * {
            font-family: "Josefin Slab", serif;
            padding: 0rem;
            margin: 0rem;
            box-sizing: border-box;
        }

        body {
            background-color: rgb(233, 233, 236);
        }

        /*Scroll bar*/
        body::-webkit-scrollbar {
            width: 1rem;
        }

        body::-webkit-scrollbar-track {
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }

        body::-webkit-scrollbar-thumb {
            background-color: darkgrey;
            outline: 1px solid slategrey;
        }

        .spikes {
            position: relative;
            background: #2c3e50;
            width: 100%;
            height: 18vh;
            margin-bottom: 4rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .spikes::after {
            content: "";
            position: absolute;
            right: 0;
            left: -0%;
            top: 100%;
            z-index: 1;
            display: block;
            height: 50px;
            background-size: 50px 100%;
            background-image: linear-gradient(135deg, #2c3e50 25%, transparent 25%),
                linear-gradient(225deg, #2c3e50 25%, transparent 25%);
            background-position: 0 0;
        }

        .heading {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #ffffff;
            font-family: "Fredericka the Great", cursive;
            font-size: 4rem;
            font-weight: lighter;
        }

        .rectangle {
            position: relative;
            margin-top: 3rem;
            height: 30rem;
            width: 23rem;
            border: 3px solid rgb(133, 125, 125);
            background-color: rgba(233, 231, 231, 0.774);
            justify-content: left;
            align-items: left;
            z-index: 1;
        }

        .rectangle img {
            width: 100%;
            height: 100%;
        }

        textarea.input-field.txt-input {
            padding: 3rem;
        }

        .forms-container {
            display: flex;
            flex-direction: row;
            justify-content: center;
            margin: 3rem 0rem;
        }

        .rectangle span {
            display: flex;
            font-family: "Josefin Slab", serif;
            font-weight: 600;
            font-size: 2.5rem;
            color: grey;
            justify-content: center;
            justify-items: center;
            align-items: center;
            text-align: center;
            margin: auto;
            margin-top: -1rem;
        }

        .review-section {
            display: flex;
            flex-direction: row;
            margin-bottom: 5rem;
        }

        .form {
            margin-left: 7rem;
        }

        .bx {
            display: flex;
            margin-left: 15rem;
            margin-right: 5rem;
            flex-direction: column;
            justify-content: center;
            margin-top: 2%;
        }

        .view-review {
            background: #2c3e50;
            color: white;
            width: 400px;
            height: 325px;
            border: 2px dashed rgb(233, 233, 236);
            padding: 1rem 0rem;
        }

        .list {
            margin-left: 10%;
            margin-top: 7%;
            color: white;
            font-size: 1.9rem;
            font-weight: bolder;
        }

        #review-container {
            margin: 3rem;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin-left: 3rem;
        }

        #review-container h2 {
            font-family: "Fredericka the Great", cursive;
            text-align: center;
            font-size: 3rem;
        }

        .successful {
            color: rgb(12, 180, 12);
            font-family: "Fredericka the Great", cursive;
            font-weight: bold;
            text-align: center;
            font-size: 3rem;
            display: none;
        }

        .txt-input {
            border: none;
            height: 15vw;
            outline: none;
            font-size: 2rem;
            font-family: "Josefin Slab", serif;
            font-weight: 600;
        }

        .input-field {
            font-family: "Josefin Slab", serif;
            min-width: 400px;
            background-color: #f0f0f0;
            border-radius: 55px;
            display: grid;
            grid-template-columns: 15% 85%;
            margin: 1rem 0rem;
        }

        .input-field i {
            text-align: center;
            line-height: 55px;
            font-size: 1.5rem;
        }

        .input-field input,
        .input-field select,
        .input-field textarea,
        .input-field label {
            margin: 1rem 0rem;
            background: none;
            outline: none;
            border: none;
            line-height: 1.3;
            font-size: 1.75rem;
            color: black;
            font-weight: bolder;
        }

        .input-field select option,
        .input-field select {
            overflow: hidden;
            white-space: nowrap;
            width: 110px;
        }

        .input-field:placeholder-shown {
            margin-top: 3rem;
            color: #acacac;
        }

        .input-field textarea {
            width: 100%;
            max-width: 95%;
        }

        .radiobutton {
            display: inline-block;
            padding-left: 0rem;
            cursor: pointer;
            font-size: 1.5rem;
            padding-left: 3rem;
        }

        .container {
            border: 2px dashed white;
            margin: 4rem;
            margin-top: 1rem;
            line-height: 1.5;
            padding: 3rem;
            font-size: 2.3rem;
            font-weight: bold;
        }

        .story-container {
            margin: 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-bottom: 4rem;
        }

        .bookmark {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 5rem;
        }

        #read_another {
            display: none;
        }

        .read_show {
            display: inline;
        }

        .genre-container {
            padding: 0;
            margin: 2rem 6rem;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            flex-wrap: wrap;
        }

        .genre {
            height: 7rem;
            width: 18rem;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin: 1.5rem;
            border: 2px solid white;
            background: #394f64;
            color: white;
            cursor: pointer;
        }

        .proceed {
            float: right;
            margin: 0rem 6rem;
            margin-bottom: 2rem;
        }

        .selected {
            border: 2px solid #394f64;
            color: #394f64;
            background: white;
        }

        .btn,
        .clear {
            width: 150px;
            height: 50px;
            background: #394f64;
            border-radius: 55px;
            border: none;
            outline: none;
            font-size: 1.5rem;
            color: white;
            text-transform: uppercase;
            font-family: "Fredericka the Great", cursive;
            transition: all 0.5s;
        }

        .btncontainer {
            display: flex;
            justify-content: center;
            margin-right: 5rem;
            margin-top: 2rem;
        }

        .btn:hover,
        .clear:hover {
            background: #2c3e50;
            cursor: pointer;
        }

        .clear {
            background-color: rgba(233, 231, 231, 0.774);
            border-radius: 55px;
            border: none;
            outline: none;
            font-size: 1.5rem;
            margin-top: 1rem;
            color: black;
            font-weight: bold;
            text-transform: uppercase;
            font-family: "Fredericka the Great", cursive;
            transition: all 0.5s;
        }

        .clearbtn {
            display: none;
            position: relative;
            justify-content: center;
            top: 31.5rem;
            z-index: 3;
        }

        /*Footer*/
        footer {
            background-color: black;
            color: white;
            display: flex;
            padding: 0rem 3rem;
            flex-direction: row;
            justify-content: space-around;
            width: 100%;
            bottom: 0;
            z-index: 1;
        }

        .footer-links {
            display: flex;
            flex-direction: row;
            margin: 3rem;
        }

        .footer-logo {
            justify-content: left;
            display: inline-block;
            margin-top: 0.25rem;
            list-style: none;
            color: white;
            font-size: 2.7rem;
            letter-spacing: 0.25rem;
            padding: 1rem 0rem;
            font-family: "Fredericka the Great", cursive;
            text-decoration: none;
        }

        .footer-logo {
            margin-right: 2rem;
        }

        .footer-logo,
        .footer-nav {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-left: 1rem;
        }

        .footer-logo p {
            font-size: 1.3rem;
            font-weight: bold;
        }

        .footer-nav {
            list-style: none;
            margin-right: 4rem;
        }

        .footer-nav li {
            margin: 0.75rem;
        }

        .footer-nav li a:hover {
            background-color: black;
        }

        .footer-icons {
            display: flex;
            flex-direction: column;
        }

        .footer-icons i {
            background-color: #33383b;
            color: #ffffff;
            font-size: 2rem;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            text-align: center;
            line-height: 42px;
            margin: 0.5rem;
            vertical-align: middle;
        }

        .footer-icons i:hover {
            color: #33383b;
            background-color: white;
        }

        .write {
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px dashed white;
            margin: 3rem;
            padding: 3rem 7rem;
            border-radius: 50px;
            text-align: center;
        }

        .write p {
            font-size: 2.3rem;
            line-height: 1.5;
        }

        .footer-link {
            color: white;
            text-decoration: none;
        }

        @media only screen and (max-width: 900px) {
            ul li a span {
                display: none;
            }

            .search-box {
                display: none;
            }

            .search-r {
                display: block;
            }

            .write {
                display: none;
            }

            .forms-container {
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .form {
                margin: auto;
                margin-top: 2rem;
            }

            .container {
                font-size: 1.75rem;
            }

            .story-container {
                margin: 1rem;
                margin-bottom: 4rem;
            }

            .genre {
                height: 7rem;
                width: 12rem;
            }

            .genre-container {
                margin: 0rem 3rem;
            }

            .proceed {
                margin: 2rem 3rem;
            }

            #review-container {
                margin-top: 2rem;
            }
        }

        @media only screen and (max-width:480px) {
            ul li a span {
                display: none;
            }

            .search-box {
                display: none;
            }

            .search-r {
                display: block;
            }

            .write {
                display: none;
            }

            .forms-container {
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .form {
                margin: auto;
                margin-top: 2rem;
            }

            .container {
                font-size: 1.75rem;
            }

            .story-container {
                margin: 1rem;
                margin-bottom: 4rem;
            }

            .genre {
                height: 7rem;
                width: 12rem;
            }

            .genre-container {
                margin: 0rem 3rem;
            }

            .proceed {
                margin: 2rem 3rem;
            }
        }
    </style>
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <br><br><br><br><br><br><br>
    <div class="spikes">
        <h2 class="heading">Select your favourite genres.</h2>
    </div>
    <div class="container genre-container">
        @foreach($genres as $genre)
        <span class="genre" id="{{$genre->genre_name}}" onclick="select(this.id)">
            {{$genre->genre_name}}
        </span>
        @endforeach
    </div>
    <form action="save_genres" method="post">
        {{@csrf_field()}}
        <input id="hidden_js_aid" type="hidden" name="hidden_js_array">
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
        <input name="proceed" class="btn proceed" id="proceed" value="Proceed" type="submit" onclick="setArrayToHidden();">
    </form>
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
    @endsection
    <script src="reader.js"></script>
    <script>
        var s_genres = [];
        var genre_box = document.querySelector(".genre");
        let select = function(id) {
            var box = document.getElementById(id);
            s_genres.push(id);
            box.classList.add("selected");
            console.log(s_genres);
        };
        //Passing genres to php from JavaScript
        function setArrayToHidden() {
            document.getElementById('hidden_js_aid').value = s_genres;
        }
    </script>
</body>

</html>