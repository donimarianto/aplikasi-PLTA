<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BayarModel;
use App\Models\PenggunaModel;

class HomeController extends Controller
{

    public function regis(){
        return view ('daftar');
    }

    public function masuk(){
    return view('index');
    }
    // public function bayar(){
    // return view('pembayaran');
    // }
    public function daftar_anggota(){
        return view('pendaftaran');
    }
    public function dashboard(){
        $hitung1= BayarModel::count();
        $hitung2= PenggunaModel::count();
        return view('dashboard',compact('hitung1','hitung2'));
    }

    // public function laporan_bayar(){
    //     return view('lapor');
    // }
}
