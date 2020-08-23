<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class hospitals
 * @package App\Models
 * @version August 23, 2020, 7:31 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $departments
 * @property string $name
 * @property string $clinicalCapacity
 */
class hospitals extends Model
{

    public $table = 'hospitals';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'clinicalCapacity'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'clinicalCapacity' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'clinicalCapacity' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function departments()
    {
        return $this->hasMany(\App\Models\Department::class, 'hospital_id');
    }
}
