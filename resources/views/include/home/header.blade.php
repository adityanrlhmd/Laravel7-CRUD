<header>
    <nav class="navbar navbar-expand-lg  ">
        <div class="container-fluid navbar-light">
            <a class="navbar-brand" href="#"><img src="./src/img/Logo Healthy Paws.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Konsultasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Artikel</a>
                    </li>
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <button type="button" class="btn login">
                                    Home
                                </button>
                            </li>
                        @else
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{route('register')}}">Register</a>
                                </li>
                            @endif

                            <li class="nav-item">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn login" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Login
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="logo mb-5">
                                                        <img src="src/img/Logo Healthy Paws.png" alt="">
                                                    </div>
                                                    <form method="POST" action="{{ route('login') }}">
                                                        @csrf
                                                        <div class="mb-4">
                                                            <label for="email" class="form-label">Email</label>
                                                            <input type="email"
                                                                class="form-control @error('email') is-invalid @enderror"
                                                                id="email" name="email" value="{{ old('email') }}"
                                                                required autocomplete="email" autofocus
                                                                placeholder="Masukan Nama Pengguna">
                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-4">
                                                            <label for="inputPassword" class="form-label">Kata Sandi</label>
                                                            <input type="password"
                                                                class="form-control @error('password') is-invalid @enderror"
                                                                id="inputPassword" name="password" required
                                                                autocomplete="current-password"
                                                                placeholder="Masukan Kata Sandi">
                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <button type="submit" class="btn mt-3 mb-3">Login</button>
                                                    </form>
                                                    <p>Don't have an account? <a href="page/register.html">Register here</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endauth
                    @endif
                    {{-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Register</a>
                    </li>
                    <li class="nav-item">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn login" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Login
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <div class="logo mb-5">
                                                <img src="src/img/Logo Healthy Paws.png" alt="">
                                            </div>
                                            <div class="mb-4">
                                                <label for="NamaPengguna" class="form-label">Nama Pengguna</label>
                                                <input type="text" class="form-control" id="NamaPengguna"
                                                    placeholder="Masukan Nama Pengguna">
                                            </div>
                                            <div class="mb-4">
                                                <label for="inputPassword" class="form-label">Kata Sandi</label>
                                                <input type="password" class="form-control" id="inputPassword"
                                                    placeholder="Masukan Kata Sandi">
                                            </div>
                                            <button type="button" class="btn mt-3 mb-3">Login</button>
                                            <p>Don't have an account? <a href="page/register.html">Register here</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>
</header>
