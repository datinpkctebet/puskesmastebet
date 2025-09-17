@extends('layout.default')

@section('content')

<section class="laboratory">
  <x-partial.title
    title='Visi dan Misi'
    description='' />

  <!--- quality ---->
  <div class="terms">
    <div class="container">
      {{-- <h3>Puskesmas Kecamatan Tebet</h3> --}}
      {{-- <h6>Accreditation</h6>
      <p style="font-family:arial;"h1 align="justify"><font size="4">deskripsi
      </h1></p> --}}
      <div class="quality">
        <div class="panel-group" id="accordion">

          <!-- First Panel -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title" data-toggle="collapse" data-target="#collapseOne">
                <span>&#8594;</span>VISI
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse">
              <div class="panel-body">
                <p style="font-family:arial;"h1 align="justify">Puskesmas Unggulan Menuju Jakarta Sehat Untuk Semua
                </h1></p>
              </div>
            </div>
          </div>

          <!-- Second Panel -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title" data-toggle="collapse" data-target="#collapseTwo">
                <span>&#8594;</span> MISI
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
              <div class="panel-body">
                <ol start="1">
                  <li style=font-family:arial>Membangun masyarakat mandiri, berbudaya dan peduli kesehatan melalui kerjasama lintas sektoral;</li>
                  <li style=font-family:arial>Memberi pelayanan kesehatan kepada masyarakat secara optimal sesuai standar mutu; </li>
                  <li style=font-family:arial>Meningkatkan kualitas SDM dan sarana prasarana pendukung; </li>
                  <li style=font-family:arial>Menjamin kesehatan dan kesejahteraan seluruh karyawan; </li>
                  <li style=font-family:arial>Menyelenggarakan pelayanan berbasis teknologi informasi. </li>
                </ol>
              </div>
            </div>
          </div>
</section>

@endsection