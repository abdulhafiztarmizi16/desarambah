<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title', '')

    <!-- Template Main CSS File -->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <!-- Favicon -->
    <link href="{{ asset(Storage::url($desa->logo)) }}" rel="icon" type="image/png">

    <title>Website Resmi Pemerintah Desa {{ $desa->nama_desa }} - Login</title>

</head>


<body>
    <section id="masuk" class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="{{ asset('img/computerLogin.png') }}" class="img-fluid" alt="Sample image">
                    {{-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image"> --}}
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form role="form" action="{{ route('masuk') }}" method="POST">
                        @csrf
                        {{-- <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </button>

                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-twitter"></i>
                            </button>

                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-linkedin-in"></i>
                            </button>
                        </div> --}}

                        <div class="divider d-flex align-items-center my-4">
                            <h3 class="text-center fw-bold mx-3 mb-0">Layanan Mandiri</h3>
                        </div>

                        <!-- Email input -->
                        <div class="form-group mb-3">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                                </div>
                                <input class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus
                                    placeholder="Email" type="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                                </div>
                                <input class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password" placeholder="Password" type="password"
                                    value="{{ old('password') }}">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value=""
                                    id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Remember me
                                </label>
                            </div>
                            <a href="#!" class="text-body">Forgot password?</a>
                        </div> --}}

                        <div id="hero" class="mt-3 pt-2">
                            <button type="submit" class="btn btn-primary"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;width:100%;">Login</button>
                            {{-- <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                                    class="link-danger">Register</a></p> --}}
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <footer id="footer" class="bg-primary-500">
            <div class="container-fluid text-center py-4">
                <div class="copyright font-weight-bold">
                    <span class="bg-textaccent">
                        &copy; {{ date('Y') }}
                    </span>
                    <a href="{{ url('') }}" class="ml-1 bg-textaccent" target="_blank">Desa
                        {{ $desa->nama_desa }} | abdulhafiztarmizi | pcr</a>
                </div>
            </div>
        </footer>
    </section>




    {{-- @section('content') --}}
    {{-- <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
            <div class="card bg-primary-800 shadow border-0">
                <div class="card-body px-lg-5 py-lg-5">
                    <div class="text-center mb-4">
                        <img height="150px" src="{{ asset(Storage::url($desa->logo)) }}" alt="logo">
                    </div>
                    <form role="form" action="{{ route('masuk') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email" type="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <input class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" type="password" value="{{ old('password') }}">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary my-4">Masuk</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- @endsection --}}
</body>

</html>

@push('scripts')
    <script>
        $(document).ready(function() {
            $(document).on("submit", "form", function() {
                $(this).find("button:submit").attr('disabled', 'disabled');
                $(this).find("button:submit").html(
                    `<img height="20px" src="{{ url('/storage/loading.gif') }}" alt=""> Loading ...`);
            });
        });
    </script>
@endpush
