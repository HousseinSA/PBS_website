
<?php  $page->edit(true);?>
<footer class="footer-area pt-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-sm-6">
        <div class="footer-widget">
          <?php $footer = $pages->get('/footer/'); ?>
          <edit 1054.section_title>
          <h3>
            <?=$footer->section_title; ?>
          </h3>
          </edit>
          <edit 1054.section_description>

            <?=$footer->section_description; ?>
            </edit>
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
        <?php $footer_contact = $pages->get('/contact/'); ?>
        <div class="footer-widget">
          <edit 1067.title>
          <h3>
            <?=$footer_contact->title; ?>
          </h3>
        </edit>
          <ul>
            <li>
              <a href="tel:<?=$footer_contact->number; ?>">
              <i class="fa fa-phone"></i>
                <?=$footer_contact->number; ?>
              </a>
            </li>
            <li>
              <a href="mailto:<?=$footer_contact->email; ?>">
              <i class="fa fa-envelope"></i>
                <?=$footer_contact->email; ?>
              </a>
            </li>
            <li>
              <a href="https://maps.app.goo.gl/xwjwjhJpqUJ6AQRX8" target="_blank">
              <i class="fa fa-map-marker"></i>
                <?=$footer_contact->location; ?>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6 col-sm-12">
        <div class="footer-widget">
          <h3>Localisation</h3>
          <iframe title="pbs location" id="location" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3795.690852071989!2d-15.980006224822128!3d17.94656748303919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTfCsDU2JzQ3LjYiTiAxNcKwNTgnMzguOCJX!5e0!3m2!1sen!2s!4v1715368894833!5m2!1sen!2s" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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






<script src="<?php echo AIOM::JS(array('scripts/jquery-3.3.1.slim.min.js','scripts/bootstrap.min.js')); ?>"></script>

            
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" ></script>

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

<!-- hero-slider -->

<script>
$(document).ready(function() {
    $('.slider-container').slick({
        autoplay: true,
        autoplaySpeed: 4000, // Slides every 4 seconds
        speed: 1000, // Transition speed
        arrows: false, // Remove arrows
        dots: false, // Remove dots
        fade: false, // Use slide animation
        cssEase: 'linear',
        pauseOnHover: false, // Continue sliding on hover
        pauseOnFocus: false, // Continue sliding on focus
       
    });
});
</script>





<script>
  $('.client-slider').slick({
    slidesToShow: 6,
    dots: false,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 1000, 
    pauseOnHover: false, 
    swipe: true,
    swipeToSlide: true,
    responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
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


</body>

</html>