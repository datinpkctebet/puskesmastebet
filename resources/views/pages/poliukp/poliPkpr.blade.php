@extends('layout.default')

@section('content')

<section class="test-menu">
  <x-partial.title
    title="Unit Pelayanan PKPR"
    description="" />

  <div class="test-desc">
    <div class="container">
      {{-- <h3>Test Description</h3> --}}
      <p><h1 style=font-family:arial align="justify"><font size="4">Pelayanan kesehatan Peduli Remaja adalah pelayanan bagi remaja yang berusi 9-19 tahun.       
        </h1></p>

        <div class="clinic-significant">
          <h3 style=font-family:arial align="justify"><font size="4">Selain memberikan layanan pencegahan (preventive), Pengobatan (kuratif),Promosi dan Rehabilitasi, Puskesmas PKPR juga menjalankan kegiatan sebagai berikut :</h3>
          <ol start="1">
            <li style=font-family:arial align="justify"><font size="4">Pemberian Informasi dan Edukasi</li>
            <li style=font-family:arial align="justify"><font size="4">Pelayanan klinis medis (termasuk pemeriksaan penunjang & rujukan)</li>
            <li style=font-family:arial align="justify"><font size="4">Konseling</li>
            <li style=font-family:arial align="justify"><font size="4">Pendidikan Keterampilan Hidup Sehat (PKHS)</li>
            <li style=font-family:arial align="justify"><font size="4">Pelatihan Konselor Sebaya</li>
          </ol>

          <div class="clinic-significant">
            <h3 style=font-family:arial align="justify"><font size="4">Termasuk di dalamnya adalah Layanan Kesehatan Reproduksi dan Seksual. Sebagai contoh, beberapa layanan yang dilayani PKPR adalah :</h3>
            <ol start="1">
              <li style=font-family:arial align="justify"><font size="4">Pemeriksaan Kehamilan bagi remaja</li>
              <li style=font-family:arial align="justify"><font size="4">Konseling semua masalah Kesehatan Reproduksi dan Seksual</li>
              <li style=font-family:arial align="justify"><font size="4">Konsultasi mengenai masalah kejiwaan</li>
              <li style=font-family:arial align="justify"><font size="4">HIV & AIDS</li>
              <li style=font-family:arial align="justify"><font size="4">Infeksi Menular Seksual (IMS)</li>
              <li style=font-family:arial align="justify"><font size="4">Anemia</li>
            </ol>

</section>

@endsection
