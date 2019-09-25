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

<div class="col-xs-12 col-md-4 product-item-grid">
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
	</header>

	<div class="entry-content text-center">
		<a href="<?php the_permalink(); ?>">
			<?php the_title('<h2 class="title text-center">', '</h2>') ?>
		</a>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		

	</footer><!-- .entry-footer -->

	</article>

</div>
