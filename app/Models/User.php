<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class User
 * @package App\Models
 * @version August 27, 2020, 2:32 am UTC
 *
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $phoneNumber
 * @property string $address
 * @property string $photo
 * @property string $sex
 * @property string $remember_token
 */
class User extends Model
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
        'photo',
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
        'photo' => 'string',
        'sex' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'password' => 'required|string|max:255',
        'phoneNumber' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'photo' => 'nullable|string|max:255',
        'sex' => 'required|string|max:255',
        'remember_token' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
