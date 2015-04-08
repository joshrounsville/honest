<?php
/*
 Template Name: Page - The Studio
*/
?>


<?php get_header(); ?>
  <div class="bg-wrap bg-2-1"></div>

  <section class="pad-t--2x" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="container bg-white relative">

    <?php get_template_part( '/library/partials/sidebar', 'social' ); ?>

      <div class="row text-center pad-v">
        <div class="span12">
          <h3 class="section-headline"><span class="count">01</span><span class="underline">The Difference</span></h3>
        </div>
      </div>

      <div class="row pad-b">
        <div class="span12">

          <p>There are A LOT of personal trainers, bootcamps, and fitness studio's out there! I want you to know right away why Honest Training is different! Honest Training is about sustainable movement... we want to be 60-70 years old and rock'in it! Not trashing our bodies and preventing injury, not creating it!  We are about NOT DIETING... but creating and practicing healthy meal plans that support a healthy active lifestyle. Which includes a glass of wine every once and a while ;)</p>
          <p>We are about loving our bodies... practicing good body image.  We are about community!  Creating a supportive community of accountability is vital for success... being there for each other. Being real, being honest about the struggles as well as celebrating the victories! At Honest Training we offer semi private personal training. This means that you and 4-5 other people will be working out together. It really feel's like you still have a personal trainer... just add in a few other fun people :) This format allows for LOTS of coaching, modifications and more time/room to make the workout individual. This is key for people who need help with form and posture... which is EVERYONE! The semi private training also allows me to have a personal relationship with each and every one of my clients. I know who you are, I know your goals, and you will not be lost in the crowd of a group fitness class. Lastly, it's WAY FUN. Working out with other people is really motivating and fun!  You will find camaraderie, support, community and friendship.</p>

        </div>
      </div>

      <?php $queryTrainer = new WP_Query( array('post_type' => 'trainers', 'order' => 'ASC') ); ?>
      <?php $count = 1; if ($queryTrainer->have_posts()): ?>

      <div class="row text-center pad-b">
        <div class="span12">
          <h3 class="section-headline"><span class="count">02</span><span class="underline">Our Trainers</span></h3>
        </div>
      </div>

      <?php while ($queryTrainer->have_posts()) : $queryTrainer->the_post(); ?>

      <?php if ($count % 3 == 1): ?>
      <div class="row pad-b">
      <?php endif; ?>

        <div class="span4">
          <div class="box-trainer">
            <div class="img-wrap">
              <?php $thumbnailTrainer = wp_get_attachment_image_src( get_post_thumbnail_id(), 'trainer' ); ?>
              <img src="<?php echo $thumbnailTrainer[0]; ?>" alt="<?php the_title(); ?>" width="359" height="500">
            </div>
            <div class="content-wrap">
              <h3 class="h2 text-uppercase text-white"><?php the_title(); ?></h3>
              <ul class="text-uppercase text-white">
                <li class="left"><h6><?php echo custom_taxonomies_terms_links(); ?></h6></li>
                <li class="right"><h6>>>></h6></li>
              </ul>
              <div class="bio-wrap">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>

      <?php if ($count % 3 == 0): ?>
      </div>
      <?php endif; ?>

      <?php $count++; endwhile; endif; ?>

      <?php $count = $count - 1 ; if (0 != $count % 3): ?>
      </div>
      <?php endif; ?>

      <?php wp_reset_postdata(); ?>

    </div>


    <?php $queryResults = new WP_Query( array('post_type' => 'results') ); ?>
    <?php if ($queryResults->have_posts()): ?>

    <div class="container bg-gray-dark text-white pad-v">

      <div class="row pad-b text-center">
        <div class="span12">
          <h3 class="h2 text-uppercase">Results</h3>
        </div>
      </div>

      <div class="row pad-b--20">
        <div class="span12">

          <div class="slider slider-results">

            <?php while ($queryResults->have_posts()) : $queryResults->the_post(); ?>
            <div class="slide">
              <div class="row">
                <div class="span6 span-m-8">
                  <h6 class="text-uppercase pad-b--30"><?php the_title(); ?></h6>
                  <div class="content-wrap">
                    <?php the_content(); ?>
                  </div>
                </div>
                <div class="span6 span-m-4">
                  <?php $thumbnailResults = wp_get_attachment_image_src( get_post_thumbnail_id(), 'results' ); ?>
                  <img src="<?php echo $thumbnailResults[0]; ?>" alt="<?php the_title(); ?>" width="553" height="553">
                </div>
              </div>
            </div>
            <?php endwhile; ?>

          </div>

        </div>
      </div>
    </div>

    <?php endif; ?>
    <?php wp_reset_postdata(); ?>

  </section>


<?php get_footer(); ?>