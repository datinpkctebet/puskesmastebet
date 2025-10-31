@extends('layout.default')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Klaster 1</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ URL('/') }}">Beranda</a></li>
            <li class="current">Klaster 1</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="services-list">
              <a href="#" class="active">Manajemen Inti Puskesmas</a>
              <a href="#" class="active">Manajemen Keuangan</a>
              <a href="#" class="active">Manajemen SDM</a>
              <a href="#" class="active">Manajemen Ketatausahaan & Arsip</a>
              <a href="#" class="active">Manajemen Sistem Informasi Digital</a>
              <a href="#" class="active">Manajemen Sapras, Perbekalan Kesehatan & Aset</a>
              <a href="#" class="active">Manajemen Pengadaan Barang Jasa</a>
              <a href="#" class="active">Manajemen Mutu</a>
              <a href="#" class="active">Manajemen Jejaring</a>
              <a href="#" class="active">Manajemen Pemberdayaan Masyarakat</a>
            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('new-assets/img/klaster-1.png') }}" alt="" class="img-fluid services-img">
            <h3>Klaster 1 : Manajemen</h3>
            <p>
              Manajemen yang kuat menjadi dasar keberhasilan layanan kesehatan. Puskesmas Tebet memastikan pengelolaan sumber daya manusia, sarana prasarana, sistem informasi, dan keuangan berjalan efektif serta menyusun regulasi dan laporan kinerja Puskesmas Tebet.
            </p>
          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

</main>

@endsection