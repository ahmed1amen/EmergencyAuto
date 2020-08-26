<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Exceptions\RestException;
use Twilio\Rest\Client;

class VoiceController extends Controller
{
    public $account_sid;
    public $auth_token;
    public function __construct() {
        // Twilio credentials
        $this->account_sid = env('ACCOUNT_SID');
        $this->auth_token = env('AUTH_TOKEN');
        //the twilio number you purchased
        $this->from = env('TWILIO_PHONE_NUMBER');

        // Initialize the Programmable Voice API
    //    $this->client = new Client($this->account_sid, $this->auth_token);
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
                        "url" => "http://demo.twilio.com/docs/voice.xml")
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
