<?php 
/**
 *
 * The main template file
 *
 * @link https://localhost.com
 * @package WordPress
 * @subpackage Ramsay
 * @since Ramsay 1.0
 *
 */

get_header(); ?>

	<!-- logo -->
	<?php include  __DIR__ . "/includes/logo.php"; ?>

	<!-- side nav -->
	<?php include  __DIR__ . "/includes/main-nav.php"; ?>

	<!-- hamburger menu -->
	<?php include  __DIR__ . "/includes/fixed-menu.php"; ?>
	
	<!-- newsletter slider -->
	<?php include  __DIR__ . "/includes/newsletter.php"; ?>

	<!-- search -->
	<?php include  __DIR__ . "/includes/search.php"; ?>

	<!-- header-main -->
	<?php include  __DIR__ . "/includes/header-main.php"; ?>
	
	<?php the_content(); ?>

    </div><!-- main-col -->

<?php get_footer(); ?>