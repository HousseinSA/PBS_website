<?php include('head.inc');
// $page->edit(false);
$banner_image = $pages->get('/page_banner/');

?>
<?php include('banner.inc') ?>


<section class="about-us projects sec-padd-top " id="content">
    <div class="container"> 
        <?php foreach ($page->project as $item) : ?>
            <div class="row align-items-center project-item justify-content-center">
                <div class="col-md-5 col-sm-12 d-flex justify-content-center justify-content-md-end mb-3 mb-md-0">
                    <edit 1042.project.image>
                        <figure class="about-img">
                            <img src="<?= $item->image->url; ?>" class="img-fluid re-img" alt=" pbs project pbs mr pbs sahel">
                        </figure>
                    </edit>
                </div>
                <div class="w-100 d-block d-md-none"></div>
                <div class="col-md-7 col-sm-12 text-center text-md-left">
                    <div class="about-text">
                        <edit 1042.project.section_title>
                            <h1><span class="thm-color"><a  href="<?php echo $pages->get('/')->url?>"> <?= $item->section_title; ?>
                            </a>
                        </span></h1>
                        </edit>
                        <div class="text">
                            <edit 1042.project.section_description>
                                <?= $item->section_description; ?>
                            </edit>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</section>

<?php include('foot.inc'); ?>