<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'nav' => "home",
        ];
        return view('home', $data);
    }
}
