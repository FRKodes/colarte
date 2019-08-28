<?php
/**
 * The template for displaying all blog posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage colarte
 * @since 1.0.0
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main entries-container">

			<div class="inner-banner-top" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
				<?php the_title('<h1>', '</h1>') ?>
			</div>

			<div class="container">
				<div class="row">
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						
						the_post();

						get_template_part( 'template-parts/content/content', 'page-' );

					endwhile; // End of the loop.
					?>
				</div>
			</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
