<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class StoryController extends Controller
{
    
    public function read(Request $request)
    {
        $user_id = Auth::user()->id;
        $title = $request->get('title');
        $bm_exists = Bookmark::first()
            ->where('title', $title)
            ->where('user_id', $user_id);
        if($bm_exists){
            $chapterNumber=$bm_exists->get('chapterNumber')[0]->chapterNumber;
        }
        else{
            $chapterNumber=1;
        }
        $text = Story::first()
            ->where('title', $title)
            ->where('chapterNumber', $chapterNumber)
            ->get('text');
        return view('writeup_story', ['title' => $title, 'chapterNumber' => $chapterNumber, 'text' => $text]);
    }
    public function next_chapter(Request $request)
    {
        $user_id = Auth::user()->id;
        $title = $request->get('title');
        $chapterNumber = $request->get('chapterNumber');
        $text = Story::first()
            ->where('title', $title)
            ->where('chapterNumber', $chapterNumber)
            ->get('text');
        $bm_exists = Bookmark::first()
            ->where('title', $title)
            ->where('chapterNumber', $chapterNumber)
            ->where('user_id', $user_id);
        if ($bm_exists) {
            $update_b = DB::table('bookmarks')
                ->where('title', $title)
                ->where('user_id', $user_id)
                ->update(['chapterNumber' => $chapterNumber]);
        }
        $max_chapter = DB::table('stories')->where('title', $title)->max('chapterNumber');
        if ($chapterNumber > $max_chapter) {
            if ($bm_exists) {
                $bm_exists->delete();
            }
            echo "<script>alert('This was the last chapter.')
            window.location.href='home';
            </script>";
        } else {
            return view('writeup_story', ['title' => $title, 'chapterNumber' => $chapterNumber, 'text' => $text]);
        }
    }
}
