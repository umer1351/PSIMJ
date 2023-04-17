<?php
/**
 * Plugin Name: Responsive Accordion And Collapse
 * Version: 2.2.7
 * Description: Responsive Accordion is the most easiest drag & drop accordion builder for WordPress. You can generate multiple accordion and collapse with multiple colour.
 * Author: wpshopmart
 * Author URI: https://www.wpshopmart.com
 * Plugin URI: https://www.wpshopmart.com/plugins/
 *
 */

/**
 * DEFINE PATHS
 */
define('wpshopmart_accordion_directory_path', plugin_dir_path(__FILE__));
define("wpshopmart_accordion_directory_url", plugin_dir_url(__FILE__));
define("wpshopmart_accordion_text_domain", "wpsm_accordion");

/**
 * PLUGIN Install
 */
require_once("lib/installation/installation.php");
//require("responsive-accordion-addon.php");

/**
 * Responsive Accordion back end call
 */
require_once("lib/admin/menu.php");

/**
 * SHORTCODE
 */
require_once("front/shortcode.php"); 
 
?>