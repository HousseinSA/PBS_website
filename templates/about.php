<?php include("head.inc");
$page->edit(true);
?>
<section class="sub-bnr">
    <div class="position-center-center">
        <div class="container">
            <h4><?php echo $page->title?></h4>
            <hr class="main">
            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="<?php echo $pages->get('/')->url?>"><?php echo $pages->get('/')->title?></a></li>
                <li class="active"><?php echo $page->title?></li>
            </ol>
        </div>
    </div>
    <div class="scroll"> <a href="#content" class="go-down"></a></div>
</section>
<section class="about-us sec-padd-top" id="content">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 col-sm-12">
                <figure class="about-img">
                    
                    <img src="<?php echo $page->image->url?>" class="img-fluid" alt="About Trenty Engineering Construction">
                </figure>
            </div>
            <div class="col-md-7 col-sm-12">
                <div class="about-text">
                    <h2> <span class="thm-color"><?php echo $page->sub_title?></span> </h2>
                    <div class="text">

                        <p>
                            <b class="text-dark"><?php echo $page->section_description?>
                            <BR><BR>
                           
                        </p>



                    </div>
                </div>
            </div>
        </div>


    </div>
</section>

<!-- <section class="why-chooseus sec-padd2">
    <div class="container">
        <div class="section-title">
            <h3 class="blue_color">VISION</h3>
        </div>

        <div class="row">
            <div class="about-text">
                <div class="col-md-12 col-sm-12">
                    <p> “our vision is to create a better everydaylifefor citizen.”
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="section-title">
            <h3 class="blue_color">Mission</h3>
        </div>

        <div class="row">
            <div class="about-text">
                <div class="col-md-12 col-sm-12">
                    <p> "polite behaviour with all human, work
                        with sincerity by focusing on subject, close
                        monitoring, intelligent mind applications,
                        well experienced team, round the clock
                        working culture inherited in every one."</p>
                    <p class="center"> <strong>One Direction One Team One Voice.</strong> </p>
                </div>
            </div>
        </div>
    </div>
</section> -->






<?php include("foot.inc"); ?>