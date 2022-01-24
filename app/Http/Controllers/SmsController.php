<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class SmsController extends Controller
{

    public function index()
    {
        try{

            // Your Account SID and Auth Token from twilio.com/console
            $sid = env('TWILLIO_SID');
            $token = env('TWILLIO_TOKEN');
//            dd($sid
//            ,$token);
            $client = new Client($sid, $token);

            $client->messages->create(
            // the number you'd like to send the message to
                '+9779806892006',
                [
                    // A Twilio phone number you purchased at twilio.com/console
                    'from' => '+16072845024',
                    // the body of the text message you'd like to send
                    'body' => 'Hey Jenny! Good luck on the bar exam!'
                      bukash  yadav  ikahsg  ggsh h  hg  hg s

                ]
            );

        }catch (\Exception $exception){
            dd($exception);
        }

        dd('here');
    }

}
