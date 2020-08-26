<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Doctor
 * @package App\Models
 * @version August 26, 2020, 12:33 pm UTC
 *
 * @property \App\Models\Department $department
 * @property \App\Models\Specialty $special
 * @property integer $department_id
 * @property integer $special_id
 */
class Doctor extends Model
{

    public $table = 'doctors';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'department_id',
        'special_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'department_id' => 'integer',
        'special_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'department_id' => 'required',
        'special_id' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function department()
    {
        return $this->belongsTo(\App\Models\Department::class, 'department_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function special()
    {
        return $this->belongsTo(\App\Models\Specialty::class, 'special_id');
    }
}
