<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class configuraEntrada extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'configuraentradas';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['audio', 'video', 'documento', 'lengFront', 'lengBack', 'empleado'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
