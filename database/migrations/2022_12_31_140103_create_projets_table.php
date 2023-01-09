<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->char('code');
            $table->string('titre');
            $table->text('resume');
            $table->date('date_depot');
            $table->string('fichier');
            $table->char('semestre');
            $table->foreignId('parcours_id')->constrained('parcours')->nullable();
            $table->foreignId('type_projets_id')->constrained('type_projets')->nullable();
            $table->foreignId('personnels_id')->constrained('personnels')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projets');
    }
};
