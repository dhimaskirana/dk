<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package DK
 * @since DK 0.1
 */
?>
</section><!-- #main .site-main -->
<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="site-info">
		<a href="<?php echo esc_url(__('https://wordpress.org/', 'dk')); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf(esc_html__('Proudly powered by %s', 'dk'), 'WordPress');
			?>
		</a>
		<span class="sep"> | </span>
		<?php
		/* translators: 1: Theme name, 2: Theme author. */
		printf(esc_html__('%1$s designed by %2$s.', 'dk'), 'DK Themes', '<a href="https://www.dhimaskirana.com/">Dhimas Kirana</a>');
		?>
	</div><!-- .site-info -->
</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->
<?php wp_footer(); ?>
</body>

</html>