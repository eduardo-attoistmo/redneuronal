<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class detalle extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'detalles';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['n', 'nombretarea', 'nombreproyecto', 'cantidad', 'estado', 'comentarios', 'archivo', 'url'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
