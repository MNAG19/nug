<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programstudi;

class ProdiController extends Controller
{
    //
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

}
