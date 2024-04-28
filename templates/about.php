<?php include("head.inc");
$page->edit(true);
$banner_image = $pages->get('/page_banner/');
?>
<section class="sub-bnr" style=" background-position: center center; background-repeat: no-repeat;background-size: cover; background: url(<?php echo $banner_image->image->url; ?>);">
    <div class="position-center-center">
        <div class="container">
            <h4>presentation</h4>
            <hr class="main">
            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="<?php echo $pages->get('/')->url ?>"><?php echo $pages->get('/')->title ?></a></li>
                <li class="active">presentation</li>
            </ol>
        </div>
    </div>
    <div class="scroll"> <a href="#content" class="go-down"></a></div>
</section>
<section class="about-us sec-padd-top" id="content">
    <div class="container">
        <div class="row ">
            <div class="col-md-5 col-sm-12 ">
                <figure class="about-img">
                    <img src="<?php echo $page->image->url ?>" class="img-fluid" alt="About PBS ">
                </figure>
            </div>
            <div class="col-md-7 col-sm-12">
                <div class="about-text">
                    <b>
                        <?php echo $page->section_description ?>
                        <ul>
                            <?php foreach ($page->points as $point) : ?>
                                <li>
                                    <?php echo $point->section_title; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <p><?php echo $page->sub_title ?> </p>
                    </b>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include("foot.inc"); ?>