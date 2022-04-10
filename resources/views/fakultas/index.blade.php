{{-- @include("layout.header") --}}

@extends("layout.master")
@section('title')
    Halaman Fakultas
@endsection

@section('content')
<h1>Fakultas</h1>
<ol>
    @foreach ($fakultas as $key => $value) 
        <li>{{$value}}</li>
    @endforeach
</ol>
@endsection

{{-- @include("layout.footer") --}}