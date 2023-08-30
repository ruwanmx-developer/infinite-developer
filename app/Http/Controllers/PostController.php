<?php

namespace App\Http\Controllers;

use App\Models\Post;;

class PostController extends Controller
{



    public function laravel()
    {
        $posts = Post::where('card_id', '=', 1)->get();
        return view('home.laravel', compact(['posts']));
    }




    public function handle_slug($slug)
    {
        $post = Post::where('link_tag', '=', $slug)->first();
        $view = "posts.post-" . $post->view_id;
        return view($view, compact(['post']));
    }
}
