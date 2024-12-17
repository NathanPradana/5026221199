<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{

    public function indexkaryawan()
    {
    	// mengambil data dari table pegawai
    	//$pegawai = DB::table('pegawai')->get();
        $karyawan1 = DB::table('karyawan1')->paginate(5);

    	// mengirim data pegawai ke view index
        return view('indexkaryawan',['karyawan' => $karyawan1]);
    	//return view ('index',[' pegawai' => $pegawai]);

    }

    public function viewkaryawan($id)
    {
        // Mengambil data karyawan berdasarkan NIP
        $karyawan1 = DB::table('karyawan1')->where('NIP', '=', $id)->get();

        // Passing data ke view viewkaryawan.blade.php
        return view('viewkaryawan', ['karyawan' => $karyawan1]);
    }


        // method untuk edit data pegawai
        public function editkaryawan($id)
    {
	        // mengambil data pegawai berdasarkan id yang dipilih (PENTING))
            //SELECT*FROM pegawai where pegawai_id = x
	        $karyawan1 = DB::table('karyawan1')->where('NIP','=',$id)->get();
	        // passing data pegawai yang didapat ke view edit.blade.php
	        return view('editkaryawan',['karyawan' => $karyawan1]);

    }


    public function updatekaryawan(Request $request)
    {
        DB::table('karyawan1')->where('NIP', $request->id)->update([
            'Nama' => $request->nama,
            'Pangkat' => $request->pangkat,
            'Gaji' => $request->gaji,
        ]);
        return redirect('/karyawan');
    }



    public function carikaryawan1(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$karyawan1 = DB::table('karyawan1')
		->where('Nama','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('indexkaryawan',['karyawan1' => $karyawan1]);

	}
}
