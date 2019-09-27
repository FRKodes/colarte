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

	<div class="container m-top-40">
		<div class="row">
			<?php 
			$args = array( 'post_type' => 'proyecto', 'posts_per_page' => 12 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
				?>
				<div class="col-xs-12 col-md-6 m-bottom-40">
					<div class="item-proyecto">
						<div class="info">
							<?php if (get_the_post_thumbnail()) { ?>
								<div class="logo"><?php the_post_thumbnail(); ?></div>
							<?php } ?>
							<h2 class="title title-project"><?php the_title(); ?></h2>
						</div>
						
						<?php
							$project_images = get_field('galeria_proyecto');
							if( $project_images ): ?>
								<ul class="images-project-container">
									<?php foreach( $project_images as $image ): ?>
										<li>
											<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
										</li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>

					</div>
				</div>
				<?php 
			endwhile;  ?>
			
		</div>

	</div>


</article><!-- #post-<?php the_ID(); ?> -->