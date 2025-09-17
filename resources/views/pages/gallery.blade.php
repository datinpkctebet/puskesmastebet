@extends('layout.default')

@section('content')

<section class="laboratory">
  <x-partial.title title="Gallery Puskesmas se-Kecamatan Tebet" />
  <div class="clearfix"></div>

  <div id="grid-gallery" class="grid-gallery">
    <div class="container">
      <h3 class="title text-center">Foto Kegiatan</h3>

      <section class="grid-wrap">
        <ul class="grid">
          <li class="grid-sizer"></li>

          @foreach ($data as $key => $item)
            <li class="thumnails">
              <figure>
                <img
                  src="{{ $item['image_url'] }}"
                  alt="{{ $item['title'] }}"/>
              </figure>
            </li>
          @endforeach

          <div class="clearfix"></div>
        </ul>
      </section>

      <section class="slideshow">
        <ul>
          @foreach ($data as $key => $item)
          <li>
            <figure>
              <figcaption>
                <h3>{{ $item['title'] }}</h3>
                <p>{!! $item['description'] !!}</p>
              </figcaption>

              {{-- slick-carousel --}}
              <div class="slick-carousel-gallery">
                @foreach ($item['array_image'] as $image)
                  <img src="{{ $image }}">
                @endforeach
              </div>

            </figure>
          </li>
          @endforeach
        </ul>

        <nav>
          <span class="icon nav-prev"></span>
          <span class="icon nav-next"></span>
          <span class="icon nav-close"></span>
        </nav>
        <div class="info-keys icon">Navigate with arrow keys</div>
      </section>
    </div>
  </div>
</section>
@endsection

@push('before-script')
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('js/classie.js') }}"></script>
<script src="{{ asset('js/cbpGridGallery.js') }}"></script>
<script>
  new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
</script>
@endpush

@push('css')
<style>
.grid-gallery .thumnails figure img {
  width: 250px;
  height: 250px;
  object-fit: cover;
}
.slick-carousel-gallery .slick-initialized .slick-slider {
  height: 80%;
}

.slick-carousel-gallery button {
  z-index: 50;
}

.slick-carousel-gallery .slick-prev {
  left: 2rem;
}

.slick-carousel-gallery .slick-next {
  right: 3rem;
}

.slick-carousel-gallery .slick-next:before,
.slick-carousel-gallery .slick-prev:before {
  opacity: 1;
  font-size: 30px;
}
</style>
@endpush
