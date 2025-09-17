<script type="text/javascript" src="{{ asset('js/jquery.ba-cond.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.slitslider.js') }}"></script>
<script type="text/javascript">
$(function () {
  const Page = (function () {
    const $nav = $('#nav-dots > span'),
      slitslider = $('#slider').slitslider({
        onBeforeChange: function (slide, pos) {
          $nav.removeClass('nav-dot-current');
          $nav.eq(pos).addClass('nav-dot-current');
        }
      }),
      init = function () {
        initEvents();
      },
      initEvents = function () {
        $nav.each(function (i) {
          $(this).on('click', function (event) {
            const $dot = $(this);
            if (!slitslider.isActive()) {
              $nav.removeClass('nav-dot-current');
              $dot.addClass('nav-dot-current');
            }
            slitslider.jump(i + 1);
            return false;
          });
        });
      };
    return {
      init: init
    };
  })();

  Page.init();
});
</script>

<script type="text/javascript" src="{{ asset('js/numscroller-1.0.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/tabs.js') }}"></script>
<script type="text/javascript">
$(document).ready(function () {
  $().UItoTop({
    easingType: 'easeOutQuart'
  });
});
</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

<script>
  $(document).ready(function(){
    $('.slick-carousel-homepage').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 3,
    });

    $('.slick-carousel-gallery').slick();
  });
</script>

<!--Start of Crisp Script-->
{{-- <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="025334bc-e6f0-4011-9454-2c7c8d1a894c";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script> --}}
 <!--End of Crisp Script-->




<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/5efe82559e5f69442291c4db/default';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->