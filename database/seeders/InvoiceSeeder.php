<?php

namespace Database\Seeders;

use App\Models\Invoice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Invoice::create([
            'address' => '123 Main Street',
            'date' => '2024-01-01',
            'game_id' => 1, 
            'user_id' => 1,
        ]);

        Invoice::create([
            'address' => '456 Elm Street',
            'date' => '2024-01-01',
            'game_id' => 2, 
            'user_id' => 2,
        ]);
    }
}
