<?php
/*
 Template Name: Page - Schedule
*/
?>


<?php get_header(); ?>


  <section class="pad-t--2x" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="container bg-white relative">

    <?php get_template_part( '/library/partials/sidebar', 'social' ); ?>

      <div class="row text-center pad-v">
        <div class="span12">
          <h3 class="section-headline"><span class="underline">Schedule</span></h3>
        </div>
      </div>

      <div class="row">
        <div class="span12">

          <div class="schedule-wrap">

            <script type="text/javascript">
              healcode_widget_id = "ad19953cb75";
              healcode_widget_name = "schedules";
              healcode_widget_type = "mb";
              document.write(unescape("%3Cscript src='https://widgets.healcode.com/javascripts/hc_widget.js' type='text/javascript'%3E%3C/script%3E"));
            </script>
            <noscript>Please enable Javascript in order to get <a href="https://manager.healcode.com" target="_blank">HealCode</a> functionality</noscript>

          </div>

        </div>
      </div>

      <div class="row text-center pad-v">
        <div class="span12">
          <a href="#" class="btn btn--red">See Full Schedule</a>
        </div>
      </div>

    </div>
  </section>


<?php get_footer(); ?>
