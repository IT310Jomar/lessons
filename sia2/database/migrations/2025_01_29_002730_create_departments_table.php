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
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string("name", 60);
            $table->timestamps();
        });

        DB::table("departments")->insert([
            [
                'name' => 'Bachelor of Science in Information Technology'
            ],
            [
                'name' => 'Bachelor of Science in Business Administration'
            ],
            [
                'name' => 'Bachelor of Science in Education'
            ],
        ]);
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
