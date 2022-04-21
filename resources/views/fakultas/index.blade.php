{{-- @include("layout.header") --}}

@extends("layout.master")
@section('title')
    Halaman Fakultas
@endsection

@section('content')
<h1>Fakultas</h1>
<ol>
    @foreach ($fakultas as $key => $value) 
        <li>Kode : {{$value->kode}}<br>
            Nama : {{$value->nama}}<br>
            Email {{$value->email}}<br>
            Prodi : {{ $value->prodi}}
            <a href="{{route('detailfakultas', [$value->id])}}">
            Detail
            </a>
        </li>
    @endforeach
</ol>
@endsection

{{-- @include("layout.footer") --}}