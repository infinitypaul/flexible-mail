<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        $me = (new Mailing(request()))->send($this->urlParams());
        dd($me);
    }

    protected function urlParams(): array
    {
        return [
            'reference' => new LoginMail(),
        ];
    }
}
