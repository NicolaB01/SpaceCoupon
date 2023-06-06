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
        Schema::create('promotions', function (Blueprint $table) {
            $table->bigIncrements('idPromozione');
            $table->unsignedBigInteger('idAzienda');
            $table->integer('sconto');
            $table->string('oggetto');
            $table->string('modalita');
            $table->string('luogoFruizione');
            $table-> date('tempoFruizione');
            $table-> boolean('eliminata')->default(false);
            $table->integer('numeroCoupon')->default(0);
            $table->foreign('idAzienda')->references('idAzienda')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promotions');
    }
};
