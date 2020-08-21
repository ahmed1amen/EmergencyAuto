<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Department
 * @package App\Models
 * @version August 2, 2020, 8:40 pm UTC
 *
 * @property \App\Models\Hospital $hospital
 * @property \Illuminate\Database\Eloquent\Collection $doctors
 * @property string $name
 * @property string $numberOfBeds
 * @property string $alarmSound
 * @property integer $hospital_id
 */
class Department extends Model
{

    public $table = 'departments';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'numberOfBeds',
        'alarmSound',
        'hospital_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'numberOfBeds' => 'string',
        'alarmSound' => 'string',
        'hospital_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'numberOfBeds' => 'required',
        'alarmSound' => 'required',
        'hospital_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function hospital()
    {
        return $this->belongsTo(\App\Models\Hospital::class, 'hospital_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function doctors()
    {
        return $this->hasMany(\App\Models\Doctor::class, 'department_id');
    }
}
