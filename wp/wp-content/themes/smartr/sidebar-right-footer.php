<?php
/**
 * The sidebar containing them right footer widgets
 *
 * @package smartr
 */

if ( ! is_active_sidebar( 'smartr-right-footer' ) ) {
	return;
}
?>

<div id="smartr-right-footer" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'smartr-right-footer' ); ?>
</div><!-- #secondary -->
