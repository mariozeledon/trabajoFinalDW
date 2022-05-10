<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('validacion');
    }

    public function ciudadano(){
        return view('login_ciudadano');
    }
}
