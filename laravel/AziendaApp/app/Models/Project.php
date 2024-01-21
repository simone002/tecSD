<?php

namespace App\Models;

use App\Http\Controllers\EmployeeController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable=['project_name','employee_id'];

    public function employee(){
        return $this->belongsTo(Employee::class);
    }
}
