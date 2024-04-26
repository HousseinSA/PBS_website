<?php include("head.inc");
$page->edit(true);
?>

    <section class="sub-bnr">
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

        <?php foreach($page->children() as $service):?>
            <div class="row align-items-center">
                <div class="col-md-5 col-sm-12">
                    <figure class="about-img">
                        <img src="<?php echo $service->image->url?>" class="img-fluid" alt="Engineering Construction">
                    </figure>
                </div>
                <div class="col-md-7 col-sm-12">
                    <div class="about-text">
                        <h2> <span class="thm-color"><?php echo $service->title;?></span> </h2>
                        <div class="text">
                        <?php echo $service->section_description?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>



<?php include("foot.inc"); ?>