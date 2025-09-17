@extends('layout.default')

@section('content')

<section class="career-page">
  <x-partial.title
   title="KARIR"
   description="Dapatkan Informasi Mengenai Karir Disini" />

  <div class="careers">
    <div class="container">
      <h3 class="last-updated">Current Opening</h3>

      <div class="job-lists">
        <div class="col-md-9 single_right">
          <div class="job-detailed">
            <div class="jobs-item with-thumb">
              <div class="jobs_right">
                <div class="date_desc">
                  <h6 class="job-title">{{ $data['position'] }}</h6>
                </div>
                <div class="clearfix"> </div>
                {!! $data['description'] !!}
              </div>

              <div class="qualification">
                <h6>Download</h6>
                <p>
                  <a href="{{ $data['image_url'] }}"> Image </a>
                </p>
                <p>
                  <a href="{{ $data['document_url'] }}"> Document </a>
                </p>
              </div>
              <div class="clearfix"> </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="job-contact">
            <h5 class="widget-title">Contact</h5>
            @php
              $email = env('KARIR_EMAIL', 'puskesmas.tebet@jakarta.go.id');
              $phone = env('KARIR_PHONE', '(021) 835 0632');
            @endphp

            <p>Email: <a href="mailto:{{ $email }}">{{ $email }}</a></p>
            <p>Telp : {{ $phone }}</p>
          </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
</section>

@endsection
