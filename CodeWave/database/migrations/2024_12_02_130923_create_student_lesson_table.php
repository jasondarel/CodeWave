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
        Schema::create('student_lesson', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('lesson_id')->references('id')->on('lesson');
            $table->date('completed_date');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_lesson');
    }
};
