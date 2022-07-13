<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perp;

class PerpusController extends Controller
{
    function home(){
        return view('home');
    }
    function databuku(){
        return view('dataBuku');
    }
    function createDataBuku(Request $request){
        Perp::create([
            'kode_buku'=>$request->kode_buku,
            'judul_buku'=>$request->judul_buku,
            'tahun_terbit'=>$request->tahun_terbit,
            'kota_terbit'=>$request->kota_terbit,
            'pengarang'=>$request->pengarang,
            'penerbit'=>$request->penerbit
        ]);
        return back()->with('success', 'Data Buku Berhasil Ditambah');
    }
    function daftarbuku(){
        $dataBuku = Perp::all();
        return view('daftarBuku', compact('dataBuku'));
    }
    function editdatabuku($id){
        $editbuku = Perp::where('id', $id)->first();
        return view('editBuku', compact('editbuku'));
    }
    function updatebuku(Request $request, $id){
        Perp::where('id', $id)->update([
            'kode_buku'=>$request->kode_buku,
            'judul_buku'=>$request->judul_buku,
            'tahun_terbit'=>$request->tahun_terbit,
            'kota_terbit'=>$request->kota_terbit,
            'pengarang'=>$request->pengarang,
            'penerbit'=>$request->penerbit
        ]);
        return redirect('/daftarbuku')->with('success', 'Data Buku Berhasil Diupdate');
    }
    function deletebuku($id){
        Perp::destroy($id);
        return back()->with('success', 'Data Buku Berhasil Dihapus');
    }
    function datapeminjam(){
        return view('dataPeminjam');
    }
    function daftarpeminjam(){
        return view('daftarPeminjam');
    }
    function ketentuanP(){
        return view('ketentuan');
    }
}
