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
        
        return redirect()->route('indexUser');
    }

    public function edit($id)
    {
        $user = DB::table('users')
        ->where('id', '=', $id)
        ->first();

        return view('template_users/edit_user', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        $data = $request->only('name', 'email');

        if (!empty($request->input('password')))
        {
            $data['password'] = bcrypt($request->input('password'));
        }

        DB::table('users')
        ->where('id', '=', $id)
        ->update($data);
        
        return redirect()->route('indexUser');
    }

    public function destroy($id)
    {
        DB::table('users')
        ->where('id', '=', $id)
        ->delete();

        return redirect()->route('indexUser');
    }
}
