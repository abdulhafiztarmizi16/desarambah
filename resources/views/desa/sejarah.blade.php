@extends('layouts.layout')
@section('title', 'Website Resmi Pemerintah Desa ' . $desa->nama_desa . ' - Sejarah')

@section('styles')
    <meta name="description" content="Macam-macam Pariwisata Desa Rambah, Kecamatan Rambah Hilir, Kabupaten Rokan Hulu.">
    {{-- content="Macam-macam Pariwisata Desa {{ $desa->nama_desa }}, Kecamatan {{ $desa->nama_kecamatan }}, Kabupaten {{ $desa->nama_kabupaten }}."> --}}

    <style>
        .animate-up:hover {
            top: -5px;
        }
    </style>
@endsection

{{-- edit header --}}
@section('header')
    <div style="top:0;" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center">
        <h1 class="header-text">Sejarah Desa {{ $desa->nama_desa }}</h1>
        {{-- <h1 class="header-text">Pariwisata Desa {{ $desa->nama_desa }}</h1> --}}
    </div>
@endsection

{{-- edit page content berita --}}
@section('content')
    <section id="pariwisata" class="py-5">
        <div class="row">
            <div class="position-relative d-none d-lg-block sejarah">
                {{-- <img src="{{ asset('logo.jpg') }}" alt="Gambar Contoh"> --}}
                <img class="position-absolute" src="{{ asset('storage/sejarah.png') }}" alt="Deskripsi Gambar">
            </div>
        </div>
        <div class="row justify-content-center h-auto m-1 m-md-0 d-lg-none">
            <div style="border-radius:10px;" class="col-12 col-md-10 bg-primary-200 p-3">
                {!! $desa->sejarah_desa !!}
            </div>
        </div>
    </section>
@endsection
