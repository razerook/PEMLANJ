<?php

namespace App\Controllers;

class PostController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Blog - Post"
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar');
        echo view('v_post');
        echo view('layouts/footer');
    }
}
