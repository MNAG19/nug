@extends("layout.master")
@section('title')
    Halaman Program Studi
@endsection

@section('content')
<h1>Program Studi Universitas MDP</h1>
<ol>
    @foreach ($prodi as $key => $value) 
        <li>{{$value}}</li>
    @endforeach
</ol>
@endsection