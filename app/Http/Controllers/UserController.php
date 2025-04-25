<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function tampilUser(){
        $pengguna = User::all();
        //dd($pengguna->toArray());
        return view('tampil-user', compact('pengguna'));
        //return view('tampil-user', ['pengguna' => $pengguna]);
    }

    public function tambahUser(){
        return view('tambah-user');
    }

    public function simpanUser(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        return redirect('tampil-user');
    }
    public function edit($id){
        //cek apakah id user ada atau tidak
        $pengguna = User::findOrFail($id);

        return view('edituser',['pengguna' => $pengguna]); //panggil view dan isi $pengguna
    }

    public function update(Request $request, $id) {
        //validasi inputan
        $request->validate([
            'name' => 'required|min:3|max:255'
        ]);

        //cek id nya ada or tidak
        $pengguna = User::findOrFail($id);

        //ubah nama
        $pengguna->update([
            'name' => $request->name
        ]);

        return redirect('tampil-user');

    }

    public function destroy($id) {
        //cek id nya ada or tida
        $pengguna = user::findOrFail($id);

        //delete
        $pengguna->delete();

        return redirect('tampil-user');
    }
}
