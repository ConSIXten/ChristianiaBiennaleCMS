<?php
/**
 * Template Name: About Page
 * 
 * The template for displaying the About page
 * 
 * @package ChristianiaBiennaleCMS
 * @since 1.0.0
 */

get_template_part('parts/header');
?>

<main id="primary" class="site-main">
    
    <article class="flex-center no-columns flex-column text-center">
        
        <!-- Top Links -->
        <div class="about-links margin-top-1">
            <a href="<?php echo esc_attr(get_theme_mod('about_contact_url', 'mailto:info@christianiabiennale.com')); ?>" 
               class="about-link font-cooper-black font-size-m">
                <?php echo esc_html(get_theme_mod('about_contact_text', 'Contact')); ?>
            </a>
            
            <a href="<?php echo esc_url(get_theme_mod('about_instagram_url', 'https://www.instagram.com/christianiabiennale')); ?>" 
               class="about-link font-cooper-black font-size-m"
               target="_blank"
               rel="noopener noreferrer">
                <?php echo esc_html(get_theme_mod('about_instagram_text', 'Instagram')); ?>
            </a>
        </div>
        
        <!-- Stars Divider -->
        <figure class="section-stars-container margin-bot-1">
            <img class="section-stars" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/hjemmeside-03.png'); ?>" alt="stars" />
        </figure>
        
        <!-- First Text Block -->
        <?php if (get_theme_mod('about_text_block_1')): ?>
        <div class="about-text-block margin-2 margin-bottom-2">
            <p class="font-new-roman_italic-normal  line-height-1">
                <?php echo wp_kses_post(get_theme_mod('about_text_block_1', '')); ?>
            </p>
        </div>
        <?php endif; ?>
        
        <!-- Second Text Block -->
        <?php if (get_theme_mod('about_text_block_2')): ?>
        <div class="about-text-block margin-2 margin-top-1">
            <p class="font-new-roman_italic-normal line-height-1">
                <?php echo wp_kses_post(get_theme_mod('about_text_block_2', '')); ?>
            </p>
        </div>
        <?php endif; ?>
        
        <!-- Footer Text -->
        <?php if (get_theme_mod('about_footer_text')): ?>
        <div class="about-footer-text margin-top-1">
            <p class="font-new-roman_italic-normal font-size-xs line-height-1">
                <?php echo esc_html(get_theme_mod('about_footer_text', 'Christiania Biennale is a non-profit organisation supported by Fake Foundation, Wonderful Copenhagen and Forandringsplanen for Pusherstreet')); ?>
            </p>
        </div>
        <?php endif; ?>
        
        <!-- Bottom Stars -->
        <figure class="section-stars-container">
            <img class="section-stars" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/hjemmeside-03.png'); ?>" alt="stars" />
        </figure>
        
    </article>

</main>

<?php
get_footer();
