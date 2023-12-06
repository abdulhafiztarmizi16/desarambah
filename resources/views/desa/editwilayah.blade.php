@extends('layouts.app')

@section('title')
    Kepala Desa
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <style>
        .ikon {
            font-family: fontAwesome;
        }

        .upload-image:hover {
            cursor: pointer;
            opacity: 0.7;
        }
    </style>
@endsection

@section('content-header')
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
        style="background-image: url({{ asset('/img/cover-bg-profil.jpg') }}); background-size: cover; background-position: center top;">

        <!-- Mask -->
        <span class="mask bg-gradient-primary opacity-6"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">

            <div class="row">
                <div class="col-lg-7 col-md-10">
                    <h1 class="display-2 text-white">Desa {{ $desa->nama_desa }}</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">

        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Wilayah Desa</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @include('layouts.components.alert')
                    <form action="{{ route('update-wilayah', $desa->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf @method('patch')
                        <div class="form-group">
                            <label class="form-control-label" for="nama_wilayah">Nama Wilayah</label>
                            <input name="nama_wilayah" type="text" id="nama_wilayah"
                                class="form-control form-control-alternative @error('nama_wilayah') is-invalid @enderror"
                                placeholder="Masukkan nama wilayah" value="{{ old('nama_wilayah', $desa->nama_wilayah) }}">
                            @error('nama_wilayah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Deskripsi Wilayah</label>
                            <textarea class="form-control @error('deskripsi_wilayah') is-invalid @enderror" name="deskripsi_wilayah">{{ old('deskripsi_wilayah', $desa->deskripsi_wilayah) }}</textarea>
                            @error('deskripsi_wilayah')
                                <span class="invalid-feedback font-weight-bold">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="peta_wilayah">Link Peta Wilayah</label>
                            <input name="peta_wilayah" type="text" id="peta_wilayah"
                                class="form-control form-control-alternative @error('peta_wilayah') is-invalid @enderror"
                                placeholder="https://www.google.com/maps/embed?....." value="{{ old('peta_wilayah', $desa->peta_wilayah) }}">
                            @error('peta_wilayah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <input type="file" name="logo" id="input-logo" style="display: none">
@endsection

@push('scripts')
    <script src="{{ asset('js/jquery.fancybox.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>

    <script>
        $(document).ready(function() {
            $("textarea").summernote({
                dialogsInBody: true,
                placeholder: 'Isi Deskripsi Wilayah',
                tabsize: 2,
                height: 300
            });

            $(document).on("submit", "form", function() {
                $(this).children("button:submit").attr('disabled', 'disabled');
                $(this).children("button:submit").html(
                    `<img height="20px" src="{{ url('/storage/loading.gif') }}" alt=""> Loading ...`);
            });

        });
    </script>
@endpush
