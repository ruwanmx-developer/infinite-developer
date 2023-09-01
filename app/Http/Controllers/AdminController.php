<?php

namespace App\Http\Controllers;

use App\Helpers\AppHelper;
use App\Models\Card;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
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
                'short_description' =>  $request->s_desc,
                'long_description' =>  $request->l_desc,
                'page_meta_data' =>  $request->page_meta_data,
                'link_tag' =>  $request->link_tag,
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
        $card->short_description = $request->short_description;
        $card->long_description = $request->long_description;
        $card->page_meta_data = $request->page_meta_data;
        $card->link_tag = $request->link_tag;
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
            'page_meta_data' => $request->page_meta_data,
            'link_tag' => $request->link_tag,
            'card_id' => $request->card_id,
            'description' => $request->description,
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
        $post->view_id = $request->view_id;
        $post->card_id = $request->card_id;
        $post->page_meta_data = $request->page_meta_data;
        $post->description = $request->description;
        $post->link_tag = $request->link_tag;
        $post->save();
        return redirect()->route('posts.index');
    }
}
