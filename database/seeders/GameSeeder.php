<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $game1 = Game::create([
            'name' => 'FIFA 23',
            'image' => 'storage/img/game1.jpg',
            'price' => 19.99,
        ]);

        $game1->consoles()->attach([1, 2]);

        $game2 = Game::create([
            'name' => 'Minecraft',
            'image' => 'storage/img/game2.jpg',
            'price' => 20,
        ]);

        $game2->consoles()->attach([1, 2, 3]);
    }
}
