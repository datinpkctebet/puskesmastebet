@extends('layout.default')

@section('content')

<section>
  <x-partial.title title="Berita Terkini" />

  <div class="blog">
    <div class="container">
      <div class="bolg-posts">
        @foreach ($data['data'] as $item)
          @php
            $redirectUrl = '/news/'. $item['slug'];
          @endphp

          <div class="col-md-12 blog-top">
            <div class="blog-in">
              <a href="{{ $redirectUrl }}" class="blog-post">
                @if($item['image_url'])
                <img
                  src="{{ $item['image_url'] }}"
                  alt="{{ $item['title'] }}">
                @else
                  <img>
                @endif
              </a>

              <div class="blog-grid">
                <div class="date">
                  <span class="date-in">
                    <i class="fa fa-calendar"></i>
                    {{ $item['date'] }}
                  </span>
                  <div class="clearfix"> </div>
                </div>

                <h3><a href="{{ $redirectUrl }}">{{ $item['title'] }}</a></h3>
                <p>{!! $item['sort_description'] !!}</p>
                <a href="{{ $redirectUrl }}" class="smore">READ MORE</a>
              </div>
              <div class="clearfix"></div>
            </div>
            <i class="black"> </i>
          </div>
        @endforeach

        <div class="clearfix"> </div>
        <x-news.pagination :meta="$data" />
      </div>
    </div>
  </div>
</section>

@endsection
