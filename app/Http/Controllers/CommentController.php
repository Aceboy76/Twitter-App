<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Idea;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Idea $idea)
    {

        $validated = request()->validate([
            'comment_content' => 'required|min:1|max:240'
        ]);


        $idea->comments()->create($validated);

        return redirect()->route('ideas.show', $idea->id)->with('success', 'Comment created Successfully');
    }
}
