<!DOCTYPE html>
<html>
<head>
  <title>Puskesmas Tebet</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Prevention Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />

  @include('includes.new-style')
  @stack('css')
</head>
<body>
  <x-partial.new-header />

  @yield('content')

  <x-partial.new-footer />

  <!-- <a href="#" id="toTop" style="display: block;">
    <span id="toTopHover" style="opacity: 1;" />
  </a> -->
  
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @stack('before-script')
  @include('includes.new-script')
  @stack('after-script')
</body>
</html>
