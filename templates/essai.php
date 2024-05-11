<?php include("head.inc");
$page->edit(true);
$banner_image = $pages->get('/page_banner/');

?>
<?php include('banner.inc') ?>

<section class="about-us sec-padd-top" id="content">
    <div class="container">
        <div class="section-title" style="text-align: center;">
            <span>
            <h2>
                <?= $page->section_title; ?>
            </h2>
            </span>
            <div class="essai_desc ">
                <?= $page->section_description; ?>
            </div>
        </div>
        <div class="essai_container">
            <?php foreach ($page->essai_item as $item) : ?>
            <div class="essai_item">
                <h4 style="text-align: center;">
                    <?= $item->sub_title; ?>
                </h4>
                <edit 1109.essai_item.image>
                    <img class="img-fluid" src="<?= $item->image->url; ?>" alt="PBS |Poteaux Béton du Sahel"
                        style="max-width: 100%; height: auto;">
                </edit>
                <p>
                    <?= $item->section_title; ?>
                </p>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="essai_comp">
            <?php foreach ($page->images as $image):?>
            <div>
                <h4 class="essai_title">
                    <?= $image->section_title; ?>
                </h4>
                <edit 1109.images>
                    <img class="img-fluid" src="<?= $image->icon_image->url; ?>" alt="Pbs | Poteaux Béton du Sahel"
                        style="max-width: 100%; height: auto;">
                </edit>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</section>




<?php include("foot.inc"); ?>