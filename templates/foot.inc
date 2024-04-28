<footer class="footer-area pt-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-sm-6">
        <div class="footer-widget">
          <?php $footer = $pages->get('/footer/'); ?>
          <h3>
            <?php echo $footer->title; ?>
          </h3>
          <p>
            <?php echo $footer->section_description; ?>
          </p>
          <div class="footer-social">
            <a href="https://facebook.com" target="_blank" class="social-facebook">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com" target="_blank" class="social-twitter">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="https://instagram.com" target="_blank" class="social-instagram">
             <i class="fab fa-whatsapp"></i>
            </a>
            <a href="https://linkedin.com" target="_blank" class="social-linkedin">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <?php $footer_contact = $pages->get('/footer/contact/'); ?>
        <div class="footer-widget">
          <h3>
            <?php echo $footer_contact->title; ?>
          </h3>
          <ul>
            <li>
              <a href="tel:<?php echo $footer_contact->number; ?>">
                <i class="bx bxs-phone"></i>
                <?php echo $footer_contact->number; ?>
              </a>
            </li>
            <li>
              <a href="mailto:<?php echo $footer_contact->email; ?>">
                <i class="bx bxs-envelope"></i>
                <?php echo $footer_contact->email; ?>
              </a>
            </li>
            <li>
              <a href="https://www.google.com/maps/place/Nouakchott" target="_blank">
                <i class="bx bxs-location-plus"></i>
                <?php echo $footer_contact->location; ?>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6 col-sm-12">
        <div class="footer-widget">
          <h3>Location</h1>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13329.05034840373!2d-15.99251504760766!3d18.086015566381368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe96c7fb569ad5f77%3A0x63737f7d612c1d4f!2sNouakchott%2C%20Mauritania!5e0!3m2!1sen!2s!4v1616067887532!5m2!1sen!2s"
            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy">
          </iframe>
        </div>
      </div>
    </div>

  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="copyright-text">
          <?php echo $footer->copyright;?>
        </div>
      </div>
    </div>
  </div>
</footer>
<a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; display: block;">
  <i class="fas fa-long-arrow-alt-up"></i></a>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php echo $config->urls->templates; ?>js/jquery-3.3.1.slim.min.js"></script>
<script src="<?php echo $config->urls->templates; ?>js/popper.min.js"></script>
<script src="<?php echo $config->urls->templates; ?>js/bootstrap.min.js"></script>

<script src="<?php echo $config->urls->templates; ?>js/jquery-3.3.1.min.js"></script>
<!-- <script src="<?php echo $config->urls->templates; ?>js/wow.min.js"></script> -->



<script type="text/javascript"
  src="<?php echo $config->urls->templates; ?>js/rev-slider/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript"
  src="<?php echo $config->urls->templates; ?>js/rev-slider/jquery.themepunch.tools.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>

<script type="text/javascript" src="<?php echo $config->urls->templates; ?>js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="<?php echo $config->urls->templates; ?>js/jquery.waypoints.min.js"></script>

<script>
  $(document).ready(function ($) {
    var $element = $('.counter');
    if ($element.length > 0) {
      $element.counterUp({
        delay: 10,
        time: 1000
      });
    }
  });
</script>

<script>
  $('.testimonial-slider').slick({
    slidesToShow: 3,
    dots: false,
    arrows: true,
    autoplay: false,
    autoplaySpeed: 3000,
    prevArrow: '<i class="fas fa-chevron-left prev"></i>',
    nextArrow: '<i class="fas fa-chevron-right next"></i>',
    swipe: true,
    swipeToSlide: true,
    responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        // centerMode: true,
      }
    }, {
      breakpoint: 800,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        dots: false,
        infinite: true,

      }
    }, {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
      }
    }]


  });

</script>

<script>
  $('.client-slider').slick({
    slidesToShow: 6,
    dots: false,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 1000, // Set the base autoplay speed to 2 seconds
    pauseOnHover: false, // Do not pause on hover
    swipe: true,
    swipeToSlide: true,
    responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        // centerMode: true,
      }
    }, {
      breakpoint: 800,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 2,
        dots: false,
        infinite: true,
      }
    }, {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000, // Set autoplay speed to 2 seconds
      }
    }]
  });
</script>

<script>
  $('.project-slider').slick({
    slidesToShow: 4,
    dots: false,
    arrows: true,
    autoplay: false,
    autoplaySpeed: 3000,
    swipe: true,
    swipeToSlide: true,
    responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        // centerMode: true,
      }
    }, {
      breakpoint: 800,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        dots: false,
        infinite: true,

      }
    }, {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
      }
    }]


  });

</script>


<script>
  $('.ticker-slider').slick({
    speed: 500,
    arrows: false,
    fade: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: '<i class="fas fa-chevron-left tab-prev"></i>',
    nextArrow: '<i class="fas fa-chevron-right tab-next"></i>',
    dots: false,
  });


</script>







<script src="<?php echo $config->urls->templates; ?>js/wow.min.js"></script>
<script>
  new WOW().init();
</script>

<script>
  $(document).ready(function () {
    $(window).scroll(function () {//scroll--top---indicator---arrow-jquery----//
      if ($(window).scrollTop() > 600) {//---position---600----px scroll-----//
        $("#scrollUp").fadeIn();
      }
      else {
        $("#scrollUp").css("display", "none");
      }
    });
  });

</script>


<script>
  $(document).ready(function () {
    $(window).scroll(function () {
      if ($(window).scrollTop() < 90) { //-navbar-----scrolltop---fixed---jquery--/
        $('#navigation').removeClass('navbar-scroll');
      }
      else {
        $('#navigation').addClass('navbar-scroll');
      }
    });
  });
</script>

<script type="text/javascript">
  jQuery(document).ready(function () {
    // revolution slider
    var revapi;
    revapi = jQuery('#revolution-slider-half')
    .revolution({
        delay: 5000, // Set delay to 5 seconds (5000 milliseconds)
        startwidth: 1200,
        startheight: 630,
        onHoverStop: "off", // Ensure the slider does not stop on hover
        thumbWidth: 100,
        thumbHeight: 50,
        thumbAmount: 3,
        touchenabled: "on",
        stopAtSlide: -1,
        stopAfterLoops: -1,
        navigationType: "none",
        navigationArrows: "solo",
        navigationStyle: "preview1",
        swipe_velocity: 0.7,
        swipe_min_touches: 1,
        swipe_max_touches: 1,
        drag_block_vertical: false,
        keyboardNavigation: "on",
        navigationHAlign: "center",
        navigationVAlign: "bottom",
        navigationHOffset: 0,
        navigationVOffset: 20,
        soloArrowLeftHalign: "left",
        soloArrowLeftValign: "center",
        soloArrowLeftHOffset: 20,
        soloArrowLeftVOffset: 0,
        soloArrowRightHalign: "right",
        soloArrowRightValign: "center",
        soloArrowRightHOffset: 20,
        soloArrowRightVOffset: 0,
        dottedOverlay: "",
        fullWidth: "on",
        stopAfterLoops: 0,
        stopAtSlide: 1,
        shadow: 0
      });

    revapi = jQuery('#revolution-slider-full')
      .revolution({
        delay: 9000,
        startwidth: 960,
        startheight: 730,
        onHoverStop: "on",
        thumbWidth: 100,
        thumbHeight: 50,
        thumbAmount: 3,
        touchenabled: "on",
        stopAtSlide: -1,
        stopAfterLoops: -1,
        touchenabled: "on",
        navigationType: "none",
        navigationArrows: "solo",
        navigationStyle: "preview1",
        touchenabled: "on",
        onHoverStop: "on",
        swipe_velocity: 0.7,
        swipe_min_touches: 1,
        swipe_max_touches: 1,
        drag_block_vertical: false,
        keyboardNavigation: "on",
        navigationHAlign: "center",
        navigationVAlign: "bottom",
        navigationHOffset: 0,
        navigationVOffset: 20,
        soloArrowLeftHalign: "left",
        soloArrowLeftValign: "center",
        soloArrowLeftHOffset: 20,
        soloArrowLeftVOffset: 0,
        soloArrowRightHalign: "right",
        soloArrowRightValign: "center",
        soloArrowRightHOffset: 20,
        soloArrowRightVOffset: 0,
        dottedOverlay: "",
        fullWidth: "on",
        fullScreen: "on",
        stopAfterLoops: 0,
        stopAtSlide: 1,
        shadow: 0
      });

    // revolution slider ver 2
    var revext = jQuery;
    var revapi;
    revext(document).ready(function () {
      if (revext("#rev-commerce").revolution == undefined) {
        revslider_showDoubleJqueryError("#rev-commerce");
      } else {
        revapi = revext("#rev-commerce").show().revolution({
          sliderType: "standard",
          jsFileLocation: "revolution/js/",
          sliderLayout: "auto",
          dottedOverlay: "none",
          delay: 9000,
          navigation: {
            keyboardNavigation: "off",
            keyboard_direction: "horizontal",
            mouseScrollNavigation: "off",
            mouseScrollReverse: "default",
            onHoverStop: "on",
            touch: {
              touchenabled: "on",
              swipe_threshold: 75,
              swipe_min_touches: 50,
              swipe_direction: "horizontal",
              drag_block_vertical: false
            }
            ,
            arrows: {
              style: "gyges",
              enable: true,
              hide_onmobile: false,
              hide_onleave: false,
              tmp: '',
              left: {
                h_align: "right",
                v_align: "bottom",
                h_offset: 160,
                v_offset: 0
              },
              right: {
                h_align: "right",
                v_align: "bottom",
                h_offset: 80,
                v_offset: 0
              }
            }
          },
          responsiveLevels: [1240, 1024, 778, 480],
          visibilityLevels: [1240, 1024, 778, 480],
          gridwidth: [1200, 1024, 778, 480],
          gridheight: [600, 600, 600, 600],
          lazyType: "single",
          parallax: {
            type: "scroll",
            origo: "slidercenter",
            speed: 400,
            levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
            type: "scroll",
          },
          shadow: 0,
          spinner: "off",
          stopLoop: "off",
          stopAfterLoops: -1,
          stopAtSlide: -1,
          shuffle: "off",
          autoHeight: "off",
          disableProgressBar: "on",
          hideThumbsOnMobile: "off",
          hideSliderAtLimit: 0,
          hideCaptionAtLimit: 0,
          hideAllCaptionAtLilmit: 0,
          debugMode: false,
          fallbacks: {
            simplifyAll: "off",
            nextSlideOnWindowFocus: "off",
            disableFocusListener: false,
          }
        });
      }
    });

  });
</script>


</body>

</html>