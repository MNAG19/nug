@extends("layout.master")
@section('title')
    Halaman Fakultas
@endsection

@section('content')
<h1>Detail Mahasiswa</h1>
ID Mahasiswa = {{ $id }}
<?php
echo "<br/>";
switch($id){
    case "1" : 
        echo "Nama Mahasiswa = " . $nama[0];
        break;
    case "2" : 
        echo "Nama Mahasiswa = " . $nama[1];
        break;
    case "3" : 
        echo "Nama Mahasiswa = " . $nama[2];
        break;
    case "4" : 
        echo "Nama Mahasiswa = " . $nama[3];
        break;
    case "5" : 
        echo "Nama Mahasiswa = " . $nama[4];
        break;
    default : 
        echo "tidak TerIdentifikasi";
}
?>
@endsection