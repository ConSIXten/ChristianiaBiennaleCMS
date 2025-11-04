<?php
/**
 * The template for displaying all pages
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

            get_template_part('template-parts/content', 'page');

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
