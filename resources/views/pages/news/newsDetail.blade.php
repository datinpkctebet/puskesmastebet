@extends('layout.default')

@section('content')

<section class="blog-single-post">
  <x-partial.title title="Berita Terkini" />

  <div class="blog">
    <div class="container">
      <div class="single">
        <div class="single-top">
          <img  src="{{ $data['image_url'] }}" alt="{{ $data['title'] }}"/>
        </div>

        <div class="top-single">
          <h3>{{ $data['title'] }}</h3>

          <div style="margin:1rem 0">
            <i class="fa fa-calendar"></i>
            {{ $data['date'] }}
          </div>

          {!! $data['description'] !!}

          <div class="qualification">
            <h6>Download</h6>
            <p>
              <a href="{{ $data['document_url'] }}"> Document </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
