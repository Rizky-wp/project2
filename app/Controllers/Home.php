<?php

namespace App\Controllers;

use App\Models\AdminModel;

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
    public function bukuTanah()
    {
        $data = [
            'nav' => "informasi",
        ];
        return view('bukuTanah', $data);
    }
    public function data()
    {
        // deklarasi model
        $adminModel = new AdminModel();

        // column yg bisa di search
        $search = [
            'nama' => $this->request->getVar('search[value]'),
            'no_surat' => $this->request->getVar('search[value]'),
            'no_hak_milik' => $this->request->getVar('search[value]'),
            'luas' => $this->request->getVar('search[value]'),
            'no_berkas' => $this->request->getVar('search[value]'),
            'dftr_isian' => $this->request->getVar('search[value]'),
            'tgl_arsip' => $this->request->getVar('search[value]')
        ];

        // set offset
        // if ($this->request->getVar('start') > 0) {
        //     $offset = $this->request->getVar('start') + $this->request->getVar('length');
        // } else {
        //     $offset = 0;
        // }

        // 
        $data = $adminModel->orLike($search)->findAll($this->request->getVar('length'), $this->request->getVar('start'));
        $data1 = [];

        foreach ($data as $key) {
            $row = [];
            $row[] = $key['nama'];
            $row[] = $key['no_surat'];
            $row[] = $key['no_hak_milik'];
            $row[] = $key['luas'];
            $row[] = $key['no_berkas'];
            $row[] = $key['dftr_isian'];
            $row[] = $key['tgl_arsip'];
            $data1[] = $row;
        }
        $output = [
            "draw" => $this->request->getVar('draw'),
            "recordsTotal" => count($adminModel->findAll()),
            "recordsFiltered" => count($adminModel->orLike($search)->findAll()),
            "data" => $data1,
        ];
        // dd($output);

        echo json_encode($output);
    }
}
