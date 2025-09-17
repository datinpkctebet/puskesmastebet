@extends('layout.default')

@section('content')

<section class="contact">
  <x-partial.title
    title="KONTAK KAMI"
    {{-- description="Puskesmas Kecamatan Tebet"  --}}
    />

  <div class="contact" style="margin: 10rem 0">
    <div class="container">
      @for ($i = 0; $i < 12; $i++)
        <div class="">
          <img src="{{ URL('images/standar-pelayanan/SP-'. $i .'.png') }}" width="100%">
        </div>
      @endfor
    </div>
  </div>
</section>

@endsection
