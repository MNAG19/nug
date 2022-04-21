{{-- @include("layout.header") --}}

@extends("layout.master")
@section('title')
    Halaman Fakultas
@endsection

@section('content')
<h1>Detail Fakultas</h1>
Fakultas ID = {{ $fakultas->id }}<br>
Nama Fakultas = {{ $fakultas->nama}}<br>
Alamat = {{ $fakultas->alamat }}<br>
Email Fakultas = {{ $fakultas->email }}<br>
Tanggal Berdiri = {{ $fakultas->tanggal_berdiri }}<br>
@endsection

{{-- @include("layout.footer") --}}