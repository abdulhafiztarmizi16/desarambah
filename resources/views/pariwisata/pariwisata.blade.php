@extends('layouts.layout')
@section('title', 'Website Resmi Pemerintah Desa ' . $desa->nama_desa . ' - Potensi Desa')

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
    <h1 class="header-text">Potensi Desa {{ $desa->nama_desa }}</h1>
</div>
@endsection

{{-- edit page content berita --}}
@section('content')
    <section id="potensi">
        <div class="row justify-content-center">
            <div class="col-md-6 pt-5 pb-1">
                {{-- input search --}}
                <form action="/potensi-desa">
                    <div class="input-group mb-3">
                        <input style="border-radius:10px 0 0 10px;" type="text" class="form-control"
                            placeholder="Search..." name="cari" value="{{ request('cari') }}">
                        <div class="input-group-append">
                            <button style="color: rgba(230, 243, 241, 1);border-radius:0 10px 10px 0;"
                                class="btn bg-primary-500" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            @forelse ($pariwisata as $item)
                <div class="col-12 col-md-6 col-lg-4 mt-2 ">
                    <div>
                        <a href="{{ route('pariwisata.show', ['pariwisata' => $item, 'slug' => Str::slug($item->judul)]) }}">
                            <div class="tipe2-pict position-relative">
                                <img src="{{ $item->gambar ? url(Storage::url($item->gambar)) : url(Storage::url('noimage.jpg')) }}"
                                    alt="">
                                <div style="bottom:0;" class="position-absolute p-3 card-content d-flex align-items-center">
                                    <h1 class="judul-tipe2">{{ $item->judul }}</h1>
                                </div>
                            </div>
                            {{-- <div class="konten-tipe2">{!! $item->konten !!}</div> --}}
                        </a>
                    </div>
                </div>
            @empty
                <div class="card shadow">
                    <div class="card-body text-center">
                        <h4>Data belum tersedia</h4>
                    </div>
                </div>
            @endforelse
        </div>
        <div class="row justify-content-center pt-5">
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                {{ $pariwisata->links() }}
            </div>
        </div>
    </section>
@endsection
