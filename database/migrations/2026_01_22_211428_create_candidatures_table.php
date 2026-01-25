<?php

use Carbon\Carbon;
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
        Schema::create('candidatures', function (Blueprint $table) {
            $table->id();
            $table->foreignId("offre_id")->constrained("offres")->onDelete("cascade");
            $table->foreignId("candidat_id")->constrained("users")->onDelete("cascade");
            $table->enum("statut", ["en_attente", "acceptee", "refusee"])->default("en_attente");
            $table->text("lettre_motivation")->nullable();
            $table->string("cv_path")->nullable();
            $table->dateTime("date_candidature")->default(Carbon::now());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidatures');
    }
};
