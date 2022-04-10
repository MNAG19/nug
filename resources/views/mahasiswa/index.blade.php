@extends("layout.master")
@section('title')
    Halaman Mahasiswa
@endsection

@section('content')
<h1>Mahasiswa</h1>
<ol>
    @foreach ($nama as $key => $value) 
        <li>{{$value}}</li>
    @endforeach
</ol>
@endsection