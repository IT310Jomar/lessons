<?php

namespace App\Models;


use App\Models\Test;
use App\Models\Employments;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Locations extends Model
{
    use HasFactory;
    protected $table = 'locations';
    protected $fillable = ['name','status', 'test_id'];


    public function employmentLocations(){

        return $this->hasMany(Employments::class);
    }

    public function test(){
        return $this->belongsTo(Test::class, 'test_id');
    }
}
