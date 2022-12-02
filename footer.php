<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp1
 */

?>

<footer class="site__footer">

    <div><?php get_sidebar('footer-1')?></div>
    <div><?php get_sidebar('footer-2')?></div>
    <div><?php get_sidebar( 'footer-3' ); ?></div>
    <div><?php get_sidebar( 'footer-4' ); ?></div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
