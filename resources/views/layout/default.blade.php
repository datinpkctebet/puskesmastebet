<!DOCTYPE html>
<html>
<head>
  <title>Puskesmas Tebet</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Prevention Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />

  @include('includes.style')
  @include('includes.script-head')
  @stack('css')
</head>
<body>
  <x-partial.social />
  <x-partial.menu />

  @yield('content')

  {{-- <x-partial.appointment /> --}}
  <x-partial.subscribe />
  <x-partial.footer />

  <a href="#" id="toTop" style="display: block;">
    <span id="toTopHover" style="opacity: 1;" />
  </a>
  @stack('before-script')
  @include('includes.script')
  @stack('after-script')
</body>
</html>
