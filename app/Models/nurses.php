<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class nurses
 * @package App\Models
 * @version August 23, 2020, 7:32 am UTC
 *
 * @property string $Job
 */
class nurses extends Model
{

    public $table = 'nurses';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'Job'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Job' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Job' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
