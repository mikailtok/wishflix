<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    private array $games = [
        1 => ['title' => 'Drakengard3', 'synopsis' => 'Jadis, le monde était déchiré par la guerre et l\'oppression. Mais un jour, six déesses aux voix enchanteresses descendirent sur la Terre. Grâce à leur chant mélodieux imprégné d\'une puissante magie, elles débarrassèrent le monde des tyrans, restaurant ainsi la paix et l\'harmonie. Le peuple se mit à les vénérer, leur donnant le nom d\'« Invoqueuses ». Elles furent chargées de diriger le monde. L\'Invoqueuse One, épaulée par ses sœurs, régnait sur la Terre. Elle est animée d\'un profond désir d\'instaurer une ère de paix. Jusqu\'au jour où Zero, l\'une de ses sœurs et la plus puissante des Invoqueuses, décide de toutes les assassiner, aidée par Mikhail, son fidèle dragon. Le chaos menace une fois encore d\'envahir le monde…', 'release_year' => 2013, 'rating' => 7.8, 'category' => 'Action', 'platforms' => ['Playstation 3'], 'cover_url' => 'https://via.assets.so/game.png?id=N&q=67&w=300&h=450&fit=cover'],
        2 => ['title' => 'Monster Hunter Wilds', 'synopsis' => 'Chasse de monstre', 'release_year' => 2025, 'rating' => 8, 'category' => 'Chasse', 'platforms' => ['PC', 'Playstaion 5', 'Switch 2'], 'cover_url' => 'https://via.assets.so/game.png?id=N&q=12&w=300&h=450&fit=cover'],
        3 => ['title' => 'Vholume', 'synopsis' => 'Courir dans des espaces liminaux', 'release_year' => 2026, 'rating' => 6.5, 'category' => 'Plateforme', 'platforms' => ['PC'], 'cover_url' => 'https://via.assets.so/game.png?id=N&q=80&w=300&h=450&fit=cover'],
        4 => ['title' => 'Sly 2 : Band of Thieves', 'synopsis' => 'Sly cherche à rassembler les morceaux de Clockwerk', 'release_year' => 2004, 'rating' => 8, 'category' => 'Platefome', 'platforms' => ['Playstation 2'], 'cover_url' => 'https://via.assets.so/game.png?id=N&q=68&w=300&h=450&fit=cover'],
        5 => ['title' => 'Sonic Adventure 2', 'synopsis' => 'Sonic vit une aventure', 'release_year' => 2001, 'rating' => 7, 'category' => 'Plateforme', 'platforms' => ['GameCube', 'PC', 'Dreamcast'], 'cover_url' => 'https://via.assets.so/game.png?id=N&q=15&w=300&h=450&fit=cover'],
    ];

    public function index()
    {
        return view('home', ['games' => $this->games]);
    }

    public function wishlist()
    {
        return view('wishlist');
    }

    public function login()
    {
        return view('login');
    }

    public function show(int $id)
    {
        abort_unless(isset($this->games[$id]), 404);

        return view('game-detail', ['game' => $this->games[$id]]);
    }
}