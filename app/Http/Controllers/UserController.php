<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function tampilUser(){
        $pengguna = User::all();
        //dd($pengguna->toArray());
        //return view('user', compact('pengguna'));
        return view('user', ['pengguna' => $pengguna]);
    }

    public function tambahUser(){
        return view('tambahuser');
    }

    public function tambahUserProses(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        return redirect('tampil-user');
    }
}
