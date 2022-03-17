<?php
/**
 * Template part for site-branding
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package creativity
 */

 $blog_info    = get_bloginfo( 'name' );
 $description  = get_bloginfo( 'description', 'display' );
 $show_title   = ( true === get_theme_mod( 'display_title_and_tagline', true ) );
 $header_class = $show_title ? 'site-title' : 'screen-reader-text';

?>

<div class="site-branding">
  <div class="logo">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/images/logo/logo-corner.png" alt="Logo" class="logo-img" width="400" height="400"/>
    </a>
  </div>

	<div class="site-identity">
		<h1 class="site-title top-to-bottom"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	</div><!-- .site-branding-text-->
</div><!-- .site-branding -->
