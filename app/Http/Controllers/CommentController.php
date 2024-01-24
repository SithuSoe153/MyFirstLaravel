<?php

namespace App\Http\Controllers;

use App\Mail\NotifyUsers;
use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CommentController extends Controller
{

    public function store(Blog $blog)
    {
        $cleanData = request()->validate([
            'body' => 'required'
        ]);

        $cleanData['user_id'] = auth()->id();
        // $cleanData['blog_id'] = $blog->id;

        // Comment::create($cleanData);


        $comment = $blog->comments()->create($cleanData);

        $blog->subscribedUsers->filter(function ($user) {
            return $user->id != auth()->id();
        })->each(function ($user) use ($comment) {
            Mail::to($user->email)->queue(new NotifyUsers($comment, auth()->user()->name));
        });

        return back();
    }

    public function update(Comment $comment)
    {

        $comment->update(request()->validate([
            'body' => ['required'],
        ]));


        // return back();
        return redirect('/blogs/' .  $comment->blog->slug);
    }

    public function delete(Comment $comment){
        $comment->delete();
        return back();
    }
}
