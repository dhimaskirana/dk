<?php

/**
 * The Sidebar containing the main widget areas.
 *
 * @package DK
 * @since DK 0.1
 */

if (!is_active_sidebar('sidebar')) {
	return;
}
?>
<div id="sidebar">
	<?php dynamic_sidebar('sidebar'); ?>
</div><!-- #sidebar -->