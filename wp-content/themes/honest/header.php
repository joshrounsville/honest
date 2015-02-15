<!doctype html>
<!--[if IE 8]> <html lang="en" class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

    <meta name="description" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/library/img/touch/favicon.png">

    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="196x196" href="<?php echo get_template_directory_uri(); ?>/library/img/touch/chrome-touch-icon-196x196.png">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Honest">

    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/img/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

    <header role="banner" itemscope itemtype="http://schema.org/WPHeader">
      <div class="container">

        <div class="row">
          <div class="span12">
            <a href="<?php echo home_url(); ?>" itemscope itemtype="http://schema.org/Organization"><?php bloginfo('name'); ?></a>

            <nav class="nav-main" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
              <?php wp_nav_menu(array(
                'container' => false,
                'container_class' => 'menu cf',
                'menu' => __( 'The Main Menu', 'bonestheme' ),
                'menu_class' => 'nav top-nav cf',
                'theme_location' => 'main-nav',
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'depth' => 0,
                'fallback_cb' => ''
              )); ?>
            </nav>

          </div>
        </div>

      </div>
    </header>