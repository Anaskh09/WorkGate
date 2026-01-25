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
        Schema::create('offres', function (Blueprint $table) {
            $table->id();
            $table->string('titre_offre');
            $table->text('description_offre');
            $table->string('lieu_travail');
            $table->decimal('salaire', 10, 2)->nullable();
            $table->enum('type_contrat', ['CDI', 'CDD', 'Internship', 'Freelance']);
            $table->date('date_expiration')->nullable();
            $table->enum("statut", ["active", "inactive"])->default("active");
            $table->foreignId("categorie_offre_id")->constrained("categorie_offres")->onDelete("cascade");
            $table->foreignId("recruteur_id")->constrained("users")->onDelete("cascade");
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offres');
    }
};
