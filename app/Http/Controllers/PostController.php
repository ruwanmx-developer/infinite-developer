<?php

namespace App\Http\Controllers;

use App\Models\Card;
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
        $card = Card::where('link_tag', '=', $slug)->first();
        $post = Post::where('link_tag', '=', $slug)->first();
        if ($card) {
            $posts = Post::where('card_id', '=', $card->id)->get();
            return view('content', compact(['posts', 'card']));
        } else if ($post) {
            $view = "posts." . $post->view_id;
            return view($view, compact(['post']));
        }
    }
}
