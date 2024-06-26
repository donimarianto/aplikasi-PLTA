<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenggunaModel;
use PhpParser\Builder\FunctionLike;

class PenggunaController extends Controller
{
    public function tambah_pengguna(Request $request){
        $data = new PenggunaModel();
        $data->nama = $request->nama;
        $data->no_tlp = $request->no_tlp;
        $data->alamat = $request->alamat;
        $data->rt = $request->rt;
        $data->save();

        return redirect()->route('daftar_anggota')->with('success', 'Pengguna berhasil ditambahkan');
    }

    public function LihatPengguna(){
        $penggunas = PenggunaModel::orderBy('id')->get();
        return view('pengguna', compact('penggunas'));
    }

    public function cari_pengguna(Request $request){
        $query = $request->input('query');
        $penggunas = PenggunaModel::query()
            ->where('nama','like', "%$query%")
            ->orWhere('alamat','like',"%$query%")
            ->orWhere('rt','like',"%$query%")
            ->get();

            return view('pengguna',compact('penggunas'));

    }

    public function hapus_pengguna($id){
        $penggunas = PenggunaModel::findOrFail($id);
        $penggunas->delete();
    
        return redirect()->route('pengguna')->with('success', 'Pengguna berhasil dihapus');
    }
    
    public function edit_pengguna($id){
        $penggunas = PenggunaModel::findOrFail($id);
        return view('edit_pengguna', compact('penggunas'));
    }
    
    public function update_pengguna(Request $request, $id){
        $penggunas = PenggunaModel::findOrFail($id);
        $penggunas->nama = $request->nama;
        $penggunas->no_tlp = $request->no_tlp;
        $penggunas->alamat = $request->alamat;
        $penggunas->rt = $request->rt;
        $penggunas->save();
    
        return redirect()->route('pengguna')->with('success', 'Pengguna berhasil diperbarui');
    }
    
}
