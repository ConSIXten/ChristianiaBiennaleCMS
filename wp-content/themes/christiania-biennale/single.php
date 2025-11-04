<?php
/**
 * The template for displaying all single posts
 *
 * @package Christiania_Biennale
 * @since 1.0.0
 */

get_header();
?>

<main id="main" class="site-content">
    <div class="container">

        <?php
        while (have_posts()) : the_post();

            get_template_part('template-parts/content', 'single');

            // Previous/next post navigation
            the_post_navigation(array(
                'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'christiania-biennale') . '</span> <span class="nav-title">%title</span>',
                'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'christiania-biennale') . '</span> <span class="nav-title">%title</span>',
            ));

            // If comments are open or we have at least one comment, load up the comment template
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;

        endwhile;
        ?>

    </div><!-- .container -->
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
