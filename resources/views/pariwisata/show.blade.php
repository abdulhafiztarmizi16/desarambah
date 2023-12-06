@extends('layouts.layout')
@section('title', 'Desa ' . $desa->nama_desa . ' - Potensi Desa ' . $pariwisata->judul)

@section('styles')
    <meta name="description"
        content="Potensi Desa {{ $pariwisata->judul }} Desa {{ $desa->nama_desa }}, Kecamatan {{ $desa->nama_kecamatan }}, Kabupaten {{ $desa->nama_kabupaten }}.">

    <style>
        .animate-up:hover {
            top: -5px;
        }
    </style>
@endsection

{{-- setting header pariwisata show --}}
@section('header')
    <div style="top:0;" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center">
        <h1 class="header-text">Potensi Desa {{ $desa->nama_desa }}</h1>
    </div>
@endsection

{{-- setting content pariwisata show --}}
@section('content')
    <div id="potensi" class="row justify-content-center">
        <div class="col-md-9 py-4">
            <div class="text-center bg-primary-500 show">
                <img src="{{ url(Storage::url($pariwisata->gambar)) }}" alt="{{ $pariwisata->judul }}">
            </div>
            <h1 class="judul-show ">{{ $pariwisata->judul }}</h1>
            <div>
                {!! $pariwisata->konten !!}
            </div>
        </div>
    </div>
@endsection
