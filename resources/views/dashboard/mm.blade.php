@extends('layouts.main')

@section('content')
<style>
    .wrapper {
      margin: 7vh;
    }

    .card {
      border: none;
      transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
      overflow: hidden;
      border-radius: 20px;
      min-height: 450px;
      box-shadow: 0 0 12px 0 rgba(0, 0, 0, 0.2);
    }
    @media (max-width: 768px) {
      .card {
        min-height: 350px;
      }
    }
    @media (max-width: 420px) {
      .card {
        min-height: 300px;
      }
    }
    .card.card-has-bg {
      transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
      background-size: 120%;
      background-repeat: no-repeat;
      background-position: center center;
    }
    .card.card-has-bg:before {
      content: "";
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background: inherit;
      -webkit-filter: grayscale(1);
      -moz-filter: grayscale(100%);
      -ms-filter: grayscale(100%);
      -o-filter: grayscale(100%);
      filter: grayscale(100%);
    }
    .card.card-has-bg:hover {
      transform: scale(0.98);
      box-shadow: 0 0 5px -2px rgba(0, 0, 0, 0.3);
      background-size: 130%;
      transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
    }
    .card.card-has-bg:hover .card-img-overlay {
      transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
      background: #234f6d;
      background: linear-gradient(
        0deg,
        rgba(4, 69, 114, 0.5) 0%,
        #044572 100%
      );
    }
    .card .card-footer {
      background: none;
      border-top: none;
    }
    .card .card-footer .media img {
      border: solid 3px rgba(255, 255, 255, 0.3);
    }
    .card .card-meta {
      color: #26bd75;
    }
    .card .card-body {
      transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
    }
    .card:hover {
      cursor: pointer;
      transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
    }
    .card:hover .card-body {
      margin-top: 30px;
      transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
    }
    .card .card-img-overlay {
      transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
      background: #234f6d;
      background: linear-gradient(
        0deg,
        rgba(35, 79, 109, 0.3785889356) 0%,
        #455f71 100%
      );
    }

    a {
      text-decoration: none;
    }
</style>
    
    <div class="container">
        <div class="row">
        <div class="col d-inline align-content-center">
            <h5 class="warna">
            <img src="img/logo-mm.png" alt="Logo" style="width: 10%" /> MM Poltek
            Nuklir
            </h5>
        </div>
        <div class="col text-end">
            <form action="/logout" method="post">
                @csrf
                <button
                class="btn btn-outline-light mt-2"
                type="submit"
                >
                Logout
                </button>
            </form>
        </div>
        </div>
    </div>
    <section class="wrapper">
        <div class="container">
        <div class="row">
            <div class="col text-center mb-5">
            <h1 class="warna">Pagu</h1>
            <p class="lead text-white">
                Selamat datang, {{ auth()->user()->name }}! Selamat Bekerja!
            </p>
            </div>
        </div>

        <div class="row">
            <!-- Kartu Pertama -->
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div
                class="card text-white card-has-bg click-col"
                style="
                background-image: url('https://source.unsplash.com/600x900/?office');
                "
            >
                <img
                class="card-img d-none"
                src="https://source.unsplash.com/600x900/?office"
                alt="Peraturan Administrator"
                />
                <div class="card-img-overlay d-flex flex-column">
                <div class="card-body">
                    <small class="card-meta mb-2">Administrator</small>
                    <h4 class="card-title mt-0">
                    <a class="text-white" herf="#">Pengaturan Admin</a>
                    </h4>
                    <small
                    >Pengaturan tentang : <br />
                    <ul>
                        <li>Anggota</li>
                        <li>Dokumentasi</li>
                        <li>Data KM</li>
                        <li>Data Sidang</li>
                    </ul>
                    </small>
                </div>
                <!-- <div class="card-footer">
                    <div class="media">
                    <img
                        class="mr-3 rounded-circle"
                        src="https://assets.codepen.io/460692/internal/avatars/users/default.png"
                        alt="Generic placeholder image"
                        style="max-width: 50px"
                    />
                    <div class="media-body">
                        <h6 class="my-0 text-white d-block">Oz Coruhlu</h6>
                        <small>Director of UI/UX</small>
                    </div>
                    </div>
                </div> -->
                </div>
            </div>
            </div>

            <!-- Kartu kedua -->
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div
                class="card text-white card-has-bg click-col"
                style="
                background-image: url('https://source.unsplash.com/600x900/?document');
                "
            >
                <img
                class="card-img d-none"
                src="https://source.unsplash.com/600x900/?document"
                alt="Peraturan Administrator"
                />
                <div class="card-img-overlay d-flex flex-column">
                <div class="card-body">
                    <small class="card-meta mb-2">Dokumentasi</small>
                    <h4 class="card-title mt-0">
                    <a class="text-white" herf="#"
                        >Manajemen Dokumentasi Sidang</a
                    >
                    </h4>
                    <small
                    >Kelola dokumen berkaitan dengan persidangan (BAP, Surat
                    Putusan, Surat Gugatan, Surat Banding)</small
                    >
                </div>
                <!-- <div class="card-footer">
                    <div class="media">
                    <img
                        class="mr-3 rounded-circle"
                        src="https://assets.codepen.io/460692/internal/avatars/users/default.png"
                        alt="Generic placeholder image"
                        style="max-width: 50px"
                    />
                    <div class="media-body">
                        <h6 class="my-0 text-white d-block">Oz Coruhlu</h6>
                        <small>Director of UI/UX</small>
                    </div>
                    </div>
                </div> -->
                </div>
            </div>
            </div>

            <!-- Kartu ketiga -->
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div
                class="card text-white card-has-bg click-col"
                style="
                background-image: url('https://source.unsplash.com/600x900/?document');
                "
            >
                <img
                class="card-img d-none"
                src="https://source.unsplash.com/600x900/?document"
                alt="Peraturan Administrator"
                />
                <div class="card-img-overlay d-flex flex-column">
                <div class="card-body">
                    <small class="card-meta mb-2">Dokumentasi</small>
                    <h4 class="card-title mt-0">
                    <a class="text-white" herf="#">Manajemen Korespondensi</a>
                    </h4>
                    <small>Kelola Persuratan</small>
                </div>
                <!-- <div class="card-footer">
                    <div class="media">
                    <img
                        class="mr-3 rounded-circle"
                        src="https://assets.codepen.io/460692/internal/avatars/users/default.png"
                        alt="Generic placeholder image"
                        style="max-width: 50px"
                    />
                    <div class="media-body">
                        <h6 class="my-0 text-white d-block">Oz Coruhlu</h6>
                        <small>Director of UI/UX</small>
                    </div>
                    </div>
                </div> -->
                </div>
            </div>
            </div>

            <!-- Kartu keempat -->
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div
                class="card text-white card-has-bg click-col"
                style="
                background-image: url('https://source.unsplash.com/600x900/?schedule');
                "
            >
                <img
                class="card-img d-none"
                src="https://source.unsplash.com/600x900/?schedule"
                alt="Peraturan Administrator"
                />
                <div class="card-img-overlay d-flex flex-column">
                <div class="card-body">
                    <small class="card-meta mb-2">Sidang</small>
                    <h4 class="card-title mt-0">
                    <a class="text-white" herf="#">Presensi Persidangan</a>
                    </h4>
                    <small
                    >Presensi Persidangan dalam bentuk scan QR Code dan
                    Form</small
                    >
                </div>
                <!-- <div class="card-footer">
                    <div class="media">
                    <img
                        class="mr-3 rounded-circle"
                        src="https://assets.codepen.io/460692/internal/avatars/users/default.png"
                        alt="Generic placeholder image"
                        style="max-width: 50px"
                    />
                    <div class="media-body">
                        <h6 class="my-0 text-white d-block">Oz Coruhlu</h6>
                        <small>Director of UI/UX</small>
                    </div>
                    </div>
                </div> -->
                </div>
            </div>
            </div>
            <!-- Kartu keempat -->
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div
                class="card text-white card-has-bg click-col"
                style="
                background-image: url('https://source.unsplash.com/600x900/?document');
                "
            >
                <img
                class="card-img d-none"
                src="https://source.unsplash.com/600x900/?document"
                alt="Peraturan Administrator"
                />
                <div class="card-img-overlay d-flex flex-column">
                <div class="card-body">
                    <small class="card-meta mb-2">Sidang</small>
                    <h4 class="card-title mt-0">
                    <a class="text-white" href="manage-sidang.html"
                        >Kelola Agenda Sidang</a
                    >
                    </h4>
                    <small
                    >Mengelola jadwal sidang & Undangan peserta sidang dalam
                    bentuk QR Code</small
                    >
                </div>
                <!-- <div class="card-footer">
                    <div class="media">
                    <img
                        class="mr-3 rounded-circle"
                        src="https://assets.codepen.io/460692/internal/avatars/users/default.png"
                        alt="Generic placeholder image"
                        style="max-width: 50px"
                    />
                    <div class="media-body">
                        <h6 class="my-0 text-white d-block">Oz Coruhlu</h6>
                        <small>Director of UI/UX</small>
                    </div>
                    </div>
                </div> -->
                </div>
            </div>
            </div>
            <!-- Kartu keenam -->
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div
                class="card text-white card-has-bg click-col"
                style="
                background-image: url('https://source.unsplash.com/600x900/?panda');
                "
            >
                <img
                class="card-img d-none"
                src="https://source.unsplash.com/600x900/?panda"
                alt="Peraturan Administrator"
                />
                <div class="card-img-overlay d-flex flex-column">
                <div class="card-body">
                    <small class="card-meta mb-2">Personal</small>
                    <h4 class="card-title mt-0">
                    <a class="text-white" href="manage-sidang.html"
                        >Kelola Akun</a
                    >
                    </h4>
                    <small
                    >Mengelola akun kamu. Gak banyak sih fiturnya, toh yang bisa
                    liat cuma kamu doang hehe</small
                    >
                </div>
                <!-- <div class="card-footer">
                    <div class="media">
                    <img
                        class="mr-3 rounded-circle"
                        src="https://assets.codepen.io/460692/internal/avatars/users/default.png"
                        alt="Generic placeholder image"
                        style="max-width: 50px"
                    />
                    <div class="media-body">
                        <h6 class="my-0 text-white d-block">Oz Coruhlu</h6>
                        <small>Director of UI/UX</small>
                    </div>
                    </div>
                </div> -->
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
@endsection