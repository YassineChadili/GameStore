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
        Game::create([
            'name' => 'FIFA 23',
            'image' => 'game1.jpg',
            'price' => 19.99,
        ]);

        Game::create([
            'name' => 'Minecraft',
            'image' => 'game2.jpg',
            'price' => 20,
        ]);
    }
}
