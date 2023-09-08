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
        $cards = Card::all();
        return view('learn', compact(['cards']));
    }

    public function search(Request $request)
    {
        $slug = $request->key;
        $keywords = explode(' ', $slug);
        $posts = DB::table('posts')
            ->where(function ($queryBuilder) use ($keywords) {
                foreach ($keywords as $keyword) {
                    $queryBuilder->orWhere('search', 'like', '%\'' . $keyword . '\'%');
                }
            })
            ->orWhere('tags', 'like', '%\'' . $slug . '\'%')
            ->orWhere('search', 'like', '% ' . $slug . ' %')
            ->get();
        $count = count($posts);
        return view('search', compact(['posts', 'slug', 'count']));
    }
}
