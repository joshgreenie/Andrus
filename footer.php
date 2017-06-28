<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Firetoss_Theme
 */


$signature_text = get_field('signature_text', 'option');
$signature_link = get_field('signature_link', 'option');

$footer_image = get_field('footer_image', 'option');
$footer_image_link = get_field('footer_image_link', 'option');

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">

    <div class="footer-wrapper">
        <div class="container">
            <div class="footer-content">
                <div class="footer-image-wrapper">
                    <a href="<?= $footer_image_link ? $footer_image_link : "" ?>"><img src="<?= $footer_image ? $footer_image : ""; ?>"></a>
                </div>
                <div class="footer-menus-wrapper">
                    <div class="footer-2"><?php dynamic_sidebar('footer-2'); ?></div>
                    <div class="footer-1">
                        <h3>Quick Links</h3>
                        <?php wp_nav_menu(array(
                            'menu' => 'footer-1'
                        )); ?></div>
                </div>
            </div>
        </div>
        <div class="site-info-wrapper">
            <div class="container">
                <p class="alignright">©2017 Andrus Transportation All Rights Reserved</p>
            </div>
        </div>
    </div>

</footer><!-- #colophon -->
</div><!-- #page -->
<script src="http://code.jquery.com/jquery-1.11.1.js"></script>
<script src="//cdn.rawgit.com/noelboss/featherlight/1.7.2/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>

<?php wp_footer(); ?>

</body>
</html>
