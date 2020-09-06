<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Doctor
 * @package App\Models
 * @version August 26, 2020, 12:33 pm UTC
 *
 * @property Department $department
 * @property Specialty $special
 * @property integer $department_id
 * @property integer $special_id
 */
class Doctor extends Model
{

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
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
    public $table = 'doctors';
    public $fillable = [
        'department_id',
        'special_id',
        'user_id'
    ];
    protected $with = ['user:id,email,name,phoneNumber,address,photo,sex', 'department:id,name', 'special:id,name' , 'codes:emergencycode_id'];
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'department_id' => 'integer',
        'special_id' => 'integer'
    ];

    /**
     * @return BelongsTo
     **/
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    /**
     * @return BelongsTo
     **/
    public function special()
    {
        return $this->belongsTo(Specialization::class, 'special_id');
    }

    /**
     * @return BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(user::class, 'user_id');
    }


    public function codes()
    {
        return $this->belongsToMany(Emergencycode::class);
    }
}


