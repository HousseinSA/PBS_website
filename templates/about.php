<?php include("head.inc");
$page->edit(true);
$banner_image = $pages->get('/page_banner/');
?>
<?php include('banner.inc') ?>

<section class="about-us sec-padd-top" id="content">
    <div class="container">
        <div class="row ">
            <div class="col-md-5 col-sm-12 ">
                <figure class="about-img">
                    <edit image>
                    <img src="<?= $page->image->url ?>" class="img-fluid" alt="About PBS | Poteaux Béton du Sahel ">
                    </edit>
                </figure>
            </div>
            <div class="col-md-7 col-sm-12">
                <div class="about-text">
                    <b>
                        <?= $page->section_description ?>
                        <ul>
                            <?php foreach ($page->points as $point) : ?>
                                <edit points >
                                <li>
                                    <?= $point->section_title; ?>
                                </li>
                                </edit>
                            <?php endforeach; ?>
                        </ul>
                        <p><?= $page->sub_title ?> </p>
                    </b>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include("foot.inc"); ?>