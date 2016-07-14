<?php
/**
 * The template for displaying author archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package smartr
 */

get_header(); 

?>

<?php do_action('smartr_archive_page_before'); ?>

		<div id="content" class="content">
			<main id="main" class="site-main" >

			<?php if ( have_posts() ) : ?>
			
			<?php if(!get_theme_mod( 'smartr_show_custom_header_image',true) == true):?>
				<header class="page-header">
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
				</header><!-- .page-header -->
			<?php endif;?>
			
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php
							/* Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
					
							get_template_part('partials/entry', get_post_format());
							
						?>

				<?php endwhile; ?>

				<div class="clearfix"></div>
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

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>

			</main><!-- #main -->
		</div>
	
<?php do_action('smartr_archive_page_after'); ?>

<?php get_footer(); ?>
