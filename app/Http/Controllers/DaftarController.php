<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DaftarAdmin;

class DaftarController extends Controller
{
    public function input(request $request){
        $data = new DaftarAdmin();
        $data ->nama = $request ->nama;
        $data ->email = $request -> email;
        $data ->password =  bcrypt($request -> password);
        $data ->alamat = $request -> alamat;
        $data ->save();

        return redirect()->route('regis')->with('success', 'Berhasil disimpan. Silahkan masuk.');
    }

}
