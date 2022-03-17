<?php
/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage creativity
 * @since creativity 1.0
 */

?>

<?php if ( has_nav_menu( 'primary' ) ) : ?>
  <div class="main-menu">
	   <nav id="site-navigation" class="primary-navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'creativity' ); ?>">
		     <div class="menu-button-container">
			    <button id="primary-mobile-menu" class="button" aria-controls="primary-menu-list" aria-expanded="false">
				    <span class="dropdown-icon open"><?php esc_html_e( 'Menu', 'creativity' ); ?>
					<//?php echo creativity_get_icon_svg( ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
				</span>
				<span class="dropdown-icon close"><?php esc_html_e( 'Close', 'creativity' ); ?>
					<//?php echo creativity_get_icon_svg( 'ui', 'close' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
				</span>
			</button><!-- #primary-mobile-menu -->
		</div><!-- .menu-button-container -->
    <ul class="menu-list">
      <li class="menu-item"><a aria-current="page">Creativity</a></li>
      <li class="menu-item"><a href="#blog">Blueprints</a></li>
    </ul>
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'header',
				'menu_class'      => 'menu-wrapper',
				'container_class' => 'primary-menu-container',
				'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
				'fallback_cb'     => false,
			)
		);
		?>
	</nav><!-- #site-navigation -->
<?php endif; ?>
