<?php
/*
 Template Name: Page - Home
*/
?>


<?php get_header(); ?>

  <section class="pad-t--4x" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="container bg-white relative">

      <?php get_template_part( '/library/partials/sidebar', 'social' ); ?>

      <div class="row text-center pad-v">
        <div class="span12">
          <h3 class="section-headline"><span class="count">01</span><span class="underline">We Believe</span></h3>
        </div>
      </div>
      <div class="row">
        <div class="span8">
          <p class="text-highlight">Healthy Sustainable programs that focus on Holistic nutrition and lifestyle changes. Supportive FUN and friendly community (non competitive). Small groups to ensure you get lots of coaching, support and form checking. Lot’s of variety of movements and classes... including functional strength, balance, mobility and agility/ cardiovascular training and conditioning.</p>
        </div>
        <div class="span4">
          <p class="text-uppercase h1 pad-b--0">We believe nothing in life is more precious than health and wellness.</p>
        </div>
      </div>


      <div class="row text-center pad-v">
        <div class="span12">
          <h3 class="section-headline"><span class="count">02</span><span class="underline">The Workouts</span></h3>
        </div>
      </div>
      <div class="row">
        <div class="span4">
          <div class="box-photo">
            <div class="img-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/library/img/box-photo/photo-box-1.jpg" alt="Placeholder">
            </div>
            <div class="content-wrap">
              <h5 class="text-uppercase text-red text-center">Indoor Cycling</h5>
              <p class="small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac varius quam, at ullamcorper dolor. Integer fermentum, nulla quis commodo lacinia, est arcu efficitur eros, ac iaculis lectus lectus vel augue. Sed sed diam massa. </p>
            </div>
          </div>
        </div>
        <div class="span4">
          <div class="box-photo">
            <div class="img-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/library/img/box-photo/photo-box-2.jpg" alt="Placeholder">
            </div>
            <div class="content-wrap">
              <h5 class="text-uppercase text-red text-center">Circuit Training</h5>
              <p class="small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac varius quam, at ullamcorper dolor. Integer fermentum, nulla quis commodo lacinia, est arcu efficitur eros, ac iaculis lectus lectus vel augue. Sed sed diam massa. </p>
            </div>
          </div>
        </div>
        <div class="span4">
          <div class="box-photo">
            <div class="img-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/library/img/box-photo/photo-box-3.jpg" alt="Placeholder">
            </div>
            <div class="content-wrap">
              <h5 class="text-uppercase text-red text-center">Yoga</h5>
              <p class="small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac varius quam, at ullamcorper dolor. Integer fermentum, nulla quis commodo lacinia, est arcu efficitur eros, ac iaculis lectus lectus vel augue. Sed sed diam massa. </p>
            </div>
          </div>
        </div>
      </div>


      <div class="row pad-t pad-b--2x">
        <div class="span7">
          <img src="<?php echo get_template_directory_uri(); ?>/library/img/photos/results.jpg" alt="Placeholder">
        </div>
        <div class="span5">
          <div class="row pad-b--20">
            <div class="span12">
              <h3 class="section-headline"><span class="count">03</span><span class="underline">Results</span></h3>
            </div>
          </div>
          <div class="row pad-t--10">
            <div class="span11 offset1">
              <p class="small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac varius quam, at ullamcorper dolor. Integer fermentum, nulla quis commodo lacinia, est arcu efficitur eros, ac iaculis lectus lectus vel augue. Sed sed diam massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac varius quam, at ullamcorper dolor. Integer fermentum, nulla quis commodo lacinia, est arcu efficitur eros, ac iaculis lectus lectus vel augue. Sed sed diam massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac varius quam, at ullamcorper dolor. Integer fermentum, nulla quis commodo lacinia, est arcu efficitur eros, ac iaculis lectus lectus vel augue. Sed sed diam massa.</p>
              <a href="#" class="btn btn--red btn--block">Get Started</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>


  <section>
    <div class="container bg-gray-dark pad-v">

      <div class="row">
        <div class="span4">
          <h2 class="text-schedule text-white"><span class="first">Sche</span><span class="second">dule</span></h2>
        </div>
        <div class="span8">
          <p class="text-highlight text-white">Workouts every day of the week. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <a href="#" class="btn btn--red">View Schedule</a>
        </div>
      </div>

    </div>
  </section>


  <section class="pad-b--2x">
    <div class="container bg-white bg-dotted pad-b--3x">

      <div class="row text-center pad-v">
        <div class="span12">
          <h3 class="section-headline"><span class="count">04</span> <span class="underline">Our Community</span></h3>
        </div>
      </div>

      <div class="row text-center">
        <div class="span4">
          <div class="box-community">
            <div class="box-community-inner feed-instagram" id="js--feed-instagram"></div>
          </div>
          <a href="#" class="btn btn--outline btn--med-width">Visit us on Instagram</a>
        </div>
        <div class="span4">
          <div class="box-community">
            <div class="box-community-inner feed-reviews">
              <ul class="list-reviews">
                <li>
                  "The trainers at Honest helped me transform my life!"
                  <span>Client Name Portland, Oregon</span>
                </li>
                <li>
                  "The trainers at Honest helped me transform my life!"
                  <span>Client Name Portland, Oregon</span>
                </li>
              </ul>
            </div>
          </div>
          <a href="#" class="btn btn--outline btn--med-width">Read Reviews</a>
        </div>
        <div class="span4">
          <div class="box-community">
            <div class="box-community-inner feed-twitter" id="js--feed-twitter"></div>
          </div>
          <a href="https://twitter.com/THEHonestpt" class="btn btn--outline btn--med-width" target="_blank">Connect on Twitter</a>
        </div>
      </div>

    </div>
  </section>


<?php get_footer(); ?>
