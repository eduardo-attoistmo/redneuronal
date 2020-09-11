<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class detalles1 extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'detalles1s';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idproyecto', 'nombreproyecto', 'requerimientos'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
