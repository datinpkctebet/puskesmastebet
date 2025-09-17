<div class="news-section" id="news">
  <div class="container">
    <div class="news-section-head text-center">
      <h3>Berita Terkini</h3>
      <p>Dapatkan Informasi Terkini tentang Puskesmas dan Kesehatan</p>
    </div>
    <div class="news-section-grids">

      {{-- @foreach ($blogs['data'] as $item)
        @php
          $redirectUrl = '/news/'. $item['slug'];
        @endphp

        <div class="col-md-4 news-section-grid">
          @if ($item['image_url'])
          <img src="{{ $item['image_url'] }}" alt="{{ $item['title'] }}" />
          @else
          <img>
          @endif
          <div class="info">
            <a class="news-title" href="{{ $redirectUrl }}">{{ $item['title'] }}</a>
            <label>{{ $item['date'] }}</label>
            <p>{!! $item['sort_description'] !!}</p>
            <a class="more" href="{{ $redirectUrl }}">Read more</a>
          </div>
        </div>
      @endforeach --}}

      <div class="clearfix"></div>
    </div>
  </div>
</div>

<style>
#news .news-section-grid img {
  height: 200px;
  object-fit: cover;
}
#news .news-section-grid a {
  line-height: 1.5em;
  height: 3em;       /* height is 2x line-height, so two lines will display */
  overflow: hidden;
}

#news .news-section-grid p {
  line-height: 1.5em;
  height: 7em;       /* height is 2x line-height, so two lines will display */
  overflow: hidden;
}
</style>
