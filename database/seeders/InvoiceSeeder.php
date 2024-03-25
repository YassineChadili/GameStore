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
            'street' => 'Terheijdenseweg 350',
            'city' => 'Breda',
            'zip' => '4826 AA',
            'game_id' => 1, 
            'user_id' => 1,
        ]);

        Invoice::create([
            'street' => 'Terheijdenseweg 350',
            'city' => 'Breda',
            'zip' => '4826 AA',
            'game_id' => 2, 
            'user_id' => 2,
        ]);
    }
}
