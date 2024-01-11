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

if (!defined( 'ABSPATH')) {
    die;
}

function mon_plugin_affichage_annee() {
    $annee = date('Y');
    return $annee;
}
add_shortcode('annee', 'mon_plugin_affichage_annee');