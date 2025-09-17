@extends('layout.default')

@section('content')

<section class="laboratory">
  <x-partial.title
    title='Hak dan Kewajiban Pasien atau Keluarga Pasien'
    description='' />

  <!--- quality ---->
  <div class="terms">
    <div class="container">
      <h3>Berdasarkan Surat Keputusan Kepala Puskesmas Kecamatan Tebet No.579 Tahun 2017</h3>
     

          <!-- First Panel -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title" data-toggle="collapse" data-target="#collapseOne">
                <span>&#8594;</span> Hak Pasien atau Keluarga Pasien
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse">
              <div class="panel-body">
                <ol start="1">
                  <li align="justify" style=font-family:arial>Memperoleh layanan yang manusiawi, adil, jujur dan tanpa diskriminasi.</li>
                  <li align="justify" style=font-family:arial>Memperoleh layanan kesehatan yang bermutu sesuai standar profesi dan standar prosedur operasional.</li>
                  <li align="justify" style=font-family:arial>Mendapatkan informasi yang meliputi diagnosis dan tata cara tindakan medis, tujuan tindakan medis, alternatif tindakan, resiko dan komplikasi yang mungkin terjadi dan prognosis terhadap tindakan yang dilakukan serta perkiraan biaya pengobatan.</li>
                  <li align="justify" style=font-family:arial>Memberikan persetujuan atau menolak atas tindakan yang akan dilakukan serta perkiraan biaya pengobatan.</li>
                  <li align="justify" style=font-family:arial>Memilih dokter dan dokter gigi jika dimungkinkan sesuai dengan peraturan puskesmas yang berlaku</li>
                  <li align="justify" style=font-family:arial>Memperoleh keamanan dan keselamatan dirinya selama perawatan puskesmas.</li>
                  <li align="justify" style=font-family:arial>Mengajukan usul, saran perbaikan atas perlakuan puskesmas terhadap dirinya.</li>
                  <li align="justify" style=font-family:arial>Mendapatkan perlindungan atas rahasia kedokteran termasuk kerahasiaan rekam medik.</li>
                  <li align="justify" style=font-family:arial>Menyampaikan keluhan atau pengaduan atas pelayanan yang diterima.</li>
                </ol>
              </div>
            </div>
          </div>

          <!-- Second Panel -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title" data-toggle="collapse" data-target="#collapseTwo">
                <span>&#8594;</span> Kewajiban Pasien atau Keluarga Pasien
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
              <div class="panel-body">
                <ol start="1">
                  <li align="justify" style=font-family:arial>Mematuhi peraturan yang berlaku di Puskesmas.</li>
                  <li align="justify" style=font-family:arial>Menggunakan fasilitas Puskesmas secara bertanggung jawab.</li>
                  <li align="justify" style=font-family:arial>Menghormati hak-hak pasien lain, pengunjung dan hak tenaga kesehatan serta petugas lainnya yang berkerja di Puskesmas.</li>
                  <li align="justify" style=font-family:arial>Memberikan informasi yang jujur, lengkap dan akurat sesuai kemampuan dan pengetahuannya tentang masalah kesehatan.</li>
                  <li align="justify" style=font-family:arial>Mematuhi rencana terapi yang direkomendasikan oleh tenaga kesehatan di puskesmas dan disetujui oleh pasien yang bersangkutan setelah mendapatkan penjelasan sesuai peraturan undang-undang</li>
                  <li align="justify" style=font-family:arial>Menerima segala konsekuensi atas keputusan pribadinya untuk menolak rencana terapi yang direkomendasikan oleh tenaga kesehatan dan atau tidak mematuhi petunjuk yang diberikan oleh tenaga kesehatan dalam rangka penyembuhan penyakit atau masalah kesehatan.</li>
                  <li align="justify" style=font-family:arial>Memberikan imbalan jasa atas pelayanan yang diterima sesuai perda yang berlaku.</li>
                  <li align="justify" style=font-family:arial>Memberikan informasi mengenai kemampuan finansial dan jaminan kesehatan yang dimiliki.</li>
                </ol>
              </div>
            </div>
          </div>
</section>

@endsection