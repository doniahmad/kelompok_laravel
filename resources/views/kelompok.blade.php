@extends('layouts.main')
@section('container')
    <h1>Data Kelompok</h1>

    @foreach ($kelompok as $item )
    <a href="/kelompok/{{$item["link"]}}">
        <h2>{{ $item["nama_pendek"]}}</h2>
        <p>{{ $item["nama_panjang"]}}</p>
    </a>
    @endforeach
@endsection
