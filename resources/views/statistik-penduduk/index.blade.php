@extends('layouts.layout')
@section('title', 'Website Resmi Pemerintah Desa '. App\Desa::find(1)->nama_desa . ' - Statistik Penduduk')

@section('styles')
<meta name="description" content="Statistik Penduduk Desa {{ App\Desa::find(1)->nama_desa }}, Kecamatan {{ App\Desa::find(1)->nama_kecamatan }}, Kabupaten {{ App\Desa::find(1)->nama_kabupaten }}.">
<script src="https://code.highcharts.com/stock/highstock.js"></script>
<script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
<script src="https://code.highcharts.com/stock/modules/accessibility.js"></script>
@endsection

@section('header')
<div style="top:0;" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center">
    <h1 class="header-text">Statistik Desa {{ $desa->nama_desa }}</h1>
</div>
@endsection

@section('content')
<div class="row">
    @include('statistik-penduduk.card')
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/statistik-penduduk.js') }}"></script>
@endpush
