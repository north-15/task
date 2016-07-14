<?php

/**
* Template Name: Home
*
*/

get_header(); ?>

<?php do_action('smartr_home_content');?>

<div class="container-fluid">
	<div class="row">
		<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
	</div>
</div>
<?php get_footer(); ?>