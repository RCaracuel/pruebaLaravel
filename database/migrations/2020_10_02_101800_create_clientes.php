<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('idClientes');
            $table->string('nombre');
            $table->integer('edad')->nullable();
            $table->unsignedBigInteger('fkidColectivo')->nullable();
            
            $table->timestamps();

            
        });

        Schema::table('clientes', function (Blueprint $table) {
            $table->foreign('fkidColectivo')->references('idColectivo')->on('colectivo');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
