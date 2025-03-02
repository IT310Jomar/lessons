<?php

namespace App\Models;

use App\Models\Locations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Test extends Model
{
    use HasFactory;

    protected $table = 'test';
    protected $fillable = ['name'];



    public function empLocations(){
        return $this->hasMany(Locations::class);
    }
}
