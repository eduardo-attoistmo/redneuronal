<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class detalleimpli extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'detalleimplis';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idproyecto', 'nombreproyecto', 'puesto', 'nombreimplicado', 'timeinv'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
