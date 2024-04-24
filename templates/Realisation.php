<?php include("head.inc");
$banner_image = $pages->get('/page_banner/');

?>
<section class="sub-bnr" style=" background-position: center center; background-repeat: no-repeat;background-size: cover; background: url(<?php echo $banner_image->image->url; ?>);">
    <div class="position-center-center">
        <div class="container">
            <h4><?php echo $page->title ?> </h4>
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
<section class="about-us sec-padd-top" id="content">
    <div class="container">
    <?php foreach ($page->realisation as $item) : ?>
    <!-- Reset the counter at the beginning of each realisation iteration -->
    <?php $counter = 0; ?>
    <div class="row align-items-center justify-content-center text-center text-md-left">
        <div class="col-md-5 col-sm-12 mb-3 mb-md-0 d-flex justify-content-center justify-content-md-end">
            <figure class="about-img">
                <img src="<?php echo $item->image->url; ?>" class="img-fluid re-img" alt="PBS">
            </figure>
        </div>
        <div class="col-md-7 col-sm-12">
            <div class="about-text">
                <h2><span class="thm-color"><?php echo $item->section_title; ?></span></h2>
                <div class="text">
                    <?php foreach ($item->points as $point) : ?>
                        <?php $counter++; ?>
                        <div>
                            <span>
                                <?php
                                if ($counter === 1) {
                                    echo "Maitre d'ouvrage:";
                                } else {
                                    echo "Client:";
                                }
                                ?>
                            </span>
                            <?php echo $point->section_title; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

    </div>
</section>



<?php include("foot.inc");
?>