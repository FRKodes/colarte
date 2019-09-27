<?php
/**
 * The front page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage colarte
 * @since 1.0.0
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">
		
		<div class="container-fluid">
			<div class="row">
				<div class="main-banners-container">
					<div class="item uno gray"></div>
					<div class="item dos purple"></div>
					<div class="item tres green"></div>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<p class="intro text-center">
					Fabricamos piezas auténticas que reflejan la cultura y tradiciones mexicanas para llevarlas mas allá de nuestras fronteras. <br><br>
					Nos enfocamos en brindar a nuestros clientes honestidad, responsabilidad, confianza, y amistad con cada uno ya que para nosotros antes de ser nuestro cliente es nuestro amigo y parte de esta gran familia MUEBLES COLARTE.
				</p>
			</div>
		</div>
		

		<div class="container-fluid">
			<div class="row">
				<div class="categories-block">
					<div class="category-item">
						<div class="cat-banner catalogo"></div>
						<div class="cat-info">
							<h2><a href="/catalogo">Catálogo</a></h2>
							<a class="link-icon-mas" href="/catalogo"><span class="icon-mas"></span></a>
							<p class="block-desc">Contamos con distintas líneas de producto, cada una de ellas con una identidad bien definida.</p>
							<a class="link-btn-mas" href="/catalogo">Ver más</a>
						</div>
					</div>
					
					<div class="category-item proyectos-item">
						<div class="cat-banner proyectos"></div>
						<div class="cat-info">
							<h2><a href="/proyectos">Proyectos</a></h2>
							<a class="link-icon-mas" href="/proyectos"><span class="icon-mas"></span></a>
							<p class="block-desc">Desarrollamos proyectos a la medida de las necesidades de nuestros clientes, convierte tu restaurant un pedacito de México.</p>
							<a class="link-btn-mas" href="/proyectos">Ver más</a>
						</div>
					</div>
					
					<div class="category-item">
						<div class="cat-banner blog"></div>
						<div class="cat-info">
							<h2><a href="/blog">Blog</a></h2>
							<a class="link-icon-mas" href="/blog"><span class="icon-mas"></span></a>
							<p class="block-desc">Conoce más acerca de nuestro trabajo, es un placer contarte nuestras historias del día a día.</p>
							<a class="link-btn-mas" href="/blog">Ver más</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-12">
					<h2 class="text-center m-top-80 m-bottom-40">PRODUCTOS DESTACADOS</h2>
					<div class="productos-destacados-container"><?php 
						$args = array( 'post_type' => 'producto', 'posts_per_page' => 6 );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<div class="item">
								<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
							</div> <?php 
						endwhile; ?>
					</div>
				</div>
			</div>
		</div>

		<?php
		// if ( have_posts() ) {

		// 	// Load posts loop.
		// 	while ( have_posts() ) {
		// 		the_post();
		// 		get_template_part( 'template-parts/content/content' );
		// 	}

		// } else {

		// 	// If no content, include the "No posts found" template.
		// 	get_template_part( 'template-parts/content/content', 'none' );

		// }
		?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php
get_footer();
