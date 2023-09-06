<?php

namespace App\Http\Controllers;

use App\Helpers\AppHelper;
use App\Models\Card;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function cards()
    {
        $cards = Card::all();
        return view('admin.card.index', compact(['cards']));
    }

    public function cards_add()
    {
        return view('admin.card.add');
    }

    public function cards_create(Request $request)
    {
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = $request->link_tag . "." . $file->getClientOriginalExtension();
            $file->move(public_path('card_images'), $filename);

            Card::create([
                'name' =>  $request->name,
                'image' =>  $filename,
                'description' =>  $request->desc,
                'link_tag' =>  $request->link_tag,
                'state' =>  $request->state,
                'user_id' =>  Auth::user()->id,
            ]);
        }
        return redirect()->route('cards.index');
    }

    public function cards_edit(int $id)
    {
        $card = Card::find($id);
        return view('admin.card.edit', compact('card'));
    }

    public function cards_update(Request $request)
    {
        $card = Card::find($request->id);
        if ($request->file('image')) {
            $filePath = 'card_images/' . $card->image;
            Storage::delete($filePath);
            $file = $request->file('image');
            $filename = $request->link_tag . "." . $file->getClientOriginalExtension();
            $file->move(public_path('card_images'), $filename);
            $card->image = $filename;
        }
        $card->name = $request->name;
        $card->description = $request->description;
        $card->link_tag = $request->link_tag;
        $card->state = $request->state;
        $card->save();
        return redirect()->route('cards.index');
    }
    /////////////////////////////////////////////////////////////////////////////////////////////////
    public function posts()
    {
        $posts = Post::all();
        return view('admin.post.index', compact(['posts']));
    }

    public function posts_add()
    {
        $cards = Card::all();
        return view('admin.post.add', compact(['cards']));
    }

    public function posts_create(Request $request)
    {
        $number = AppHelper::instance()->genarate_view_id();
        Post::create([
            'name' => $request->name,
            'view_id' => $number,
            'link_tag' => $request->link_tag,
            'card_id' => $request->card_id,
            'description' => $request->description,
            'titles' => $request->titles,
            'tags' => $request->tags,
            'state' => $request->state,
            'user_id' =>  Auth::user()->id,
        ]);
        return redirect()->route('posts.index');
    }

    public function posts_edit(int $id)
    {
        $cards = Card::all();
        $post = Post::find($id);
        return view('admin.post.edit', compact('post', 'cards'));
    }

    public function posts_update(Request $request)
    {
        $post = Post::find($request->id);
        $post->name = $request->name;
        $post->card_id = $request->card_id;
        $post->description = $request->description;
        $post->link_tag = $request->link_tag;
        $post->titles = $request->titles;
        $post->tags = $request->tags;
        $post->state = $request->state;
        $post->save();
        return redirect()->route('posts.index');
    }
}
