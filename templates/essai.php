<?php include("head.inc");
$page->edit(true);
$banner_image = $pages->get('/page_banner/');

?>
<?php include('banner.inc') ?>

<section class="about-us sec-padd-top" id="content">
    <div class="container">
        <div class="section-title" style="text-align: center;">
            <span>
                <h1> 
                    <a href="<?php echo $pages->get('/')->url ?>">
                        <?= $page->section_title; ?>
                    </a>
                </h1>
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
                        <img class="img-fluid" src="<?= $item->image->url; ?>" alt="pbs essai| pbs mr pbs sahel  ">
                    </edit>
                    <p>
                        <?= $item->section_title; ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>




<?php include("foot.inc"); ?>