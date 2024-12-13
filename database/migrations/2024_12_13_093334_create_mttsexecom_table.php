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
        Schema::create('mtts_execom', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('title');
            $table->string('society')->nullable();
            $table->string('image')->nullable();
            $table->string('github')->nullable();
            $table->string('insta')->nullable();
            $table->string('linkedin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mttsexecom');
    }
};
