<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('location_id');
            $table->unsignedBigInteger('employment_status_id');
            $table->unsignedBigInteger('employment_types_id');
            $table->integer('employee_id');
            $table->integer('job_grade', false)->nullable();
            $table->enum('billability', ['Billable', 'Non-Billable']);
            $table->enum('type', ['Rank-and-File', 'Manager', 'Officer']);
            $table->string('title')->nullable();
            $table->date('date_hired')->nullable();
            $table->date('date_regularization')->nullable();
            $table->text('remarks')->nullable();
            $table->integer('biometric', false);
            $table->enum('payroll_type', ['Hourly', 'Daily', 'Semi-Monthly', 'Monthly']);
            $table->integer('payroll_pie_id', false)->nullable();
            $table->integer('working_hours', false)->nullable();
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('department_id')->references('id')->on('departments')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('location_id')->references('id')->on('locations')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('employment_status_id')->references('id')->on('employment_statuses_create')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('employment_types_id')->references('id')->on('employment_types')->onUpdate('cascade')->onDelete('cascade');



        });

        DB::table('employments')->insert([]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employments');
    }
};
