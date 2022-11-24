<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp1
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site__header">
		<?php /*Affichage du menu principal*/
        wp_nav_menu(array(
			"menu" => "principal",
			"container" => "nav",
            "container_class"=> "menu__principal")); ?>
		<div class="site__branding">

            <?php
			$wp1_description = get_bloginfo( 'description', 'display' );
			if ( $wp1_description || is_customize_preview() ) :
				?>
            <p class="site__description"><?php echo $wp1_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
        </div><!-- .site-branding -->

    </header><!-- #masthead -->
    <aside class="widget__area-1">
        <h2>Menu secondaire</h2>
		<?php wp_nav_menu(array(
			"menu" => "aside",
			"container" => "nav",
			"container_class" => "menu__aside"
		));
		?>
    </aside>
    <aside class="widget__area-2">
        <div><?php get_sidebar( 'aside-1' ); ?></div>
        <div><?php get_sidebar( 'aside-2' ); ?></div>
    </aside>