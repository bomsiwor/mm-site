@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-end mt-2">
        <div class="col-6">
        <h5 class="fs-6 warna">MM Poltek Nuklir</h5>
        </div>
        <div class="col-6 d-inline text-end">
            @guest
            <button class="btn btn-outline-light" onclick="goTo('auth'); return false;">Login</button>
            @else
            <button class="btn btn-outline-light" onclick="goTo('dashboard')">Dashboard</button>
            <form action="/logout" method="post">
                @csrf
                <button class="btn btn-outline-light" type="submit">Logout</button>
            </form>
            @endguest
        </div>
    </div>
    </div>
    <div class="d-flex flex-column justify-content-center w-100 h-100">

    <div class="d-flex flex-column justify-content-center align-items-center">
        <img src="{{ url('img/logo-mm.png') }}" alt="Logo" style="width: 20%;">
        <h1 class="m-0 warna">Mahkamah Mahasiswa</h1>
        <h4 class="fs-6 text-white">Digital Portal</h4>
        <div class="d-flex flex-row">
            <div class="col">
            <button class="my-btn mx-1" onclick="goTo('dokumenyudisial'); return false;"><i class="fas fa-solid fa-gavel"></i> Dokumen Yudisial</button>
            </div>
            <div class="col">
            <button class="my-btn mx-1"><i class="fas fa-solid fa-info-circle"></i> Information</button>
            </div>
        </div>
    </div>
    </div>
    </div>

    <div class="action" onclick="actionToggle();">
        <span><i class="fas fa-regular fa-users"></i></span>
        <ul>
        <li><i class="fas fa-regular fa-network-wired"></i> Internal KM</li>
        <li><i class="fas fa-solid fa-flag"></i> Sidang</li>
        </ul>
    </div>

  <script>
    function actionToggle() {
  const action = document.querySelector('.action');
  action.classList.toggle('active')
}
  </script>
<script>
    function goTo(url) {
        console.log("Ditekan");
        location.href = url;
    }
</script>
@endsection