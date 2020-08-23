<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class managers
 * @package App\Models
 * @version August 23, 2020, 7:32 am UTC
 *
 */
class managers extends Model
{

    public $table = 'managers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
