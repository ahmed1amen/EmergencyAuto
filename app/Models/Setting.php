<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Setting
 * @package App\Models
 * @version September 5, 2020, 1:05 am UTC
 *
 * @property string $sms_username
 * @property string $sms_password
 * @property string $sms_template
 * @property string $twilio_account_sid
 * @property string $twilio_auth_token
 * @property string $twilio_twilio_phone_number
 */
class Setting extends Model
{

    public $table = 'settings';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'sms_username',
        'sms_password',
        'sms_template',
        'twilio_account_sid',
        'twilio_auth_token',
        'twilio_twilio_phone_number'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'sms_username' => 'string',
        'sms_password' => 'string',
        'sms_template' => 'string',
        'twilio_account_sid' => 'string',
        'twilio_auth_token' => 'string',
        'twilio_twilio_phone_number' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'sms_username' => 'required|string|max:255',
        'sms_password' => 'required|string|max:255',
        'sms_template' => 'required|string|max:255',
        'twilio_account_sid' => 'required|string|max:255',
        'twilio_auth_token' => 'required|string|max:255',
        'twilio_twilio_phone_number' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
