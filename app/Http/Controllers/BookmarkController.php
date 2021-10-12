<?php

namespace App\Http\Controllers;
use App\Models\User;

use App\Models\Bookmark;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
class BookmarkController extends Controller
{
    public function create(Request $request)
    {
        $user_id=Auth::user()->id;
        $title=$request->post('title');
        $chapterNumber=$request->post('chapterNumber');
        $insert_bm=DB::table('bookmarks')
        ->insert([
            'user_id'=>$user_id,
            'title'=>$title,
            'chapterNumber'=>$chapterNumber
        ]);
        echo "<script>alert('Chapter bookmarked');</script>";
        return redirect('/home');
    }

}
