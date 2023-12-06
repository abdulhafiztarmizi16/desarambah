@extends('layouts.layout')
@section('title', 'Website Resmi Pemerintah Desa ' . $desa->nama_desa . ' - Grafik APBDes')


@section('styles')
<meta name="description" content="Statistik Penduduk Desa {{ $desa->nama_desa }}, Kecamatan {{ $desa->nama_kecamatan }}, Kabupaten {{ $desa->nama_kabupaten }}.">
<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
@endsection

@section('header')
<div style="top:0;" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center">
    <h1 class="header-text">Grafik APBDes Desa {{ $desa->nama_desa }}</h1>
</div>
@endsection

@section('content')
<div class="card shadow">
    <div class="card-body">
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left mb-3">
            <div class="nav-wrapper">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item m-1">
                        <a class="nav-link bg-textprimary500 tab {{ request('jenis') == 'laporan' ? 'active' : '' }}" href="{{ URL::current() }}?jenis=laporan&tahun={{ request('tahun') }}"><i class="fas fa-hand-holding-usd mr-2"></i>Laporan</a>
                    </li>
                    <li class="nav-item m-1">
                        <a class="nav-link bg-primary-500 tab {{ request('jenis') == 'grafik' ? 'active' : '' }}" href="{{ URL::current() }}?jenis=grafik&tahun={{ request('tahun') }}"><i class="fas fa-chart-bar mr-2"></i>Grafik</a>
                    </li>
                </ul>
            </div>
            <form id="form-tahun" action="{{ URL::current()}}" method="GET">
                <input type="hidden" name="jenis" value="{{ request('jenis') ? request('jenis') : "pendapatan"}}">
                <input type="hidden" id="tahun-apbdes" value="{{ request('tahun') ? request('tahun') : date('Y')}}">
                Tahun: <input type="number" name="tahun" id="tahun" class="form-control-sm" value="{{ request('tahun') ? request('tahun') : date('Y') }}" style="width: 80px">
                <img id="loading-tahun" src="{{ asset(Storage::url('loading.gif')) }}" alt="Loading" height="20px" style="display: none">
            </form>
        </div>
        @include('anggaran-realisasi.grafik-apbdes')
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/apbdes.js') }}"></script>
<script>
    $(document).ready(function () {
        $("#tahun").change(function () {
            $("#tahun").css('display','none');
            $("#loading-tahun").css('display','');
            $(this).parent().submit();
        });
        $(".tab").click(function () {
            $("tbody").html(`<tr><td colspan="7" align="center">Loading ...</td></tr>`);
        });
    });
</script>
@endpush
