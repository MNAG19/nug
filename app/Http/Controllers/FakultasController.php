<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FakultasController extends Controller
{
    //menampilkan list fakultas
    public function index(){
        $fakultas = ['Fakultas Ilmu Komputer dan Rekayasa', 'Fakultas Ekonomi dan Bisnis'];
        $kampus = "Universitas Multi Data Palembang";

        return view('fakultas.index', compact('fakultas', 'kampus'));
    }

    public function detail($id = null){
        
        $kampus = "Universitas Multi Data Palembang";

        return view('fakultas.detail', compact('kampus', 'id'));
    }
}
