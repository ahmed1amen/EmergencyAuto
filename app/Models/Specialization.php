<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Specialization
 * @package App\Models
 * @version August 26, 2020, 12:33 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $doctors
 * @property string $name
 */
class Specialization extends Model
{

    public $table = 'specialties';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function doctors()
    {
        return $this->hasMany(\App\Models\Doctor::class, 'special_id');
    }
}
