<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    public $timestamps = false;
    public $incrementing=true;
    protected $fillable = ['isbn', 'titolo', 'autore', 'prezzo'];
}
