<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEntradasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('entradas', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('audio');
$table->integer('video');
$table->integer('documento');
$table->integer('lengFront');
$table->integer('lengBack');
$table->integer('empleado');

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
        Schema::drop('entradas');
    }

}
