@extends('layout.default')

@section('content')

<section class="instruments-section">
  <x-partial.title
  title='ADMEN'
  description='' />

  <!--- instruments ---->
  <div class="instruments">
    <div class="container">
      <h3 class="last-updated">Fungsi ADMEN</h3>
    
          <div class="clinic-significant">
           
            <ol start="1">
              <li class="justify">Melakukan perencanaan terkait administrasi, misalnya pemeliharaan sarana prasarana seperti tata ruang, ventilasi, anggaran perusahaan, dan lainnya.</li>
              <li class="justify">Pengorganisaisan dengan mengelompokkan alat yang dipakai dalam bidang usaha, tugas, tanggung jawab dan SDM yang terbagi di dalamnya. Hal ini bertujuan untuk menciptakan organisasi yang selaras dengan visi perusahaan.</li>
              <li class="justify">Memberikan Dorongan kepada karyawan untuk mencapai tujuan organisasi terutama di lingkup administrasi.</li>
              <li class="justify">Melakukan pengawasan terhadap proses administrasi kantor.</li>
            </ol>

      {{-- <!--Horizontal Tab-->
      <div class="lab-instruments">
        <div class="resp-tabs-container hor_1">
          <div class="col-md-3 jm-item first">
            <div class="jm-item-wrapper">
              <div class="jm-item-image">
                <img src="{{ URL('images/ins1.jpg') }}" alt="instrument" />
                <span class="jm-item-overlay"> </span>
                <div class="jm-item-button"><a href="single-instrument.html">View</a></div>
              </div>
              <div class="jm-item-title">Lorem Ipsum</div>
            </div>
          </div>

          <div class="col-md-3 jm-item first">
            <div class="jm-item-wrapper">
              <div class="jm-item-image">
                <img src="{{ URL('images/ins1.jpg') }}" alt="instrument" />
                <span class="jm-item-overlay"> </span>
                <div class="jm-item-button"><a href="single-instrument.html">View</a></div>
              </div>
              <div class="jm-item-title">Lorem Ipsum</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
</section>

@endsection
