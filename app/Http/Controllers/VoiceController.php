<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Twilio\Exceptions\RestException;
use Twilio\Rest\Client;

class VoiceController extends Controller
{
    public $account_sid;
    public $auth_token;
    public function __construct() {
        $setting = Setting::query()->first();
        // Twilio credentials
        $this->account_sid =   $setting->twilio_account_sid;
        $this->auth_token =   $setting->twilio_auth_token;

        //the twilio number you purchased
        $this->from =    $setting->twilio_twilio_phone_number;

        // Initialize the Programmable Voice API
       $this->client = new Client($this->account_sid, $this->auth_token);
    }

    /**
     * Making an outgoing call
     */
    public function initiateCall(Request $request) {
        // Validate form input
        $this->validate($request, [
            'phone_number' => 'required|string',
        ]);

        try {
            //Lookup phone number to make sure it is valid before initiating call
            $phone_number = $this->client->lookups->v1->phoneNumbers($request->phone_number)->fetch();

            // If phone number is valid and exists
            if($phone_number) {
                // Initiate call and record call
                $call = $this->client->account->calls->create(
                    $request->phone_number, // Destination phone number
                    $this->from, // Valid Twilio phone number
                    array(
                        "record" => True,
                        "url" => "http://emergencyauto.ahmedamen.com/voice.xml")
                );

                if($call) {
                    echo 'Call initiated successfully';
                } else {
                    echo 'Call failed!';
                }
            }
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        } catch (RestException $rest) {
            echo 'Error: ' . $rest->getMessage();
        }
    }
}
