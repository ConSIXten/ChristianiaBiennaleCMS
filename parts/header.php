<?php
/**
 * The header for the theme
 * 
 * @package ChristianiaBiennaleCMS
 * @since 1.0.0
 */
?>
<?php get_template_part('parts/head'); ?>

<header id="masthead" class="site-header">
    <div class="container">
        <div class="header-container">
            <div class="site-branding">
                <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                    ?>
                    <h1 class="site-title">
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                            <?php bloginfo('name'); ?>
                        </a>
                    </h1>
                    <?php
                    $description = get_bloginfo('description', 'display');
                    if ($description || is_customize_preview()) {
                        ?>
                        <p class="site-description"><?php echo $description; ?></p>
                        <?php
                    }
                }
                ?>
            </nav>
        </div>
    </div>
</header>
