<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage colarte
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link href="https://fonts.googleapis.com/css?family=Alegreya:500,700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content' ); ?></a>

		<header id="masthead" class="">

			<nav class="navbar navbar-expand-md fixed-top">
      
				<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-line"></span>
					<span class="navbar-toggler-line"></span>
					<span class="navbar-toggler-line"></span>
				</button>
				
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'collapse navbar-collapse' ) ); ?>

			</nav>


			<?php if ( is_singular() ) : ?>
				<div class="site-featured-image">

					<div class="<?php echo $classes; ?>">
						<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
					</div><!-- .entry-header -->

					<?php rewind_posts(); ?>

				</div>
			<?php endif; ?>
		</header><!-- #masthead -->

	<div id="content" class="site-content">
