<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>interior
		</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo $config->urls->templates; ?>css/bootstrap.min.css">
	    <!----css3---->
        <link rel="stylesheet" href="<?php echo $config->urls->templates; ?>css/custom.css">
		
        <link rel="stylesheet" href="font/flaticon.css">
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates; ?>css/settings.css" media="screen" />

	   
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo:wght@300;400;500;600;700;800&family=Lato:ital,wght@0,400;0,700;0,900;1,300&family=Montserrat:wght@300;400;500;600;700;800&family=Open+Sans:wght@300;400;500;600;700;800&family=Oswald:wght@200;300;400;500;600;700&family=PT+Sans:ital,wght@0,400;0,700;1,400&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,500&family=Roboto:wght@300;400;500;700;900&family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	
	<!--fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.x.x/css/all.css">

	   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	   
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">
  
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">

		
		
       <link rel="stylesheet" href="<?php echo $config->urls->templates; ?>css/animate.min.css">	
		
		

  
  </head>

<body>
    <div class="header" id="header">
        <header class="header-area header-style-two">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="header-left">
                            <a href="" target="_blank" class="social-facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="" target="_blank" class="social-twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="" target="_blank" class="social-twitter">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="" target="_blank" class="social-twitter">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="header-right">
                            <?php $header = $pages->get('/header/');?>
                            <ul>
                                <li>
                                    <i class="far fa-clock"></i>
                                    <?php echo $header->work_time;?>
                                </li>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <?php echo $header->location;?>

                                </li>
                                <li>
                                    <i class="fas fa-mobile-alt"></i>
                                    <?php echo $header->number;?>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="navigation" id="navigation">
            <div class="header-inner" id="header-inner">
                <div class="container">
                    <nav class="navbar navbar-expand-lg my-navbar p-0">
                        <a class="navbar-brand" href="index.php"><img src="<?php echo $header->image->url;?>"
                                class="img-fluid" /></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>

                        <div class="collapse navbar-collapse " id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">




                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" data-toggle="dropdown">Global Partner</a>
                                    <ul class="dropdown-menu small-menu">
                                        <a href="#">USA</a>
                                        <a href="#">India</a>
                                        <a href="#">Spain</a>
                                        <a href="#">Cyprus</a>
                                        <a href="#">Russia</a>
                                        <a href="#">S. Korea</a>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contactus</a>
                                </li>
                            </ul>


                        </div>

                    </nav>
                </div>
            </div>
        </div>

    </div>