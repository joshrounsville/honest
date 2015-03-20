<?php
/*
 Template Name: Page - Contact
*/
?>


<?php get_header(); ?>


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
        <div class="span6 offset3">
          <div class="bg-white pad-v">
            <p class="section-headline-small text-uppercase strong">Studio Address</p>
            <ul class="pad-b">
              <li>4016 NE Fremont</li>
              <li>Portland, OR 97212</li>
              <li class="pad-t--10"><a href="#" target="_blank" class="text-uppercase link-gray-dark">(Directions)</a></li>
            </ul>

            <p class="section-headline-small text-uppercase strong">Call or Text Us</p>
            <ul>
              <li><a href="tel:5033676356" target="_blank" class="link-gray-dark">(503) 367-6356</a></li>
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

          <form action="#" class="form-contact">
            <div class="form-column form-column-left">
              <label>
                Your Name
                <input type="text" name="full-name" id="full-name" class="input-white" placeholder="First and last name">
              </label>
              <label>
                Your Email
                <input type="email" name="email-address" id="email-address" class="input-white" placeholder="Your email address">
              </label>
            </div>

            <div class="form-column form-column-right">
              <label>
                Your Name
                <textarea name="message" id="message" class="input-white" placeholder="Write your message" cols="30" rows="5"></textarea>
              </label>
              <input type="submit" class="btn btn--red btn--block" value="Submit">
            </div>
          </form>

        </div>
      </div>

    </div>
  </section>





<?php get_footer(); ?>