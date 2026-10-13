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
            <img src="{{ asset('new-assets/img/penerimaan-pegawai3.jpeg') }}" alt="Infografis Penerimaan Pegawai" class="img-fluid" style="max-width: 70%; height: auto; align-self: center;">
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="mb-3">Penerimaan Tenaga Perawat Terampil dan Bidan Terampil</h3>
            <div class="d-flex flex-column align-items-start">
              <h5>Link Surat Pengumuman Rekrutmen:</h5>
              <a href="https://drive.google.com/drive/folders/1z1iI9mKivBQAJJwnAFk8e-6of3x1ViKy?usp=drive_link" class="cta-btn align-self-start mb-3" target="_blank" rel="noopener">Lihat Pengumuman</a>
            </div>
            <div class="d-flex flex-column align-items-start">
              <h5>Link Formulir Rekrutmen:</h5>
              <a href="https://forms.gle/ckNNH5mD7CTzGRAz5" class="cta-btn align-self-start mb-3" target="_blank" rel="noopener">Lihat Formulir</a>
            </div>
            <div class="d-flex flex-column align-items-start">
              <h5>Link Contoh Surat Pernyataan:</h5>
              <a href="https://drive.google.com/drive/folders/1zvPaB9dtTdfY6aFrOVcJd1NgOVwxj0ya?usp=drive_link" class="cta-btn align-self-start mb-3" target="_blank" rel="noopener">Lihat Contoh Surat</a>
            </div>
            <div class="d-flex flex-column align-items-start">
              <h5>Link Surat Pengumuman Hasil Seleksi:</h5>
              <a href="https://drive.google.com/drive/folders/1aqU983ySJ1RK0YRK7mp5F6IFFi2VA3In?usp=drive_link" class="cta-btn align-self-start mb-3" target="_blank" rel="noopener">Lihat Pengumuman Hasil Seleksi</a>
            </div>
          </div>
        </div>
      </div>
    </section>
</main>

@endsection