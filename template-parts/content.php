<?php
/**
 * Template part for displaying posts
 * 
 * @package ChristianiaBiennaleCMS
 * @since 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php
        if (is_singular()) :
            the_title('<h1 class="entry-title">', '</h1>');
        else :
            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        endif;

        if ('post' === get_post_type()) :
            ?>
            <div class="entry-meta">
                <?php
                christiania_biennale_posted_on();
                christiania_biennale_posted_by();
                ?>
            </div>
        <?php endif; ?>
    </header>

    <?php christiania_biennale_post_thumbnail(); ?>

    <div class="entry-content">
        <?php
        if (is_singular()) {
            the_content(
                sprintf(
                    wp_kses(
                        __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'christiania-biennale'),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    wp_kses_post(get_the_title())
                )
            );

            wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'christiania-biennale'),
                'after'  => '</div>',
            ));
        } else {
            the_excerpt();
        }
        ?>
    </div>

    <footer class="entry-footer">
        <?php christiania_biennale_entry_footer(); ?>
    </footer>
</article>
