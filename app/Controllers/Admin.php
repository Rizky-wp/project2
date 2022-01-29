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
        return redirect()->to(base_url('/admin/input'));
    }

    public function data()
    {
    }
}
