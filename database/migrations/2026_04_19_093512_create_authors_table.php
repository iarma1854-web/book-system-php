<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint; // Должно быть это
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Замени Table на Blueprint здесь:
        Schema::create('authors', function (Blueprint $table) { 
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->date('birthdate');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('authors');
    }
};