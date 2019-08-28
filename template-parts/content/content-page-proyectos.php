<?php
/**
 * Template part for displaying projects page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage colarte
 * @since 1.0.0
 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php get_template_part( 'template-parts/partials/inner', 'banner-top' ); ?>
	</header>
	

	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-md-12 back-texture text-center">
				<h2>¡UN GRAN PROYECTO, UN GRAN RESTAURANTE!</h2>
			</div>
		</div>
	</div>
	
	<div class="container entry-content">
		<div class="row">
			<div class="col-xs-12 col-md-11 ml-auto">

				<div class="catalog-inner-block">
					<div class="row">
						<div class="col-xs-12 col-md-11 ml-auto">
							<?php the_content(); ?>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>


</article><!-- #post-<?php the_ID(); ?> -->