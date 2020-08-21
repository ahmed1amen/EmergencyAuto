<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Hospital
 * @package App\Models
 * @version August 2, 2020, 8:39 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $departments
 * @property string $name
 * @property string $clinicalCapacity
 */
class Hospital extends Model
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
        'name' => 'required',
        'clinicalCapacity' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function departments()
    {
        return $this->hasMany(\App\Models\Department::class, 'hospital_id');
    }
}
