<?php include("head.inc");
$page->edit(true);
$banner_image = $pages->get('/page_banner/');

?>

<section class="sub-bnr" style="background-position: center center; background-repeat:no-repeat ;background-size: cover; background: url(<?php echo $banner_image->image->url; ?>) no-repeat;">
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
        <div style="text-align: center;">
            <h3><?php echo $page->title; ?></h3>
            <div class="centered-paragraph ">
                <?php echo $page->section_description; ?>
            </div>
        </div>
        <div class="essai_container">
            <?php foreach ($page->essai_item as $item) : ?>
                <div class="essai_item">
                    <h4 style="text-align: center;"><?php echo $item->sub_title; ?></h4>
                    <img class="img-fluid" src="<?php echo $item->image->url; ?>" alt="" style="max-width: 100%; height: auto;">
                    <p><?php echo $item->section_title; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="essai_comp">
            <?php foreach ($page->images as $image):?>
                <div >
                    <h4 class="essai_title"><?php echo $image->section_title; ?></h4>
                    <img class="img-fluid" src="<?php echo $image->icon_image->url; ?>" alt="" style="max-width: 100%; height: auto;">
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>




<?php include("foot.inc"); ?>