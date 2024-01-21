<?php

namespace App\Models;

use App\Http\Controllers\ProjectController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable=['name','department'];

    public function projects(){
        return $this->hasMany(Project::class);
    }

}
