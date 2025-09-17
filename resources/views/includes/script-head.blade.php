<!-- for-mobile-apps -->
<script type="application/x-javascript">
  addEventListener("load", function () {
    setTimeout(hideURLbar, 0);
  }, false);

  function hideURLbar() {
    window.scrollTo(0, 1);
  }
</script>
<!-- //for-mobile-apps -->

<!-- js -->
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<!-- js -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/modernizr.custom.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/modernizr.custom.79639.js') }}"></script>

<!-- js for news -->
<script src="{{ asset('js/jquery.easing.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/pignose.layerslider.js') }}"></script>
<script type="text/javascript">
//<![CDATA[
$(window).load(function () {
  $('#visual').pignoseLayerSlider({
    play: '.btn-play',
    pause: '.btn-pause',
    next: '.btn-next',
    prev: '.btn-prev'
  });
});
//]]>
</script>
<!-- /js for news -->

<!-- for smooth scrolling -->
<script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
<script type="text/javascript">
jQuery(document).ready(function ($) {
  $(".scroll").click(function (event) {
    event.preventDefault();
    $('html,body').animate({
      scrollTop: $(this.hash).offset().top
    }, 1000);
  });
});
</script>
<!-- //for smooth scrolling -->
