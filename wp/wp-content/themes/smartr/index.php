<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Smartr
 */

get_header(); ?>

<?php do_action('smartr_index_before');?>

	<div id="primary" class="content-area top40">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part('partials/entry',get_post_format());// do_action('smartr_index_loop');?>

			<?php endwhile; ?>

			<div class="pagination-wrap">
			
				<?php if(function_exists('the_posts_pagination')) : ?>				
				<?php
				the_posts_pagination( array(
				'prev_text'          => __( '&larr;', 'smartr' ),
				'next_text'          => __( '&rarr;', 'smartr' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'smartr' ) . ' </span>',
			) );
				
				?>
				<?php else: ?>			
					<?php the_posts_navigation(); ?>
				<?php endif; ?>			
			</div>

		<?php else : ?>

			<?php get_template_part( 'partials/entry', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php do_action('smartr_index_after');?>
<?php get_footer(); ?>
