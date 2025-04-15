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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('intitule');
            $table->float('notes')->nullable();
            $table->float('prix_unitaire');
            $table->string('description')->nullable();
            $table->float('taille')->nullable();
            $table->string('largeur')->nullable();
            $table->string('image_principale')->nullable();
            $table->timestamps();
            $table->bigInteger('categorie_id')->nullable();
            $table->bigInteger('marque_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
