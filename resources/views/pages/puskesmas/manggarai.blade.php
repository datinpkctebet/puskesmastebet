@extends('layout.default')

@section('content')

<section class="instrument-section">
  <x-partial.title
    title='Puskesmas Kelurahan Manggarai'
    {{-- description='Puskesmas Menteng Dalam' --}}
    />

  <div class="instrument">
    <div class="container">
      <h3 class="last-updated">Profil Puskesmas</h3>
      <div class="instrument-view">
        <div class="col-md-6 ins-image">
          <img src="{{ URL('images/manggarai.jpg') }}" title="instrument" alt="" />
        </div>

        <div class="col-md-6 ins-details">
          <div class="ins-name">
            {{-- <h3>Manggarai</h3> --}}
            <p style="color:black;" align="justify">Unit pelaksana
              teknis dinas kesehatan kabupaten atau kota yang bertanggung jawab
              menyelenggarakan pembangunan kesehatan di suatu wilayah kesehatan.
              Puskesmas merupakan ujung tombak pembangunan kesehatan di Indonesia
              dengan tugas melaksanakan kebijakan kesehatan untuk mencapai tujuan
              pembangunan kesehatan.</p>
          </div>

          <div class="span span1">
            <p class="left">Kepala Puskesmas</p>
            <p style="color:black;" class="right">: dr. Sri Sudewi Handayani</p>
            <div class="clearfix"></div>
          </div>

          <div class="span span2">
            <p class="left">Tahun didirikan</p>
            <p style="color:black;" class="right">: 1973</p>
            <div class="clearfix"></div>
          </div>

          <div class="span span1">
            <p class="left">Jadwal Buka</p>
            <p style="color:black;" class="right">: Senin - Sabtu</p>
            <div class="clearfix"></div>
          </div>

          <div class="span span4">
            <p class="left">Alamat</p>
            <p style="color:black;" class="right">: Jl. Swadaya I/1 RT.015 RW.009</p>
            <div class="clearfix"></div>
          </div>
        </div>

        <div class="clerfix"></div>
      </div>
    </div>
  </div>
</section>

@endsection
