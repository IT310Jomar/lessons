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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->unsignedBigInteger('test_id');
            $table->boolean('status')->default(1);
            $table->timestamps();

            $table->foreign('test_id')->references('id')->on('test')->onDelete('cascade')->onUpdate('cascade');
        });

        DB::table('locations')->insert([
            [
                'name'=> "CDO",
                'test_id'=> 1,
            ],
            [
                'name' => 'Iligan',
                'test_id' => 2,
            ]
            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
