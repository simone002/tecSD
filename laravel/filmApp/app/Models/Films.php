<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Films extends Model
{
    use HasFactory;
    
    protected $timestamp=false;
    protected $fillable = ['titolo','anno','paese','regista'];
}
