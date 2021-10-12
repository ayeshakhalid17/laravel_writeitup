<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('favicon.png')}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('css/writeup_details.css')}}">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!---Fonts-->
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon" />
    <title>WriteItUp</title>
</head>

<body>
    @extends('layouts.app')
    @section('content')
    <br><br><br><br><br><br><br>
    <div class="spikes">
        <h2 class="heading">{{$title}}</h2>
    </div>
    <div class="forms-container">
        <div class="rectangle"><img id="output" src="../images/cover-pages/{{$book_details[0]->coverPage}}"></div>
        <div class="form">
            <div class="input-field">
                <i class="fa fa-book"></i>
                <input type="text" name="author" class="inp" disabled value="Written By: {{$book_details[0]->authorUsername}}">
            </div>
            <div class="input-field">
                <i class="fa fa-edit"></i>
                <textarea type="text" name="desc" class="inp" rows="8" disabled>
                <?php echo $book_details[0]->description?>
                </textarea>
            </div>
            <div class="input-field">
                <i class="fa fa-server"></i>
                <input type="text" name="genre" class="inp" disabled value="Genre: {{$book_details[0]->genre}}">
            </div>
            <div class="input-field">
                <i class="fa fa-child"></i>
                <input type="text" name="rating" class="inp" disabled value="Rating: {{$book_details[0]->rating}}">
            </div>
            <div class="btncontainer">
                <button class="btn" id="read_button" onclick="window.location.href = 'writeup_story?title={{$title}}&chapterNumber=1';">Start Reading</button>
            </div>
        </div>
    </div>
    <div class="review-section">
        <div class="bx">
            <div class="view-review">
                <p class="heading">Anonymous Reviews</p>
                <ol class="list">
                    @if(count($reviews)>0)
                    @foreach($reviews as $review)
                    <li>{{$review->comment}}</li>
                    <br>
                    @endforeach
                    @else
                    No Reviews Available
                    @endif
                </ol>
            </div>
        </div>
        <form action="review?title={{$title}}" method="post" id="review-container">
            {{csrf_field()}}
            <h2>Leave a Review!</h2>
            <textarea type="text" name="comment" class="input-field txt-input" rows="8">
            </textarea>
            <input type="submit" class="btn" value="Submit Review">
        </form>
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
    @endsection
    <script src="reader.js"></script>
</body>

</html>