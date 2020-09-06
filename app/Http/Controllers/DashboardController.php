<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ServerException;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {

        $setting = Setting::query()->first();
        $smsusername = $setting->sms_username;
        $smspassword = $setting->sms_password;

        try {
            $client = new Client([
                'verify' => false, 'headers' => [
                    'Content-Type: application/json',
                    'Host' => 'api.yamamah.com',
                    'User-Agent' => 'okhttp/3.12.1',
                    'Connection' => 'keep-alive',

                ]
            ]);

            $r = $client->get('http://api.yamamah.com/GetCredit/'.$smsusername.'/'.$smspassword);

            if ($r->getStatusCode() == 200) {
                return view('home')->with([
                    'setting' => $setting, 'credit' => json_decode($r->getBody()->getContents(), true)
                ]);
            }
        } catch (ServerException $exception) {

        }
    }
}
