<?php include("head.inc");
$page->edit(true); $banner_image = $pages->get('/page_banner/'); ?>
<?php include('banner.inc') ?>

<section  class="about-us sec-padd-top" id="content">
  <div class="container">
    <div class="about-container"  >
      <div >
        <figure class="about-img">
          <edit 1021.objectif_img >
            <img
              src="<?= $page->objectif_img->url ?>"
              class="img-fluid"
              alt=" pbs mauritania "
            />
          </edit>
        </figure>
      </div>
      <div class="about-content">
        <div class="about-text">
            <div class="section-title">
          <span> <h2><?php echo $page->objectif_title; ?> </h2> </span>
          <b>
            <?= $page->section_description ?>
            <ul>
              <?php foreach ($page->points as $point) : ?>
              <edit points>
                <li><?= $point->section_title; ?></li>
              </edit>
              <?php endforeach; ?>
            </ul>
            <p><?= $page->sub_title ?></p>
          </b>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include("foot.inc"); ?>
