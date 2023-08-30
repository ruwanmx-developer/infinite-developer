<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function learn()
    {
        $cards = Card::all();
        return view('learn', compact(['cards']));
    }
}
