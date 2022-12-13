@extends('layouts.main')

@section('content')
    <style>
        a {
        text-decoration: none;
      }
        .wrapper {
        margin: 7vh;
      }

      .card {
        border: none;
        transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
        overflow: hidden;
        border-radius: 20px;
        min-height: 300px;
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
      .btn {
        /* background-color: #2a265f; */
        border: 0;
        border-radius: 50px;
        box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
        color: #fff;
        font-size: 16px;
        padding: 12px 25px;
        position: absolute;
        bottom: 30px;
        right: 30px;
        letter-spacing: 1px;
      }
    </style>
    <div class="container">
        <div class="row mt-3">
          <div class="col-2">
              <img src="{{ url('img/logo-mm.png') }}" alt="Logo" style="width: 60%" href="/" />
          </div>

          <div class="col-10">
            <h1 class="warna">Produk Hukum</h1>
                <p class="lead text-white">
                    Kumpulan salinan dokumen digital yang dirilis oleh MM.
                </p>
          </div>
        </div>
    </div>
    
@endsection