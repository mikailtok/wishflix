<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Game;
use App\Models\Platform;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    public function run(): void
    {
        $games = [
            ['Drakengard 3', 'Zero, la plus puissante des Invoqueuses, décide d\'assassiner ses sœurs avec l\'aide de son dragon Mikhail.', 2013, 7.8, 30, 'Action', ['PC', 'PlayStation 5']],
            ['Monster Hunter Wilds', 'Chassez des monstres gigantesques dans les Terres Interdites.', 2025, 8.0, 80, 'Action', ['PC', 'PlayStation 5', 'Xbox Series']],
            ['Vholume', 'Courez à travers des espaces liminaux étranges et silencieux.', 2026, 6.5, 8, 'Aventure', ['PC']],
            ['Sly 2 : Band of Thieves', 'Sly cherche à rassembler les morceaux de Clockwerk.', 2004, 8.0, 15, 'Plateforme', ['PlayStation 5']],
            ['Sonic Adventure 2', 'Sonic et Shadow s\'affrontent dans une aventure à toute vitesse.', 2001, 7.0, 12, 'Plateforme', ['PC', 'Switch']],
            ['The Witcher 3', 'Geralt de Riv part à la recherche de sa fille adoptive, Ciri.', 2015, 9.5, 100, 'RPG', ['PC', 'PlayStation 5', 'Xbox Series', 'Switch']],
        ];

        foreach ($games as $i => [$title, $synopsis, $year, $rating, $hours, $category, $platforms]) {
            $game = Game::create([
                'title' => $title,
                'synopsis' => $synopsis,
                'release_year' => $year,
                'rating' => $rating,
                'playtime_hours' => $hours,
                'cover_url' => 'https://via.assets.so/game.png?id='.($i + 1).'&q=95&w=300&h=450&fit=cover',
                'featured' => $i === 0,
                'status' => 'released',
                'category_id' => Category::where('name', $category)->value('id'),
            ]);

            $game->platforms()->attach(Platform::whereIn('name', $platforms)->pluck('id'));
        }

        $platforms = Platform::all();
        $categories = Category::all();

        Game::factory()->count(13)
            ->recycle($categories)
            ->create()
            ->each(fn (Game $game) => $game->platforms()->attach(
                $platforms->random(rand(1, 3))->pluck('id')
            ));

        Game::factory()->featured()
            ->recycle($categories)
            ->create()
            ->platforms()->attach($platforms->random(2)->pluck('id'));
    }
}
