<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $rekod_users = [
            [
                'id' => '1',
                'nama' => 'Ali',
                'email' => 'ali@gmail.com'
            ],
            [
                'id' => '2',
                'nama' => 'John',
                'email' => 'john@gmail.com'
            ],
            [
                'id' => '3',
                'nama' => 'Lee',
                'email' => 'lee@gmail.com'
            ],
        ];
    
        return view('template_users/senarai_users', compact('rekod_users'));
    }

    public function create() {
        return view('template_users/tambah_user');
    }

    public function edit($id) {
        return view('template_users/edit_user', compact('id'));
    }
}
