<?php
/**
 * The sidebar containing them middle footer widgets
 *
 * @package smartr
 */

if ( ! is_active_sidebar( 'smartr-mid-footer' ) ) {
	return;
}
?>

<div id="smartr-mid-footer" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'smartr-mid-footer' ); ?>
</div><!-- #smartr-mid-footer -->
