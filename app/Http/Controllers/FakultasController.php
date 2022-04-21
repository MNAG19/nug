<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Fakultas;

class FakultasController extends Controller
{
    //menampilkan list fakultas
    public function index(){
        // $fakultas = ['Fakultas Ilmu Komputer dan Rekayasa', 'Fakultas Ekonomi dan Bisnis'];
        $kampus = "Universitas Multi Data Palembang";
        $fakultas = Fakultas::all();
        //$fakultas = DB::select("SELECT * from fakultas");
        return view('fakultas.index', compact('fakultas', 'kampus'));
    }

    public function detail($id = null){
        $fakultas = Fakultas::find($id);
        $kampus = "Universitas Multi Data Palembang";

        return view('fakultas.detail', compact('kampus', 'fakultas'));
    }

    public function insert(){
        $data = ["Fakultas Ilmu Sosial dan Politik", "SOS", "sospol@mdp.ac.id", "2022-04-14", "Jl. Rajawali Palembang"];
        $result = DB::insert("insert into fakultas (nama, kode, email, tanggal_berdiri, alamat) values (?,?,?,?,?)", $data);

        dump($result);
    }

    public function update(){
        $data = ["Fakultas Kehutanan", 3];
        $result = DB::update("update fakultas set nama = ? where id=?", $data);

        dump($result);
    }

    // insert menggunakan eloquent
    public function insertElq(){
        $data = ["nama" => "Fakultas Pertambangan", "kode" => "TAM", "email" => "sospol@mdp.ac.id", "tanggal_berdiri" => "2022-04-14", "alamat" => "Jl. Rajawali Palembang"];

        //cara 1
        $insert = new Fakultas;
        $insert->nama = "Fakultas Kedokteran";
        $insert->kode = "DOK";
        $insert->email = "";
        $insert->tanggal_berdiri = "2022-04-14";
        $insert->alamat = "Jl. Rajawali Palembang";
        $insert->save();

        //cara 2
        $fakultas2 = Fakultas::create($data);

        dump($insert);
    }
}
