<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class specialties
 * @package App\Models
 * @version August 23, 2020, 7:30 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $doctors
 * @property string $name
 */
class specialties extends Model
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
