<?php
/**
 * Template Name: Programme Page
 * 
 * The template for displaying the Programme page
 * 
 * @package ChristianiaBiennaleCMS
 * @since 1.0.0
 */

get_template_part('parts/header');
?>

<main id="primary" class="site-main">
    
    <article class="flex-center no-columns flex-column text-center">
        
        <!-- Top Stars -->
        <figure class="section-stars-container margin-top-2 margin-1">
            <img class="section-stars" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/hjemmeside-03.png'); ?>" alt="stars" />
        </figure>
        
        <!-- Tagline -->
        <div>
            <h2 class="font-new-roman_italic line-height-1 margin-1">
                <?php echo esc_html(get_theme_mod('programme_tagline', 'Everything is free & everyone is welcome!')); ?>
            </h2>
        </div>
        
        <!-- Stars Divider -->
        <figure class="section-stars-container margin-1">
            <img class="section-stars" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/hjemmeside-03.png'); ?>" alt="stars" />
        </figure>
        
        <!-- Download Link -->
        <?php if (get_theme_mod('programme_download_url')): ?>
        <div class="margin-2">
            <a href="<?php echo esc_url(get_theme_mod('programme_download_url')); ?>" 
               class="programme-download-link font-cooper-black font-size-m"
               target="_blank"
               rel="noopener noreferrer">
                <?php echo esc_html(get_theme_mod('programme_download_text', 'DOWNLOAD HERE')); ?>
            </a>
        </div>
        <?php endif; ?>
        
        <!-- Programme Poster Images -->
        <div class="programme-posters margin-top-2 margin-bottom-3">
            
            <?php
            // Poster Image 1
            $poster_1_id = get_theme_mod('programme_poster_1');
            if ($poster_1_id) {
                $poster_1_url = wp_get_attachment_image_url($poster_1_id, 'full');
                $poster_1_alt = get_post_meta($poster_1_id, '_wp_attachment_image_alt', true);
                ?>
                <figure class="programme-poster-container">
                    <img 
                        src="<?php echo esc_url($poster_1_url); ?>" 
                        alt="<?php echo esc_attr($poster_1_alt ? $poster_1_alt : 'Programme Poster 1'); ?>"
                        class="programme-poster"
                        loading="eager"
                    />
                </figure>
                <?php
            }
            
            // Poster Image 2
            $poster_2_id = get_theme_mod('programme_poster_2');
            if ($poster_2_id) {
                $poster_2_url = wp_get_attachment_image_url($poster_2_id, 'full');
                $poster_2_alt = get_post_meta($poster_2_id, '_wp_attachment_image_alt', true);
                ?>
                <figure class="programme-poster-container">
                    <img 
                        src="<?php echo esc_url($poster_2_url); ?>" 
                        alt="<?php echo esc_attr($poster_2_alt ? $poster_2_alt : 'Programme Poster 2'); ?>"
                        class="programme-poster"
                        loading="lazy"
                    />
                </figure>
                <?php
            }
            
            // Poster Image 3 (Optional)
            $poster_3_id = get_theme_mod('programme_poster_3');
            if ($poster_3_id) {
                $poster_3_url = wp_get_attachment_image_url($poster_3_id, 'full');
                $poster_3_alt = get_post_meta($poster_3_id, '_wp_attachment_image_alt', true);
                ?>
                <figure class="programme-poster-container">
                    <img 
                        src="<?php echo esc_url($poster_3_url); ?>" 
                        alt="<?php echo esc_attr($poster_3_alt ? $poster_3_alt : 'Programme Poster 3'); ?>"
                        class="programme-poster"
                        loading="lazy"
                    />
                </figure>
                <?php
            }
            ?>
            
        </div>
        
    </article>

</main>

<?php
get_footer();
