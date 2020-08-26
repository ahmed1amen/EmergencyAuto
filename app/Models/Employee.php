<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Employee
 * @package App\Models
 * @version August 26, 2020, 12:34 pm UTC
 *
 */
class Employee extends Model
{

    public $table = 'employees';
    
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
