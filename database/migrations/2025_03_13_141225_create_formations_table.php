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
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('description');
            $table->date('date_debut_candidature')->nullable();
            $table->decimal('prix', 8, 2)->nullable();
            $table->integer('duree'); // Durée en jours par exemple
            $table->date('date_debut')->nullable();
            $table->date('date_fin')->nullable();
            $table->date('date_limite_depot')->nullable();
            $table->dateTime('date_heure')->nullable();
            $table->string('lieu')->nullable();
            $table->enum('type', ['coaching', 'formation', 'webinaire']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formations');
    }
};
