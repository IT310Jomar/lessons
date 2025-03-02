<?php

namespace App\Models;

use App\Models\Employments;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Departments extends Model
{
    use HasFactory;

    protected $table = 'departments';
    protected $fillable = ['name'];


    public function employeeDepartment(){
        return $this->hasMany(Employments::class);
    }
}
