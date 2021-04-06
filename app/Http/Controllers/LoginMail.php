<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class LoginMail implements MailContract
{

    public function send($request)
    {
        $this->validateRequest($request);

        dd('Send Email Here');
    }

    protected function validateRequest($request){
        $validator = Validator::make($request->all(), [
            'reference' => 'required',
        ]);

        if ($validator->fails()) {
            dd('fail');
        }
    }
}
