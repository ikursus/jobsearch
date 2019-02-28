<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function index()
    {
        $rekod_users = DB::table('users')
        ->select('id', 'name', 'email')
        ->get();
    
        return view('template_users/senarai_users', compact('rekod_users'));
    }

    public function create()
    {
        return view('template_users/tambah_user');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:3|confirmed'
        ]);
        
        $data = $request->only('name', 'email');
        $data['password'] = bcrypt($request->input('password'));

        DB::table('users')->insert($data);
        
        return redirect()->route('senaraiUsers');
    }

    public function edit($id) {
        return view('template_users/edit_user', compact('id'));
    }
}
