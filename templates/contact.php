

<?php include("head.inc");?>

<section class="sub-bnr">
    <div class="position-center-center">
      <div class="container">
        <h4><?php echo $page->title ?></h4>
        <hr class="main">
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
          <li><a href="<?php echo $pages->get('/')->url ?>"><?php echo $pages->get('/')->title ?></a></li>
          <li class="active"><?php echo $page->title ?></li>
        </ol>
      </div>
    </div>
    <div class="scroll"> <a href="#content" class="go-down"></a></div>
  </section>
<section class="contact-section pb-100 pt-100" id="content">
<div class="container">
<div class="section-title text-center">
<span><?php echo $page->title ?></span>
<h2><?php echo $page->section_title ?></h2>
<p><?php echo $page->sub_title ?></p>
</div>
<div class="row">
<div class="col-lg-3">
<div class="row">
<div class="col-lg-12 col-sm-6">
<div class="contact-card">
<i class="fas fa-mobile-alt"></i>
<ul>
<li>
<a href="tel:">
<?php echo $page->number ?>
</a>
</li>
<li>

</li>
</ul>
</div>
</div>
<div class="col-lg-12 col-sm-6">
<div class="contact-card">
<i class="far fa-envelope"></i>
<ul>
<li>
<a href="#">
<?php echo $page->email ?>

</a>
</li>
<li>
</li>
</ul>
</div>
</div>
<div class="col-lg-12 col-sm-6 offset-lg-0 offset-sm-3">
<div class="contact-card">
<i class="fas fa-map-marker-alt"></i>
<ul>
<li>
<?php echo $page->location ?>

</li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-lg-9">
<div class="contact-area">
<h3>Let's Talk</h3>
<form id="contactForm" novalidate="true">
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<input type="text" name="name" id="name" class="form-control" required="" data-error="Please enter your name" placeholder="Your Name">
<div class="help-block with-errors"></div>
</div>
 </div>
<div class="col-sm-6">
<div class="form-group">
<input type="email" name="email" id="email" class="form-control" required="" data-error="Please enter your email" placeholder="Your Email">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input type="number" name="number" id="number" class="form-control" required="" data-error="Please enter your number" placeholder="Phone Number">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input type="text" name="subject" id="subject" class="form-control" required="" data-error="Please enter your subject" placeholder="Your Subject">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-sm-12">
<div class="form-group">
<textarea name="message" class="message-field" id="message" rows="5" required="" data-error="Please type your message" placeholder="Write Message"></textarea>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-sm-12">
<button type="submit" class="default-btn contact-btn disabled" style="pointer-events: all; cursor: pointer;">
Send Message
</button>
<div id="msgSubmit" class="h3 alert-text text-center hidden"></div>
<div class="clearfix"></div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</section>

<?php include("foot.inc");?>

	