<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Data User' 
        ];
        return view('admin/index', $data);
    }
}