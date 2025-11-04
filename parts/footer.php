<?php
/**
 * The footer for the theme
 * 
 * @package ChristianiaBiennaleCMS
 * @since 1.0.0
 */
?>

<footer class="footer">
    <div class="footer-grid">
        <!-- Footer Left -->
        <div class="footer-column footer-left">
            <?php if (is_active_sidebar('footer-left')) : ?>
                <?php dynamic_sidebar('footer-left'); ?>
            <?php else : ?>
                <!-- Default content if no widgets -->
                <div class="footer-widget">
                    <p>Add widgets in <strong>Appearance > Widgets > Footer Left</strong></p>
                </div>
            <?php endif; ?>
        </div>

        <!-- Footer Center -->
        <div class="footer-column footer-center">
            <?php if (is_active_sidebar('footer-center')) : ?>
                <?php dynamic_sidebar('footer-center'); ?>
            <?php else : ?>
                <!-- Default stars image -->
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <figure class="footer__stars-container">
                        <img 
                            class="footer__stars" 
                            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/hjemmeside-03.png'); ?>" 
                            alt="<?php bloginfo('name'); ?>" 
                        />
                    </figure>
                </a>
            <?php endif; ?>
        </div>

        <!-- Footer Right -->
        <div class="footer-column footer-right">
            <?php if (is_active_sidebar('footer-right')) : ?>
                <?php dynamic_sidebar('footer-right'); ?>
            <?php else : ?>
                <!-- Default content if no widgets -->
                <div class="footer-widget">
                    <p>Add widgets in <strong>Appearance > Widgets > Footer Right</strong></p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
