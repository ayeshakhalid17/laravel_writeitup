<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Review;
use App\Models\UserGenres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class BookController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $max_id = DB::table('books')->max('id');
        $latest_book = DB::table('books')->select('title', 'authorUsername', 'genre', 'coverPage')->where('id', $max_id)->get();
        $books = DB::table('books')
            ->join('user_genres', 'books.genre', '=', 'user_genres.genre')
            ->select('books.*')
            ->where('user_genres.user_id', $user_id)
            ->get();
        $bookmarks = DB::table('books')
            ->join('bookmarks', 'books.title', '=', 'bookmarks.title')
            ->select('books.*')
            ->where('bookmarks.user_id', $user_id)
            ->get();
        return view('home', ['latest_book' => $latest_book, 'books' => $books, 'bookmarks' => $bookmarks]);
    }

    public function show(Request $request)
    {
        $title = $request->get('title');
        $book_details = Book::first()
            ->where('title', $title)
            ->get();
        $reviews = Review::all()
            ->where('title', $title);
        return view('/writeup_details', ['title' => $title, 'book_details' => $book_details, 'reviews' => $reviews]);
    }
}
