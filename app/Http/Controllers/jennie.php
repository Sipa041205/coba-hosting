<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\jennies;
use PDF;

class jennie extends Controller
{
    public function tampil()
    {
        // mengambil data dari table a
        $jennie = DB::table('a')->get();

        // mengirim data a ke view tampil
        return view('tampil', ['jennie' => $jennie]);
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function store(Request $request)
    {
        // insert data ke table a
        DB::table('a')->insert([
            'ID' => $request->ID,
            'NAME' => $request->NAME,
            'GENDER' => $request->GENDER,
            'BIRTH_PLACE' => $request->BIRTH_PLACE,
            'BIRTH_DATE' => $request->BIRTH_DATE,
            'ADDRESS' => $request->ADDRESS,
            'EMAIL' => $request->EMAIL,
            'PHONE' => $request->PHONE
        ]);
        // alihkan halaman ke halaman tampil
        return redirect('/a');
    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('a')->where('ID', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/a');
    }

    // method untuk edit data pegawai
public function edit($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$jennies = DB::table('a')->where('ID',$id)->get();
    // dd($jennies);
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('edit',['jennies' => $jennies]);
 
}
    // update data pegawai
    public function update(Request $request)
    {
        // update data a
        DB::table('a')->where('ID', $request->ID)->update([
            'NAME' => $request->NAME,
            'GENDER' => $request->GENDER,
            'BIRTH_PLACE' => $request->BIRTH_PLACE,
            'BIRTH_DATE' => $request->BIRTH_DATE,
            'ADDRESS' => $request->ADDRESS,
            'EMAIL' => $request->EMAIL,
            'PHONE' => $request->PHONE
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/a');
    }

    public function cetak_pdf()
    {
    	$pegawai = jennies::all();
 
    	$pdf = PDF::loadview('pegawai_pdf',['pegawai'=>$pegawai]);
    	return $pdf->download('laporan-pegawai-pdf');
    }
}
