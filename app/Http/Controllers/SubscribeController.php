<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function toggle(Blog  $blog)
    {
        if ($blog->isSubscribed()) {
            $blog->subscribedUsers()->detach(auth()->id());
            $result = "You have successfully unsubscribed from this blog";
        } else {
            $blog->subscribedUsers()->attach(auth()->id());
            $result = "You have successfully subscribed to this blog";
        }

        return back()->with("success", $result);
    }
}
