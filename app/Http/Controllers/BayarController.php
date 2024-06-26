<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BayarModel;
use App\Models\PenggunaModel;

class BayarController extends Controller
{
    public function TampilanData()
{
    $users = PenggunaModel::all();
    return view('pembayaran', ['users' => $users]);
}
    public function input_bayar(Request $request){
        $data = new BayarModel();
        $data->nama = $request->nama;
        $data->watt = $request->watt;
        $data->tgl_bayar = $request->tgl_bayar;
        $data->tgl_jatuh_tempo = $request->tgl_jatuh_tempo;
        $data->nominal = $request->nominal;
        $data->jumlah_bayar = $request->jumlah_bayar;
        $data->save();
        return redirect()->route('bayar')->with('success', 'Berhasil melakukan pembayaran.');
    }
    public function laporan_bayar(){
        $pembayaran = BayarModel::orderBy('id')->get();
        return view('lapor', compact('pembayaran'));
    }
    public function hapus_laporan($id){
        $pembayaran = BayarModel::findOrFail($id);
        $pembayaran->delete();
        return redirect()->route('laporan');
    }
    // public function calculate(Request $request)
    // {
    //     $watt = $request->input('watt');
    //     $jumlah_bayar = $request->input('jumlah_bayar');

    //     $tarif_per_watt = 1000;
    //     $nominal = $watt * $tarif_per_watt;

    //     $kembalian = $jumlah_bayar - $nominal;

    //     return view('pembayaran', [
    //         'nominal' => $nominal,
    //         'kembalian' => $kembalian,
    //     ]);
    // }
}