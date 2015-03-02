<?php
/*
 Template Name: Page - Get Started
*/
?>


<?php get_header(); ?>


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
        <div class="span4 offset4">
          <p>Please fill out the application below if you want to get in on this life changing program!</p>

          <form action="#" class="form-block pad-t pad-b--2x">
            <label class="pad-b">
              First and Last Name<sup>*</sup>
              <input type="text" placeholder="Jane Smith" name="full-name" id="full-name" class="input-styled" required>
            </label>
            <label class="pad-b">
              Email Address<sup>*</sup>
              <input type="email" placeholder="Janesmith@gmail.com" name="email-address" id="email-address" class="input-styled" required>
            </label>
            <label class="pad-b">
              Why do you want to train with Honest PT?<sup>*</sup>
              <textarea placeholder="Write your response..." name="why-train" id="why-train" class="input-styled" required cols="30" rows="10"></textarea>
            </label>
            <label class="pad-b">
              What are the top 3 fitness/wellness/nutrition goals that you would like to accomplish in the next 6-12 months?<sup>*</sup>
              <textarea placeholder="Write your response..."  name="goals" id="goals" class="input-styled" required cols="30" rows="10"></textarea>
            </label>
            <label class="pad-b">
              What have you been doing for exercise over the last 3 months?<sup>*</sup>
              <textarea placeholder="Write your response..." name="exercise-history" id="exercise-history" class="input-styled" required cols="30" rows="10"></textarea>
            </label>
            <label class="pad-b">
              Have you ever worked with a trainer? If so, what was your favorite part? Least favorite?<sup>*</sup>
              <textarea placeholder="Write your response..." name="trainer" id="trainer" class="input-styled" required cols="30" rows="10"></textarea>
            </label>
            <label class="pad-b--10">
              If you had to give yourself your own advice about your fitness/nutrition... What would it be?<sup>*</sup>
              <textarea placeholder="Write your response..." name="advice" id="advice" class="input-styled" required cols="30" rows="10"></textarea>
            </label>
            <p class="text-right"><small><sup>*</sup>Required</small></p>
            <input type="submit" value="Submit" class="btn btn--red btn--block">
          </form>
        </div>
      </div>

    </div>
  </section>





<?php get_footer(); ?>