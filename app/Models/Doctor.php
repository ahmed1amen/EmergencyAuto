<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Doctor
 * @package App\Models
 * @version August 2, 2020, 8:38 pm UTC
 *
 * @property \App\Models\Department $department
 * @property integer $department_id
 * @property string $specification
 */
class Doctor extends Model
{

    public $table = 'doctors';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'department_id',
        'specification'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'department_id' => 'integer',
        'specification' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'department_id' => 'required',
        'specification' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function department()
    {
        return $this->belongsTo(\App\Models\Department::class, 'department_id');
    }
}
