@extends('layout.default')

@section('content')

<section class="contact">
  <x-partial.title
    title="KONTAK KAMI"
    {{-- description="Puskesmas Kecamatan Tebet"  --}}
    />

  <div class="contact" style="margin-bottom: 10rem">
    <div class="container">
      <div class="map">
        <h4>PETA LOKASI</h4>
        <div id="map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.201069869168!2d106.85008616422638!3d-6.23720761281331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f393f48b1c7f%3A0x608e6d25bb56fb17!2sPuskesmas+Kecamatan+Tebet!5e0!3m2!1sid!2sid!4v1561136155557!5m2!1sid!2sid"
            frameborder="0" style="border:0"></iframe>
        </div>
      </div>

      <div class="contact-infom">
        <h4>Tentang Kami</h4>
        <p> Pusat Kesehatan Masyarakat (PUSKESMAS) adalah fasilitas pelayanan kesehatan yang menyelenggarakan 
          upaya kesehatan masyarakat dan upaya kesehatan perorangan tingkat pertama, dengan lebih mengutamakan 
          upaya promotif dan preventif, untuk mencapai derajat kesehatan masyarakat yang setinggi-tingginya 
          di wilayah kerjanya. Puskesmas Kecamatan Tebet merupakan unit pelaksana teknis Dinas Kesehatan.</p>
      </div>

      <div class="address">
        <div class="row">
          <div class="col-md-4 location">
            <h4>Puskesmas Kecamatan Tebet Gedung A :</h4>
            <p>Jl. Tebet Timur II, RT.06 / RW.05</p>
            <p>Jakarta Selatan,</p>
            <p>DKI Jakarta, Indonesia</p>
            <p>Kodepos : 12820</p>
            <p>Email : <a href="mailto:info@example.com">puskesmas.tebet@jakarta.go.id</a></p>
            <p>No Telepon : (021) 8350632</p>
            <p>No Fax : 83798618</p>

            <p>Humas/Whatsapp : <a href="https://wa.me/6282113266646">0821-1326-6646</a></p>
            <p>Hotline Covid-19 : <a href="https://wa.me/6283877795323">0838-7779-5323</a>
          </div>
          <div class="col-md-4 location">
            <h4>Puskesmas Kecamatan Tebet Gedung B :</h4>
            <p>Jl. Tebet Timur Dalam Raya No.91B RT.02 / RW.06</p>
            <p>Jakarta Selatan,</p>
            <p>DKI Jakarta, Indonesia</p>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection