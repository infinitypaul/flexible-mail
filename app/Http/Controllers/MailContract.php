<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

interface MailContract
{
    public function send(Request $request);
}
