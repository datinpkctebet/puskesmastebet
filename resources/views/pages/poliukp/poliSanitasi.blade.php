@extends('layout.default')

@section('content')

<section class="test-menu">
  <x-partial.title
    title="Unit Pelayanan Sanitasi"
    description="" />

  <div class="test-desc">
    <div class="container">
      {{-- <h3>Test Description</h3> --}}
      <p><h1 style=font-family:arial align="justify"><font size="4">
        Pelayanan Kesehatan Lingkungan adalah kegiatan atau serangkaian kegiatan yang ditujukan untuk mewujudkan kualitas lingkungan yang sehat baik dari aspek fisik, kimia, biologi, maupun sosial guna mencegah penyakit dan/atau gangguan kesehatan yang diakibatkan oleh faktor risiko lingkungan. Pelayanan Kesehatan Lingkungan di Puskesmas Kecamatan Tebet di kenal dengan Klinik Sanitasi.
      </h1></p>

      <div class="clinic-significant">
        <h3 style=font-family:arial align="justify"><font size="4">Pasien berasal dari rujukan dari unit layanan lain di puskesmas kecamatan Tebet. Penyakit terkait dengan lingkungan yang bisa dilayani oleh layanan kesehatan lingkungan antara lain:</h3>
        <ol start="1">
          <li style=font-family:arial align="justify"><font size="4">Diare</li>
          <li style=font-family:arial align="justify"><font size="4">Demam Berdarah Dengue</li>
          <li style=font-family:arial align="justify"><font size="4">Kulit</li>
          <li style=font-family:arial align="justify"><font size="4">Kecacingan</li>
          <li style=font-family:arial align="justify"><font size="4">Pneumonia</li>
          <li style=font-family:arial align="justify"><font size="4">TB Paru</li>
          <li style=font-family:arial align="justify"><font size="4">Keracunan Makanan</li>
          <li style=font-family:arial align="justify"><font size="4">Keracunan Pestisida</li>
          <li style=font-family:arial align="justify"><font size="4">Flu Burung</li>
          <li style=font-family:arial align="justify"><font size="4">Filariasis</li>
        </ol>

</section>

@endsection
