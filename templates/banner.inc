<section
  class="sub-bnr"
  style="
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    background: url(<?= $banner_image->image->url; ?>) no-repeat;
  "
>
  <div class="position-center-center">
    <div class="container">
      <h4><?= $page->title ?></h4>
      <hr class="main" />
      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li>
          <a href="<?= $pages->get('/')->url ?>"
            ><?= $pages->get('/')->title ?></a
          >
        </li>
        <li class="active"><?= $page->title ?></li>
      </ol>
    </div>
  </div>    
  <div class="scroll"><a href="#content" class="go-down"></a></div>
</section>
