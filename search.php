<?php

/**
 * The template for displaying search results pages
 *
 * @package DK
 * @since DK 0.1
 */
get_header(); ?>
<div id="content" role="main">
	<?php if (have_posts()) : ?>
		<header class="page-header">
			<h1 class="page-title">
				<?php
				/* translators: %s: search query. */
				printf(esc_html__('Search Results for: %s', 'dk'), '<span>' . get_search_query() . '</span>');
				?>
			</h1>
		</header><!-- .page-header -->
	<?php
		/* Start the Loop */
		while (have_posts()) :
			the_post();
			get_template_part('template-parts/content', get_post_type());
		endwhile;
		the_posts_navigation();
	else :
		get_template_part('template-parts/content', 'none');
	endif;
	?>
</div><!-- #content -->
<?php get_sidebar();
get_footer(); ?>