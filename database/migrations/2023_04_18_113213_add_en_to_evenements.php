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
        Schema::table('evenements', function (Blueprint $table) {
            $table->string('title_en', 100)->nullable();
            $table->text('description_en')->nullable();
            $table->text('accroche_en');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('evenements', function (Blueprint $table) {
            $table->dropColumn('title_en');
            $table->dropColumn('description_en');
            $table->dropColumn('accroche_en');
        });
    }
};