<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Templating extends BaseController
{
    public function __construct()
    {
        $this->UserModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'title' => "Blog - Post"
        ];
        //echo view('layouts/header', $data);
        //echo view('layouts/navbar');
        //echo view('v_post');
        //echo view('layouts/footer');
        return view('view_admin');
    }

    public function Register()
    {
        $data = [
            'title' => "Blog - Register"
        ];
        //echo view('layouts/header', $data);
        //echo view('layouts/navbar');
        //echo view('v_post');
        //echo view('layouts/footer');
        return view('v_register');
    }

    public function saveRegister()
    {
        $request = service('request');
        $data = [
            'fullname' => $request->getVar('fullname'),
            'email' => $request->getVar('email'),
            'password' => $request->getVar('password'),
        ];
        $this->UserModel->insert($data);
        return redirect()->to(base_url('register'));
    }
}