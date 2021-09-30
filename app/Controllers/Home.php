<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //pasar parametros a la vista
        $datos['Nombre']="Leidy";
        $datos['programas'] = ['Desarrollo de software','Sistemas','Redes','Video juegos'];
        return view('welcome_message',$datos);
    }

    function mindex(){
        return view('welcome_message');
    }
}
