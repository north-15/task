<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Smartr
 */

get_header(); ?>
<?php do_action('smartr_search_page_before'); ?>
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'smartr' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part('partials/entry', get_post_format());
				
				?>

			<?php endwhile; ?>

			<div class="pagination-wrap top40">
					<?php
					if ( function_exists('smartr_bootstrap_pagination') )
					echo smartr_bootstrap_pagination();
					?>								
					</div>

		<?php else : ?>

			<?php get_template_part( 'partials/entry', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
<?php do_action('smartr_search_page_after'); ?>	
<?php get_footer(); ?>
