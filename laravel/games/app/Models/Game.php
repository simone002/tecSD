<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Player;

class Game extends Model
{
    use HasFactory;

    protected $fillable = ['name','player_id','prezzo'];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}

