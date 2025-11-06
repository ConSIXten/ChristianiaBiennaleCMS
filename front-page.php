<?php
/**
 * The template for displaying the front page
 * 
 * @package ChristianiaBiennaleCMS
 * @since 1.0.0
 */

get_template_part('parts/header');
?>

<main id="primary" class="site-main">
    
    <!-- Landing Page Section -->
    <div class="flex-center flex-column margin-top-2 margin-bottom-3">
        
        <!-- Top Stars -->
        <figure class="landing-page-stars-container">
            <img 
                class="landing-page-stars" 
                src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/hjemmeside-03.png'); ?>" 
                alt="Christiania Biennale stars decoration"
                loading="eager"
            />
        </figure>
        
        <!-- Main Navigation Links - From WordPress Primary Menu -->
        <nav class="list-style-none flex flex-column text-center font-size-xxl">
            <?php
            // Display WordPress Primary Menu
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_id'        => 'landing-menu',
                'menu_class'     => 'flex flex-column',
                'container'      => false,
                'items_wrap'     => '%3$s',
                'link_before'    => '<span class="landing-link">',
                'link_after'     => '</span>',
                'fallback_cb'    => 'christiania_biennale_landing_menu_fallback',
            ));
            ?>
        </nav>
        
        <!-- Bottom Stars -->
        <figure class="landing-page-stars-container">
            <img 
                class="landing-page-stars" 
                src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/hjemmeside-03.png'); ?>" 
                alt="Christiania Biennale stars decoration"
                loading="lazy"
            />
        </figure>
        
    </div>

</main>

<?php
get_template_part('parts/footer');
