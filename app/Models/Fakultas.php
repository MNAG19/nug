<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory;
    protected $table = "fakultas";

    protected $fillable = ["nama", "kode", "email", "tanggal_berdiri", "alamat", "kodepos", "kota"];

    public function prodi(){
        return $this->hasMany(Programstudi::class, "id_fakultas", "id");
    }
}
