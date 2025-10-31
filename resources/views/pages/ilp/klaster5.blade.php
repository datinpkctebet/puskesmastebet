@extends('layout.default')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Klaster 5</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ URL('/') }}">Beranda</a></li>
            <li class="current">Klaster 5</li>
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
              <a href="#" class="active">Pendaftaran & Rekam Medis</a>
              <a href="#" class="active">Pelayanan Kefarmasian</a>
              <a href="#" class="active">Pelayanan Laboratorium</a>
              <a href="#" class="active">Layanan 24 Jam / Tindakan</a>
              <a href="#" class="active">Pelayanan Kesehatan Gigi dan Mulut</a>
              <a href="#" class="active">Pelayanan MCU & Kesehatan Haji</a>
              <a href="#" class="active">Dukungan Kesehatan Lapangan (Dukeslap)</a>
            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('new-assets/img/klaster-5.png') }}" alt="" class="img-fluid services-img">
            <h3>Klaster 5 : Lintas Klaster</h3>
            <p>
              Klaster ini mendukung integrasi berbagai layanan kesehatan seperti gigi dan mulut, laboratorium, farmasi, serta pelayanan kegawatdaruratan. Berperan penting dalam koordinasi lintas program dan pemantauan kinerja untuk memastikan pelayanan kesehatan yang terpadu, cepat, dan bermutu bagi masyarakat.
            </p>
          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

</main>

@endsection