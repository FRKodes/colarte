<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage colarte
 * @since 1.0.0
 */

?>

<div class="inner-banner-top" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>

<div class="container-fluid no-padding">
	<div class="row">
		<div class="col-xs-12 col-md-12">
			<?php the_title('<h1 class="single-title text-center">', '</h1>') ?>
		</div>
	</div>
</div>

<div class="container">
	
	<div class="row">

		<div class="col-xs-12 col-md-11 ml-auto">
			
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<header class="entry-header">
				<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
			</header>

			<div class="entry-content single-content">
				<?php
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					)
				);

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . __( 'Pages:' ),
						'after'  => '</div>',
					)
				);
				?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
			</footer><!-- .entry-footer -->

			<?php if ( ! is_singular( 'attachment' ) ) : ?>
				<?php get_template_part( 'template-parts/post/author', 'bio' ); ?>
			<?php endif; ?>

			</article>

		</div>
	</div>
</div>
