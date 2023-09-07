<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Post;
use Illuminate\Http\Request;

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
        $posts = Post::where('name', 'like', '% ' . $request->key . ' %')
            ->orWhere('name', 'like', '%' . $request->key . ' %')
            ->orWhere('name', 'like', '% ' . $request->key . '%')
            ->orWhere('name', '=', $request->key)
            ->orWhere('description', 'like', '% ' . $request->key . ' %')
            ->orWhere('description', 'like', '%' . $request->key . ' %')
            ->orWhere('description', 'like', '% ' . $request->key . '%')
            ->orWhere('description', '=',  $request->key)
            ->orWhere('titles', 'like', '% ' . $request->key . ' %')
            ->orWhere('titles', 'like', '%' . $request->key . ' %')
            ->orWhere('titles', 'like', '% ' . $request->key . '%')
            ->orWhere('tags', 'like', '% ' . $request->key . ' %')
            ->orWhere('tags', 'like', '%' . $request->key . ' %')
            ->orWhere('tags', 'like', '% ' . $request->key . '%')
            ->get();
        return view('search', compact(['posts']));
    }
}
