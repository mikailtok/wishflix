<?php

namespace App\Http\Controllers;

class GameController extends Controller
{
    private array $games = [
        1 => [
            'title' => 'Hollow Knight',
            'synopsis' => 'Un petit chevalier explore Hallownest, un royaume souterrain en ruine.',
            'release_year' => 2017,
            'rating' => 9.0,
            'category' => 'Action',
            'platforms' => ['PC', 'Switch'],
            'cover_url' => 'https://via.assets.so/game.png?id=1&q=95&w=300&h=450&fit=cover',
        ],
        2 => [
            'title' => 'Hades',
            'synopsis' => 'Zagreus, fils d\'Hadès, tente de s\'échapper des Enfers.',
            'release_year' => 2020,
            'rating' => 9.3,
            'category' => 'Action',
            'platforms' => ['PC', 'PS5', 'Switch'],
            'cover_url' => 'https://via.assets.so/game.png?id=2&q=95&w=300&h=450&fit=cover',
        ],
        3 => [
            'title' => 'The Witcher 3',
            'synopsis' => 'Geralt de Riv part à la recherche de sa fille adoptive, Ciri.',
            'release_year' => 2015,
            'rating' => 9.5,
            'category' => 'RPG',
            'platforms' => ['PC', 'PS5', 'Xbox'],
            'cover_url' => 'https://via.assets.so/game.png?id=3&q=95&w=300&h=450&fit=cover',
        ],
        4 => [
            'title' => 'Civilization VI',
            'synopsis' => 'Bâtissez un empire capable de résister à l\'épreuve du temps.',
            'release_year' => 2016,
            'rating' => 8.5,
            'category' => 'Stratégie',
            'platforms' => ['PC', 'Switch'],
            'cover_url' => 'https://via.assets.so/game.png?id=4&q=95&w=300&h=450&fit=cover',
        ],
    ];

    public function index()
    {
        return view('home', ['games' => $this->games]);
    }

    public function show(int $id)
    {
        abort_unless(isset($this->games[$id]), 404);

        return view('game-detail', ['game' => $this->games[$id], 'id' => $id]);
    }
}
