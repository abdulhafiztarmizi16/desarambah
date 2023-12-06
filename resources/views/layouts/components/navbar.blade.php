<header id="header">
    <div class="container d-flex align-items-center">
        <div class="logo me-auto position-relative">
            <a href="/">
                <img class="mt-2" src="{{ asset(Storage::url($desa->logo)) }}" alt="">

                <span class="text-white d-none d-lg-inline-block"> Desa {{ $desa->nama_desa }}</span>
                <div class="position-absolute logo1 d-none d-lg-inline-block">
                    <span class="text-white "> Kabupaten {{ $desa->nama_kabupaten }}</span>
                </div>
            </a>
        </div>


        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="medilab/assets/img/logo.png" alt="" class="img-fluid"></a>-->
        <!-- Navbar Admin -->
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                {{-- <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ route('home.index') }}">
                        <i class="fas fa-home"></i>
                        <span class="nav-link-inner--text">&nbsp;Beranda</span>
                    </a>
                </li> --}}
                @if (Auth::check())
                    {{-- <h1>Navbar admin AUTH::CHECK</h1> --}}
                    <li class="dropdown"><a href="#"><span>Profil Desa</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ route('sejarah') }}">
                                    <i class="bi bi-hourglass-split fs-6"></i>&nbsp;Sejarah Desa</a></li>
                            <li><a href="{{ route('struktur-desa-2') }}">
                                    <i class="fas fa-fw fa-users"></i>&nbsp;Struktur Organisasi</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Data Desa</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ route('data-desa') }}">
                                    <i class="bi bi-file-earmark-bar-graph-fill fs-6"></i>&nbsp;Infografis
                                    Kependudukan</a></li>
                            <li><a href="{{ route('laporan-apbdes') }}">
                                    <i class="bi bi-currency-dollar fs-6"></i>&nbsp;Transparansi Anggaran</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link nav-link-icon" href="{{ route('potensi-desa') }}">
                            {{-- <i class="fas fa-fw fa-file-alt"></i> --}}
                            <span class="nav-link-inner--text">&nbsp;Potensi Desa</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link nav-link-icon" href="{{ route('gallery') }}">
                            {{-- <i class="fas fa-fw fa-newspaper"></i> --}}
                            <span class="nav-link-inner--text">&nbsp;Galeri</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link nav-link-icon" href="#kontak">
                            {{-- <i class="fas fa-fw fa-chart-pie"></i> --}}
                            <span class="nav-link-inner--text">&nbsp;Kontak</span>
                        </a>
                    </li>

                    <li class="dropdown"><a
                            style="border-color: var(--primary50);color: var(--textprimary);padding: 10px 25px;"
                            class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage"
                            href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><img class="img-sirkel"
                                src="{{ asset(Storage::url(auth()->user()->foto_profil)) }}" width="20px"
                                height="20px">&nbsp;{{ auth()->user()->nama }}</a>
                        <ul>
                            <a class="nav-link" href="{{ route('dashboard') }}">
                                <i class="fas fa-tachometer-alt"></i>
                                <span>&nbsp;Dashboard</span>
                            </a>
                            <a href="{{ route('profil') }}" class="dropdown-item">
                                <i class="ni ni-single-02"></i>
                                <span>&nbsp;Profil Saya</span>
                            </a>
                            <a href="{{ route('pengaturan') }}" class="dropdown-item">
                                <i class="ni ni-settings-gear-65"></i>
                                <span>&nbsp;Pengaturan</span>
                            </a>
                            {{-- <a href="{{ route('manageuser.index') }}" class="dropdown-item">
                                <i class="fa fa-users"></i>
                                <span>&nbsp;Manage User</span>
                            </a> --}}
                            {{-- <div class="dropdown-divider"></div>
                            <a href="{{ route('keluar') }}" class="dropdown-item"
                                onclick="event.preventDefault(); document.getElementById('form-keluar').submit();">
                                <i class="ni ni-user-run"></i>
                                <span>&nbsp;Keluar</span>
                            </a> --}}
                        </ul>
                    </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        {{-- </nav> --}}
        <!-- End navbar admin -->

        <!-- Navbar guest -->
    @else
        <li class="dropdown"><a href="#"><span>Profil Desa</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="{{ route('sejarah') }}">
                        <i class="bi bi-hourglass-split fs-6"></i>&nbsp;Sejarah Desa</a></li>
                <li><a href="{{ route('struktur-desa-2') }}">
                        <i class="fas fa-fw fa-users"></i>&nbsp;Struktur Organisasi</a></li>
            </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Data Desa</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="{{ route('data-desa') }}">
                        <i class="bi bi-file-earmark-bar-graph-fill fs-6"></i>&nbsp;Infografis Kependudukan</a></li>
                <li><a href="{{ route('laporan-apbdes') }}">
                        <i class="bi bi-currency-dollar fs-6"></i>&nbsp;Transparansi Anggaran</a></li>
            </ul>
        </li>
        <li>
            <a class="nav-link nav-link-icon" href="{{ route('potensi-desa') }}">
                {{-- <i class="fas fa-fw fa-file-alt"></i> --}}
                <span class="nav-link-inner--text">&nbsp;Potensi Desa</span>
            </a>
        </li>
        <li>
            <a class="nav-link nav-link-icon" href="{{ route('gallery') }}">
                {{-- <i class="fas fa-fw fa-newspaper"></i> --}}
                <span class="nav-link-inner--text">&nbsp;Galeri</span>
            </a>
        </li>
        <li>
            <a class="nav-link nav-link-icon" href="#kontak">
                {{-- <i class="fas fa-fw fa-chart-pie"></i> --}}
                <span class="nav-link-inner--text">&nbsp;Kontak</span>
            </a>
        </li>
        </ul>
        <i style="margin-left: 20px;" class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <a href="{{ route('masuk') }}" class="appointment-btn scrollto">
            <span class="nav-link-inner--text">Login</span>
            <i class="fas fa-fw fa-user"></i></a>
        {{-- <i class="fas fa-fw fa-sign-in-alt"></i> --}}
        {{-- button allert --}}
        <button id="alertButton" class="bg-danger">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-bell-fill"
                viewBox="0 0 16 16">
                <path
                    d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
            </svg>
        </button>
        @endif
    </div>
</header><!-- End Header -->
