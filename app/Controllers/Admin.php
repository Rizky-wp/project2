<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Admin extends BaseController
{
    public function index()
    {

        return view('layout/admin');
    }
    public function input()
    {
        return view('admin/input');
    }
    public function dataTanah()
    {
        return view('admin/dataTanah');
    }
    public function submit()
    {
        $session = session();
        // model
        $adminModel = new AdminModel();
        // get post form input
        $name = $this->request->getVar('nama', FILTER_SANITIZE_STRING);
        $noSurat = $this->request->getVar('noSurat', FILTER_SANITIZE_NUMBER_FLOAT);
        $noHakMilik = $this->request->getVar('noHakMilik', FILTER_SANITIZE_STRING);
        $luas = $this->request->getVar('luas', FILTER_SANITIZE_NUMBER_FLOAT);
        $noBerkas = $this->request->getVar('noBerkas', FILTER_SANITIZE_STRING);
        $daftarIsian = $this->request->getVar('daftarIsian', FILTER_SANITIZE_STRING);

        // insert database
        $adminModel->insert([
            'no_surat'    => $noSurat,
            'nama' => $name,
            'no_hak_milik' => $noHakMilik,
            'luas' => $luas,
            'no_berkas' => $noBerkas,
            'dftr_isian' => $daftarIsian,
        ]);
        $session->setFlashdata('pesan', 'berhasil');
        return redirect()->to(base_url('/admin/input'));
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
        if ($this->request->getVar('start') > 0) {
            $offset = $this->request->getVar('start') + $this->request->getVar('length');
        } else {
            $offset = 0;
        }

        // 
        $data = $adminModel->orLike($search)->findAll($this->request->getVar('length'), $offset);
        $data1 = [];
        $akses = "<center><a href='#' class='h-75 btn btn-warning btn-circle shadow-sm tampilUpdate'data-id=''><i class='fas fa-feather-alt'></i></a> | <a  href='#' class='btn btn-danger btn-circle shadow-sm tampilDelete'><i class='fas fa-trash'></i></a> <center>";
        foreach ($data as $key) {
            $row = [];
            $row[] = $key['nama'];
            $row[] = $key['no_surat'];
            $row[] = $key['no_hak_milik'];
            $row[] = $key['luas'];
            $row[] = $key['no_berkas'];
            $row[] = $key['dftr_isian'];
            $row[] = $key['tgl_arsip'];
            $row[] = $akses;
            $data1[] = $row;
        }
        $output = [
            "draw" => $this->request->getVar('draw'),
            "recordsTotal" => count($adminModel->findAll()),
            "recordsFiltered" => count($data),
            "data" => $data1,
        ];
        // dd($output);

        echo json_encode($output);
    }
    public function update()
    {
        // deklarasi model
        $adminModel = new AdminModel();

        $data = [
            'nama' => $this->request->getVar('nama'),
            'no_hak_milik' => $this->request->getVar('noHakMilik'),
            'luas' => $this->request->getVar('luas'),
            'no_berkas' => $this->request->getVar('noBerkas'),
            'dftr_isian' => $this->request->getVar('daftarIsian'),
        ];

        $adminModel->update($this->request->getVar('noSurat'), $data);
    }
    public function delete()
    {
        // deklarasi model
        $adminModel = new AdminModel();

        $adminModel->where('no_surat', $this->request->getVar('noSurat'))->delete();
    }
}
