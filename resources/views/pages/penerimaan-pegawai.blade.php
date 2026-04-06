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
            <img src="{{ asset('new-assets/img/infografis-penerimaan.png') }}" alt="Infografis Penerimaan Pegawai" class="img-fluid">
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3>Penerimaan Pegawai Puskesmas Tebet</h3>
            <ul class="list-group mb-3">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Total Formasi
                <span class="badge bg-primary rounded-pill">20</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Pegawai Diterima Tahun Ini
                <span class="badge bg-success rounded-pill">8</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Sisa Formasi
                <span class="badge bg-warning rounded-pill">12</span>
              </li>
            </ul>
            <h5>Syarat Pendaftaran:</h5>
            <ol>
              <li>Warga Negara Indonesia</li>
              <li>Minimal pendidikan D3/S1 sesuai formasi</li>
              <li>Usia maksimal 35 tahun</li>
              <li>Sehat jasmani dan rohani</li>
            </ol>
            <h5 class="mt-3">Alur Pendaftaran:</h5>
            <ol>
              <li>Mengisi formulir online</li>
              <li>Upload dokumen persyaratan</li>
              <li>Seleksi administrasi</li>
              <li>Wawancara</li>
              <li>Pengumuman hasil</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
</main>

@endsection