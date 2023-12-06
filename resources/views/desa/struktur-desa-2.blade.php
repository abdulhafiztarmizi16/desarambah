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
    <div id="struktur" class="row justify-content-center text-center">
        @forelse ($aparat->take(1) as $item)
            <div class="col-12 col-md-6 col-lg-3 mt-2 ">
                <div>
                    <div class="tipe2-pict">
                        <img src="{{ $item->gambar ? url(Storage::url($item->gambar)) : url(Storage::url('noimage.jpg')) }}"
                            alt="">
                    </div>
                    <div class="d-flex align-items-center">
                    </div>
                    <h1 class="judul-tipe2">{{ $item->nama_aparat }}</h1>
                    <div class="konten-tipe2">{{ $item->jabatan }}</div>
                </div>
            @empty
                <div class="card shadow">
                    <div class="card-body text-center">
                        <h4>Data belum tersedia</h4>
                    </div>
                </div>
        @endforelse
    </div>
    <div class="row">
        @if ($aparat->count() > 0)
            @foreach ($aparat->skip(1) as $item)
                <div class="col-12 col-md-6 col-lg-3 mt-2 ">
                    <div>
                        {{-- konten berita tipe 2 --}}

                        <div class="tipe2-pict">
                            <img src="{{ $item->gambar ? url(Storage::url($item->gambar)) : url(Storage::url('noimage.jpg')) }}"
                                alt="">
                        </div>
                        <h1 class="judul-tipe2">{{ $item->nama_aparat }}</h1>
                        {{-- {!! $item->konten !!} --}}
                        <div class="konten-tipe2">{{ $item->jabatan }}</div>


                    </div>
                </div>
            @endforeach
        @endif
    </div>
    </div>
    {{-- </section> --}}
@endsection
