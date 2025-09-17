@extends('layout.default')

@section('content')

<section class="career-page">
  <x-partial.title
    title="KARIR"
    description="Dapatkan Informasi Mengenai Karir Disini" />

  <div class="careers">
    <div class="container">
      <h3 class="last-updated">Karir</h3>

      <div class="job-lists">
        <div class="col-md-9 single_right">
          @foreach ($data['data'] as $item)
            @php
              $redirectUrl = '/karir/'. $item['slug'];
            @endphp

            <div class="tab_grid">
              <div class="jobs-item with-thumb">
                <div class="jobs_right">
                  <div class="date">
                    {{ $item['date'] }}
                    <span>{{ $item['month'] }}</span>
                  </div>

                  <div class="date_desc">
                    <h6 class="title">
                      <a href="{{ $redirectUrl }}">
                        {{ $item['position'] }}
                      </a>
                    </h6>
                  </div>

                  <div class="clearfix"> </div>
                  <p class="description">
                    {!! $item['sort_description'] !!}
                    <a href="{{ $redirectUrl }}" class="read-more">
                      Read More
                    </a>
                  </p>
                </div>
                <div class="clearfix"> </div>
              </div>
            </div>
          @endforeach
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
</section>

@endsection
