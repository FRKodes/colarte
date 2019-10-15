<?php
/**
 * The template for displaying taxonomy page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Colarte
 * @since 1.0.0
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">
			
			<div class="container-fluid">
				<div class="row">
					<div class="banner-coleccion <?php echo $slices = end(explode('/', $_SERVER['REQUEST_URI'], -1)); ?>">
						<?php get_template_part( 'template-parts/content/content', 'banners' . end(explode('/', $_SERVER['REQUEST_URI'], -1)) . '' ); ?>
					</div>
				</div>
				<?php get_template_part( 'template-parts/content/content', 'colecciones-menu' ); ?>
			</div>

			<div class="container">
				<div class="row m-top-80 m-bottom-80">
					<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content/content', 'block-product' );

					endwhile; // End of the loop.
					?>

				</div>

				<div class="row m-bottom-80">
					<div class="col-xs-12 col-md-8 col-lg-6 ml-auto mr-auto">
						<div id="pagination" class="">
							<?php posts_nav_link(); ?>
						</div>
					</div>
				</div>
				
			</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();