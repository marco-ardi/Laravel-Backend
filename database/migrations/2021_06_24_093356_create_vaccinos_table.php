<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaccinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccinos', function (Blueprint $table) {
            $table->id();
            $table->string('tipologia');
            $table->foreignId('medico_id');
            $table->foreign('medico_id')->references('id')->on('medicos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('paziente_id');
            $table->foreign('paziente_id')->references('id')->on('pazientes')->onDelete('cascade')->onUpdate('cascade');
            $table->date('data_somministrazione');
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
        Schema::dropIfExists('vaccinos');
    }
}
