<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //menampilkan list fakultas
    public function index(){
        $nama = ['M Naufal Anugrah', 'Bakti Ananda', 'Rizky Kurniawan', 'Muhammad Dody', 'Riska Fajriati'];
        $kampus = "Universitas Multi Data Palembang";

        return view('mahasiswa.index', compact('nama', 'kampus'));
    }

    public function detail($id = null, $nama = null){
        $nama = ['M Naufal Anugrah', 'Bakti Ananda', 'Rizky Kurniawan', 'Muhammad Dody', 'Riska Fajriati'];

        
        $kampus = "Universitas Multi Data Palembang";
        
        return view('mahasiswa.detail', compact('kampus', 'nama', 'id'));
    }
}
