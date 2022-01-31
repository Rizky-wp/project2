<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{

    public function index()
    {
        $data = [
            'judul' => 'Login',
        ];
        return view('login', $data);
    }
    public function submit()
    {
        // load encrypter
        $encrypter = service('encrypter');
        // load session
        session();
        // get post form login
        $username = htmlspecialchars($this->request->getVar('username'));
        $pass = htmlspecialchars($this->request->getVar('password'));
        // encryption
        $username = base64_encode($username);
        $pass = base64_encode($pass);
        // load user model

        $userModel = new UserModel();
        $Database = $userModel->find($username);

        if (($username == $Database['username']) && ($pass == $Database['password'])) {
            $_SESSION['name'] = $username;
            return redirect()->to(base_url());
        } else {
            $data = [
                'pesan' => 'gagal',
                'judul' => 'Login'
            ];
            return view('login', $data);
        }



        // dd($data);
        // return view('login');
    }
    public function logout()
    {
        session();
        unset($_SESSION['name']);


        return redirect()->to(base_url());
    }
}
