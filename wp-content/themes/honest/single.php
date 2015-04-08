<?php get_header(); ?>
	<div class="bg-wrap bg-2-3"></div>

	<section class="pad-t--2x" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="container bg-white relative">

			<?php get_template_part( '/library/partials/sidebar', 'social' ); ?>

			<div class="row text-center pad-v">
        <div class="span12">
          <h3 class="section-headline"><span class="underline">Honest Blog</span></h3>
        </div>
      </div>

			<div class="row">
				<div class="span8">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<div class="post-wrap">

							<div class="post-meta">
								<time class="time-post" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('m.d.y'); ?></time>
								<h2 class="headline-post"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							</div>

							<?php if ( has_post_thumbnail() ) : ?>
							<div class="post-img-wrap">
								<?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'post-header' ); ?>
								<a href="<?php the_permalink(); ?>">
									<img src="<?php echo $thumbnail[0]; ?>" alt="<?php the_title(); ?>" alt="<?php the_title(); ?>" width="749" height="324"
									>
								</a>
							</div>
							<?php endif; ?>

							<div class="post-content">
								<?php the_content(); ?>
							</div>

							<div class="post-share">
								<ul class="list-inline left">
									<li>Share</li>
									<li><a href="#" data-type="twitter" data-title="<?php the_title(); ?>" data-url="<?php the_permalink(); ?>" class="js--share"><span class="fa fa-twitter-square"></span></a></li>
									<li><a href="#" data-type="facebook" data-title="<?php the_title(); ?>" data-url="<?php the_permalink(); ?>" class="js--share"><span class="fa fa-facebook-square"></span></a></li>
									<li><a href="#" data-type="google" data-title="<?php the_title(); ?>" data-url="<?php the_permalink(); ?>" class="js--share"><span class="fa fa-google-plus-square"></span></a></li>
								</ul>
							</div>

						</div>

					<?php endwhile; endif; ?>
				</div>
				<div class="span3 offset1">
					<?php get_sidebar(); ?>
				</div>
			</div>

			<div class="row">
				<div class="span12">
					<?php bones_page_navi(); ?>
				</div>
			</div>

		</div>
	</section>


<?php get_footer(); ?>
