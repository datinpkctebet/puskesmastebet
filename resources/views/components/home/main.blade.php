<main class="main">

    <!-- Main Section -->
    <section id="main" class="hero section mb-5">

      <div class="swiper init-swiper">
        <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": "auto",
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            }
          }
        </script>
        <div class="swiper-wrapper main">
          <div class="swiper-slide">
            <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
              <img src="{{ asset('new-assets/img/daftar-online-jaksehat.png') }}" class="img-fluid animated" alt="">
              <h1>Pendaftaran Online <span>Puskesmas Tebet</span></h1>
              <div class="d-flex">
                <a href="https://play.google.com/store/apps/details?id=com.dinkes.jaksehat" class="btn-watch-video d-flex align-items-center" target="_blank" rel="noopener noreferrer"><i class="bi bi-google-play"></i><span>Play Store</span></a>
                <a href="https://jaksehat.jakarta.go.id/" class="btn-watch-video d-flex align-items-center" target="_blank" rel="noopener noreferrer"><i class="bi bi-browser-chrome"></i><span>Browser</span></a>
                <!-- <a href="#tentang" class="btn-get-started scrollto">Tentang Kami</a> -->
                <a href="https://youtu.be/ivm1RKNqNoM?si=WAU3i7p4ABSvW_n_" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Alur Pendaftaran Pasien</span></a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
              <div class="row gy-4 mb-5">
                <div class="col-lg-4">
                  <div class="main-item featured">
                    <img src="{{ asset('new-assets/img/srk-12.png') }}" class="img-fluid animated" style="max-width: 100%; height: auto;" alt="">
                    <div class="main-info">
                      <a href="{{ asset('new-assets/img/srk-12.png') }}" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="main-item featured">
                    <img src="{{ asset('new-assets/img/srk-22.png') }}" class="img-fluid animated" style="max-width: 100%; height: auto;" alt="">
                    <div class="main-info">
                      <a href="{{ asset('new-assets/img/srk-22.png') }}" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="main-item featured">
                    <img src="{{ asset('new-assets/img/srk-32.png') }}" class="img-fluid animated" style="max-width: 100%; height: auto;" alt="">
                    <div class="main-info">
                      <a href="{{ asset('new-assets/img/srk-32.png') }}" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <h1>Skrining <span>Riwayat Kesehatan</span></h1>
              <div class="d-flex">
                <a href="https://play.google.com/store/apps/details?id=app.bpjs.mobile" class="btn-watch-video d-flex align-items-center" target="_blank" rel="noopener noreferrer"><i class="bi bi-google-play"></i><span>Play Store</span></a>
                <a href="https://webskrining.bpjs-kesehatan.go.id/skrining" class="btn-watch-video d-flex align-items-center" target="_blank" rel="noopener noreferrer"><i class="bi bi-browser-chrome"></i><span>Browser</span></a>
                <!-- <a href="#tentang" class="btn-get-started scrollto">Tentang Kami</a> -->
                <a href="https://www.youtube.com/watch?v=w8q6KWrduA0" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Tutorial Pengisian SRK</span></a>
              </div>
            </div>
          </div>
          
        </div>
        <div class="swiper-pagination mt-5"></div>
      </div>

    </section><!-- /Main Section -->

    <!-- Tentang Section -->
    <section id="tentang" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Tentang Kami</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up">

        <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-5">
            <div class="about-img">
              <img src="{{ asset('new-assets/img/about-pkc.jpg') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-7">
            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li><a class="nav-link active" data-bs-toggle="pill" href="#about-tab1">Visi & Misi</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#about-tab2">Tata Nilai</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#about-tab3">Kebijakan Mutu/Janji Layanan</a></li>
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">

              <div class="tab-pane fade show active" id="about-tab1">

                <h4 class="fst-italic">Visi</h4>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <p>Puskesmas Terbaik Menuju Masyarakat Tebet Sehat dan Mandiri</p>
                </div>

                <h4 class="fst-italic mt-5">Misi</h4>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <p>Menjamin tersedianya SDM yang berkualitas</p>
                </div>
                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <p>Menyelenggarakan pelayanan kesehatan prima berbasis pada kepuasan pelanggan dan keselamatan pasien</p>
                </div>
                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <p>Menjamin ketersediaan sarana prasarana bermutu dan pemanfaatan teknologi</p>
                </div>
                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <p>Membangun hubungan kerja yang sinergis dan harmonis</p>
                </div>
                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <p>Meningkatkan kerjasama berkesinambungan dengan lintas sektor, pihak swasta dan masyarakat dalam membangun masyarakat sehat</p>
                </div>

              </div><!-- End Tab 1 Content -->

              <div class="tab-pane fade" id="about-tab2">

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>INTEGRITAS</h4>
                </div>
                <p>Jujur dan konsisten dalam menghasilkan suatu laporan yang bermutu dan bertanggung jawab dalam melaksanakan tugas</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>PROFESIONAL</h4>
                </div>
                <p>Petugas bekerja sesuai dengan kompentensi dan bekerja sesuai dengan SOP</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>PEDULI</h4>
                </div>
                <p>Peka dan responsif terhadap kebutuhan masyarakat/pelanggan dan proaktif terhadap capaian kinerja yang belum tercapai</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>KERJASAMA</h4>
                </div>
                <p>Bekerja harmonis dengan lintas program/unit pelayanan, lintas sektor dan masyarakat/pelanggan</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>VISIONER</h4>
                </div>
                <p>Cepat tanggap dalam kebutuhan masyarakat/pelanggan dan memberikan pelayanan lebih dari kebutuhan masyarakat/pelanggan</p>

              </div><!-- End Tab 2 Content -->

              <div class="tab-pane fade" id="about-tab3">

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Memberikan Pelayanan Kesehatan Bermutu Sesuai Kompetensi, dengan Berbasis Teknologi dan Berfokus pada Kepuasan Pelanggan serta Keselamatan Pasien</h4>
                </div>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>RAMAH, CEPAT, TERPERCAYA</h4>
                </div>

              </div><!-- End Tab 3 Content -->

            </div>

          </div>

        </div>

      </div>

    </section><!-- /Tentang Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-xl-3 col-md-3 col-6 client-logo">
            <img src="{{ asset('new-assets/img/clients/berakhlak.png') }}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-3 col-md-3 col-6 client-logo">
            <img src="{{ asset('new-assets/img/clients/kemenkes.png') }}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-3 col-md-3 col-6 client-logo">
            <img src="{{ asset('new-assets/img/clients/dinkes-dki.png') }}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-3 col-md-3 col-6 client-logo">
            <img src="{{ asset('new-assets/img/clients/bpjs-kesehatan.png') }}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section mb-5">

      <div class="container" data-aos="zoom-out">

        <div class="row g-5">

          <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
            <h3>Anda dapat melihat Rekapitulasi Umpan Balik dari kami disini</h3>
            <p> Umpan Balik merupakan bentuk respon, tanggapan, atau jawaban atas pesan yang dikirimkan oleh Pengguna Layanan Puskesmas kepada Puskesmas Tebet</p>
            <a class="cta-btn align-self-start" href="https://docs.google.com/spreadsheets/d/1M0jXFagMscQsCmYPrPC7ma89V6pl7Q9e2QmJFwRAkxI/edit?usp=drivesdk" target="_blank" rel="noopener">Klik disini</a>
          </div>

          <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center umpan-balik">
            <div class="img">
              <img src="{{ asset('new-assets/img/umpan-balik.png') }}" alt="" class="img-fluid animated">
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Call To Action Section -->

    <!-- Onfocus Section -->
    <section id="onfocus" class="onfocus section dark-background">

      <div class="container-fluid p-0" data-aos="fade-up">

        <div class="row g-0">
          <div class="col-lg-6 video-play position-relative">
            <a href="https://youtu.be/DPBJgeC2gD4?si=vVoX9u1EQhlP_dWz" class="glightbox pulsating-play-btn"></a>
          </div>
          <div class="col-lg-6">
            <div class="content d-flex flex-column justify-content-center h-100">
              <h3>Puskesmas Tebet</h3>
              <p class="fst-italic">
                Pusat Kesehatan Masyarakat (PUSKESMAS) adalah fasilitas pelayanan kesehatan yang menyelenggarakan upaya kesehatan masyarakat dan upaya kesehatan perorangan tingkat pertama, dengan lebih mengutamakan upaya promotif dan preventif, untuk mencapai derajat kesehatan masyarakat yang setinggi-tingginya di wilayah kerjanya. Puskesmas Tebet merupakan unit pelaksana teknis Dinas Kesehatan.
              </p>
              <ul>
                <li><i class="bi bi-check-circle"></i> Ramah</li>
                <li><i class="bi bi-check-circle"></i> Cepat</li>
                <li><i class="bi bi-check-circle"></i> Terpercaya</li>
              </ul>
              <a href="http://www.youtube.com/@puskesmastebet" class="read-more align-self-start" target="_blank" rel="noopener"><span>Baca Selanjutnya</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Onfocus Section -->

    <!-- Features Section -->
    <section id="jaringan" class="features section mt-5">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Jaringan</h2>
      </div><!-- End Section Title -->

      <ul class="nav nav-tabs row gy-4 d-flex" style="justify-content: center;" role="tablist" data-aos="fade-up" data-aos-delay="100">

      
        <li class="nav-item col-6 col-md-4 col-lg-1">
          <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-5">
            <img src="{{ asset('new-assets/img/jaringan/1-mendal.png') }}" class="img-fluid" style="max-width: 120%; height: auto;" alt="">
          </a>
        </li><!-- End Tab 1 Nav -->

        <li class="nav-item col-6 col-md-4 col-lg-1">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-1">
            <img src="{{ asset('new-assets/img/jaringan/2-bukdur.png') }}" class="img-fluid" style="max-width: 120%; height: auto;" alt="">
          </a>
        </li><!-- End Tab 2 Nav -->

        <li class="nav-item col-6 col-md-4 col-lg-1">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
            <img src="{{ asset('new-assets/img/jaringan/3-bonbar.png') }}" class="img-fluid" style="max-width: 120%; height: auto;" alt="">
          </a>
        </li><!-- End Tab 3 Nav -->

        <li class="nav-item col-6 col-md-4 col-lg-1">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
            <img src="{{ asset('new-assets/img/jaringan/4-mgr.png') }}" class="img-fluid" style="max-width: 120%; height: auto;" alt="">
          </a>
        </li><!-- End Tab 4 Nav -->

        <li class="nav-item col-6 col-md-4 col-lg-1">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
            <img src="{{ asset('new-assets/img/jaringan/5-mangsel.png') }}" class="img-fluid" style="max-width: 120%; height: auto;" alt="">
          </a>
        </li><!-- End Tab 5 Nav -->

        <li class="nav-item col-6 col-md-4 col-lg-1">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-6">
            <img src="{{ asset('new-assets/img/jaringan/6-tebar.png') }}" class="img-fluid" style="max-width: 120%; height: auto;" alt="">
          </a>
        </li><!-- End Tab 6 Nav -->

        <li class="nav-item col-6 col-md-4 col-lg-1">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-7">
            <img src="{{ asset('new-assets/img/jaringan/7-tetim.png') }}" class="img-fluid" style="max-width: 120%; height: auto;" alt="">
          </a>
        </li><!-- End Tab 7 Nav -->

      </ul>

      <div class="container" data-aos="fade-up">

        <div class="tab-content">

          <div class="tab-pane fade" id="features-tab-1">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                <h3>Puskesmas Pembantu Bukit Duri</h3>
                <p>
                  <strong style="font-size: 18px;">Pelayanan : </strong><br>
                  1. Pelayanan Kesehatan Ibu dan Anak (anc, usg, nifas, kontrol bayi, imunisasi, gizi, kesehatan balita, anak prasekolah, anak sekolah dan remaja) <br>
                  2. Pelayanan Kesehatan Usia Dewasa dan Lansia (PTM, Prolanis) <br>
                  3. Penanggulangan penyakit menular (TB), Kesehatan Lingkungan <br>
                  4. Surat Keterangan Berbadan Sehat <br>
                  5. Surat Keterangan Tidak Buta Warna
                </p>
                <ul>
                  <li><i class="bi bi-clock-fill"></i> Senin - Jumat (Hari Kerja) : 07.30 - 15.00 & Sabtu : 08.00 - 12.00</li>
                  <li><a href="https://maps.app.goo.gl/x3iAhre94iCuArMW8" target="_blank" rel="noopener"><i class="bi bi-geo-alt-fill"></i> Gg. Tanjakan DLM XV No.8 4, RT.4/RW.8, Bukit Duri, Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12840</a></li>
                </ul>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('images/bukitduri.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content 1 -->

          <div class="tab-pane fade" id="features-tab-2">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1">
                <h3>Puskesmas Pembantu Kebon Baru</h3>
                <p>
                  <strong style="font-size: 18px;">Pelayanan : </strong><br>
                  1. Pelayanan Kesehatan Ibu dan Anak (anc, usg, nifas, kontrol bayi, imunisasi, gizi, kesehatan balita, anak prasekolah, anak sekolah dan remaja) <br>
                  2. Pelayanan Kesehatan Usia Dewasa dan Lansia (PTM, Prolanis) <br>
                  3. Penanggulangan penyakit menular (TB), Kesehatan Lingkungan <br>
                  4. Surat Keterangan Berbadan Sehat <br>
                  5. Surat Keterangan Tidak Buta Warna
                </p>
                <ul>
                  <li><i class="bi bi-clock-fill"></i> Senin - Jumat (Hari Kerja) : 07.30 - 15.00 & Sabtu : 08.00 - 12.00</li>
                  <li><a href="https://maps.app.goo.gl/29X5y6esuivCJz4k9" target="_blank" rel="noopener"><i class="bi bi-geo-alt-fill"></i> Jl. Kb. Baru Utara - D,RT.1/RW.7, Kb. Baru, Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12830</a></li>
                </ul>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center">
                <img src="{{ asset('images/bonbar.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content 2 -->

          <div class="tab-pane fade" id="features-tab-3">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1">
                <h3>Puskesmas Pembantu Manggarai</h3>
                <p>
                  <strong style="font-size: 18px;">Pelayanan : </strong><br>
                  1. Pelayanan Kesehatan Ibu dan Anak (anc, usg, nifas, kontrol bayi, imunisasi, gizi, kesehatan balita, anak prasekolah, anak sekolah dan remaja) <br>
                  2. Pelayanan Kesehatan Usia Dewasa dan Lansia (PTM, Prolanis) <br>
                  3. Penanggulangan penyakit menular (TB), Kesehatan Lingkungan <br>
                  4. Surat Keterangan Berbadan Sehat <br>
                  5. Surat Keterangan Tidak Buta Warna
                </p>
                <ul>
                  <li><i class="bi bi-clock-fill"></i> Senin - Jumat (Hari Kerja) : 07.30 - 15.00 & Sabtu : 08.00 - 12.00</li>
                  <li><a href="https://maps.app.goo.gl/TbiwaiiVmZUmEZeM9" target="_blank" rel="noopener"><i class="bi bi-geo-alt-fill"></i> Jl. Swadaya 1 No.1, RT.8/RW.7, Manggarai, Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12850</a></li>
                </ul>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center">
                <img src="{{ asset('images/manggarai.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content 3 -->

          <div class="tab-pane fade" id="features-tab-4">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1">
                <h3>Puskesmas Pembantu Manggarai Selatan</h3>
                <p>
                  <strong style="font-size: 18px;">Pelayanan : </strong><br>
                  1. Pelayanan Kesehatan Ibu dan Anak (anc, usg, nifas, kontrol bayi, imunisasi, gizi, kesehatan balita, anak prasekolah, anak sekolah dan remaja) <br>
                  2. Pelayanan Kesehatan Usia Dewasa dan Lansia (PTM, Prolanis) <br>
                  3. Penanggulangan penyakit menular (TB), Kesehatan Lingkungan <br>
                  4. Surat Keterangan Berbadan Sehat <br>
                  5. Surat Keterangan Tidak Buta Warna
                </p>
                <ul>
                  <li><i class="bi bi-clock-fill"></i> Senin - Jumat (Hari Kerja) : 07.30 - 15.00 & Sabtu : 08.00 - 12.00</li>
                  <li><a href="https://maps.app.goo.gl/i75RY9acygGDX6Y68" target="_blank" rel="noopener"><i class="bi bi-geo-alt-fill"></i> Jl. Doktor Saharjo RT.04/RW.07, Manggarai Selatan, Tebet, Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12860</a></li>
                </ul>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center">
                <img src="{{ asset('images/mangsel.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content 4 -->

          <div class="tab-pane fade active show" id="features-tab-5">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1">
                <h3>Puskesmas Pembantu Menteng Dalam</h3>
                <p>
                  <strong style="font-size: 18px;">Pelayanan : </strong><br>
                  1. Pelayanan Kesehatan Ibu dan Anak (anc, usg, nifas, kontrol bayi, imunisasi, gizi, kesehatan balita, anak prasekolah, anak sekolah dan remaja) <br>
                  2. Pelayanan Kesehatan Usia Dewasa dan Lansia (PTM, Prolanis) <br>
                  3. Penanggulangan penyakit menular (TB), Kesehatan Lingkungan <br>
                  4. Surat Keterangan Berbadan Sehat <br>
                  5. Surat Keterangan Tidak Buta Warna
                </p>
                <ul>
                  <li><i class="bi bi-clock-fill"></i> Senin - Jumat (Hari Kerja) : 07.30 - 15.00 & Sabtu : 08.00 - 12.00</li>
                  <li><a href="https://maps.app.goo.gl/E5qGokNnTznUonbZ6" target="_blank" rel="noopener"><i class="bi bi-geo-alt-fill"></i> Jl. Pal Batu 3 No.10, RT.11/RW.11, Menteng Dalam, Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12870</a></li>
                </ul>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center">
                <img src="{{ asset('images/mendal.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content 5 -->

          <div class="tab-pane fade" id="features-tab-6">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1">
                <h3>Puskesmas Pembantu Tebet Barat</h3>
                <p>
                  <strong style="font-size: 18px;">Pelayanan : </strong><br>
                  1. Pelayanan Kesehatan Ibu dan Anak (anc, usg, nifas, kontrol bayi, imunisasi, gizi, kesehatan balita, anak prasekolah, anak sekolah dan remaja) <br>
                  2. Pelayanan Kesehatan Usia Dewasa dan Lansia (PTM, Prolanis) <br>
                  3. Penanggulangan penyakit menular (TB), Kesehatan Lingkungan <br>
                  4. Surat Keterangan Berbadan Sehat <br>
                  5. Surat Keterangan Tidak Buta Warna
                </p>
                <ul>
                  <li><i class="bi bi-clock-fill"></i> Senin - Jumat (Hari Kerja) : 07.30 - 15.00 & Sabtu : 08.00 - 12.00</li>
                  <li><a href="https://maps.app.goo.gl/VN8Mv2C2xAGsytdHA" target="_blank" rel="noopener"><i class="bi bi-geo-alt-fill"></i> Jl. Tebet Barat IX No.64, RT.6/RW.4, Kuningan, Tebet Bar., Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12810</a></li>
                </ul>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center">
                <img src="{{ asset('images/tebar.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content 6 -->

          <div class="tab-pane fade" id="features-tab-7">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1">
                <h3>Puskesmas Pembantu Tebet Timur</h3>
                <p>
                  <strong style="font-size: 18px;">Pelayanan : </strong><br>
                  1. Pelayanan Kesehatan Ibu dan Anak (anc, usg, nifas, kontrol bayi, imunisasi, gizi, kesehatan balita, anak prasekolah, anak sekolah dan remaja) <br>
                  2. Pelayanan Kesehatan Usia Dewasa dan Lansia (PTM, Prolanis) <br>
                  3. Penanggulangan penyakit menular (TB), Kesehatan Lingkungan <br>
                  4. Surat Keterangan Berbadan Sehat <br>
                  5. Surat Keterangan Tidak Buta Warna
                </p>
                <ul>
                  <li><i class="bi bi-clock-fill"></i> Senin - Jumat (Hari Kerja) : 07.30 - 15.00 & Sabtu : 08.00 - 12.00</li>
                  <li><a href="https://maps.app.goo.gl/w1LVAdrzPBrMM6D89" target="_blank" rel="noopener"><i class="bi bi-geo-alt-fill"></i> Jl. Tebet Timur II No.6, RT.6/RW.5, Tebet Tim., Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12820</a></li>
                </ul>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center">
                <img src="{{ asset('images/tebtim.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content 7 -->

        </div>

      </div>

    </section><!-- /Features Section -->

    <!-- Pelayanan Section -->
    <section id="pelayanan" class="pelayanan section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Informasi Pelayanan</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="pelayanan-item featured">
              <img src="{{ asset('new-assets/img/hak-kewajiban.png') }}" alt="">
              <div class="pelayanan-info">
                <a href="{{ asset('new-assets/img/hak-kewajiban.png') }}" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>
          </div><!-- End Pelayanan Item -->

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="pelayanan-item featured">
              <img src="{{ asset('new-assets/img/jadwal-pelayanan.png') }}" alt="">
              <div class="pelayanan-info">
                <a href="{{ asset('new-assets/img/jadwal-pelayanan.png') }}" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>
          </div><!-- End Pelayanan Item -->

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="600">
            <div class="pelayanan-item featured">
              <img src="{{ asset('new-assets/img/jadwal-pelayanan.png') }}" alt="">
              <div class="pelayanan-info">
                <a href="{{ asset('new-assets/img/jadwal-pelayanan.png') }}" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>
          </div><!-- End Pelayanan Item -->

        </div>

      </div>

    </section><!-- /Pelayanan Section -->

    <!-- Pelayanan Info Grafis Section -->
    <section id="info-grafis" class="info-grafis section dark-background">

      <img src="{{ asset('new-assets/img/onfocus-video-bg-pkc.jpeg') }}" class="info-grafis-bg" alt="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 3000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="info-grafis-item">
                <a href="{{ asset('new-assets/img/info-grafis/prolanis.png') }}" class="glightbox preview-link">
                  <img src="{{ asset('new-assets/img/info-grafis/prolanis.png') }}" class="img-fluid animated" style="max-width: 30%; height: auto;" alt="">
                </a>
              </div>
            </div><!-- End Info Grafis Prolanis item -->

            <div class="swiper-slide">
              <div class="info-grafis-item">
                <a href="{{ asset('new-assets/img/info-grafis/144-penyakit-tidak-boleh-dirujuk.png') }}" class="glightbox preview-link">
                  <img src="{{ asset('new-assets/img/info-grafis/144-penyakit-tidak-boleh-dirujuk.png') }}" class="img-fluid animated" style="max-width: 30%; height: auto;" alt="">
                </a>
              </div>
            </div><!-- End Info Grafis 144 Penyakit item -->

            <div class="swiper-slide">
              <div class="info-grafis-item">
                <a href="{{ asset('new-assets/img/info-grafis/buta-warna.png') }}" class="glightbox preview-link">
                  <img src="{{ asset('new-assets/img/info-grafis/buta-warna.png') }}" class="img-fluid animated" style="max-width: 30%; height: auto;" alt="">
                </a>
              </div>
            </div><!-- End Info Grafis Buta Warna item -->

            <div class="swiper-slide">
              <div class="info-grafis-item">
                <a href="{{ asset('new-assets/img/info-grafis/catin.png') }}" class="glightbox preview-link">
                  <img src="{{ asset('new-assets/img/info-grafis/catin.png') }}" class="img-fluid animated" style="max-width: 30%; height: auto;" alt="">
                </a>
              </div>
            </div><!-- End Info Grafis Catin item -->

            <div class="swiper-slide">
              <div class="info-grafis-item">
                <a href="{{ asset('new-assets/img/info-grafis/daftar-rs-rujukan.png') }}" class="glightbox preview-link">
                  <img src="{{ asset('new-assets/img/info-grafis/daftar-rs-rujukan.png') }}" class="img-fluid animated" style="max-width: 30%; height: auto;" alt="">
                </a>
              </div>
            </div><!-- End Info Grafis Daftar RS Rujukan item -->

            <div class="swiper-slide">
              <div class="info-grafis-item">
                <a href="{{ asset('new-assets/img/info-grafis/dance-pregnant.png') }}" class="glightbox preview-link">
                  <img src="{{ asset('new-assets/img/info-grafis/dance-pregnant.png') }}" class="img-fluid animated" style="max-width: 30%; height: auto;" alt="">
                </a>
              </div>
            </div><!-- End Info Grafis Dance Pregnant item -->

            <div class="swiper-slide">
              <div class="info-grafis-item">
                <a href="{{ asset('new-assets/img/info-grafis/jadwal-gigi-pustu.png') }}" class="glightbox preview-link">
                  <img src="{{ asset('new-assets/img/info-grafis/jadwal-gigi-pustu.png') }}" class="img-fluid animated" style="max-width: 30%; height: auto;" alt="">
                </a>
              </div>
            </div><!-- End Info Grafis Jadwal Gigi Pustu item -->

            <div class="swiper-slide">
              <div class="info-grafis-item">
                <a href="{{ asset('new-assets/img/info-grafis/jadwal-imunisasi.png') }}" class="glightbox preview-link">
                  <img src="{{ asset('new-assets/img/info-grafis/jadwal-imunisasi.png') }}" class="img-fluid animated" style="max-width: 30%; height: auto;" alt="">
                </a>
              </div>
            </div><!-- End Info Grafis Jadwal Imunisasi item -->

            <div class="swiper-slide">
              <div class="info-grafis-item">
                <a href="{{ asset('new-assets/img/info-grafis/mcu.png') }}" class="glightbox preview-link">
                  <img src="{{ asset('new-assets/img/info-grafis/mcu.png') }}" class="img-fluid animated" style="max-width: 30%; height: auto;" alt="">
                </a>
              </div>
            </div><!-- End Info Grafis MCU item -->

            <div class="swiper-slide">
              <div class="info-grafis-item">
                <a href="{{ asset('new-assets/img/info-grafis/penyakit-tidak-ditanggung-bpjs.png') }}" class="glightbox preview-link">
                  <img src="{{ asset('new-assets/img/info-grafis/penyakit-tidak-ditanggung-bpjs.png') }}" class="img-fluid animated" style="max-width: 30%; height: auto;" alt="">
                </a>
              </div>
            </div><!-- End Info Grafis Penyakit Tidak Ditanggung BPJS item -->

            <div class="swiper-slide">
              <div class="info-grafis-item">
                <a href="{{ asset('new-assets/img/info-grafis/pijat-bayi.png') }}" class="glightbox preview-link">
                  <img src="{{ asset('new-assets/img/info-grafis/pijat-bayi.png') }}" class="img-fluid animated" style="max-width: 30%; height: auto;" alt="">
                </a>
              </div>
            </div><!-- End Info Grafis Pijat Bayi item -->

            <div class="swiper-slide">
              <div class="info-grafis-item">
                <a href="{{ asset('new-assets/img/info-grafis/psikolog.png') }}" class="glightbox preview-link">
                  <img src="{{ asset('new-assets/img/info-grafis/psikolog.png') }}" class="img-fluid animated" style="max-width: 30%; height: auto;" alt="">
                </a>
              </div>
            </div><!-- End Info Grafis Psikolog item -->

            <div class="swiper-slide">
              <div class="info-grafis-item">
                <a href="{{ asset('new-assets/img/info-grafis/senam-hamil.png') }}" class="glightbox preview-link">
                  <img src="{{ asset('new-assets/img/info-grafis/senam-hamil.png') }}" class="img-fluid animated" style="max-width: 30%; height: auto;" alt="">
                </a>
              </div>
            </div><!-- End Info Grafis Senam Hamil item -->

            <div class="swiper-slide">
              <div class="info-grafis-item">
                <a href="{{ asset('new-assets/img/info-grafis/skbn.png') }}" class="glightbox preview-link">
                  <img src="{{ asset('new-assets/img/info-grafis/skbn.png') }}" class="img-fluid animated" style="max-width: 30%; height: auto;" alt="">
                </a>
              </div>
            </div><!-- End Info Grafis SKBN item -->

            <div class="swiper-slide">
              <div class="info-grafis-item">
                <a href="{{ asset('new-assets/img/info-grafis/suket-sehat.png') }}" class="glightbox preview-link">
                  <img src="{{ asset('new-assets/img/info-grafis/suket-sehat.png') }}" class="img-fluid animated" style="max-width: 30%; height: auto;" alt="">
                </a>
              </div>
            </div><!-- End Info Grafis Surat Keterangan Sehat item -->

            <div class="swiper-slide">
              <div class="info-grafis-item">
                <a href="{{ asset('new-assets/img/info-grafis/tarif-gigi.png') }}" class="glightbox preview-link">
                  <img src="{{ asset('new-assets/img/info-grafis/tarif-gigi.png') }}" class="img-fluid animated" style="max-width: 30%; height: auto;" alt="">
                </a>
              </div>
            </div><!-- End Info Grafis Tarif Gigi item -->

            <div class="swiper-slide">
              <div class="info-grafis-item">
                <a href="{{ asset('new-assets/img/info-grafis/tumbuhkembang.png') }}" class="glightbox preview-link">
                  <img src="{{ asset('new-assets/img/info-grafis/tumbuhkembang.png') }}" class="img-fluid animated" style="max-width: 30%; height: auto;" alt="">
                </a>
              </div>
            </div><!-- End Info Grafis Tumbuh Kembang item -->

            <div class="swiper-slide">
              <div class="info-grafis-item">
                <a href="{{ asset('new-assets/img/info-grafis/yankestrad.png') }}" class="glightbox preview-link">
                  <img src="{{ asset('new-assets/img/info-grafis/yankestrad.png') }}" class="img-fluid animated" style="max-width: 30%; height: auto;" alt="">
                </a>
              </div>
            </div><!-- End Info Grafis Yankestrad item -->

            <div class="swiper-slide">
              <div class="info-grafis-item">
                <a href="{{ asset('new-assets/img/info-grafis/yoga-hamil.png') }}" class="glightbox preview-link">
                  <img src="{{ asset('new-assets/img/info-grafis/yoga-hamil.png') }}" class="img-fluid animated" style="max-width: 30%; height: auto;" alt="">
                </a>
              </div>
            </div><!-- End Info Grafis Yoga Hamil item -->

          </div>
          <div class="swiper-pagination mt-5"></div>
        </div>

      </div>

    </section><!-- /Pelayanan Info Grafis Section -->

    <!-- ILP Section -->
    <section id="ilp" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>ILP (Integrasi Layanan Primer)</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="{{ asset('new-assets/img/klaster-1.png') }}" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-gear-fill"></i>
                </div>
                <a href="{{ URL('/ilp/klaster1') }}" class="stretched-link">
                  <h3 style="font-size: 1.2rem;">Klaster 1 Manajemen</h3>
                </a>
                <p>Klaster ini berfokus pada pengelolaan seluruh aspek penunjang layanan kesehatan agar berjalan efektif dan efisien di Puskesmas Tebet.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-item">
              <div class="img">
                <img src="{{ asset('new-assets/img/klaster-2.png') }}" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-heart-fill"></i>
                </div>
                <a href="{{ URL('/ilp/klaster2') }}" class="stretched-link">
                  <h3 style="font-size: 1.2rem;">Klaster 2 Ibu dan Anak</h3>
                </a>
                <p>Klaster ini berfokus pada peningkatan kesehatan ibu dan anak sejak masa kehamilan hingga remaja.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="service-item">
              <div class="img">
                <img src="{{ asset('new-assets/img/klaster-3.png') }}" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-person-lines-fill"></i>
                </div>
                <a href="{{ URL('/ilp/klaster3') }}" class="stretched-link">
                  <h3 style="font-size: 1.2rem;">Klaster 3 Usia Dewasa dan Lansia</h3>
                </a>
                <p>Klaster ini bertujuan untuk menjaga kesehatan, mencegah penyakit kronis, serta meningkatkan kualitas hidup masyarakat usia dewasa dan lansia agar tetap sehat, aktif, dan mandiri.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-2 col-md-6">
          </div><!-- End Service Item -->
          
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
            <div class="service-item">
              <div class="img">
                <img src="{{ asset('new-assets/img/klaster-4.png') }}" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-shield-fill-plus"></i>
                </div>
                <a href="{{ URL('/ilp/klaster4') }}" class="stretched-link">
                  <h3 style="font-size: 1.2rem;">Klaster 4 Penanggulangan Penyakit Menular</h3>
                </a>
                <p>Klaster ini berperan dalam pencegahan, penemuan dini, serta penanganan penyakit menular seperti tuberkulosis, HIV/AIDS, malaria, dan penyakit menular lainnya.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
            <div class="service-item">
              <div class="img">
                <img src="{{ asset('new-assets/img/klaster-5.png') }}" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-diagram-3-fill"></i>
                </div>
                <a href="{{ URL('/ilp/klaster5') }}" class="stretched-link">
                  <h3 style="font-size: 1.2rem;">Klaster 5 Lintas Klaster</h3>
                </a>
                <p>Klaster ini berfungsi sebagai penghubung antar-klaster untuk memastikan integrasi dan kesinambungan layanan.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-2 col-md-6">
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Pelayanan Section -->

    <!-- Review Google Section -->
    <section id="testimonials" class="testimonials section dark-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Review Google</h2>
      </div><!-- End Section Title -->

      <img src="{{ asset('new-assets/img/onfocus-video-bg-pkc.jpeg') }}" class="testimonials-bg" alt="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <!-- <div class="tagembed-widget" style="width:100%;height:100%;overflow:auto;" data-widget-id="305578" data-website="1"></div><script src="https://widget.tagembed.com/embed.min.js" type="text/javascript"></script> -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('new-assets/img/testimonials/no-profile2.png') }}" class="testimonial-img" alt="">
                <h3>Catherine Natalia</h3>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Salah satu Puskesmas terbaik dengan fasilitas yang cukup lengkap. Biasa cek up rutin di sini, ada lab, poli gigi, dll dan ada kantin juga dengan banyak pilihan menu, cocok untuk mengisi waktu selagi antri atau buka puasa untuk cek gula darah.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
            
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('new-assets/img/testimonials/no-profile2.png') }}" class="testimonial-img" alt="">
                <h3>Nining Setianingsih</h3>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Diundang oleh Puskesmas Tebet dalam kegiatan Hari Kesehatan Penglihatan Dunia.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('new-assets/img/testimonials/no-profile2.png') }}" class="testimonial-img" alt="">
                <h3>Varez Alfarizi</h3>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Pelayanan nya sangat bagus sekali, tempat nya juga bersih nyaman, bidan nya ramah², terimakasih puskesmas tebet</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('new-assets/img/testimonials/no-profile2.png') }}" class="testimonial-img" alt="">
                <h3>Rika Wulandari</h3>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Ruang bersalin puskesmas kecamatan Tebet layanan terbaik dan nyaman sekalii , terimakasih buat Bu bidan dan perawat dan dokternyaa 🫶🫶🫶 …</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Review Google Section -->

    <!-- Instagram Section -->
    <section id="insta" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Instagram</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up">
        <div class="" style="!important align: center;" data-aos="fade-up" data-aos-delay="200">
          <div class="col-xl-12 portfolio-item isotope-item filter-app">
            <div class="tagembed-widget" style="width:100%;height:100%;" data-widget-id="305929" data-website="1"></div><script src="https://widget.tagembed.com/embed.min.js" type="text/javascript"></script>
          </div><!-- End Portfolio Item -->
        </div><!-- End Portfolio Container -->
      </div>

    </section><!-- /Promosi Kesehatan Section -->

    <!-- Kontak Section -->
    <section id="kontak" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade">

        <div class="row gy-5 gx-lg-5">

          <div class="col-lg-4">

            <div class="info">
              <h3>Jadwal Pelayanan</h3>
              <p>Senin - Jumat (Hari Kerja) : 08.00 - 15.00 & <br>Layanan 24 Jam</p>

              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Lokasi:</h4>
                  <p>Jl. Tebet Barat Raya, RT.11/RW.7, Tebet Bar., Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12810</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>puskesmas.tebet@jakarta.go.id</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-whatsapp flex-shrink-0"></i>
                <div>
                  <h4>Whatsapp:</h4>
                  <p>(+62) 82113266646</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-8">
            <iframe style="width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6564.242377054405!2d106.8535377318401!3d-6.230335750146463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e8d822c6c1%3A0xbe1e5bded4d326ad!2sPuskesmas%20Tebet!5e0!3m2!1sid!2sid!4v1761540127281!5m2!1sid!2sid" frameborder="0" allowfullscreen=""></iframe>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

</main>