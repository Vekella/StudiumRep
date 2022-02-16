<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOsobeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Osobe', function (Blueprint $table) {
            $table->id();
            $table->string('Ime');
            $table->string('Prezime');
            $table->string('OIB',11);
            $table->date('Datum_Rodjenja');
            $table->string('Email',200);
            $table->string('Mobitel',25);
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
        Schema::dropIfExists('Osobe');
    }
}
