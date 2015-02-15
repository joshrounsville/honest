<?php get_header(); ?>


	<section role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
		<div class="container">

			<div class="row">
				<div class="span12">

					<?php if (is_category()) { ?>
						<h2>Posts Categorized: <?php single_cat_title(); ?></h2>
					<?php } elseif (is_tag()) { ?>
						<h2>Posts Tagged: <?php single_tag_title(); ?></h2>
					<?php } elseif (is_author()) {
						global $post;
						$author_id = $post->post_author;
					?>
						<h2>Posts By: <?php the_author_meta('display_name', $author_id); ?></h2>
					<?php } elseif (is_day()) { ?>
						<h2>Daily Archives: <?php the_time('l, F j, Y'); ?></h2>
					<?php } elseif (is_month()) { ?>
						<h2>Monthly Archives: <?php the_time('F Y'); ?></h2>
					<?php } elseif (is_year()) { ?>
						<h2>Yearly Archives: <?php the_time('Y'); ?></h2>
					<?php } ?>

				</div>
			</div>

			<div class="row">
				<div class="span8">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php the_title(); ?>
						<?php the_excerpt(); ?>
					<?php endwhile; endif; ?>
				</div>
				<div class="span4">
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