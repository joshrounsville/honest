<?php get_header(); ?>
	<div class="bg-wrap bg-2-3"></div>

	<section class="pad-t--2x" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
		<div class="container bg-white bg-dotted pad-b--3x">

			<div class="row text-center pad-v">
				<div class="span12">
					<h3 class="section-headline"><?php the_title(); ?></h3>
				</div>
			</div>

			<div class="row pad-b">
				<div class="span8 offset2">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; endif; ?>
				</div>
			</div>

		</div>
	</section>


<?php get_footer(); ?>
