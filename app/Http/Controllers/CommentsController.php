<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function index()
    {
        $data = Comments::all();

        return view('saran_dan_kritik', ['data'=>$data]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required'
        ]);
        $comment = new Comments();
        $comment->comment = $request->comment;
        $comment->save();

        return redirect()->back();
    }
}
