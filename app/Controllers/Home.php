<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {

        $data = [
            'nav' => "home"
        ];
        return view('home', $data);
    }


    public function login()
    {
        return view('login');
    }

    public function kontak()
    {
        $data = [
            'nav' => "kontak",
        ];
        return view('kontak', $data);
    }
    public function admin()
    {
        return view('layout/admin');
    }

    public function informasi()
    {
        $data = [
            'nav' => "informasi",
        ];
        return view('informasi', $data);
    }
}
