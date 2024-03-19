<?php

namespace Database\Seeders;

use App\Models\Console;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Console::create([
            'name' => 'PlayStation',
        ]);

        Console::create([
            'name' => 'Xbox',
        ]);

        Console::create([
            'name' => 'Nintendo',
        ]);
    }
}
