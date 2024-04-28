<?php include('head.inc');
$page->edit(true);  
$banner_image= $pages->get('/page_banner/');    

?>
<section class="sub-bnr" style=" background-position: center center; background-repeat: no-repeat;background-size: cover; background: url(<?php echo $banner_image->image->url;?>);">
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
<section class="about-us sec-padd-top " id="content">
    <div class="container">

    <?php foreach($page->project as $item):?>
        <div class="row align-items-center justify-content-center">
    <div class="col-md-5 col-sm-12 d-flex justify-content-center justify-content-md-end mb-3 mb-md-0">
        <figure class="about-img">
            <img src="<?php echo $item->image->url; ?>" class="img-fluid re-img" alt="PBS">
        </figure>
    </div>
    <div class="w-100 d-block d-md-none"></div> <!-- Force text to be under image on small screens -->
    <div class="col-md-7 col-sm-12 text-center text-md-left">
        <div class="about-text">
            <h2><span class="thm-color"><?php echo $item->section_title; ?></span></h2>
            <div class="text">
                <?php echo $item->section_description; ?>
            </div>
        </div>
    </div>
</div>

        <?php endforeach; ?>
    </div>
</section>

<?php include('foot.inc'); ?>
