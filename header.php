<?php 
/**
 * The head of our theme
 *
 * @package WordPress
 * @subpackage Ramsay
 * @since Ramsay 1.0
 *
 *
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
	<head>
		<title><?php the_title()?> | Sydney Stempfley</title>
		
		<?php require_once(dirname(__FILE__)."/config.php"); ?>
		
		<!-- meta -->
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- css -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css">

		<link rel='stylesheet' id='slick-css' href='//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css?ver=1.5' type='text/css' media='all' />
		<link rel='stylesheet' id='nys_styles-css' href='https://notyourstandard.com/wp-content/themes/notyourstandard/style.css?ver=1.7' type='text/css' media='all' />
		<script type='text/javascript' src='https://notyourstandard.com/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
		<script type='text/javascript' src='https://notyourstandard.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
		<script type='text/javascript' src='https://notyourstandard.com/wp-content/themes/notyourstandard/js/vendor/modernizr-2.6.2.min.js?ver=1.2'></script>

		<?php wp_head(); ?>
	</head>
	<body class="home blog">
