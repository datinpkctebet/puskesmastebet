@extends('layout.default')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Klaster 2</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ URL('/') }}">Beranda</a></li>
            <li class="current">Klaster 2</li>
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
              <a href="#" class="active">Pelayanan Kesehatan Ibu Hamil</a>
              <a href="#" class="active">Pelayanan Ibu Bersalin (Ruang Bersalin)</a>
              <a href="#" class="active">Pelayanan Kesehatan Ibu Nifas & Bayi Baru Lahir</a>
              <a href="#" class="active">Pelayanan Kesehatan Anak - Tumbuh Kembang & Cek Kesehatan Gratis (CKG) Anak</a>
              <a href="#" class="active">Pelayanan Kesehatan Anak - MTBS & Pra Sekolah</a>
              <a href="#" class="active">Pelayanan Kesehatan Anak - Kesehatan Usia Sekolah & Remaja</a>
              <a href="#" class="active">Pelayanan Imunisasi</a>
              <a href="#" class="active">Pelayanan Gizi</a>
            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('new-assets/img/klaster-2.png') }}" alt="" class="img-fluid services-img">
            <h3>Klaster 2 : Pelayanan Kesehatan Ibu & Anak</h3>
            <p>
              Pelayanan kesehatan ibu dan anak yang berkualitas menjadi prioritas Puskesmas Tebet. Kami berkomitmen untuk meningkatkan akesehatan ibu dan anak melalui layanan promotif, preventif, kuratif, dan rehabilitatif secara menyeluruh. Kegiatannya mencakup penyusunan perencanaan dan SOP pelayanan, pemantauan wilayah, pencatatan dan pelaporan, hingga evaluasi capaian kinerja untuk menjamin mutu dan kesinambungan layanan bagi ibu hamil, bersalin, nifas, bayi, balita, usia prasekolah, dan remaja.
            </p>
          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

</main>

@endsection