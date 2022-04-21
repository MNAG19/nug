<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dosen', function(){
    return view('dosen.index');
});

Route::get('/dosen/detail', function(){
    return view('dosen.detail');
});

// Route::get('/fakultas', function(){
//     //cara 1
//     //$data = ['ilkom' => 'Fakultas Ilmu Komputer dan Rekayasa'];
//     // $data = ['fakultas' => ['Fakultas Ilmu Komputer dan Rekayasa', 'Fakultas Ekonomi dan Bisnis']];

//     // return view('fakultas.index', $data);
    
//     //cara 2, menggunakan with
//     //return view('fakultas.index')->with("fakultas", ['Fakultas Ilmu Komputer dan Rekayasa', 'Fakultas Ekonomi dan Bisnis']);

//     //cara3, menggunakan compact
//     $fakultas = ['Fakultas Ilmu Komputer dan Rekayasa', 'Fakultas Ekonomi dan Bisnis'];
//     $kampus = "Universitas Multi Data Palembang";
//     return view('fakultas.index', compact('fakultas', 'kampus'));
// });

use App\Http\Controllers\FakultasController;
Route::get('/fakultas', [FakultasController::class, 'index']);
Route::get('/fakultas/detail/{id?}', [FakultasController::class, 'detail'])->name("detailfakultas");

Route::get("/fakultas/insert", [FakultasController::class, "insert"]);

Route::get("/fakultas/update", [FakultasController::class, "update"]);

Route::get("/fakultas/insertelq", [FakultasController::class, "insertElq"]);







// Soal Latihan 1
// Buat Route dan view untuk menapilkan data Program Studi
// Siapkan/buat 5 buah data program studi dan tampilkan di view menggunakan metode :
// Untuk npm genap, gunakan metode compact
// Untuk npm ganjil, gunakan metode with
// Soal Latihan 2
// Terapkan blade template pada view Program Studi
Route::get('/prodi', function(){
    $prodi = ['Informatika', 'Sistem Informasi', 'Teknik Elektro', 'Akuntansi', 'Managemen'];
    $kampus = "Universitas Multi Data Palembang";
    //return view('prodi.index')->with("prodi", ['Informatika', 'Sistem Informasi', 'Teknik Elektro', 'Akuntansi', 'Managemen']);
    return view('prodi.index', compact('prodi', 'kampus'));
});

// Soal Latihan 3
// Buatlah Controller Mahasiswa
// Buatlah method index untuk menampilkan list mahasiswa (5 data)
// Buatlah method detail untuk menampilkan detail mhs berdasarkan parameter id dan nama
//challenge : Tampilkan detail mhs dari list mahasiswa yg anda miliki
use App\Http\Controllers\MahasiswaController;
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/detail/{id?}', [MahasiswaController::class, 'detail']);


use App\Http\Controllers\ProdiController;
Route::get("/programstudi", [ProdiController::class, "index"])->name("programstudi.index");
//untuk menampilkan form tampba prodi
Route::get("/programstudi/create", [ProdiController::class, "create"])->name("programstudi.create");
//untuk menyimpan data tmbah prodi
Route::post("programstudi/store", [ProdiController::class, "store"])->name("programstudi.store");











////////////////////////////////////////////////////
Route::get('/hallo', function(){
    return array("nama" => "Naufal Nugrah");
});

Route::get('/kampus', function(){
    echo "<h2>Halo Semua</h2>";
    echo "Kami kuliah di kampus MDP";
});

Route::get('/mahasiswa/{nama}', function($nama){
    echo "<h2>Halo Semua</h2>";
    echo "Nama saya $nama";
});

Route::get('/mahasiswa/{nama?}', function($nama = 'Naufal Anugrah'){
    echo "<h2>Halo Semua</h2>";
    echo "Nama saya $nama";
});

Route::get('/profil/{nama?}/{pekerjaan?}', function($nama = 'Naufal Anugrah', $pekerjaan = 'Mahasiswa'){
    echo "<h2>Halo Semua</h2>";
    echo "Nama saya $nama, sebagai $pekerjaan";
})->where('nama', '[A-Z]+');

Route::get('/hubungi', function(){
    echo "<h2>Hubungi kami</h2>";
})->name('call');

Route::get('/halo', function(){
    echo "<h2>Selamat Datang</h2>";
    echo "<a href='" . route('call') . "'> Hubungi Kami </a>";
});

Route::redirect('/contact', '/hubungi');

// route group
Route::prefix('/dosen')->group(function(){
    Route::get('/jadwal', function(){
        return "view('Jadwal Dosen')";
    });
    Route::get('/materi', function(){
        return "view('Materi Kuliah')";
    });
});