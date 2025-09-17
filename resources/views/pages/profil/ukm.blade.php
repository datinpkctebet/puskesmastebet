@extends('layout.default')

@section('content')

<section class="instruments-section">
  <x-partial.title
  title='Upaya Kesehatan Masyarakat'
  description='' />

  <!--- instruments ---->
  <div class="instruments">
    <div class="container">
      <h3 class="last-updated">Latar Belakang UKM</h3>
      <p style="font-family:arial;"h1 align="justify"><font size="4">Kebijakan pembangunan kesehatan di provinsi DKI Jakarta pada dasarnya diarahkan untuk tercapainya Derajat Kesehatan yang terus meningkat, perorangan, keluarga dan masyarakat semakin mau dan mampu menolong dirinya untuk Hidup Sehat, tumbuh dan berkembang terlindung dari resiko kesehatan serta Produktif. Pembangunan Kesehatan bukan semata-mata tanggung jawab Pemerintah Daerah saja tetapi merupakan tanggungjawab bersama seluruh anggota masyarakat.
      </h1></p>
     
      <p style="font-family:arial;"h1 align="justify"><font size="4">Agar penyelenggaraan pembangunan kesehatan dapat berjalan dengan baik, maka harus dilakukan upaya kesehatan yang  berkualitas  dan  terjangkau  oleh  seluruh masyarakat dengan didukung oleh  Sistem  Pembiayaan  Kesehatan  serta  mampu mengelola dan  membelanjakan  dana yang  tersedia  secara  berhasil  guna dan berdaya guna. 
      </h1></p>

      <p style="font-family:arial;"h1 align="justify"><font size="4">Salah satu cara untuk memberikan pelayanan yang berkualitas adalah dengan membangun sistem pelayanan di Puskesmas Kecamatan Tebet melalui penerapan standar akreditasi yang bertujuan untuk kepuasan pelanggan. Pedoman Upaya Kesehatan Masyarakat ini disusun untuk acuan bagi pelaksana UKM dalam melaksanakan kegiatan program UKM.
      </h1></p>

      <!--Horizontal Tab-->
      {{-- <div class="lab-instruments">
        <div class="resp-tabs-container hor_1">
          <div class="col-md-3 jm-item first">
            <div class="jm-item-wrapper">
              <div class="jm-item-image">
                <img src="{{ URL('images/ins1.jpg') }}" alt="instrument" />
                <span class="jm-item-overlay"> </span> --}}
                {{-- <div class="jm-item-button"><a href="single-instrument.html">View</a></div> --}}
              {{-- </div>
              <div class="jm-item-title">Deskripsi Foto</div>
            </div>
          </div> --}}

          {{-- <div class="col-md-3 jm-item first">
            <div class="jm-item-wrapper">
              <div class="jm-item-image">
                <img src="{{ URL('images/ins1.jpg') }}" alt="instrument" />
                <span class="jm-item-overlay"> </span> --}}
                {{-- <div class="jm-item-button"><a href="single-instrument.html">View</a></div> --}}
              {{-- </div>
              <div class="jm-item-title">Deskripsi Foto</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> --}}

@endsection
