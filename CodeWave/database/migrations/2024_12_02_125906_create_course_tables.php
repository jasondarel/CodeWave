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
        Schema::create('course', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("description");
            $table->integer("total_time");
            $table->integer("lesson_amount");
        });

        Schema::create('lesson', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->foreign("course_id")->references("id")->on("course");
        });

        Schema::create('enrollment', function (Blueprint $table) {
            $table->id();
            $table->foreign("user_id")->references('id')->on('users');
            $table->foreign("course_id")->references('id')->on('course');
            $table->date("enrollment_date");
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_tables');
        Schema::dropIfExists('lesson');

    }
};
