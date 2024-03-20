<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $table = 'games';

    protected $guarded = [];

    public function consoles()
    {
        return $this->belongsToMany(Console::class, 'game_consoles', 'game_id', 'console_id')
            ->withTimestamps();
    }
}
