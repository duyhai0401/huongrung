<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Sabino
 */
?><!DOCTYPE html> <!-- Sabino.ORG -->
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<!-- js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="page" class="hfeed site <?php echo sanitize_html_class( get_theme_mod( 'sabino-slider-type' ) ); ?> <?php echo ( get_theme_mod( 'sabino-content-layout' ) == 'sabino-content-layout-blocks' ) ? sanitize_html_class( 'content-layout-blocks' ) : sanitize_html_class( 'content-layout-joined' ); ?> <?php echo ( get_theme_mod( 'sabino-content-break-widgets' ) ) ? sanitize_html_class( 'content-broken-widgets' ) : sanitize_html_class( 'content-joined-widgets' ); ?> <?php echo ( get_theme_mod( 'sabino-remove-page-titles' ) ) ? sanitize_html_class( 'no-page-titles' ) : ''; ?>">

	<?php get_template_part( '/templates/header/header' ); ?>
	
	<?php if ( is_front_page() ) : ?>
	    
	    <?php get_template_part( '/templates/slider/homepage-slider' ); ?>
	    
	<?php endif; ?>

	<div class="site-container site-container-main <?php echo ( ! is_active_sidebar( 'sidebar-1' ) ) ? sanitize_html_class( 'content-no-sidebar' ) : sanitize_html_class( 'content-has-sidebar' ); ?>">