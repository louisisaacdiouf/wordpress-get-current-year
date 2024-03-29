<?php
/**
 * @package GetProductCategoryPlugin
 */
/*
Plugin Name: WordPress Get Current Year
Plugin URI: https://github.com/louisisaacdiouf/wordpress-get-current-year
Description: Displays the current year using a shortcode.
Version: 1.0.0
Author: Louis Isaac Diouf
Author URI: https://github.com/louisisaacdiouf
Licence: GPLv2
*/

function_exists('add_action') or die("Avada kedavra!");

function current_year() {
    return date('Y');
}
add_shortcode('annee', 'current_year');