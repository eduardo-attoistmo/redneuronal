<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDetalleimpliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('detalleimpli', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('idproyecto');
$table->string('nombreproyecto');
$table->string('puesto');
$table->string('nombreimplicado');
$table->time('timeinv');

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
        Schema::drop('detalleimpli');
    }

}
