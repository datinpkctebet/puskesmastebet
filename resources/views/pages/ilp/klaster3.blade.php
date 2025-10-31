@extends('layout.default')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Klaster 3</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ URL('/') }}">Beranda</a></li>
            <li class="current">Klaster 3</li>
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
              <a href="#" class="active">Pelayanan Kesehatan Usia Dewasa</a>
              <a href="#" class="active">Pelayanan PTM</a>
              <a href="#" class="active">Pelayanan Upaya Berhenti Merokok (UBM)</a>
              <a href="#" class="active">Pelayanan Kesehatan Lanjut Usia</a>
              <a href="#" class="active">Pelayanan KB & Pemeriksaan IVA</a>
              <a href="#" class="active">Pelayanan Calon Pengantin & Kesehatan Reproduksi</a>
              <a href="#" class="active">Pelayanan Kesehatan Jiwa & NAPZA (MENTARI)</a>
              <a href="#" class="active">Pelayanan Methadon</a>
              <a href="#" class="active">Pelayanan KtPA & Psikologi (ALAMANDA)</a>
              <a href="#" class="active">Pelayanan Kesehatan Kerja & Olahraga</a>
              <a href="#" class="active">Pelayanan Gizi</a>
              <a href="#" class="active">Cek Kesehatan Gratis (CKG) Usia Dewasa dan Lanjut Usia</a>
              <a href="#" class="active">Pelayanan Kesehatan Tradisional</a>
              <a href="#" class="active">Perkesmas</a>
            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('new-assets/img/klaster-3.png') }}" alt="" class="img-fluid services-img">
            <h3>Klaster 3 : Usia Dewasa dan Lansia</h3>
            <p>
              Klaster ini memberikan pelayanan kesehatan menyeluruh bagi masyarakat usia dewasa dan lanjut usia melalui pendekatan promotif, preventif, kuratif, rehabilitatif, dan paliatif. Kegiatan meliputi perencanaan, pemantauan wilayah, pencatatan pelayanan, serta evaluasi kinerja untuk menjaga kesehatan, kemandirian, dan kualitas hidup lansia secara berkelanjutan.
            </p>
          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

</main>

@endsection