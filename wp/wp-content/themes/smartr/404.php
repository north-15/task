<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Smartr
 */

get_header(); ?>

	<div class="clearfix"></div>
<div class="container">
	<div class="row">
		<div class="col-sm-offset-2 col-sm-8 col-md-8 text-center top60 smartr-four-o-four">
			<h2><?php echo esc_attr(get_theme_mod('smartr_four_zero_four_main', __('This Page Could Not Be Found!','smartr')));?></h2>
			<p><?php echo wp_kses_post(get_theme_mod('smartr_four_zero_four_sub',__('The page you are looking for might have been removed, had its name changed<br /> or is temporarily unavailable.','smartr')));?></p>
			<h1 class="top40"><?php echo esc_attr(get_theme_mod('smartr_four_zero_four_main',__('404','smartr'))) ;?></h1>
			<div class="top40">
				<?php get_search_form( $echo = true );?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
