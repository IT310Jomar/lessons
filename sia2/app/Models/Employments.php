<?php

namespace App\Models;

use App\Models\User;
use App\Models\Locations;
use App\Models\Departments;
use App\Models\EmployeeStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employments extends Model
{
    use HasFactory;

    protected $table='employments';

    protected $fillable=['user_id','department_id','location_id','employment_status_id',
    'employment_types_id','employee_id','job_grade','billability','type','title','date_hired',
    'date_regularization','remarks','biometric','payroll_type','payroll_pie_id','working_hours'
];

public function user(){
    return $this->belongsTo(User::class,'user_id');
}

public function location(){
    return $this->belongsTo(Locations::class,'location_id');
}

public function department(){
    return $this->belongsTo(Departments::class,'department_id');
}

public function employee_status(){
    return $this->belongsTo(EmployeeStatus::class,'employment_status_id');
}
}
