<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function Comments(Request $request)
    {
        $request->validate([
            'article_id' => 'required|exists:articles,id',
            'message' => 'required',
        ]);

        Comment::create([
            'article_id' => $request->article_id,
            'user_id' => Auth::id(),
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Your comment has been added!');
    }
}
