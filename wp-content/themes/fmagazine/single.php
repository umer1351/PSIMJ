<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @subpackage fMagazine
 * @author tishonator
 * @since fMagazine 1.0.0
 *
 */

 get_header(); ?>

<div id="main-content-wrapper">
	<div id="main-content">

		<div id="main-content-inner">

		<?php if (have_posts()) :

				while (have_posts()) :
				
					the_post();
					
					/*
					 * includes a post format-specific template for single content
					 */
					get_template_part( 'template-parts/content', get_post_format() );
					
					// if comments are open or there's at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}

					wp_link_pages( array(
						'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'fmagazine' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
					) );
					
					the_post_navigation( array(

						'prev_text' => __( 'Previous Post: %title', 'fmagazine' ),
            			'next_text' => __( 'Next Post: %title', 'fmagazine' ),
					) );
					
					endwhile;
		?>
		<?php else :

					// if no content is loaded, show the 'no found' template
					get_template_part( 'template-parts/content', 'none' );

			  endif; ?>

		</div><!-- #main-content-inner -->

		<?php get_sidebar('left'); ?>

	</div><!-- #main-content -->

	<?php get_sidebar(); ?>

</div><!-- #main-content-wrapper -->

<?php get_footer(); ?>