@php
  $hasPagination = ((int) $meta['last_page'] > 1);
  $url = url()->current() .'?page=';

  $isPrev = ($meta['current_page'] > 1 && $meta['current_page'] != 1);
  $prevUrl = $url . ((int) $meta['current_page'] - 1);

  $isNext = ($hasPagination && $meta['current_page'] != $meta['last_page']);
  $nextUrl = $url . ((int) $meta['current_page'] + 1);
@endphp

@if ($hasPagination)
<ul class="start">

  @if ($isPrev)
  <li>
    <a href="{{ $prevUrl }}">
      <span class="prev">Sebelumnya</span>
    </a>
  </li>
  @endif


  @for ($i = 0; $i < (int) $meta['last_page']; $i++)
  <li>
    @php $number = $i + 1 @endphp
    {{-- @php dd($meta); @endphp --}}

    @if ($number == $meta['current_page'])
      <span>{{ $number }}</span>
    @else
      <a href="{{ $url . $number }}">
        {{ $number }}
      </a>
    @endif
  </li>
  @endfor

  @if ($isNext)
  <li>
    <a href="{{ $nextUrl }}" class="next">
      Selanjutnya
    </a>
  </li>
  @endif

</ul>
@endif
