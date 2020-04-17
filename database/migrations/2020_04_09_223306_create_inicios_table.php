<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIniciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inicios', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('imagen');
            $table->string('imagen2');
            $table->string('imagen3');
            $table->string('imagen4');
            $table->string('imagen5');
            $table->string('imagen6');
            $table->string('imagen7');
            $table->string('imagen8');
            $table->string('imagen9');
            $table->string('imagen10');
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
        Schema::dropIfExists('inicios');
    }
}
