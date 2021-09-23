<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('fotos');
    }

    function mindex(){
        return view('welcome_message');
    }
}
