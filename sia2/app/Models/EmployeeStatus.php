<?php

namespace App\Models;

use App\Models\Employments;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EmployeeStatus extends Model
{
    use HasFactory;
    protected $table = 'employment_statuses_create';
    protected $fillable = ['name'];


    public function employmentStatus(){
        return $this->belongsTo(Employments::class);
    }
}
