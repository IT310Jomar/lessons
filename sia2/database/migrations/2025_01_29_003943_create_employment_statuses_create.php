<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employment_statuses_create', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->timestamps();
        });
        // $data = array('Regular', 'Maternity', 'Paternity', 'Sabbatical', 'Terminated', 'Resigned', 'AWOL', 'Probationary', 'Part-Time', 'Extended Part-Time', 'Contractual / Project Based', 'On PIP', 'End of Contract');

    
        DB::table('employment_statuses_create')->insert([
            [
                'name' => 'Regular'
            ],
            [
                'name' => 'Maternity'
            ],
            [
                'name' => 'Paternity'
            ],
            [
                'name' => 'Sabbatical'
            ],
            [
                'name' => 'Terminated'
            ],
            [
                'name' => 'Resigned'
            ],
            [
                'name' => 'AWOL'
            ],
            [
                'name' => 'Probationary'
            ],
            [
                'name' => 'Part-Time'
            ],
            [
                'name' => 'Extended Part-Time'
            ],
            [
                'name' => 'Contractual / Project Based'
            ],
            [
                'name' => 'On PIP'
            ],
            [
                'name' => 'End of Contract'
            ]
        ]);
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employment_statuses_create');
    }
};
