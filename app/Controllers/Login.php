<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{

    public function index()
    {

        return view('login');
    }
    public function submit()
    {
        // load encrypter
        $encrypter = service('encrypter');
        // load session
        session();
        // get post form login
        $username = $this->request->getVar('username', FILTER_SANITIZE_STRING);
        $pass = $this->request->getVar('password', FILTER_SANITIZE_STRING);
        // encryption
        $username = base64_encode($username);
        $pass = base64_encode($pass);
        // load user model

        $userModel = new UserModel();
        $Database = $userModel->find($username);

        if (($username == $Database['username']) && ($pass == $Database['password'])) {
            $_SESSION['name'] = $username;
            return redirect()->to(base_url());;
        } else {
            $data = [
                'pesan' => 'gagal',
            ];
            return view('login', $data);
        }



        // dd($data);
        // return view('login');
    }
}
