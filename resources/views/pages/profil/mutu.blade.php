@extends('layout.default')

@section('content')

<section class="instruments-section">
  <x-partial.title
  title='MUTU'
  description='' />

  <!--- instruments ---->
  <div class="instruments">
    <div class="container">
      <h3 class="last-updated">Latar Belakang MUTU</h3>
      <p style="font-family:arial;"h1 align="justify"><font size="4">Puskesmas merupakan pusat penggerak pembangunan berwawasan kesehatan, pusat pemberdayaan masyarakat dalam kemandirian hidup sehat, pusat Pelayanan Kesehatan Strata Pertama. Untuk dapat melaksanakan fungsi tersebut, maka perlu ditunjang sarana dan prasarana yang memadai, berupa sarana fisik (bangunan gedung, peralatan medis maupun non medis) serta sumber daya manusia. Selain itu, agar dapat melaksanakan fungsi Puskesmas sebagaimana mestinya, harus ditunjang dengan manajemen yang baik, dimana diperlukan perencanaan yang jelas, strategi pelaksanaan yang terarah. Demikian juga diperlukan pengawasan, pengendalian, penilaian dan evaluasi terhadap semua kegiatan Puskesmas.
      </h1></p>
     
      <p style="font-family:arial;"h1 align="justify"><font size="4">Pedoman mutu ini akan menjadi pedoman Puskesmas Kecamatan Tebet dalam menyelenggarakan kegiatan pelayanan secara berdaya  guna dan berhasil guna. Pedoman mutu Puskesmas Kecamatan Tebet ini dibuat dengan tujuan menjelaskan secara garis besar sistem manajemen mutu Puskesmas Kecmatan Tebet.
      </h1></p>

      <!--Horizontal Tab-->
      {{-- <div class="lab-instruments">
        <div class="resp-tabs-container hor_1">
          <div class="col-md-3 jm-item first">
            <div class="jm-item-wrapper">
              <div class="jm-item-image">
                <img src="{{ URL('images/ins1.jpg') }}" alt="instrument" />
                <span class="jm-item-overlay"> </span>
                {{-- <div class="jm-item-button"><a href="single-instrument.html">View</a></div> --}}
              {{-- </div>
              <div class="jm-item-title">Deskripsi Foto</div>
            </div>
          </div> --}}

          {{-- <div class="col-md-3 jm-item first">
            <div class="jm-item-wrapper">
              <div class="jm-item-image">
                <img src="{{ URL('images/ins1.jpg') }}" alt="instrument" />
                <span class="jm-item-overlay"> </span>
                {{-- <div class="jm-item-button"><a href="single-instrument.html">View</a></div> --}}
              {{-- </div>
              <div class="jm-item-title">Deskripsi Foto</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
</section>

@endsection
