<?php

/**
 * Template Name: Full Width Without Sidebar
 *
 * @package DK
 * @since DK 0.1
 */
get_header(); ?>
<div id="content" role="main">
	<?php
	while (have_posts()) :
		the_post();
		get_template_part('template-parts/content', 'page');
		// If comments are open or we have at least one comment, load up the comment template.
		if (comments_open() || get_comments_number()) :
			comments_template();
		endif;
	endwhile; // End of the loop.
	?>
</div><!-- #content -->
<?php get_footer(); ?>