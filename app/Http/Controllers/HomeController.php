<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function sitemap()
    {
        $posts = Post::all();
        $cards = Card::all();
        return response()->view('sitemap', [
            'posts' => $posts, 'cards' => $cards
        ])->header('Content-Type', 'text/xml');
    }

    public function learn()
    {
        $cards = Card::where('state', 1)->get();
        return view('learn', compact(['cards']));
    }

    public function search(Request $request)
    {
        $slug = $request->key;
        $keywords = explode(' ', $slug);
        $posts = Post::where('state',  1)
            ->whereHas('card', function ($query) {
                $query->where('state', 1);
            })
            ->where(function ($queryBuilder) use ($keywords, $slug) {
                foreach ($keywords as $keyword) {
                    $queryBuilder->orWhere('search', 'like', '%\'' . $keyword . '\'%');
                }
                $queryBuilder->orWhere('tags', 'like', '%' . $slug . '%');
                $queryBuilder->orWhere('search', 'like', '% ' . $slug . ' %');
            })
            ->get();
        $count = count($posts);
        return view('search', compact(['posts', 'slug', 'count']));
    }
}
