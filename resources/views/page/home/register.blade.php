@extends('layouts.home.index')

@section('content')
    <main>
        <div class="container">
            <div class="card">
                <div class="logo">
                    <img src="../src/img/Logo Healthy Paws.png" alt="">
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="NamaPengguna" class="form-label">Nama Pengguna</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus id="name"
                            placeholder="Masukan Nama Pengguna">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="Email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" id="email"
                            placeholder="Masukan Email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="inputPassword" class="form-label">Kata Sandi</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                            required autocomplete="new-password" id="password" placeholder="Masukan Kata Sandi">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label  class="form-label">Ulangi Kata Sandi</label>
                        <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"   placeholder="Ulangi Kata Sandi">
                    </div>
                    <div class="mb-4">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat">
                    </div>
                    <div class="mb-4">
                        <label for="no_hp" class="form-label">No Handphone</label>
                        <input type="text" class="form-control" id="no_hp" placeholder="Masukan Nomor Handphone">
                    </div>
                    <div class="mb-4">
                        <label for="image" class="form-label">Upload KTP</label>
                        <input class="form-control" type="file" id="image">
                    </div>
                    <button type="submit" class="btn mt-3 mb-3">Register</button>
                </form>
            </div>
        </div>
    </main>
@endsection
