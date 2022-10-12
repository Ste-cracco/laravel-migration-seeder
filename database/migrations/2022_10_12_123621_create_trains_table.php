<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 30);
            $table->string('stazione_partenza', 30);
            $table->string('stazione_arrivo', 30);
            $table->string('orario_partenza');
            $table->string('orario_arrivo');
            $table->string('codice_treno', 10);
            $table->tinyInteger('numero_carrozze')->unsigned();
            $table->tinyInteger('in_orario')->default(1);
            $table->tinyInteger('cancellato')->default(0);
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
        Schema::dropIfExists('trains');
    }
}
