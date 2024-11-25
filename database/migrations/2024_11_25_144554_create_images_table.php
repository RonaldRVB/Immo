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
        Schema::create('images', function (Blueprint $table) {
            $table->id(); // Clé primaire
            $table->string('path'); // Chemin du fichier image
            $table->unsignedBigInteger('home_id'); // Lien avec la maison
            $table->timestamps(); // Colonnes created_at et updated_at
    
            // Définir la clé étrangère
            $table->foreign('home_id')->references('id')->on('homes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
