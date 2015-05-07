<?php
/*
 Template Name: Page - Contact
*/
?>


<?php get_header(); ?>
  <div class="bg-wrap bg-2-3"></div>

  <section class="pad-t--2x" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="container bg-map relative">

    <?php get_template_part( '/library/partials/sidebar', 'social' ); ?>

      <div class="row text-center pad-t pad-b--30">
        <div class="span12">
          <h3 class="section-headline"><span class="underline">Contact Us</span></h3>
          <p class="pad-t--30 pad-b--0">Call us or email us for more info or any questions.</p>
        </div>
      </div>

      <div class="row pad-b--2x text-center">
        <div class="span6 offset3 span-l-8 offset-l-2">
          <div class="bg-white pad-v">
            <p class="section-headline-small text-uppercase strong">Studio Address</p>
            <ul class="pad-b">
              <li>4016 NE Fremont Street</li>
              <li>Portland, OR 97212</li>
              <li class="pad-t--10"><a href="https://goo.gl/maps/415Kg" target="_blank" class="text-uppercase link-gray-dark">(Directions)</a></li>
            </ul>

            <p class="section-headline-small text-uppercase strong">Call or Text Us</p>
            <ul>
              <li><a href="tel:9713618020" target="_blank" class="link-gray-dark">(971) 361-8020</a></li>
            </ul>
          </div>
        </div>
      </div>

    </div>

    <div class="container bg-gray-dark text-white">

      <div class="row text-center pad-v">
        <div class="span12">
          <h4 class="text-uppercase">Email Us</h4>
        </div>
      </div>

      <div class="row pad-b--2x">
        <div class="span10 offset1">
          <div class="form-contact">
            <?php the_field('contact_form'); ?>
          </div>
        </div>
      </div>

    </div>
  </section>


<?php get_footer(); ?>