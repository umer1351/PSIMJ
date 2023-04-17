<?php
/**
 * The template for displaying the search form
 *
 * If you do have searchform.php in your Theme, it will be used instead. Keep in mind that 
 * the search form should do a GET to the homepage of your blog. The input text field 
 * should be named s and you should always include a label. 
 *
 * @subpackage fMagazine
 * @author tishonator
 * @since fMagazine 1.0.0
 * @link https://codex.wordpress.org/Function_Reference/get_search_form
 *
 */
?>

<div class="search-wrapper">
	<form method="get" action="<?php echo esc_url( home_url('/') ); ?>">
		<input type="text" name="s" size="17" class="search-textbox" placeholder="<?php echo esc_attr( __( 'Search...', 'fmagazine' ) ); ?>" tabindex="1" required />
		<button type="submit" class="search-button"></button>
	</form>
</div><!-- .search-wrapper -->