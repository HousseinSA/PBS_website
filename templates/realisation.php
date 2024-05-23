<?php include("head.inc");
$banner_image = $pages->get('/page_banner/');

?>
<?php include('banner.inc') ?>
<section class="about-us sec-padd-top projects" id="content">
    <div class="container">
        <?php foreach ($page->realisation as $item) : ?>
            <!-- Reset the counter at the beginning of each realisation iteration -->
            <?php $counter = 0; ?>
            <edit realisation>
            <div class="row align-items-center  project-item  justify-content-center text-center text-md-left">
                <div class="col-md-5 col-sm-12 mb-3 mb-md-0 d-flex justify-content-center justify-content-md-end">
                    <figure class="about-img">
                        <img src="<?= $item->image->url; ?>" class="img-fluid re-img" alt="PBS">
                    </figure>
                </div>
                <div class="col-md-7 col-sm-12">
                    <div class="about-text">
                        <h2><span class="thm-color"><?= $item->section_title; ?></span></h2>
                        <div class="text">
                            <?php foreach ($item->points as $point) : ?>
                                <?php $counter++; ?>
                                <div class="realisation">
                                    <span>
                                        <?php
                                        // Conditionally display "Maitre d'ouvrage:" or "Client:"
                                        if ($counter === 1) {
                                            echo "Maitre d'ouvrage:";
                                        } else {
                                            echo "Client:";
                                        }
                                        ?>
                                    </span>
                                  <p><?= $point->section_title; ?></p>  
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            </edit>
        <?php endforeach; ?>

    </div>
</section>



<?php include("foot.inc");
?>