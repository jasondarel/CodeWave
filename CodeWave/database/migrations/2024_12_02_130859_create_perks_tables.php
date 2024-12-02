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

        Schema::create('ranks', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer("minimum_points");

        });
        Schema::create('user_perks', function (Blueprint $table) {
            $table->id();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('points');
            $table->foreign('rank_id')->references('id')->on('ranks');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perks_tables');
    }
};
