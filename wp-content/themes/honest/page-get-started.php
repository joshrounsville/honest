<?php
/*
 Template Name: Page - Get Started
*/
?>


<?php get_header(); ?>
  <div class="bg-wrap bg-2-3"></div>

  <section class="pad-t--2x" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="container bg-white relative">

    <?php get_template_part( '/library/partials/sidebar', 'social' ); ?>

      <div class="row text-center pad-v">
        <div class="span12">
          <h3 class="section-headline"><span class="underline">Get Started</span></h3>
        </div>
      </div>

      <div class="row text-center">
        <div class="span8 offset2">
          <p class="section-headline-small">Honest PT semi-private training works off an application and wait-list process.</p>
        </div>
      </div>

      <div class="row text-center">
        <div class="span4 offset4 span-l-6 offset-l-3 span-m-8 offset-m-2">
          <p>Please fill out the application below if you want to get in on this life changing program!</p>

          <div class="form-block pad-t pad-b--2x">
            <?php the_field('application_form'); ?>
          </div>
        </div>
      </div>

    </div>
  </section>





<?php get_footer(); ?>