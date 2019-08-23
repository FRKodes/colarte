<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php get_template_part( 'template-parts/partials/inner', 'banner-top' ); ?>
	</header>
	
	<div class="container entry-content">
		<div class="row nosotros-first-block">
			
			<div class="col-xs-12 col-md-4 col-md-5 left-image"></div>

			<div class="col-xs-12 col-md-10 col-md-9 ml-auto nosotros-info">
				<h2>Expertos en capturar la escencia de méxico</h2>
				<?php the_content(); ?>
			</div>

		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="inner-banner-middle nosotros"></div>
		</div>
	</div>

	<div class="container entry-content">
		<div class="row nosotros-second-block">
			
			<div class="col-xs-12 col-md-10 mr-auto nosotros-info">
				<?php the_content(); ?>
				<h2>La belleza y magia de méxico hecha a tu medida</h2>
			</div>

			<div class="col-xs-12 col-md-4 ml-auto right-image"></div>

		</div>
	</div>

	<div class="entry-footer"></div>
</article><!-- #post-<?php the_ID(); ?> -->
