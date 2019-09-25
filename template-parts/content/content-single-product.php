<?php
/**
 * Template part for displaying products
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage colarte
 * @since 1.0.0
 */
?>

<?php 
	global $post;
	$terms = get_the_terms( $post->ID, 'coleccion' );
	foreach ($terms as $term){
	    $product_cat_id = $term->term_id;
	    $product_cat_name = $term->name;
		$product_cat_slug = $term->slug;
	    break;
	}
?>


<div class="container-fluid">
	<div class="row">
		<div class="banner-coleccion <?php echo $product_cat_slug; ?>">
			<?php get_template_part( 'template-parts/content/content', 'banners-' . $product_cat_slug ); ?>
		</div>
	</div>
	<div class="row"><?php get_template_part( 'template-parts/content/content', 'colecciones-menu' ); ?> </div>
</div>

<div class="product-all-stuff-container container">
	<div class="row">

		<div class="col-xs-12 col-md-6">
			
			<div class="product-gallery">
				<div class="main-image">
					<?php the_post_thumbnail(); ?>
				</div>
				<?php
				$images = get_field('galeria');

				if( $images ): ?>
				    <ul class="images">
				        <?php foreach( $images as $image ): ?>
				            <li>
				                <a href="<?php //echo $image['url']; ?>">
				                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
				                </a>
				                <p><?php echo $image['caption']; ?></p>
				            </li>
				        <?php endforeach; ?>
				    </ul>
				<?php endif; ?>
				
			</div>	
		</div>

		<div class="col-xs-12 col-md-6 info-column <?php echo $product_cat_slug; ?>">
			<div class="product-info">
				
				<h1 class="single-title <?php echo $product_cat_slug; ?>"><?php the_title() ?></h1>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
					</header>
					<div class="entry-content single-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
				</article>
			</div>
		</div>
	</div>
</div>

<div class="container">
	
	<h2 class="title related-products text-center">Productos Relacionados</h2>

	<div class="row">
			<?php
			$terms = get_the_terms( $post->ID , 'coleccion', 'string');
			$term_ids = wp_list_pluck($terms,'term_id');
			$second_query = new WP_Query( array(
				'post_type' => 'producto',
				'tax_query' => array(
				array(
					'taxonomy' => 'coleccion',
					'field' => 'id',
					'terms' => $term_ids,
					'operator'=> 'IN' //Or 'AND' or 'NOT IN'
				)),
				'posts_per_page' => 3,
				'ignore_sticky_posts' => 1,
				'orderby' => 'rand',
				'post__not_in'=>array($post->ID)
			) );

			if($second_query->have_posts()) {
				while ($second_query->have_posts() ) : $second_query->the_post(); ?>
				<div class="col-xs-12 col-sm-6 col-md-4 single_related">
					<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"> 
						<?php the_post_thumbnail( 'related_sm', array('alt' => get_the_title()) ); ?>
					</a>
				</div>

				<?php endwhile; wp_reset_query();
			}?>
	</div>

</div>