<?php

/**
 * Social Menu Template
 *
 * @package creativity
 */
 ?>
 <div class="socials">
   <?php if ( has_nav_menu( 'social-menu' ) ) : ?>
	<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Menu', 'creativity' ); ?>">
		<?php
			wp_nav_menu( array(
				'theme_location'  => 'social-menu',
				'menu_class'      => 'social-links-menu',
				'container'       => 'div',
				'container_class' => 'menu-social-container',
				'depth'           => 1,
				'link_before'     => '<span class="screen-reader-text">',
				'link_after'      => '</span>' . creativity_get_svg( array( 'icon' => 'chain' ) ),
			) );
		?>
	</nav><!-- .social-navigation -->
<?php endif; ?>
</div>
<div class="search-box mr-2">
  <form role="search" method="get" class="search-form" action="http://localhost:10009/">
    <label>
      <span class="screen-reader-text">Search for:</span>
      <input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" />
    </label>
    <input type="submit" class="search-submit" value="Search" />
  </form>									</div>
  </div>
