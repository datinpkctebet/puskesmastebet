@extends('layout.default')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Klaster 4</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ URL('/') }}">Beranda</a></li>
            <li class="current">Klaster 4</li>
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
              <a href="#" class="active">Kesehatan Lingkungan</a>
              <a href="#" class="active">Surveilans</a>
              <a href="#" class="active">P2PTVZ</a>
              <a href="#" class="active">HISP (Hepatitis, Infeksi Saluran Pencernaan)</a>
              <a href="#" class="active">Pelayanan HIV & IMS (SAHABAT)</a>
              <a href="#" class="active">Pelayanan DOTS - Kusta</a>
            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('new-assets/img/klaster-4.png') }}" alt="" class="img-fluid services-img">
            <h3>Klaster 4 : Penanggulangan Penyakit Menular</h3>
            <p>
              Klaster ini berperan dalam mencegah dan menanggulangi penyakit menular melalui upaya promotif, preventif, deteksi dini, serta respon cepat terhadap potensi kejadian luar biasa (KLB). Kegiatan mencakup pemantauan wilayah, pencatatan dan pelaporan, serta koordinasi lintas sektor untuk menjaga masyarakat tetap sehat dan terlindungi dari penyakit menular.
            </p>
          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

</main>

@endsection