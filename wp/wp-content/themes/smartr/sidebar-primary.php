<?php
/**
 * The sidebar containing them middle footer widgets
 *
 * @package smartr
 */

if ( ! is_active_sidebar( 'primary' ) ) {
	return;
}
?>

<div id="primary-sidebar">
	<?php dynamic_sidebar( 'primary' ); ?>

</div>