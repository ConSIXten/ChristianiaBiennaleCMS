<?php
/**
 * Template Name: Events Page
 * 
 * The template for displaying the Events page
 * 
 * @package ChristianiaBiennaleCMS
 * @since 1.0.0
 */

get_template_part('parts/header');
?>

<main id="primary" class="site-main">
    
    <article class="flex-center no-columns flex-column text-center">
        
        <!-- Top Stars -->
        <figure class="section-stars-container">
            <img class="section-stars" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/hjemmeside-03.png'); ?>" alt="stars" />
        </figure>
        
        <!-- Header Text -->
        <div>
            <h2 class="font-new-roman_italic line-height-1">
                <?php echo esc_html(get_theme_mod('events_header_text', 'Everything is free & everyone is welcome!')); ?>
            </h2>
        </div>
        
        <!-- Stars Divider -->
        <figure class="section-stars-container">
            <img class="section-stars" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/hjemmeside-03.png'); ?>" alt="stars" />
        </figure>
        
        <!-- Event 1: Pusherstreet -->
        <div>
            <h2 class="font-cooper-black font-size-xl margin-1 line-height-0 letters">
                <?php echo esc_html(get_theme_mod('event_1_title', 'Pusherstreet')); ?>
            </h2>
            <?php if (get_theme_mod('event_1_artists')): ?>
            <p class="font-new-roman_italic letters">
                <?php echo esc_html(get_theme_mod('event_1_artists', '')); ?>
            </p>
            <?php endif; ?>
            <?php if (get_theme_mod('event_1_description')): ?>
            <p class="font-size-xs margin-1 line-height-1 font-new-roman_italic-normal">
                <?php echo wp_kses_post(get_theme_mod('event_1_description', '')); ?>
            </p>
            <?php endif; ?>
            <?php if (get_theme_mod('event_1_details')): ?>
            <div class="font-size-xs font-new-roman_italic line-height-1">
                <?php echo wp_kses_post(get_theme_mod('event_1_details', '')); ?>
            </div>
            <?php endif; ?>
        </div>
        
        <!-- Stars Divider -->
        <div class="flex-center">
            <figure class="section-stars-container margin-1">
                <img class="section-stars" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/hjemmeside-03.png'); ?>" alt="stars" />
            </figure>
        </div>
        
        <!-- Event 2: Sculpturepark -->
        <div>
            <h2 class="font-cooper-black font-size-xl line-height-0 margin-1 letters">
                <?php echo esc_html(get_theme_mod('event_2_title', 'Sculpturepark in Fremtidsskoven')); ?>
            </h2>
            <?php if (get_theme_mod('event_2_artists')): ?>
            <p class="font-new-roman_italic letters">
                <?php echo esc_html(get_theme_mod('event_2_artists', '')); ?>
            </p>
            <?php endif; ?>
            <?php if (get_theme_mod('event_2_description')): ?>
            <p class="font-size-xs margin-1 line-height-1 font-new-roman_italic-normal">
                <?php echo wp_kses_post(get_theme_mod('event_2_description', '')); ?>
            </p>
            <?php endif; ?>
            <?php if (get_theme_mod('event_2_details')): ?>
            <div class="font-size-xs font-new-roman_italic margin-1 line-height-1">
                <?php echo wp_kses_post(get_theme_mod('event_2_details', '')); ?>
            </div>
            <?php endif; ?>
        </div>
        
        <!-- Stars Divider -->
        <figure class="section-stars-container margin-1">
            <img class="section-stars" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/hjemmeside-03.png'); ?>" alt="stars" />
        </figure>
        
        <!-- Event 3: Open air dub -->
        <div>
            <h2 class="font-cooper-black font-size-xl line-height-0 margin-1 letters">
                <?php echo esc_html(get_theme_mod('event_3_title', 'Open air dub closing ceremony')); ?>
            </h2>
            <p class="font-new-roman_italic letters">
                <?php echo wp_kses_post(get_theme_mod('event_3_artists', '')); ?>
            </p>
            <?php if (get_theme_mod('event_3_description')): ?>
            <p class="font-size-xs margin-1 line-height-1 font-new-roman_italic-normal">
                <?php echo wp_kses_post(get_theme_mod('event_3_description', '')); ?>
            </p>
            <?php endif; ?>
            <?php if (get_theme_mod('event_3_details')): ?>
            <div class="font-size-xs font-new-roman_italic margin-1 line-height-1">
                <?php echo wp_kses_post(get_theme_mod('event_3_details', '')); ?>
            </div>
            <?php endif; ?>
        </div>
        
        <!-- Stars Divider -->
        <figure class="section-stars-container margin-1">
            <img class="section-stars" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/hjemmeside-03.png'); ?>" alt="stars" />
        </figure>
        
        <!-- Event 4: Wonderland -->
        <div>
            <h2 class="font-cooper-black font-size-xl line-height-0 margin-1 letters">
                <?php echo esc_html(get_theme_mod('event_4_title', 'Performance and music in Wonderland')); ?>
            </h2>
            <?php if (get_theme_mod('event_4_artists')): ?>
            <p class="font-new-roman_italic letters">
                <?php echo wp_kses_post(get_theme_mod('event_4_artists', '')); ?>
            </p>
            <?php endif; ?>
            <?php if (get_theme_mod('event_4_description')): ?>
            <p class="font-size-xs margin-1 line-height-1 font-new-roman_italic-normal">
                <?php echo wp_kses_post(get_theme_mod('event_4_description', '')); ?>
            </p>
            <?php endif; ?>
            <?php if (get_theme_mod('event_4_details')): ?>
            <div class="font-size-xs font-new-roman_italic margin-1 line-height-1">
                <?php echo wp_kses_post(get_theme_mod('event_4_details', '')); ?>
            </div>
            <?php endif; ?>
        </div>
        
        <!-- Stars Divider -->
        <figure class="section-stars-container margin-1">
            <img class="section-stars" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/hjemmeside-03.png'); ?>" alt="stars" />
        </figure>
        
        <!-- Event 5: Cabaret -->
        <div>
            <h2 class="font-cooper-black font-size-xl line-height-0 margin-1 letters">
                <?php echo esc_html(get_theme_mod('event_5_title', 'Cabaret in Byens Lys')); ?>
            </h2>
            <?php if (get_theme_mod('event_5_artists')): ?>
            <p class="font-new-roman_italic letters">
                <?php echo wp_kses_post(get_theme_mod('event_5_artists', '')); ?>
            </p>
            <?php endif; ?>
            <?php if (get_theme_mod('event_5_description')): ?>
            <p class="font-size-xs margin-1 line-height-1 font-new-roman_italic-normal">
                <?php echo wp_kses_post(get_theme_mod('event_5_description', '')); ?>
            </p>
            <?php endif; ?>
            <?php if (get_theme_mod('event_5_details')): ?>
            <div class="font-size-xs font-new-roman_italic margin-1 line-height-1">
                <?php echo wp_kses_post(get_theme_mod('event_5_details', '')); ?>
            </div>
            <?php endif; ?>
        </div>
        
        <!-- Bottom Stars -->
        <figure class="section-stars-container margin-1">
            <img class="section-stars" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/hjemmeside-03.png'); ?>" alt="stars" />
        </figure>
        
    </article>

</main>

<?php
get_footer();
