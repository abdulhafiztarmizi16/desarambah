@extends('layouts.app')

@section('title', 'Penduduk')

@section('styles')
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
@endsection

@section('content-header')
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col">
                    <div class="card shadow h-100">
                        <div class="card-header border-0">
                            <div
                                class="d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-md-between text-center text-md-left">
                                <div class="mb-3">
                                    <h2 class="mb-0">Penduduk</h2>
                                    <p class="mb-0 text-sm">Kelola Penduduk</p>
                                </div>
                                <div class="mb-3">
                                    <a href="{{ route('penduduk.create') }}" class="btn btn-success" title="Tambah"><i
                                            class="fas fa-plus"></i> Tambah Penduduk</a>
                                    <button id="toggleDataButton" class="btn btn-primary" data-toggle="tooltip"><i
                                            class="fas fa-eye" title="sembunyikan data"></i></button>
                                </div>
                            </div>
                            <form class="navbar-search mt-3 cari-none" action="{{ URL::current() }}" method="GET">
                                <div class="form-group mb-0">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Cari ...." type="text" name="cari"
                                            value="{{ request('cari') }}">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                {{-- <div class="col-xl-3 col-md-6 col-sm-6 mb-3">
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
            </div> --}}
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
                                    <span
                                        class="h2 font-weight-bold mb-0">{{ $totalPenduduk->where('jenis_kelamin', 1)->count() }}</span>
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
                                    <span
                                        class="h2 font-weight-bold mb-0">{{ $totalPenduduk->where('jenis_kelamin', 2)->count() }}</span>
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
    <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto"
        action="{{ URL::current() }}" method="GET">
        <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Cari ...." type="text" name="cari"
                    value="{{ request('cari') }}">
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
                        <th class="text-center">Nama</th>
                        <th class="text-center">Jenis Kelamin</th>
                        <th class="text-center">TTL</th>
                        <th class="text-center">Agama</th>
                        <th class="text-center">Alamat</th>

                    </thead>
                    <tbody>

                        @forelse ($penduduk as $index => $item)
                            @php
                                $itemdusun = $dusun[$index];
                            @endphp
                            <tr>
                                <td>
                                    <a href="#modal-tambah-detail-dusun-{{ $item->id }}" data-toggle="modal"
                                        class="btn btn-info btn-sm" title="Detail"><i class="fas fa-info-circle"></i></a>
                                    <a href="{{ route('penduduk.edit', $item) }}" class="btn btn-sm btn-success"
                                        data-toggle="tooltip" title="Edit"><i class="fas fa-edit"></i></a>
                                    <a class="btn btn-sm btn-danger hapus-data" data-nama="{{ $item->nama }}"
                                        data-action="{{ route('penduduk.destroy', $item) }}" data-toggle="tooltip"
                                        title="Hapus" href="#modal-hapus"><i class="fas fa-trash"></i></a>
                                </td>
                                <td class="data-cell">{{ $item->nik }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->jenis_kelamin == 1 ? 'Laki-laki' : 'Perempuan' }}</td>
                                <td class="data-cell">{{ $item->tempat_lahir }},
                                    {{ date('d/m/Y', strtotime($item->tanggal_lahir)) }}</td>
                                <td>{{ $item->agama->nama }}</td>
                                <td>{{ $item->alamat }} {{ $namaDusunArray[$item->id] }}  RT/RW
                                    {{ $item->detailDusun ? $item->detailDusun->rt : '-' }}/{{ $item->detailDusun ? $item->detailDusun->rw : '-' }}</td>
                            </tr>
                            {{-- modal untuk detail --}}
                            <div class="modal fade" id="modal-tambah-detail-dusun-{{ $item->id }}" tabindex="-1"
                                role="dialog" aria-labelledby="modal-tambah-detail-dusun" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h6 class="modal-title" id="modal-title">Detail Data Penduduk</h6>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                            <div class="detailPenduduk">
                                                <div class="detail-label">NIK:</div>
                                                <div class="detail-value">{{ $item->nik }}
                                                    <hr>
                                                    <div class="detail-label">No KK:</div>
                                                    <div class="detail-value">{{ $item->kk }}</div>
                                                    <hr>
                                                    <div class="detail-label">Nama:</div>
                                                    <div class="detail-value">{{ $item->nama }}</div>
                                                    <hr>
                                                    <div class="detail-label">Jenis Kelamin:</div>
                                                    <div class="detail-value">
                                                        {{ $item->jenis_kelamin == 1 ? 'Laki-laki' : 'Perempuan' }}</div>
                                                    <hr>
                                                    <div class="detail-label">TTL:</div>
                                                    <div class="detail-value">{{ $item->tempat_lahir }},
                                                        {{ date('d/m/Y', strtotime($item->tanggal_lahir)) }}</div>
                                                    <hr>
                                                    <div class="detail-label">Agama:</div>
                                                    <div class="detail-value">{{ $item->agama->nama }}</div>
                                                    <hr>
                                                    <div class="detail-label">Status Perkawinan:</div>
                                                    <div class="detail-value">{{ $item->statusPerkawinan->nama }}</div>
                                                    <hr>
                                                    <div class="detail-label">Pendidikan:</div>
                                                    <div class="detail-value">
                                                        {{ $item->pendidikan ? $item->pendidikan->nama : '-' }}</div>
                                                    <hr>
                                                    <div class="detail-label">Pekerjaan:</div>
                                                    <div class="detail-value">
                                                        {{ $item->pekerjaan ? $item->pekerjaan->nama : '-' }}</div>
                                                    <hr>
                                                    <div class="detail-label">Golongan Darah:</div>
                                                    <div class="detail-value">
                                                        {{ $item->darah ? $item->darah->golongan : '-' }}</div>
                                                    <hr>
                                                    <div class="detail-label">Status Hub. dalam Keluarga:</div>
                                                    <div class="detail-value">
                                                        {{ $item->statusHubunganDalamKeluarga ? $item->statusHubunganDalamKeluarga->nama : '-' }}
                                                    </div>
                                                    <hr>
                                                    <div class="detail-label">Kewarganegaraan:</div>
                                                    <div class="detail-value">
                                                        @php
                                                            switch ($item->kewarganegaraan) {
                                                                case 1:
                                                                    echo 'WNI';
                                                                    break;
                                                                case 2:
                                                                    echo 'WNA';
                                                                    break;
                                                                case 3:
                                                                    echo 'Dua Kewarganegaraan';
                                                                    break;
                                                            }
                                                        @endphp
                                                    </div>
                                                    <hr>
                                                    <div class="detail-label">Nomor paspor:</div>
                                                    <div class="detail-value">
                                                        {{ $item->nomor_paspor ? $item->nomor_paspor : '-' }}</div>
                                                    <hr>
                                                    <div class="detail-label">Nomor Kitas / Kitap:</div>
                                                    <div class="detail-value">
                                                        {{ $item->nomor_kitas_atau_kitap ? $item->nomor_kitas_atau_kitap : '-' }}</div>
                                                    <hr>
                                                    <div class="detail-label">Alamat:</div>
                                                    <hr>
                                                    <div class="detail-value">{{ $item->alamat }} {{ $namaDusunArray[$item->id] }}
                                                        RT/RW {{ $item->detailDusun ? $item->detailDusun->rt : '-' }}/{{ $item->detailDusun ? $item->detailDusun->rw : '-' }}
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
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

    <div class="modal fade" id="modal-hapus" tabindex="-1" role="dialog" aria-labelledby="modal-hapus"
        aria-hidden="true">
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
                    <form id="form-hapus" action="" method="POST">
                        @csrf @method('delete')
                        <button type="submit" class="btn btn-white">Yakin</button>
                    </form>
                    <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Tidak</button>
                </div>

            </div>
        </div>
    </div>
@endsection
