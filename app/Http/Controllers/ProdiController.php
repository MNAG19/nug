<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programstudi;

class ProdiController extends Controller
{
    //Tugas:
    //1.Tampilkan data prodi di dalam Tabel
    //2.Tampilkan tomobol aksi edit dan hapus
    public function index(){
        $programstudi = Programstudi::all();
        $kampus = "Universitas Multi Data Palembang";
        return view('programstudi.index', compact('programstudi', 'kampus'));
    }
    
    public function create()
    {
        $kampus = "Universitas Multi Data Palembang";
        return view("programstudi.create", compact('kampus'));
    }

    public function store(Request $request)
    {
        //lakukan validation
        $validation = $request->validate([
            'nama' => 'required|min:5|max:20',
            //field dan aturan lainnya
        ]);

        //1 ambil nilai inputen form

        //panggil fungsi insert - boleh raw/eloquent
        $programstudi = new Programstudi();
        $programstudi->nama_prodi = $request->nama; // $validation['nama']
        $programstudi->kode_prodi = $request->kode;
        $programstudi->id_fakultas = 1;
        $programstudi->alamat = "Jl. Rajawali";
        $programstudi->save();

        //3 redirect ke halaman index / detail / form create
        $request->session()->flash("info", "Data prodi $request->nama berhasil disimpan");
        return redirect()->route("programstudi.create");
    }

}
