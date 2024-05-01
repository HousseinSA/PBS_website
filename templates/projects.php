<?php include('head.inc');
// $page->edit(false);
$banner_image = $pages->get('/page_banner/');

?>
<?php include('banner.inc') ?>


<section class="about-us sec-padd-top " id="content">
    <div class="container">
        <?php foreach ($page->project as $item) : ?>
            <edit project>
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-5 col-sm-12 d-flex justify-content-center justify-content-md-end mb-3 mb-md-0">
                        <figure class="about-img">
                            <edit image>
                            <img src="<?= $item->image->url; ?>" class="img-fluid re-img" alt="PBS">
                            </edit>
                        </figure>
                    </div>
                    <div class="w-100 d-block d-md-none"></div> <!-- Force text to be under image on small screens -->
                    <div class="col-md-7 col-sm-12 text-center text-md-left">
                        <div class="about-text">
                            <h2><span class="thm-color"><?= $item->section_title; ?></span></h2>
                            <div class="text">
                                <?= $item->section_description; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </edit>
                <?php endforeach; ?>
    </div>
</section>

<?php include('foot.inc'); ?>