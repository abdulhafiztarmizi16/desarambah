@extends('layouts.layout')

@section('title', 'Website Resmi Pemerintah Desa ' . $desa->nama_desa . ' - Infografis Kependudukan')


@section('styles')
<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
@endsection

@section('header')
    <div style="top:0;" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center">
        <h1 class="header-text">Data Desa {{ $desa->nama_desa }}</h1>
    </div>
@endsection

@section('content')
<section id="data-desa">
    {{-- data jenis kelamin --}}
    <div class="row bg-primary-200 justify-content-center p-4 mb-5" style="border-radius:10px;">
        <h1>Demografi Penduduk</h1>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card shadow bg-primary-100" style="border-radius: 10px;">
                <div class="card-body text-center" style="position: relative;">
                    <img style="width: 150px; height: 150px;" src="{{ asset('img/icon/lk_icon.png') }}" alt="laki-laki-icon">
                    <h3>{{ $jkCounts['lk'] }}</h3>
                    <span class="hover-text">LAKI-LAKI</span>
                </div>
            </div>
        </div> 
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card shadow bg-primary-100" style="border-radius: 10px;">
                <div class="card-body text-center" style="position: relative;">
                    <img style="width: 150px; height: 150px;" src="{{ asset('img/icon/pr_icon.png') }}" alt="perempuan-icon">
                    <h3>{{ $jkCounts['pr'] }}</h3>
                    <span class="hover-text">PEREMPUAN</span>
                </div>
            </div>
        </div> 
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card shadow bg-primary-100" style="border-radius: 10px;">
                <div class="card-body text-center" style="position: relative;">
                    <img style="width: 150px; height: 150px;" src="{{ asset('img/icon/jk_icon.png') }}" alt="total-icon">
                    <h3>{{ $jkCounts['jmlJK'] }}</h3>
                    <span class="hover-text">TOTAL</span>
                </div>
            </div>
        </div> 
    </div>
    {{-- data pendidikan --}}
    <div class="row bg-primary-200 justify-content-center p-4 mb-5" style="border-radius:10px;">
        <h1>Pendidikan</h1>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card shadow bg-primary-100" style="border-radius: 10px;">
                <div class="card-body text-center" style="position: relative;">
                    <img style="width: 150px; height: 150px;" src="{{ asset('img/icon/tidakSD_icon.png') }}" alt="belumsekolah-icon">
                    <h3>{{ $pendidikanCounts['bsP'] }}</h3>
                    <span class="hover-text">BELUM SEKOLAH</span>
                </div>
            </div>
        </div> 
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card shadow bg-primary-100" style="border-radius: 10px;">
                <div class="card-body text-center" style="position: relative;">
                    <img style="width: 150px; height: 150px;" src="{{ asset('img/icon/sd_icon.png') }}" alt="sd-icon">
                    <h3>{{ $pendidikanCounts['sdP'] }}</h3>
                    <span class="hover-text">SD/SEDERAJAT</span>
                </div>
            </div>
        </div> 
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card shadow bg-primary-100" style="border-radius: 10px;">
                <div class="card-body text-center" style="position: relative;">
                    <img style="width: 150px; height: 150px;" src="{{ asset('img/icon/tsd_icon.png') }}" alt="tamatSD-icon">
                    <h3>{{ $pendidikanCounts['tsdP'] }}</h3>
                    <span class="hover-text">TAMAT SD</span>
                </div>
            </div>
        </div>
        <div class="w-100 d-md-none d-lg-block"></div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card shadow bg-primary-100" style="border-radius: 10px;">
                <div class="card-body text-center" style="position: relative;">
                    <img style="width: 150px; height: 150px;" src="{{ asset('img/icon/sltp_icon.png') }}" alt="sltp-icon">
                    <h3>{{ $pendidikanCounts['sltpP'] }}</h3>
                    <span class="hover-text">SLTP/SEDERAJAT</span>
                </div>
            </div>
        </div> 
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card shadow bg-primary-100" style="border-radius: 10px;">
                <div class="card-body text-center" style="position: relative;">
                    <img style="width: 150px; height: 150px;" src="{{ asset('img/icon/slta_icon.png') }}" alt="slta-icon">
                    <h3>{{ $pendidikanCounts['sltaP'] }}</h3>
                    <span class="hover-text">SLTA/SEDERAJAT</span>
                </div>
            </div>
        </div> 
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card shadow bg-primary-100" style="border-radius: 10px;">
                <div class="card-body text-center" style="position: relative;">
                    <img style="width: 150px; height: 150px;" src="{{ asset('img/icon/diploma_icon.png') }}" alt="sarjana-icon">
                    <h3>{{ $pendidikanCounts['diplomaP'] }}</h3>
                    <span class="hover-text">SARJANA</span>
                </div>
            </div>
        </div>  
    </div>
    {{-- data AGAMA --}}
    <div class="row bg-primary-200 justify-content-center p-4 mb-5" style="border-radius:10px;">
        <h1>Agama</h1>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card shadow bg-primary-100" style="border-radius: 10px;">
                <div class="card-body text-center" style="position: relative;">
                    <img style="width: 150px; height: 150px;" src="{{ asset('img/icon/islam_icon.png') }}" alt="agama-icon">
                    <h3>{{ $agamaCounts['isA'] }}</h3>
                    <span class="hover-text">ISLAM</span>
                </div>
            </div>
        </div> 
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card shadow bg-primary-100" style="border-radius: 10px;">
                <div class="card-body text-center" style="position: relative;">
                    <img style="width: 150px; height: 150px;" src="{{ asset('img/icon/kristen_icon.png') }}" alt="agama-icon">
                    <h3>{{ $agamaCounts['krA'] }}</h3>
                    <span class="hover-text">KRISTEN</span>
                </div>
            </div>
        </div> 
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card shadow bg-primary-100" style="border-radius: 10px;">
                <div class="card-body text-center" style="position: relative;">
                    <img style="width: 150px; height: 150px;" src="{{ asset('img/icon/katolik_icon.png') }}" alt="agama-icon">
                    <h3>{{ $agamaCounts['itA'] }}</h3>
                    <span class="hover-text">KATOLIK</span>
                </div>
            </div>
        </div>
        <div class="w-100 d-md-none d-lg-block"></div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card shadow bg-primary-100" style="border-radius: 10px;">
                <div class="card-body text-center" style="position: relative;">
                    <img style="width: 150px; height: 150px;" src="{{ asset('img/icon/hindu_icon.png') }}" alt="agama-icon">
                    <h3>{{ $agamaCounts['hiA'] }}</h3>
                    <span class="hover-text">HINDU</span>
                </div>
            </div>
        </div> 
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card shadow bg-primary-100" style="border-radius: 10px;">
                <div class="card-body text-center" style="position: relative;">
                    <img style="width: 150px; height: 150px;" src="{{ asset('img/icon/budha_icon.png') }}" alt="agama-icon">
                    <h3>{{ $agamaCounts['buA'] }}</h3>
                    <span class="hover-text">BUDHA</span>
                </div>
            </div>
        </div> 
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card shadow bg-primary-100" style="border-radius: 10px;">
                <div class="card-body text-center" style="position: relative;">
                    <img style="width: 150px; height: 150px;" src="{{ asset('img/icon/konghucu_icon.png') }}" alt="agama-icon">
                    <h3>{{ $agamaCounts['khA'] }}</h3>
                    <span class="hover-text">KONGHUCU</span>
                </div>
            </div>
        </div>  
    </div>
    {{-- data status perkawinan --}}
    <div class="row bg-primary-200 justify-content-center p-4 mb-5" style="border-radius:10px;">
        <h1>Status Perkawinan</h1>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card shadow bg-primary-100" style="border-radius: 10px;">
                <div class="card-body text-center" style="position: relative;">
                    <img style="width: 150px; height: 150px;" src="{{ asset('img/icon/belumKW_icon.png') }}" alt="belummenikah-icon">
                    <h3>{{ $statusPerkawinanCounts['bkSP'] }}</h3>
                    <span class="hover-text">BELUM MENIKAH</span>
                </div>
            </div>
        </div> 
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card shadow bg-primary-100" style="border-radius: 10px;">
                <div class="card-body text-center" style="position: relative;">
                    <img style="width: 150px; height: 150px;" src="{{ asset('img/icon/menikah_icon.png') }}" alt="menikah-icon">
                    <h3>{{ $statusPerkawinanCounts['kwSP'] }}</h3>
                    <span class="hover-text">MENIKAH</span>
                </div>
            </div>
        </div> 
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card shadow bg-primary-100" style="border-radius: 10px;">
                <div class="card-body text-center" style="position: relative;">
                    <img style="width: 150px; height: 150px;" src="{{ asset('img/icon/ceraiH_icon.png') }}" alt="ceraihidup-icon">
                    <h3>{{ $statusPerkawinanCounts['chSP'] }}</h3>
                    <span class="hover-text">CERAI HIDUP</span>
                </div>
            </div>
        </div>
        {{-- <div class="w-100 d-md-none d-lg-block"></div> --}}
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card shadow bg-primary-100" style="border-radius: 10px;">
                <div class="card-body text-center" style="position: relative;">
                    <img style="width: 150px; height: 150px;" src="{{ asset('img/icon/ceraiM_icon.png') }}" alt="ceraiMati-icon">
                    <h3>{{ $statusPerkawinanCounts['cmSP'] }}</h3>
                    <span class="hover-text">CERAI MATI</span>
                </div>
            </div>
        </div> 
    </div>
</section> 
    
{{-- Data LK --}}
{{-- {{ dd($totalPenduduk->where('jenis_kelamin', 1)->count()) }} --}}
{{-- Data PR --}}
{{-- {{ dd($totalPenduduk->where('jenis_kelamin', 2)->count()) }} --}}
{{-- Total LK,PR --}}
 {{-- {{ dd($totalPenduduk->where('jenis_kelamin', 1)->count() + $totalPenduduk->where('jenis_kelamin', 2)->count()) }} --}}


@endsection

{{-- <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col">
                <div class="card shadow h-100">
                    <div class="card-header border-0">
                        <div class="d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-md-between text-center text-md-left">
                            <div class="mb-3">
                                <h2 class="mb-0">Penduduk</h2>
                                <p class="mb-0 text-sm">Kelola Penduduk</p>
                            </div>
                            <div class="mb-3">
                                <a href="{{ route('penduduk.create') }}" class="btn btn-success" title="Tambah"><i class="fas fa-plus"></i> Tambah Penduduk</a>
                            </div>
                        </div>
                        <form class="navbar-search mt-3 cari-none" action="{{ URL::current() }}" method="GET">
                            <div class="form-group mb-0">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Cari ...." type="text" name="cari" value="{{ request('cari') }}">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-xl-3 col-md-6 col-sm-6 mb-3">
                <div class="card card-stats shadow h-100">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Jumlah Kepala Keluarga</h5>
                                <span class="h2 font-weight-bold mb-0">{{ $totalPenduduk->where('status_hubungan_dalam_keluarga_id',1)->count() }}</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6 mb-3">
                <div class="card card-stats shadow h-100">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Total Penduduk</h5>
                                <span class="h2 font-weight-bold mb-0">{{ $totalPenduduk->count() }}</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6 mb-3">
                <div class="card card-stats shadow h-100">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Jumlah Laki-laki</h5>
                                <span class="h2 font-weight-bold mb-0">{{ $totalPenduduk->where('jenis_kelamin',1)->count() }}</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6 mb-3">
                <div class="card card-stats shadow h-100">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Jumlah Perempuan</h5>
                                <span class="h2 font-weight-bold mb-0">{{ $totalPenduduk->where('jenis_kelamin',2)->count() }}</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-pink text-white rounded-circle shadow">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('form-search')
<form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto" action="{{ URL::current() }}" method="GET">
    <div class="form-group mb-0">
        <div class="input-group input-group-alternative">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
            </div>
            <input class="form-control" placeholder="Cari ...." type="text" name="cari" value="{{ request('cari') }}">
        </div>
    </div>
</form>
@endsection

@section('content')
@include('layouts.components.alert')
<div class="card shadow">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-sm table-striped table-bordered">
                <thead>
                    <th class="text-center">#</th>
                    <th class="text-center">NIK</th>
                    <th class="text-center">KK</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Jenis Kelamin</th>
                    <th class="text-center">TTL</th>
                    <th class="text-center">Golongan Darah</th>
                    <th class="text-center">Agama</th>
                    <th class="text-center">Pendidikan</th>
                    <th class="text-center">Pekerjaan</th>
                    <th class="text-center">Status Perkawinan</th>
                    <th class="text-center">Status Hub. dalam Keluarga</th>
                    <th class="text-center">Kewarganegaraan</th>
                    <th class="text-center">Nama Ayah</th>
                    <th class="text-center">Nama Ibu</th>
                </thead>
                <tbody>
                    @forelse ($penduduk as $item)
                        <tr>
                            <td>
                                <a href="{{ route('penduduk.edit', $item) }}" class="btn btn-sm btn-success" data-toggle="tooltip" title="Edit"><i class="fas fa-edit"></i></a>
                                <a class="btn btn-sm btn-danger hapus-data" data-nama="{{ $item->nama }}" data-action="{{ route("penduduk.destroy", $item) }}" data-toggle="tooltip" title="Hapus" href="#modal-hapus"><i class="fas fa-trash"></i></a>
                            </td>
                            <td>{{ $item->nik }}</td>
                            <td>{{ $item->kk }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->jenis_kelamin == 1 ? "Laki-laki" : "Perempuan" }}</td>
                            <td>{{ $item->tempat_lahir }}, {{ date('d/m/Y',strtotime($item->tanggal_lahir)) }}</td>
                            <td>{{ $item->darah ? $item->darah->golongan : '-' }}</td>
                            <td>{{ $item->agama->nama }}</td>
                            <td>{{ $item->pendidikan ? $item->pendidikan->nama : '-' }}</td>
                            <td>{{ $item->pekerjaan ? $item->pekerjaan->nama : '-' }}</td>
                            <td>{{ $item->statusPerkawinan->nama }}</td>
                            <td>{{ $item->statusHubunganDalamKeluarga->nama }}</td>
                            <td>
                                @php
                                    switch ($item->kewarganegaraan) {
                                        case 1:
                                            echo "WNI";
                                            break;
                                        case 2:
                                            echo "WNA";
                                            break;
                                        case 3:
                                            echo "Dua Kewarganegaraan";
                                            break;
                                    }
                                @endphp
                            </td>
                            <td>{{ $item->nama_ayah }}</td>
                            <td>{{ $item->nama_ibu }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="15" align="center">Data tidak tersedia</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{ $penduduk->links() }}
    </div>
</div>

<div class="modal fade" id="modal-hapus" tabindex="-1" role="dialog" aria-labelledby="modal-hapus" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">

            <div class="modal-header">
                <h6 class="modal-title" id="modal-title-delete">Hapus Penduduk?</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">

                <div class="py-3 text-center">
                    <i class="ni ni-bell-55 ni-3x"></i>
                    <h4 class="heading mt-4">Perhatian!!</h4>
                    <p>Menghapus penduduk akan menghapus semua data yang dimilikinya</p>
                    <p><strong id="nama-hapus"></strong></p>
                </div>

            </div>

            <div class="modal-footer">
                <form id="form-hapus" action="" method="POST" >
                    @csrf @method('delete')
                    <button type="submit" class="btn btn-white">Yakin</button>
                </form>
                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Tidak</button>
            </div>

        </div>
    </div>
</div> --}}
