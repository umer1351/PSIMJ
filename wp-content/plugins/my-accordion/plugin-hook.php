<?php
/*
Plugin Name:  Accordion
Plugin URI: http://sohel.prowpexpert.com/
Description: This plugin will add an expand collapse accordion feature inside a post or page.
Author: sohelwpexpert
Author URI: http://sohel.prowpexpert.com/
Version: 1.1
*/

/*


[accordian]
[toggle title="Our Company Mission"]Fugiat dapibus, tellus ac cursus commodo, mauris sit condim eser ntumsi nibh, uum a justo vitaes amet risus amets un. Posi sectetut amet fermntum orem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nons.[/toggle]
[toggle title="The Prow Philosophy"]Fugiat dapibus, tellus ac cursus commodo, mauris sit condim eser ntumsi nibh, uum a justo vitaes amet risus amets un. Posi sectetut amet fermntum orem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nons.[/toggle]
[toggle title="The Prow Promise"]Fugiat dapibus, tellus ac cursus commodo, mauris sit condim eser ntumsi nibh, uum a justo vitaes amet risus amets un. Posi sectetut amet fermntum orem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nons.[/toggle]
[toggle title="We Can Deliver On Projects"]Fugiat dapibus, tellus ac cursus commodo, mauris sit condim eser ntumsi nibh, uum a justo vitaes amet risus amets un. Posi sectetut amet fermntum orem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nons.[/toggle]
[/accordian]



*/
/*Some Set-up*/
define('PRO_ACCORDION_TOW_WORDPRESS', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );



function ms_wp_accordion_two_latest_jquery() {
/**
 * Register global styles & scripts.
 */
wp_register_style('wp-accordion-plugin-style', PRO_ACCORDION_TOW_WORDPRESS.'style.css');

wp_register_script('wp-accordion-plugin-script-active', PRO_ACCORDION_TOW_WORDPRESS.'main.js', array( 'jquery' ));


/**
 * Enqueue global styles & scripts.
 */
 
wp_enqueue_style('wp-accordion-plugin-style');

wp_enqueue_script('wp-accordion-plugin-script-active');
wp_enqueue_script('jquery');
}
add_action( 'wp_enqueue_scripts', 'ms_wp_accordion_two_latest_jquery' );



/* Add Slider Shortcode Button on Post Visual Editor */

function sohelaccordion_button() {
	add_filter ("mce_external_plugins", "wpaccordion_two_button_js");
	add_filter ("mce_buttons", "wpaccordionb_two");
}

function wpaccordion_two_button_js($plugin_array) {
	$plugin_array['accordianwptutsa'] = plugins_url('accordian-button.js', __FILE__);
	return $plugin_array;
}

function wpaccordionb_two($buttons) {
	array_push ($buttons, 'sohelaccordiontriger');
	return $buttons;
}
add_action ('init', 'sohelaccordion_button'); 




//////////////////////////////////////////////////////////////////
// Accordian
//////////////////////////////////////////////////////////////////
add_shortcode('accordian', 'sohel_shortcode_accordian');
	function sohel_shortcode_accordian( $atts, $content = null ) {
	$out = '';
	$out .= '<div class="accordian">';
	$out .= do_shortcode($content);
	$out .= '</div>';
	
   return $out;
}	

//////////////////////////////////////////////////////////////////
// Toggle shortcode
//////////////////////////////////////////////////////////////////
add_shortcode('toggle', 'sohel_shortcode_toggle');
	function sohel_shortcode_toggle( $atts, $content = null ) {
	extract(shortcode_atts(array(
        'title'      => '',
        'open' => 'no'
    ), $atts));

    $toggleclass = '';
    $toggleclass2 = '';
    $togglestyle = '';

	if($open == 'yes'){
		$toggleclass = "active";
		$toggleclass2 = "default-open";
		$togglestyle = "display: block;";
	}

	$out = '';
	$out .= '<h5 class="toggle '.$toggleclass.'"><a href="#"><span class="arrow"></span>' .$title. '</a></h5>';
	$out .= '<div class="toggle-content '.$toggleclass2.'" style="'.$togglestyle.'">';
	$out .= do_shortcode($content);
	$out .= '</div>';
	
   return $out;
}
	

?>