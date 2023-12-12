<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    @section('title', 'Website Resmi Pemerintah Desa ' . $desa->nama_desa . ' - Home')


    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicon -->
    <link href="{{ asset(Storage::url($desa->logo)) }}" rel="icon" type="image/png">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('carousel/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('carousel/css/jquery.fancybox.css') }}">

    {{-- <link href="{{ asset('/css/responsive.css') }}" rel="stylesheet"> --}}
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">


    <!-- Template Main CSS File -->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/responsive.css') }}" rel="stylesheet">
    <!-- Template owl.carousel -->
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">

    {{-- animation AOS CDN --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    @section('styles')
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
        <style>
            .table th,
            .table td {
                padding: 5px;
            }

            .card .table td,
            .card .table th {
                padding-left: 5px;
                padding-right: 5px;
            }
        </style>
    @endsection
</head>

<body>
    {{-- ============================= --}}

    <!-- ======= Navbar ======= -->
    @include('layouts.components.navbar')

    <!-- ======= Pengumuman ======= -->
    <div id="overlay"></div>
    <div id="popup" class="bg-primary-200">
        <h2 class="text-center">Pengumuman</h2>
        <div>
            <p>{!! $desa->pengumuman !!}</p>
        </div>
        <button id="closeButton" class="bg-danger">X</button>
    </div>

    <!-- ======= Hero Section ======= -->
    <section id="hero"
        style="width:100%;height:100vh;background-size:cover; background-position: center; background-position-y:70%; background-repeat:no-repeat;background-image: url('{{ asset('img/kantor_desa_h.jpg') }}');">
        <div class="bg-overlay-hero"></div>
        <div class="overlay">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6 phone-center-title">
                        <div class="desa-title">SELAMAT DATANG DI <div class="sub">DESA
                                {{ Str::upper($desa->nama_desa) }}
                                <div class="line"></div>
                            </div>
                        </div>
                        <p class="desa-paragraf">{{ $desa->tagline_desa }}</p>
                        <a href="#berita" class="btn btn-outline-primary scrollto">
                            Berita Terkini
                        </a>
                        <a href="#visi" class="btn btn-primary scrollto">
                            Explore More <i class="fas fa-fw fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-md-6 text-center mt-4">
                        {{-- <img class="img-fluid" src="{{ asset(Storage::url($desa->logo)) }}" alt=""> --}}
                        <iframe style="border-radius: 5px;" width="90%" height="300"
                            src="https://www.youtube.com/embed/QeQKqj6NH2c" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <svg style="z-index: 11;;position:absolute;bottom:-1;margin:0;padding:0;" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 1440 320">
            <path fill="#f6fcf9" fill-opacity="1"
                d="M0,128L80,160C160,192,320,256,480,256C640,256,800,192,960,170.7C1120,149,1280,171,1360,181.3L1440,192L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
            </path>
        </svg>
    </section>

    <!-- ======= visi misi Section ======= -->


    <section id="visi">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bg-primary-100 px-4 rounded background">
                        <p class="title text-uppercase">visi</p>
                    </div>
                    {{-- visi misi belum tersedia --}}
                    @forelse ($visimisi->take(1) as $item)
                        <div class="bg-primary-100 rounded">
                            <p class="p-3 content italic">“ {{ $item->misi_desa }} “</p>
                        </div>
                    @empty
                        <div class="card shadow my-4">
                            <div class="card-body text-center">
                                <h4>Data belum tersedia</h4>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-8 pb-8">
                    <div class="bg-primary-100 px-4 background rounded">
                        <p class="title text-uppercase">misi</p>
                    </div>
                    @php
                        $counter = 0; // Inisialisasi variabel penghitung
                    @endphp
                    @forelse ($visimisi as $key=>$item)
                        @if ($key > 0)
                            <!-- Skip the first data -->
                            @php
                                $counter++; // Increment counter only for non-skipped data
                            @endphp
                            <div class="bg-primary-100 d-flex align-items-center mb-2 rounded">
                                <h1 class="px-3 content-num">{{ $counter }}</h1>
                                <p class="pt-3 px-2 content">{{ $item->misi_desa }}</p>
                            </div>
                        @endif
                    @empty
                        <div class="card shadow">
                            <div class="card-body text-center">
                                <h4>Data belum tersedia</h4>
                            </div>
                        </div>
                    @endforelse
                </div>
                @forelse($aparat->take(1) as $item)
                <div class="col-lg-4 pb-4 d-none d-lg-block">
                    <div class="d-flex m-auto justify-content-center align-items-center pict-misi">
                        {{-- <img style="max-width: 100%;height: 90%;" src="{{ asset('img/kepala_desa.png') }}"
                            alt=""> --}}
                            <img style="max-width: 100%;height:100%;padding:10px;border-radius:15px;object-fit: cover;" src="{{ $item->gambar ? url(Storage::url($item->gambar)) : url(Storage::url('noimage.jpg')) }}">
                    </div>
                </div>
                @empty
                    
                @endforelse
                
            </div>
        </div>
    </section>

    <!-- ======= aparatur desa Section ======= -->
    <section id="aparatur">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h1>Aparatur Desa</h1>
                </div>
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        @forelse ($aparat as $item)
                            <div class="item">
                                <div class="bg-primary-500 position-relative card-background">
                                    <img src="{{ $item->gambar ? url(Storage::url($item->gambar)) : url(Storage::url('noimage.jpg')) }}"
                                        alt="">
                                    <div class="position-absolute bottom-0 card-content d-flex align-items-center">
                                        <div class="px-3">
                                            <h5>{{ $item->nama_aparat }}</h5>
                                            <p>{{ $item->jabatan }}</p>
                                        </div>
                                    </div>
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
                </div>
            </div>
        </div>
    </section>

    <!-- ======= berita desa ======= -->
    <section id="berita">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h1>Berita Terkini</h1>
                </div>
                {{-- Tipe berita 1 --}}
                @forelse ($berita->take(1) as $item)
                    <div class="col-12 col-md-6 pe-lg-3">
                        {{-- image berita tipe1 --}}
                        <div class="tipe1-pict">
                            <a
                                href="{{ route('berita.show', ['berita' => $item, 'slug' => Str::slug($item->judul)]) }}">
                                <img class=""
                                    src="{{ $item->gambar ? url(Storage::url($item->gambar)) : url(Storage::url('noimage.jpg')) }}"
                                    alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-flex align-items-center">
                        <a href="{{ route('berita.show', ['berita' => $item, 'slug' => Str::slug($item->judul)]) }}">
                            {{-- konten berita tipe1 --}}
                            <div class="d-flex align-items-center py-3 py-sm-none">
                                <div><img class="penulis-pict"
                                        src="{{ asset(Storage::url($user->first()->foto_profil)) }}" alt="">
                                </div>
                                <div class="ps-2 penulis-desc">{{ $user->first()->nama }} <span
                                        class="penulis-dot"></span> {{ $item->created_at->diffForHumans() }}</div>
                            </div>
                            <h1 class="judul-tipe1">{{ $item->judul }}</h1>
                            <div class="pe-3 konten-tipe1">{!! $item->konten !!}</div>
                            <p class="item-dibaca"><i class="fas fa-eye"> {{ $item->dilihat }} Kali
                                    Dibaca</i></p>
                        </a>
                    </div>
                @empty
                    <div class="card shadow">
                        <div class="card-body text-center">
                            <h4>Data belum tersedia</h4>
                        </div>
                    </div>
                @endforelse
            </div>
            {{-- tipe berita 2 --}}
            <div class="row">
                @if ($berita->count() > 0)
                    {{-- jika jumlah berita >= dari 5 --}}
                    @if ($berita->count() >= 5)
                        <div class="col-12 text-end semua"><a href="{{ route('berita') }}">Lihat Semua <i
                                    class="fas fa-fw fa-arrow-right"></i></a></div>
                    @else
                        <div class="mt-4"></div>
                    @endif
                    @foreach ($berita->skip(1) as $item)
                        <div class="col-12 col-md-6 col-lg-3 mt-2 ">
                            <div>
                                {{-- konten berita tipe 2 --}}
                                <a
                                    href="{{ route('berita.show', ['berita' => $item, 'slug' => Str::slug($item->judul)]) }}">
                                    <div class="tipe2-pict">
                                        <img src="{{ $item->gambar ? url(Storage::url($item->gambar)) : url(Storage::url('noimage.jpg')) }}"
                                            alt="">
                                    </div>

                                    <div class="d-flex align-items-center py-3">
                                        <img class="penulis-pict"
                                            src="{{ asset(Storage::url($user->first()->foto_profil)) }}"
                                            alt="">
                                        <div class="ps-2 penulis-desc">{{ $user->first()->nama }}<span
                                                class="penulis-dot"></span> {{ $item->created_at->diffForHumans() }}
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
                @endif
            </div>
        </div>
    </section>

    <!-- ======= galeri desa Section ======= -->
    <section id="galeri" class="position-relative">
        {{-- vektor style galleri --}}
        @if (count($galleries) > 0)
            {{-- tutup atas --}}
            <div class="tutup-atas position-absolute bg-grey-50 d-none d-lg-block"></div>
            {{-- tutup bawah --}}
            <div class="tutup-bawah position-absolute bg-grey-50 d-none d-lg-block"></div>
        @endif
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h1>Galeri Desa</h1>
                </div>
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <?php $count = 0; ?>
                        @forelse ($galleries as $item)
                            <?php if ($count == 21) {
                                break;
                            } ?>
                            <div class="item">
                                <div class="bg-primary-500 position-relative card-background">
                                    <a href="{{ url(Storage::url($item['gambar'])) }}" class="galelry-lightbox">
                                        <img src="{{ url(Storage::url($item['gambar'])) }}" alt="">
                                        <div
                                            class="position-absolute bottom-0 card-content d-flex align-items-center justify-content-center">
                                            <div class="px-3">
                                                {{-- <h4>contoh gambar 1</h4> --}}
                                                <p>item here</p>
                                                {{-- {{ $item->judul }} --}}
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php $count++; ?>
                        @empty
                            <div class="card shadow">
                                <div class="card-body text-center">
                                    <h4>Data belum tersedia</h4>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Footer ======= -->
    @include('layouts.components.footer')

    {{-- ============================= --}}

    {{-- apbdes here --}}

    {{-- end apbdes --}}

    <!-- Vendor JS Files -->
    <script src="/vendor/purecounter/purecounter.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/vendor/php-email-form/validate.js"></script>

    <!--   Argon JS   -->
    <script src="{{ url('/js/argon-dashboard.min.js?v=1.1.2') }}"></script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>


    <!--   Core   -->
    <script src="{{ url('/js/plugins/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ url('/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    {{-- animation AOS CDN --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>

    <!-- Template Main JS File -->
    <script src="/js/main.js"></script>
    <script src="/js/apbdes.js"></script>

    <script>
        const baseURL = $('meta[name="base-url"]').attr('content');
        window.TrackJS &&
            TrackJS.install({
                token: "ee6fab19c5a04ac1a32a645abde4613a",
                application: "argon-dashboard-free"
            });
    </script>

    {{-- corousel --}}
    <script src="carousel/js/jquery.min.js"></script>
    <script src="carousel/js/popper.js"></script>
    <script src="carousel/js/bootstrap.min.js"></script>
    <script src="carousel/js/owl.carousel.min.js"></script>
    <script src="carousel/js/main.js"></script>


    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('js/apbdes.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#owl-one').owlCarousel({
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                smartSpeed: 1000,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            });
        });
    </script>
    <script src="{{ asset('js/apbdes.js') }}"></script>
    <script>
        // setting grafik
        // $(document).ready(function() {
        //     $("#tahun-apbdes").change(function() {
        //         $("#tahun-apbdes").css('display', 'none');
        //         $("#loading-tahun").css('display', '');
        //         $(this).parent().submit();
        //     });
        //     $(".tab").click(function() {
        //         $("tbody").html(`<tr><td colspan="6" align="center">Loading ...</td></tr>`);
        //     });
        // });
        // setting allert button
        $(document).ready(function() {
            $('#alertButton').click(function() {
                $('#overlay').show();
                $('#popup').show();
            });

            $('#closeButton, #overlay').click(function() {
                $('#overlay').hide();
                $('#popup').hide();
            });
        });
        // animasi button allert
        $(document).ready(function() {
            $('#alertButton').hover(function() {
                $(this).css('animation-play-state', 'paused');
            }, function() {
                $(this).css('animation-play-state', 'running');
            });
        });
    </script>
    {{-- button pengujian --}}
    {{-- <footer id="footer">
        <a href="https://forms.gle/BrYpcsBbnAA55BgM8" class="ml-1 bg-textaccent">
            <div class="container-fluid text-center py-3 usability">
                <div class="font-weight-bold">
                    Mari Mulai Test
                </div>
            </div>
        </a>
    </footer> --}}
</body>

</html>
