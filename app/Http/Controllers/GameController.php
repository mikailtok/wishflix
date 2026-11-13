<?php

namespace App\Http\Controllers;

use App\Models\Game;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();
        $featured = $games->firstWhere('featured', true) ?? $games->first();

        return view('home', ['games' => $games, 'featured' => $featured]);
    }

    public function show(int $id)
    {
        return view('game-detail', ['game' => Game::findOrFail($id)]);
    }

    public function wishlist()
    {
        return view('wishlist');
    }

    public function login()
    {
        return view('login');
    }
}
