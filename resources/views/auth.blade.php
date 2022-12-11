@extends('layouts.main')

@section('content')
<link rel="stylesheet" href="{{ url('css/auth.css') }}">
<div class="container">
    <div class="logo">
      <img src="{{ url('img/logo-mm.png') }}" alt="" />
    </div>
</div>

<div class="section">
<div class="container">
    <button class="btn mt-3" onclick="goTo('/'); return false;">
    Kembali
    </button>
    <div class="row full-height justify-content-center">
    <div class="col-12 text-center align-self-center py-5">
        <div class="section pb-5 pt-5 pt-sm-2 text-center">
        <h6 class="mb-0 pb-3 warna">
            <span>Log In </span><span>Daftar</span>
        </h6>
        <input
            class="checkbox"
            type="checkbox"
            id="reg-log"
            name="reg-log"
        />
        <label for="reg-log"></label>
        <div class="card-3d-wrap mx-auto">
            <div class="card-3d-wrapper">
            <div class="card-front">
                <div class="center-wrap">
                <div class="section text-center">
                    <h4 class="mb-4 pb-3 warna">Log In</h4>
                    @error('email')
                    <p class="text-white">{{ $message }}</p>
                    @enderror

                    @if (session()->has('loginError'))
                        <p class="text-white">Login Gagal!</p>
                    @endif
                    <form action="/login" method="post">
                        @csrf
                        <div class="form-group">
                        <input
                            type="email"
                            name="email"
                            class="form-style"
                            placeholder="Email"
                            id="email"
                            autocomplete="off"
                            autofocus
                            required
                            value="{{ old('email') }}"
                        />
                        <i class="input-icon uil uil-at"></i>
                        </div>
                        <div class="form-group mt-2">
                        <input
                            type="password"
                            name="password"
                            class="form-style"
                            placeholder="Your Password"
                            id="password"
                            autocomplete="off"
                            required
                        />
                        <i class="input-icon uil uil-lock-alt"></i>
                        </div>
                        <button type="submit" class="btn mt-4">Login</button>
                    </form>
                </div>
                </div>
            </div>
            <div class="card-back">
                <div class="center-wrap">
                <div class="section text-center">
                    <h4 class="mb-4 pb-3 warna">Registrasi</h4>
                    <form action="/register" method="post">
                        @csrf
                        <div class="form-group">
                        <input
                            type="text"
                            name="name"
                            class="form-style"
                            placeholder="Nama Lengkap"
                            id="nama"
                            autocomplete="off"
                        />
                        <i class="input-icon uil uil-user"></i>
                        </div>
                        <div class="form-group mt-2">
                        <input
                            type="email"
                            name="email"
                            class="form-style"
                            placeholder="Email kamu"
                            id="email"
                            autocomplete="off"
                        />
                        <i class="input-icon uil uil-at"></i>
                        </div>
                        <div class="form-group mt-2">
                        <input
                            type="text"
                            name="tokenkm"
                            class="form-style"
                            placeholder="Token KM/Organisasi"
                            id="tokenkm"
                            autocomplete="off"
                        />
                        <i class="input-icon uil uil-atom"></i>
                        </div>
                        <div class="form-group mt-2">
                        <input
                            type="password"
                            name="password"
                            class="form-style"
                            placeholder="Your Password"
                            id="password"
                            autocomplete="off"
                        />
                        <i class="input-icon uil uil-lock-alt"></i>
                        </div>
                        <button type="submit" class="btn mt-4">Register</button>
                    </form>
                </div>
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