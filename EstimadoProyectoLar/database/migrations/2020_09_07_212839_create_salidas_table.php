<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSalidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('salidas', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('w');
$table->integer('p');
$table->integer('como');
$table->integer('mapa');
$table->integer('reglas');
$table->integer('prototipo');
$table->integer('requerimiento');
$table->integer('historia');
$table->integer('mapeo');

                $table->timestamps();
                $table->softDeletes();
            });
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('salidas');
    }

}
