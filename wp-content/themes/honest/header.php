<!doctype html>
<!--[if IE 8]> <html lang="en" class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php wp_title('•', '•', right); ?></title>

    <meta name="description" content="We are a FUN, non-intimidating non-competitive neighborhood training studio that believes in holistic wellness and sustainable/life changing fitness/nutrition programs. We offer small group circuit training, Indoor cycling and yoga for all levels.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/library/img/touch/favicon.png">

    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="196x196" href="<?php echo get_template_directory_uri(); ?>/library/img/touch/chrome-touch-icon-196x196.png">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Honest">

    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/img/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <?php if ( is_single() ) : ?>
    <meta property="og:title" content="<?php wp_title('•', '•', right); ?>">
    <meta property="og:site_name" content="<?php wp_title('•', '•', right); ?>">
    <meta property="og:url" content="<?php the_permalink(); ?>">
    <meta property="og:description" content="We are a FUN, non-intimidating non-competitive neighborhood training studio that believes in holistic wellness and sustainable/life changing fitness/nutrition programs. We offer small group circuit training, Indoor cycling and yoga for all levels.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/library/img/touch/facebook-icon.png">
    <?php endif; ?>

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

    <header role="banner" itemscope itemtype="http://schema.org/WPHeader">
      <div class="container">

        <div class="row">
          <div class="span12">

            <nav class="nav-mobile">
              <ul>
                <li>
                  <a href="/" class="logo-header-mobile">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/img/logos/honest.svg" alt="Honest Small Group Training" width="164" height="130">
                  </a>
                </li>
                <li>
                  <a href="#" class="menu-mobile js--hide-show-nav">
                    <span></span>
                    <span></span>
                    <span></span>
                  </a>
                </li>
              </ul>
            </nav>

            <nav class="nav-main" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
              <ul class="list-inline">
                <li><a href="/the-studio/" class="nav-item nav-the-studio">The Studio</a></li>
                <li><a href="/schedule/" class="nav-item nav-schedule">Schedule</a></li>
                <li><a href="/nutrition/" class="nav-item nav-nutrition">Nutrition</a></li>
                <li><a href="/blog/" class="nav-item nav-blog">Blog</a></li>
                <li class="tablet-hide mobile-hide">
                  <h1 itemscope itemtype="http://schema.org/Organization">
                    <a href="/" class="logo-header">
                      <img src="<?php echo get_template_directory_uri(); ?>/library/img/logos/honest.svg" alt="Honest Small Group Training" width="164" height="130">
                    </a>
                  </h1>
                </li>
                <li><a href="/memberships/" class="nav-item nav-memberships">Memberships</a></li>
                <li><a href="/contact/" class="nav-item nav-contact">Contact</a></li>
                <li><a href="/get-started/" class="btn btn--red">Get Started</a></li>
              </ul>
            </nav>

          </div>
        </div>

      </div>
    </header>