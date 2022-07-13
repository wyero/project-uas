<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pinjam;

class PinjamController extends Controller
{
    function createpinjam(Request $request){
        Pinjam::create([
            'nama_peminjam'=>$request->nama_peminjam,
            'kelas'=>$request->kelas,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'nomor_tlpn'=>$request->nomor_tlpn,
            'kode_buku'=>$request->kode_buku,
            'judul_buku'=>$request->judul_buku,
            'tanggal_meminjam'=>$request->tanggal_meminjam,
            'tanggal_pengembalian'=>$request->tanggal_pengembalian
        ]);
        return back()->with('toast_success', 'Data Peminjam Berhasil Ditambah');
    }
    function peminjam(){
        $daftarP = Pinjam::all();
        return view('daftarPeminjam', compact('daftarP'));
    }
    function edit($id){
        $daftarP = Pinjam::where('id', $id)->first();
        return view('editPeminjam', compact('daftarP'));
    }
    function updatepeminjam(Request $request, $id){
        Pinjam::findOrFail($id)->update($request->all());
        return redirect('/daftarpeminjam')->with('toast_success', 'Data Peminjam Berhasil Diupdate');
    }
    function deletepeminjam($id){
        Pinjam::destroy($id);
        return back()->with('toast_success', 'Data Peminjam Berhasil Dihapus');
    }
}
