<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Emergencycode
 * @package App\Models
 * @version August 26, 2020, 12:46 pm UTC
 *
 * @property string $name
 * @property string $icon
 * @property string $title
 * @property string $description
 * @property string $color
 * @property string $alarm
 */
class Emergencycode extends Model
{

    public $table = 'emergency_codes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'icon',
        'title',
        'description',
        'color',
        'alarm'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'icon' => 'string',
        'title' => 'string',
        'description' => 'string',
        'color' => 'string',
        'alarm' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'icon' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'color' => 'required|string|max:255',
        'alarm' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
