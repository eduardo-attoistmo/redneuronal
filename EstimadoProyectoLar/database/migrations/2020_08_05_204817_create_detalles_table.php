<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('detalles', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('n');
$table->string('nombretarea',30);
$table->string('nombreproyecto',30);
$table->integer('cantidad');
$table->string('estado',10);
$table->text('comentarios');
$table->string('archivo',30);
$table->string('url',30);

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
        Schema::drop('detalles');
    }

}
