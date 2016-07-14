 <?php
 ?>
 
 <?php if ( is_singular( )) : // If viewing a single post. ?>
 
	<article <?php smartr_themes_attr( 'post' ); ?>>
			
				<?php do_action('smartr_single_entry_before_post_body');?>
				
				<div <?php smartr_themes_attr( 'postBody' ); ?>>
				
					<?php the_content(); ?>
					
					<?php
					
					wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'smartr' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'smartr' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
					) );
					
					?>
					
					<?php do_action('smartr_single_entry_body_bottom'); ?>
					
				</div><!-- .postBody -->
				
				<?php do_action('smartr_single_entry_footer'); ?>
				
				
	</article>			
			
		<?php else : // If not viewing a single post. ?>
		
		
		<!-- POST: <?php the_ID(); ?> -->
		
			<article id="post-<?php the_ID(); ?>" <?php post_class('smartr-entry-content'); ?>>
			
			<?php do_action('smartr_front_entry_before_post_body');?>
			
				<div <?php smartr_themes_attr( 'postBody' ); ?>>
				
				<?php
			
			if(get_theme_mod('smartr_front_content_excerpt_content','excerpt') == 'excerpt'){
				the_excerpt();
			}else{
			   the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'smartr' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );
			}
			?>				
				</div>
				
				<?php do_action('smartr_front_entry_footer');?>
				
			</article>
			
		<!-- ./ POST: <?php the_ID(); ?> -->
		
		<?php endif; // End single post check. ?>

	
