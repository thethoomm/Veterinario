<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('components/header', [
            "titulo" => "Dashboard"
        ]);
        echo view('components/navbar');
        echo view('dashboard');


        echo view('components/footer');
    }
}
