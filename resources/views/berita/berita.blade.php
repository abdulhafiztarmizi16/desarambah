@extends('layouts.layout')
@section('title', 'Website Resmi Pemerintah Desa '. $desa->nama_desa . ' - Berita')

@section('styles')
<meta name="description" content="Macam-macam berita Desa {{ $desa->nama_desa }}, Kecamatan {{ $desa->nama_kecamatan }}, Kabupaten {{ $desa->nama_kabupaten }}.">

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
    <section id="berita">
        <div class="row justify-content-center">
            <div class="col-md-6">
                {{-- input search --}}
                <form action="/berita">
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
            @if ($berita->count() > 0)
                @foreach ($berita as $item)
                    <div class="col-12 col-md-6 col-lg-3 mt-2 ">
                        <div>
                            {{-- konten berita tipe 2 --}}
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
                                {{-- {!! $item->konten !!} --}}
                                <div class="konten-tipe2">{!! $item->konten !!}</div>
                                <p class="item-dibaca"><i class="fas fa-eye"> {{ $item->dilihat }} Kali
                                        Dibaca</i></p>
                            </a>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col pt-4">
                    <h3 class="text-center">Hasil Pencarian Tidak Ada</h3>
                </div>
            @endif
        </div>
        {{-- pagination --}}
        <div class="row justify-content-center pt-5">
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                {{ $berita->links() }}
            </div>
        </div>
    </section>
@endsection
