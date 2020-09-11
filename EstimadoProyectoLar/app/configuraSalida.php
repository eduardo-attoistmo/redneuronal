<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class configuraSalida extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'configurasalidas';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['w', 'p', 'como', 'mapa', 'reglas', 'prototipo', 'requerimiento', 'historia', 'mapeo'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
