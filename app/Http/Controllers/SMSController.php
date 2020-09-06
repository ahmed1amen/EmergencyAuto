<?php

namespace App\Http\Controllers;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\ServerException;
use Illuminate\Http\Request;

class SMSController extends Controller
{


    public function sendSingleSMS($phonenumber)
    {


        try {
            $client = new Client([
                'verify' => false, 'headers' => [
                    'Content-Type: application/json',
                    'Host' => 'api.yamamah.com',
                    'User-Agent' => 'okhttp/3.12.1',
                    'Connection' => 'keep-alive',

                ]
            ]);
            $r = $client->post('http://api.yamamah.com/SendSMS',
                [

                    'form_params' => [
                        "Username" => "",
                        "Password" => "",
                        "Tagname" => "",
                        "RecepientNumber" => "05xxxxxx;05xxxxxx",
                        "VariableList" => "",
                        "ReplacementList" => "",
                        "Message" => "test",
                        "SendDateTime" => 0,
                        "EnableDR" => false

                    ]
                ]);


            return $r->getBody()->getContents();
        } catch (ServerException $exception) {

        }
    }


    public function sendMultipleSMS($phonenumber)
    {


    }

}
