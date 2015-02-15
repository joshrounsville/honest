			<footer role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
        <div class="container">

          <div class="row">
            <div class="span12">

              <nav class="nav-foooter" role="navigation">
                <?php wp_nav_menu(array(
                  'container' => 'div',
                  'container_class' => 'footer-links cf',
                  'menu' => __( 'Footer Links', 'bonestheme' ),
                  'menu_class' => 'nav footer-nav cf',
                  'theme_location' => 'footer-links',
                  'before' => '',
                  'after' => '',
                  'link_before' => '',
                  'link_after' => '',
                  'depth' => 0,
                  'fallback_cb' => 'bones_footer_links_fallback'
                )); ?>
              </nav>

              <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

            </div>
          </div>

        </div>
      </footer>

		<?php wp_footer(); ?>

	</body>
</html>