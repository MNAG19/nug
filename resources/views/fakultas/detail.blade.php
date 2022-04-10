{{-- @include("layout.header") --}}

@extends("layout.master")
@section('title')
    Halaman Fakultas
@endsection

@section('content')
<h1>Detail Fakultas</h1>
Fakultas ID = {{ $id }}
@endsection

{{-- @include("layout.footer") --}}