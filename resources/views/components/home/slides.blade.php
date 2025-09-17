<div class="our-news">
  <h3 class="text-center">Foto Kegiatan</h3>
  <p class="text-center">Foto-foto kegiatan di Puskesmas se-Kecamatan Tebet</p>
  {{-- <div id="visual">
    <div class="slide-visual slideanim">

      <!-- Slide Image Area (1000 x 424) -->
      <ul class="slide-group">
        @foreach ($galleries as $item)
        <li><img src="images/news1.jpg" alt="Dummy Image" class="img-responsive" /></li>
        @endforeach
      </ul>

      <!-- Slide Description Image Area (316 x 328) -->
      <div class="script-wrap">
        <ul class="script-group">
          @foreach ($galleries as $item)
          <li>
            <div class="inner-script"><img src="images/news1-1.jpg" alt="Dummy Image"
                class="img-responsive" /></div>
          </li>
          @endforeach
        </ul>

        <div class="slide-controller">
          <a href="#" class="btn-prev"><img src="images/btn_prev.png" alt="Prev Slide" /></a>
          <a href="#" class="btn-play"><img src="images/btn_play.png" alt="Start Slide" /></a>
          <a href="#" class="btn-pause"><img src="images/btn_pause.png" alt="Pause Slide" /></a>
          <a href="#" class="btn-next"><img src="images/btn_next.png" alt="Next Slide" /></a>
        </div>
      </div>
    </div>
  </div> --}}

  <div class="container">
    <div class="row">
      <div class="col-12 slick-carousel-homepage">
        {{-- @foreach ($galleries as $item)
          <a href="{{ URL('gallery') }}">
            <img
              src="{{ $item['image_url'] }}"
              alt="{{ $item['title'] }}"
              class="img-responsive" />
          </a>
        @endforeach --}}
      </div>
    </div>
  </div>
</div>

<style>
.slick-carousel-homepage img {
  height: 300px;
  width: 400px;
  object-fit: cover;
}
</style>
