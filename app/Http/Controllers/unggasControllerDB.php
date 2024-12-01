<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class unggasControllerDB extends Controller
{
    public function index()
    {
        // mengambil data dari table unggas
        $unggas = DB::table('unggas')->paginate(10);

        // mengirim data unggas ke view index
        return view('index', ['unggas' => $unggas]);
    }

    // method untuk menampilkan view form tambah unggas
    public function tambah()
    {
        // memanggil view tambah
        return view('tambah');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'jumlah' => 'required|integer|min:0',
            'tersedia' => 'required|boolean',
        ]);

        // Logika: jika jumlah = 0, tersedia harus 0
        $tersedia = $request->jumlah == 0 ? 0 : $request->tersedia;

        // Insert data ke table unggas
        DB::table('unggas')->insert([
            'unggas_nama' => $request->nama,
            'unggas_jumlah' => $request->jumlah,
            'unggas_tersedia' => $tersedia,
        ]);

        // Alihkan halaman ke halaman unggas
        return redirect('/unggas');
    }

    // method untuk edit data unggas
    public function edit($id)
    {
        // mengambil data unggas berdasarkan id yang dipilih
        $unggas = DB::table('unggas')->where('unggas_id', '=', $id)->get();

        // passing data unggas yang didapat ke view edit.blade.php
        return view('edit', ['unggas' => $unggas]);
    }

    // update data unggas
    public function update(Request $request)
    {
        // Validasi input
        $request->validate([
            'id' => 'required|integer',
            'nama' => 'required|string|max:255',
            'jumlah' => 'required|integer|min:0',
            'tersedia' => 'required|boolean',
        ]);

        // Logika: jika jumlah = 0, tersedia harus 0
        $tersedia = $request->jumlah == 0 ? 0 : $request->tersedia;

        // Update data unggas
        DB::table('unggas')->where('unggas_id', $request->id)->update([
            'unggas_nama' => $request->nama,
            'unggas_jumlah' => $request->jumlah,
            'unggas_tersedia' => $tersedia,
        ]);

        // Alihkan halaman ke halaman unggas
        return redirect('/unggas');
    }

    // method untuk hapus data unggas
    public function hapus($id)
    {
        // menghapus data unggas berdasarkan id yang dipilih
        DB::table('unggas')->where('unggas_id', $id)->delete();

        // alihkan halaman ke halaman unggas
        return redirect('/unggas');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table unggas sesuai pencarian data
        $unggas = DB::table('unggas')
            ->where('unggas_nama', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data unggas ke view index
        return view('index', ['unggas' => $unggas]);
    }
}
