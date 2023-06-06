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
        Schema::create('coupons', function (Blueprint $table) {
            $table->bigIncrements('idCoupon');
            $table->unsignedBigInteger('idUtente');
            $table->unsignedBigInteger('idPromozione');
            $table->foreign('idUtente')->references('idUtente')->on('users')->onDelete('cascade');
            $table->foreign('idPromozione')->references('idPromozione')->on('promotions');
            $table->string('codiceAttivazione');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupons');
    }
};
