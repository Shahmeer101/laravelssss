<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id('doctor_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('address');
            $table->string('date_of_birth');
            $table->string('hire_date');
            $table->string('availability_time_start');
            $table->string('availability_time_end');
            $table->string('availability_week');
            $table->string('experience');
            $table->string('education');
            $table->string('details')->nullable();
            $table->string('profile_picture')->nullable();
        
            // Foreign key columns
            $table->unsignedInteger('user_id'); 
            $table->unsignedBigInteger('city_id'); 
            $table->unsignedBigInteger('category_id'); 
        
            $table->timestamps();
        
            // Foreign key constraints
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('city_id')->references('city_id')->on('citys')->onDelete('cascade');
            $table->foreign('category_id')->references('category_id')->on('categories')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
};
