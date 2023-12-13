<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('General');
    }

    public function modelo()
    {
        return view('modelo');
    }
    public function sensores()
    {
        return view('sensores');
    }
    public function sensoresCS()
    {
        return view('sensoresCS');
    }
    public function suawaka()
    {
        return view('suawaka');
    }
}
