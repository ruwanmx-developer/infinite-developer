<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Post;;

class PostController extends Controller
{
    public function handle_slug($slug)
    {
        $card = Card::where('link_tag', '=', $slug)->where('state', 1)->first();
        $post = Post::where('link_tag', '=', $slug)
            ->where('state', 1)
            ->whereHas('card', function ($query) {
                $query->where('state', 1);
            })->first();
        if ($card) {
            $posts = Post::where('card_id', '=', $card->id)->where('state', 1)->get();
            return view('content', compact(['posts', 'card']));
        } else if ($post) {
            $view = "posts." . $post->view_id;
            if (view()->exists($view)) {
                return view($view, compact(['post']));
            }
        } else {
            return view('page-not-found');
        }
    }
}
