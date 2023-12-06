@extends('layouts.layout')
@section('title', 'Website Resmi Pemerintah Desa ' . $desa->nama_desa . ' - Struktur Organisasi')


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
        <h1 class="header-text">Struktur Desa Rambah</h1>
        {{-- <h1 class="header-text">Pariwisata Desa {{ $desa->nama_desa }}</h1> --}}
    </div>
@endsection

{{-- edit page content berita --}}
@section('content')
    <section id="pariwisata" class="py-5">
        <div class="row h-auto m-1 m-md-0">
            <div class="col-lg-3" style="height: 540px;overflow-y:scroll;">
                @forelse ($aparat as $item)
                    {{-- card struktur --}}
                    <div style="border-radius:5px" class="bg-primary-200 p-2 ps-3 pt-3 mb-2">
                        <ul class="bg-primary-50 d-inline-block rounded m-0 text-capitalize">
                            <li>
                                <p style="margin:0;padding-right:15px;font-weight:400;font-size:var(--font-size-xs);">
                                    {{ $item->jabatan }}</p>
                            </li>
                        </ul>
                        <p style="font-size:var(--font-size-m);font-weight:bold" class="m-0 pt-1 text-capitalize">
                            {{ $item->nama_aparat }}</p>
                    </div>
                @empty
                    <div class="card shadow">
                        <div class="card-body text-center">
                            <h4>Data belum tersedia</h4>
                        </div>
                    </div>
                @endforelse
            </div>
            <div class="col-md-9 d-none d-lg-block">
                <img style="width:100%;height:540px;object-fit:cover;border-radius:5px;" class="" src="{{ asset('storage/struktur_desa.png') }}"
                    alt="Deskripsi Gambar">
            </div>
        </div>

    </section>
@endsection
