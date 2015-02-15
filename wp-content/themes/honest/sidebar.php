<div class="sidebar" role="complementary">
	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
		<?php dynamic_sidebar( 'sidebar1' ); ?>
	<?php else : ?>
		no sidebar
	<?php endif; ?>
</div>