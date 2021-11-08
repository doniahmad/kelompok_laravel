@extends("layouts.main")
@section("container")
{{-- namapendek,namapanjang,foto,lahir,kelamin, alamat, --}}
<h1>
    {{$detail["nama_panjang"]}}
</h1>
<img src="/img/{{$detail["foto"]}}" style="width: 180px; height:240px">
<p>
    Nama : {{$detail["nama_panjang"]}}
</p>
<p>
    Nama Panggilan : {{$detail["nama_pendek"]}}
</p>
<p>
    Tanggal Lahir : {{$detail["lahir"]}}
</p>
<p>
    Jenis Kelamin : {{$detail["kelamin"]}}
</p>
<p>
    Alamat : {{$detail["alamat"]}}
</p>
<a href="/kelompok">Back to Data Kelompok</a>
@endsection
