<?php
/**
 * The sidebar containing them left footer widgets
 *
 * @package smartr
 */

if ( ! is_active_sidebar( 'smartr-left-footer' ) ) {
	return;
}
?>

<div id="smartr-left-footer" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'smartr-left-footer' ); ?>
</div><!-- #smartr-left-footer -->
