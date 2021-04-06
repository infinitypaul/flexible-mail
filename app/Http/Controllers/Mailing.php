<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class Mailing
{
    /**
     * @var Request
     */
    protected $request;

    public function __construct(Request $request){

        $this->request = $request;
    }

    public function send(array $urlParams)
    {
        //dd($this->resolvedMail($urlParams));
        foreach ($this->resolvedMail($urlParams) as $key=>$mail){
            if(!$mail instanceof MailContract){
                continue;
            }
            $mail->send($this->request);
        }

        return;
        //return response()->json([]);
    }

    protected function resolvedMail(array $urlParams): array
    {
        return Arr::only($urlParams, array_keys($this->request->all()));
    }
}
