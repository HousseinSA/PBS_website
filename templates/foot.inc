
<?php  $page->edit(true);?>
<footer class="footer-area pt-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-sm-6">
        <div class="footer-widget">
          <?php $footer = $pages->get('/footer/'); ?>
          <h3>
            <?=$footer->section_title; ?>
          </h3>
            <?=$footer->section_description; ?>
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
            <?=$footer_contact->title; ?>
          </h3>
          <ul>
            <li>
              <a href="tel:<?=$footer_contact->number; ?>">
                <i class="bx bxs-phone"></i>
                <?=$footer_contact->number; ?>
              </a>
            </li>
            <li>
              <a href="mailto:<?=$footer_contact->email; ?>">
                <i class="bx bxs-envelope"></i>
                <?=$footer_contact->email; ?>
              </a>
            </li>
            <li>
              <a href="https://www.google.com/maps/place/Nouakchott" target="_blank">
                <i class="bx bxs-location-plus"></i>
                <?=$footer_contact->location; ?>
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
            width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy">
          </iframe>
        </div>
      </div>
    </div>

  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="copyright-text">
          <?=$footer->copyright;?>
        </div>
      </div>
    </div>
  </div>
</footer>

<a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; display: block;">
  <i class="fas fa-long-arrow-alt-up"></i></a>
      
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="<?php echo AllInOneMinify::JS(array('scripts/jquery-3.3.1.slim.min.js','scripts/jquery-3.3.1.min.js','scripts/popper.min.js','scripts/bootstrap.min.js', 'scripts/wow.min.js' , 'scripts/rev-slider/jquery.themepunch.revolution.min.js' , 'scripts/rev-slider/jquery.themepunch.tools.min.js')); ?>"></script>

<script type="text/javascript"

  src="<?=$config->urls->templates; ?>scripts/rev-slider/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript"
  src="<?=$config->urls->templates; ?>scripts/rev-slider/jquery.themepunch.tools.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>

<script type="text/javascript" src="<?=$config->urls->templates; ?>scripts/jquery.counterup.min.js"></script>
<script type="text/javascript" src="<?=$config->urls->templates; ?>scripts/jquery.waypoints.min.js"></script>

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



<script src="<?=$config->urls->templates; ?>scripts/wow.min.js"></script>
<script>
  new WOW().init();
</script>

<script>
  $(document).ready(function () {
    $(window).scroll(function () {
      if ($(window).scrollTop() > 600) {
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
    jQuery('#revolution-slider-half').revolution({
        delay: 5000, // Set delay to 5 seconds (5000 milliseconds)
        startwidth: 1200,
        startheight: 630,
        onHoverStop: "off",
        touchenabled: "on",
        stopAtSlide: -1,
        stopAfterLoops: -1,
        navigationType: "arrows", // Enable navigation arrows
        navigationArrows: "solo", // Show navigation arrows
        navigationStyle: "preview1", // Choose a navigation style
        fullWidth: "on",
        autoPlay: true,
        shadow: 0,
        // Other properties remain unchanged
    });
});



</script>


</body>

</html>