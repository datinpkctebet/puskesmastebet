@extends('layout.default')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Info Grafis Penerimaan Pegawai</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ URL('/') }}">Beranda</a></li>
            <li class="current">Penerimaan Pegawai</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Infografis Section -->
    <section id="infografis-penerimaan" class="section">
      <div class="container">
        <div class="row gy-4 align-items-center">
          <div class="col-lg-6" data-aos="fade-up">
            <img src="{{ asset('new-assets/img/klaster-1.png') }}" alt="Infografis Penerimaan Pegawai" class="img-fluid">
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3>Penerimaan Pegawai Tenaga Sanitasi Lingkungan 2026</h3>
            <h5>Link Surat Pengumuman Rekrutmen:</h5>
            <a href="https://www.puskesmastebet.com/rekrutmen" class="btn btn-primary mb-3">Lihat Pengumuman</a>
            <h5>Link Formulir Rekrutmen:</h5>
            <a href="https://www.puskesmastebet.com/rekrutmen" class="btn btn-primary mb-3">Lihat Formulir</a>
            <h5>Link Contoh Surat Pernyataan:</h5>
            <a href="https://www.puskesmastebet.com/rekrutmen" class="btn btn-primary mb-3">Lihat Contoh Surat</a>
          </div>
        </div>
      </div>
    </section>
</main>

@endsection