<?php
/*
 Template Name: Page - Home
*/
?>


<?php get_header(); ?>
  <div class="bg-wrap bg-1-1"></div>

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
          <p class="text-highlight">We believe that small, consistent lifestyle changes lead to <i>major</i> transformations. At Honest's small group classes, you'll find a vibrant community of positive people creating a supportive, non-competitive, and fun environment that keeps you coming back for more. At Honest, our coaches focus on healthy, sustainable movements that make life—and loving your body—so much easier. Join us!</p>
        </div>
        <div class="span4">
          <p class="text-uppercase h1 pad-b--0">Nothing in life is more precious than health and wellness.</p>
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
            <div class="img-wrap text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/library/img/box-photo/spin.jpg" width="360" height="330" alt="Spinning Class">
            </div>
            <div class="content-wrap equal-height">
              <h5 class="text-uppercase text-red text-center">Indoor Cycling</h5>
              <p class="small pad-b--0">Indoor cycling combines high intensity interval training with muscle-building endurance training to get your heart pumping and sweat dripping! At Honest, indoor cycling classes mimic real-world road conditions to give you a total-body workout—while having a blast!</p>
            </div>
            <div class="text-center">
              <a href="/schedule/" class="btn btn--outline btn--med-width">View Schedule</a>
            </div>
          </div>
        </div>
        <div class="span4">
          <div class="box-photo">
            <div class="img-wrap text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/library/img/box-photo/circuit-training.jpg" width="360" height="330" alt="Circuit Training">
            </div>
            <div class="content-wrap equal-height">
              <h5 class="text-uppercase text-red text-center">Circuit Training</h5>
              <p class="small pad-b--0">At Honest, we offer small group personal training, which means that you and a handful of fun people will be working out together—and you'll still get plenty of personalized attention. It really feels like you have a personal trainer... with the benefit of cool people cheering you on.</p>
            </div>
            <div class="text-center">
              <a href="/schedule/" class="btn btn--outline btn--med-width">View Schedule</a>
            </div>
          </div>
        </div>
        <div class="span4">
          <div class="box-photo">
            <div class="img-wrap text-center">
              <img src="http://honestportland.com/wp-content/uploads/2016/04/combopic.jpg" width="360" height="330" alt="Spinning Class">
            </div>
            <div class="content-wrap equal-height">
              <h5 class="text-uppercase text-red text-center">Combo Classes</h5>
              <p class="small pad-b--0">From circuit and spin power classes to nutritional talks and weekend warrior workouts, Honest members have access to a whole schedule of fun, challenging classes that offer plenty of variety for every body—plus community events like costumed fun runs and themed spin parties!</p>
            </div>
            <div class="text-center">
              <a href="/schedule/" class="btn btn--outline btn--med-width">View Schedule</a>
            </div>
          </div>
        </div>
      </div>


      <div class="row pad-t pad-b--2x">
        <div class="span5 span-m-6 order-2">
          <div class="row pad-b--20">
            <div class="span11 offset1 span-m-12 offset-m-0">
              <h3 class="section-headline"><span class="count">03</span><span class="underline">About Us</span></h3>
            </div>
          </div>
          <div class="row pad-t--10">
            <div class="span11 offset1 span-m-12 offset-m-0">
              <p class="small">We are a <strong>fun, non-intimidating, non-competitive</strong> neighborhood training studio that believes in holistic wellness and sustainable life changing fitness and nutrition programs. That means no crash dieting, no body-trashing workouts, and plenty of laughter.</p>
              <p class="small">We specialize in world-class coaching, with a focus on getting bodies to move properly with lots of individual coaching and a huge variety of movements to target the whole body, every class.</p>
              <p class="small pad-b--20">Honest is a one-stop shop for fitness, from indoor cycling and kettlebell classes to TRX training, running clubs, kickboxing, weight training, and more. Thanks to our physical therapy and nutritionist partners, being a member of the Honest community is like having a passport to health. What are you waiting for?</p>
              <a href="/get-started/" class="btn btn--red btn--block">Get Started</a>
            </div>
          </div>
        </div>
        <div class="span7 span-m-6 order-1">
          <div class="video-wrap">
            <iframe src="//fast.wistia.net/embed/iframe/w50y8jfh10?videoFoam=true" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="651" height="366"></iframe>
            <h6 class="text-uppercase text-gray-light pad-t--10">Video Credit: <a href="http://www.craigflood.com/" target="_blank" class="link-gray-light">Craig Flood</a></h6>
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
          <p class="text-highlight text-white">Honest hosts classes throughout the week—morning and evening—to help you fit plenty of fun workouts into your schedule. <strong>Accountability</strong> is a big part of our plan for fitness success, which is why we offer monthly membership plans to help you reach your goals. The most important thing in a wellness program is consistency, and our classes will get you there.</p>
          <a href="/schedule/" class="btn btn--red">View Schedule</a>
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
        <div class="span8 span-m-6">
          <div class="box-community">
            <div class="box-community-inner">
              <ul class="feed-instagram" id="js--feed-instagram"></ul>
            </div>
          </div>
          <a href="https://instagram.com/paisleymeekin/" class="btn btn--outline btn--med-width" target="_blank">Visit us on Instagram</a>
        </div>
        <div class="span4 span-m-6">
          <div class="box-community">
            <div class="box-community-inner feed-reviews">
              <ul class="list-reviews">
                <li class="item-yelp">
                  <a href="http://www.yelp.com/biz/honest-training-portland?hrid=nIcYKKhHdEbWPncYY8zU6w" target="_blank">Love love love Honest Training! Currently taking Spinn and Circuit Training every week and I am addicted...</a>
                  <span>
                    <a href="http://www.yelp.com/user_details?userid=UAT__hOnztjVhDHyfqVdrw" target="_blank">Evelyn P.</a>
                  </span>
                </li>
                <li class="item-yelp">
                  <a href="http://www.yelp.com/biz/honest-training-portland?hrid=qy9H42l3naR15ddgpCBD-w" target="_blank">Holy moley! Where can you go to have fun, be healthy, and learn new things? Honest PT!!!</a>
                  <span>
                    <a href="http://www.yelp.com/user_details?userid=ldBY62UoYmUSjylfo3f3vQ" target="_blank">Alex D.</a>
                  </span>
                </li>
                <?php get_template_part( '/library/partials/yelp', 'api' ); ?>
                <li class="text-center">
                  <a href="http://www.yelp.com/biz/honest-training-portland" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/img/logos/yelp.svg" width="100" height="45" alt="Yelp">
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <a href="http://www.yelp.com/biz/honest-training-portland" class="btn btn--outline btn--med-width" target="_blank">Read Reviews</a>
        </div>
      </div>

    </div>
  </section>

<?php get_footer(); ?>

<script src="//fast.wistia.net/assets/external/E-v1.js" async></script>