<?php
/**
 * This file adds the Landing Page template to Amazing Times.
 *
 * @author Brad Potter
 * @package Amazing Times
 * @subpackage Customizations
 */

/*
Template Name: Landing Page
*/

//* Add custom body class to the head
add_filter( 'body_class', 'amazing_times_add_body_class' );
function amazing_times_add_body_class( $classes ) {

   $classes[] = 'amazing-times-landing';
   return $classes;
   
}

//* Force full width content layout
add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );

//* Remove site header elements
remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
remove_action( 'genesis_header', 'genesis_do_header' );
remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );

//* Remove navigation
remove_action( 'genesis_before_header', 'genesis_do_nav' );
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
remove_action('genesis_before_footer', 'amazingtimes_tertiary_menu', 10);

//* Remove breadcrumbs
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );

//* Remove site footer widgets
remove_action( 'genesis_before_footer', 'amazingtimes_sub_footer', 5 );
remove_action( 'genesis_before_footer', 'genesis_footer_widget_areas' );

//* Remove site footer elements
remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
remove_action( 'genesis_footer', 'genesis_do_footer' );
remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );

//* Run the Genesis loop
genesis();
