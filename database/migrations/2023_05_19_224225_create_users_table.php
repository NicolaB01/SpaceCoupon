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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('idUtente');
            $table->string('nome');
            $table->string('cognome');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('genere');
            $table->string('eta');
            $table->string('telefono', 10)->unique();
            $table->string('email')->unique();
            $table->enum('livello', ['user', 'staff', 'admin'])->default('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
