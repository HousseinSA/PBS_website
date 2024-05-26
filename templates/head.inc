<!DOCTYPE html>
<html lang="fr">
<?php
// header("Cache-Control: max-age=604800"); 
?>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

  <?php echo $page->seo;?>

  <!-- favicon -->
  <link rel="icon" href="<?php echo $config->urls->templates; ?>img/favicon.png" type="image/x-icon">

  
  <link rel="stylesheet" href="<?php echo AIOM::CSS(array('styles/bootstrap.min.css','styles/custom.css')); ?>">
  

  <!-- font-awesome -->
  <link defer rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <link defer rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

</head>

<body>
  <div class="header" id="header">
    <header class="header-area header-style-two">
      <div class="container">
        <div class="row align-items-center justify-content-center ">
          <div class="col-md-4">
            <div class="header-left">
              <a href="" target="_blank" class="social-facebook">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="" target="_blank" class="social-twitter">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="" target="_blank" class="social-twitter">
                <i class="fab fa-whatsapp"></i>
              </a>
              <a href="" target="_blank" class="social-twitter">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
          <div class="col-md-10">
            <div class="header-right">
              <?php $contact_info = $pages->get('/contact/'); ?>
              <ul>
                <li>
                  <i class="far fa-clock"></i>
                  <?php echo $contact_info->work_time; ?>
                </li>
                <li>
                  <i class="fas fa-map-marker-alt"></i>
                  <a href="#location">
                  <?php echo $contact_info->location; ?>
                  </a>
                </li>
                <li>
                  <i class="fa fa-phone"></i>
                  <a href="
     tel:<?php echo $contact_info->number; ?>">
                    <?php echo $contact_info->edit('number'); ?>
                  </a>
                </li>
                <!-- <li>
                  <select
    class="select"
    onchange="window.location = this.value;"
> 
    <?php
    $userLanguageFound = false;
    foreach ($languages as $language) {
      if (!$page->viewable($language)) continue;
      // Check if the current language matches the user's language
      if ($user->language->id == $language->id) {
        $userLanguageFound = true;
        $selected = 'selected="selected"';
      } else {
        $selected = '';
      }
      // Generate the local URL for the language
      $url = $page->localUrl($language);

      // Output the option element with proper escaping
      echo '<option value="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '" ' . $selected . '>' . htmlspecialchars($language->title, ENT_QUOTES, 'UTF-8') . '</option>';
    }

    // Handle the default language if the user's language is not found
    if (!$userLanguageFound) {
      $defaultLanguage = $languages->getDefault();
      $defaultUrl = $page->localUrl($defaultLanguage);
      // Output the option element for the default language
      echo '<option value="' . htmlspecialchars($defaultUrl, ENT_QUOTES, 'UTF-8') . '" selected="selected">' . htmlspecialchars($defaultLanguage->title, ENT_QUOTES, 'UTF-8') . '</option>';
    }
    ?>
</select>
</li>  -->
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
            <a class="navbar-brand" href="<?php echo $pages->get('/')->url; ?>"><img width="200" height="100" src="<?php echo $pages->get('/header/')->image->url; ?>" alt="pbs logo pbs mr pbs sahel " class="img-fluid" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span></span>
              <span></span>
              <span></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <?php
              $defaultOptions = array(
                'wrapper_list_type' => 'ul', // ul, ol, nav, div, etc.
                'list_type' => 'li', // li, a, span, etc.
                'menu_css_id' => '', // a CSS ID for the menu
                'menu_css_class' => 'navbar-nav ml-auto', // a CSS Class for the menu
                'submenu_css_class' => 'dropdown-menu small-menu', // CSS Class for sub-menus
                'has_children_class' => '', // CSS Class for any menu item that has children
                'first_class' => '', // CSS Class for the first item in
                'last_class' => '',
                'current_class' => 'active',
                'default_title' => 0, // 0=show saved titles; 1=show actual/current titles
                'include_children' => 4, // whether to include natural/pw children of menu items in navigation; 0=never; 1=in menu only; 2=in breadcrumbs only; 3=in both; 4=do not show
                'm_max_level' => 1, // how deep to fetch 'include_children'
                'current_class_level' => 1, // how high up the ancestral tree to apply 'current_class'
                'default_class' => 'nav-item', // a CSS class to apply to all menu items
              );
              // Load the MarkupMenuBuilder module
              $menu = $modules->get('MarkupMenuBuilder');
              // Render the menu with the specified options
              echo $menu->render('main', $defaultOptions);
              ?>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</body>

</html>