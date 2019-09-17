<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage colarte
 * @since 1.0.0
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main container">
			<div class="row text-center">
				
				<div class="col-xs-12 col-md-12 m-top-80 m-bottom-80">
					
					<div class="error-404 not-found">
						<header class="page-header">
							<h1 class="page-title">
								<?php _e( 'Oops! That page can&rsquo;t be found.'); ?>
									
								</h1>
						</header><!-- .page-header -->

						<div class="page-content">
							<p>
								<?php _e( 'It looks like nothing was found at this location. Maybe try a search?'); ?>
									
								</p>
							<?php get_search_form(); ?>
						</div><!-- .page-content -->
					</div><!-- .error-404 -->


				</div>

			</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
