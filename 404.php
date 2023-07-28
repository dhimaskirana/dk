<?php

/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package DK
 * @since DK 0.1
 */
get_header(); ?>
<div id="content" role="main">
	<article class="error-404 not-found">
		<header class="entry-header">
			<h1 class="entry-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'dk'); ?></h1>
		</header><!-- .entry-header -->
		<div class="entry-content">
			<p><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'dk'); ?></p>
			<?php get_search_form(); ?>
		</div>
	</article>
</div><!-- #content -->
<?php get_footer(); ?>