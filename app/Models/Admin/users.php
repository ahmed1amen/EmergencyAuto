<?php

namespace App\Models\Admin;

use Eloquent as Model;

/**
 * Class users
 * @package App\Models\Admin
 * @version August 2, 2020, 8:18 pm UTC
 *
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $phoneNumber
 * @property string $address
 * @property string $sex
 * @property string $remember_token
 */
class users extends Model
{

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'email',
        'password',
        'phoneNumber',
        'address',
        'sex',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'password' => 'string',
        'phoneNumber' => 'string',
        'address' => 'string',
        'sex' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'phoneNumber' => 'required',
        'address' => 'required',
        'sex' => 'required'
    ];

    
}
