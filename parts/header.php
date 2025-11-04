<?php
/**
 * The header for the theme
 * 
 * @package ChristianiaBiennaleCMS
 * @since 1.0.0
 */
?>
<?php get_template_part('parts/head'); ?>

<header class="flex-center header">
    <a href="<?php echo esc_url(home_url('/')); ?>">
        <figure class="header__headline-container">
            <?php
            // Check if a custom logo is set
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
                // Default logo image
                ?>
                <img
                    class="header__headline"
                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/hjemmeside-12.png'); ?>"
                    alt="<?php bloginfo('name'); ?>"
                    loading="eager"
                    width="200"
                    height="100"
                />
                <?php
            }
            ?>
        </figure>
    </a>
    
    <!-- Dropdown Menu -->
    <div class="dropdown" id="dropdown-menu">
        <button class="dropbtn" aria-label="Open menu" onclick="toggleDropdown()">
            <span role="img" aria-label="menu">☰</span>
        </button>
        <div class="dropdown-content font-new-roman_italic-normal font-size-xs">
            <?php
            // WordPress Menu
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_id'        => 'primary-menu',
                'container'      => false,
                'fallback_cb'    => 'christiania_biennale_default_menu',
            ));
            ?>
        </div>
    </div>
</header>
