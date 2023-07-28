<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @package DK
 * @since DK 0.1
 */
?>
<article class="no-results not-found">
    <header class="entry-header">
        <h1 class="entry-title"><?php esc_html_e('Nothing Found', 'dk'); ?></h1>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php
        if (is_home() && current_user_can('publish_posts')) :

            printf(
                '<p>' . wp_kses(
                    /* translators: 1: link to WP admin new post page. */
                    __('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'dk'),
                    array(
                        'a' => array(
                            'href' => array(),
                        ),
                    )
                ) . '</p>',
                esc_url(admin_url('post-new.php'))
            );

        elseif (is_search()) :
        ?>

            <p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'dk'); ?></p>
        <?php
            get_search_form();

        else :
        ?>

            <p><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'dk'); ?></p>
        <?php
            get_search_form();

        endif;
        ?>
    </div><!-- .entry-content -->
</article>