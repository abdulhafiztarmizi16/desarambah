@extends('layouts.layout')
@section('title', 'Desa ' . $desa->nama_desa . ' - Berita ' . $berita->judul)

@section('styles')
<meta name="description" content="Berita {{ $berita->judul }} Desa {{ $desa->nama_desa }}, Kecamatan {{ $desa->nama_kecamatan }}, Kabupaten {{ $desa->nama_kabupaten }}.">

<style>
    .animate-up:hover {
        top: -5px;
    }
</style>
@endsection

@section('header')
    <div style="top:0;" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center">
        <h1 class="header-text">Berita Desa {{ $desa->nama_desa }}</h1>
    </div>
@endsection

@section('content')
    <div id="berita" class="row justify-content-center">
        <div class="col-md-9">
            <div class="text-center bg-primary-500 show">
                <img src="{{ url(Storage::url($berita->gambar)) }}" alt="Gambar Berita {{ $berita->judul }}">
            </div>
                    <div class="d-flex align-items-center pt-4 pb-3">
                        <img class="penulis-pict" src="{{ asset(Storage::url($user->first()->foto_profil)) }}"
                            alt="">
                        <div class="ps-2 penulis-desc">{{ $user->first()->nama }}<span
                                class="penulis-dot"></span>
                            {{ $berita->created_at->diffForHumans() }}
                        </div>
                    </div>
                <h1 class="judul-show ">{{ $berita->judul }}</h1>    
                <div> 
                    {!! $berita->konten !!}
                </div>
        </div>
        @if ($beritas->count() > 0)
        <h3 class="text-center mt-5 lainnya">Berita Lainnya</h3>
    @endif
    <div class="row justify-content-center mt-3">
        @foreach ($beritas as $item)
            <div class="col-lg-3 col-md-6 mb-3">
                <a href="{{ route('berita.show', ['berita' => $item, 'slug' => Str::slug($item->judul)]) }}">
                    <div class="tipe2-pict">
                        <img src="{{ $item->gambar ? url(Storage::url($item->gambar)) : url(Storage::url('noimage.jpg')) }}"
                            alt="">
                    </div>

                    <div class="d-flex align-items-center py-3">
                        <img class="penulis-pict" src="{{ asset(Storage::url($user->first()->foto_profil)) }}"
                            alt="">
                        <div class="ps-2 penulis-desc">{{ $user->first()->nama }}<span
                                class="penulis-dot"></span>
                            {{ $item->created_at->diffForHumans() }}
                        </div>
                    </div>
                    <h1 class="judul-tipe2">{{ $item->judul }}</h1>
                    <p class="item-dibaca"><i class="fas fa-eye"> {{ $item->dilihat }} Kali
                            Dibaca</i></p>
                </a>
            </div>
        @endforeach
    </div>
    </div>
@endsection
