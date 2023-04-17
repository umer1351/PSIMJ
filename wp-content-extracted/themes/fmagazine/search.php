<?php
/**
 * The template for displaying search results pages.
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

		<div id="infoTxt">
			<?php printf( esc_html__( 'You searched for "%s". Here are the results:', 'fmagazine' ),
						get_search_query() );
			?>
		</div><!-- #infoTxt -->

		<?php if ( have_posts() ) :

				// starts the loop
				while ( have_posts() ) :

					the_post();

					/*
					 * include the post format-specific template for the content.
					 */
					get_template_part( 'template-parts/content', get_post_format() );

				endwhile;
		
				the_posts_pagination( array(
					    'prev_next' => '',
					) );

		      else :

					// if no content is loaded, show the 'no found' template
					get_template_part( 'template-parts/content', 'none' );
				
			  endif;
		?>

		</div><!-- #main-content-inner -->

		<?php get_sidebar('left'); ?>

	</div><!-- #main-content -->

	<?php get_sidebar(); ?>

</div><!-- #main-content-wrapper -->

<?php get_footer(); ?>