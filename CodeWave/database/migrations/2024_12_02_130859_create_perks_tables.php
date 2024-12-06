<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ranks', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->integer('minimum_points');
            $table->timestamps();
        });

        Schema::create('user_perks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('rank_id')->nullable();
            $table->integer('points');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('rank_id')->references('id')->on('ranks')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_perks');
        Schema::dropIfExists('ranks');
    }
};
