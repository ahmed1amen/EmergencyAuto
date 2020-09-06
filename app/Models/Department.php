<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Department
 * @package App\Models
 * @version August 26, 2020, 12:33 pm UTC
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


protected $with  = ['hospital:id,name'];

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
        'name' => 'required|string|max:255',
        'numberOfBeds' => 'required|string|max:255',
        'alarmSound' => 'required',
        'hospital_id' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
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
