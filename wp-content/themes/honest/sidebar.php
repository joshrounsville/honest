<div class="sidebar pad-b" role="complementary">

	<div class="box-sidebar">
    <h4 class="header-sidebar">About</h4>
    <div class="sidebar-content sidebar-content-about">
      <p>Paisley Meeking is a Certified Holistic Nutrition and Lifestyle Coach.</p>
    </div>
  </div>

  <div class="box-sidebar">
    <h4 class="header-sidebar">Featured Posts</h4>
    <div class="sidebar-content sidebar-content-featured-posts">
      <?php $featuredQuery = new WP_Query( array( 'posts_per_page' => 3, 'post_type' => array( 'post' ), 'meta_key' => '_thumbnail_id' ) ); ?>
      <?php if ( $featuredQuery->have_posts() ) : ?>
      <ul>
        <?php while ($featuredQuery->have_posts()) : $featuredQuery->the_post(); ?>
        <li>
          <?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'post-thumb' ); ?>
          <a href="<?php the_permalink(); ?>">
            <img src="<?php echo $thumbnail[0]; ?>" alt="<?php the_title(); ?>" alt="<?php the_title(); ?>" width="262" height="130">
          </a>
        </li>
        <?php endwhile; ?>
      </ul>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
    </div>
  </div>

  <div class="box-sidebar">
    <h4 class="header-sidebar">Archives</h4>
    <div class="sidebar-content sidebar-content-archives">
      <ul>
        <?php wp_get_archives(); ?>
      </ul>
    </div>
  </div>

  <div class="box-sidebar">
    <h4 class="header-sidebar">Categories</h4>

    <div class="sidebar-content sidebar-content-categories">
      <?php
        $args = array(
          'title_li' => ''
        );
      ?>
      <ul>
        <?php wp_list_categories( $args ); ?>
      </ul>
    </div>
  </div>

  <div class="box-sidebar">
    <h4 class="header-sidebar">Follow</h4>
    <div class="sidebar-content sidebar-content-follow text-center">
      <ul class="list-inline">
        <li><a href="#" target="_blank"><span class="fa fa-instagram"></span></a></li>
        <li><a href="#" target="_blank"><span class="fa fa-twitter-square"></span></a></li>
        <li><a href="#" target="_blank"><span class="fa fa-facebook-square"></span></a></li>
      </ul>
    </div>
  </div>
</div>