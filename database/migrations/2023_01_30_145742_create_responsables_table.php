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
        Schema::create('responsables', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('poste')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('statut')->nullable();
            $table->string('etablissement')->nullable();
            $table->string('country')->nullable();
            $table->string('departement')->nullable();
            $table->text('competence')->nullable();
            $table->string('gsm')->nullable();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('responsables');
    }
};