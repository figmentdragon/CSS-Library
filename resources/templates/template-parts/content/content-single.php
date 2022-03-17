<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package creativity
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header alignwide">
    <?php
    if ( is_singular() ) :
      the_title( '<h2 class="title">', '</h2>' );
    else :
      the_title( '<h3 class="title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
    endif; ?>
	   <div class="post-media">
       <?php
  		   $header_image = creativity_featured_overall_image();

  		     if ( 'disable' === $header_image ) : ?>
	        <?php creativity_post_thumbnail(); ?>
	       </div>
		</header><!-- .entry-header -->

	<div class="post-content">

    <?php if ( 'post' === get_post_type() ) : ?>
			<!-- Post Details -->
			<div class="post-details">
				<?php creativity_posted_on(); ?>
				<?php creativity_posted_by(); ?>
			</div>
			<!-- End Post Details -->
		<?php endif; ?>

	<?php creativity_single_image(); ?>

		<div class="the-content">
			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'creativity' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);

      wp_link_pages(
  			array(
  				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'creativity' ) . '">',
  				'after'    => '</nav>',
  				/* translators: %: Page number. */
  				'pagelink' => esc_html__( 'Page %', 'creativity' ),
  			)
  		);
  		?>
	   </div><!-- .entry-content -->
		<div class="post-footer">
			<?php do_action( 'incies_social_sharing' ,get_the_ID() ); ?>
			<div class="post-share-wrap">
				<?php do_action('creativity__social_sharing'); ?>
			</div>

			<div class="post-details">
				<?php creativity_entry_footer(); ?>
			</div>
		</div>
		<?php
			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'creativity' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'creativity' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		?>

	</div>
  <?php if ( ! is_singular( 'attachment' ) ) : ?>
		<?php get_template_part( 'template-parts/post/author-bio' ); ?>
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
