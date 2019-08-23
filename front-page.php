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
		
		<div class="container-fluid" style="background: purple;">
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
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam tenetur labore, odio reiciendis. Blanditiis amet error temporibus, est ab voluptates soluta.
				</p>
			</div>
		</div>
		

		<div class="container-fluid">
			<div class="row">
				<div class="categories-block">
					<div class="category-item">
						<div class="cat-banner catalogo"></div>
						<div class="cat-info">
							<h2><a href="#">Catálogo</a></h2>
							<a class="link-icon-mas" href="#"><span class="icon-mas"></span></a>
							<p class="block-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
							<a class="link-btn-mas" href="#">Ver más</a>
						</div>
					</div>
					
					<div class="category-item proyectos-item">
						<div class="cat-banner proyectos"></div>
						<div class="cat-info">
							<h2><a href="#">Proyectos</a></h2>
							<a class="link-icon-mas" href="#"><span class="icon-mas"></span></a>
							<p class="block-desc">Voluptatibus necessitatibus neque dolores temporibus deserunt beatae, fugit.</p>
							<a class="link-btn-mas" href="#">Ver más</a>
						</div>
					</div>
					
					<div class="category-item">
						<div class="cat-banner blog"></div>
						<div class="cat-info">
							<h2><a href="#">Blog</a></h2>
							<a class="link-icon-mas" href="#"><span class="icon-mas"></span></a>
							<p class="block-desc">Repellendus similique distinctio obcaecati doloremque voluptatibus necessitatibus cum voluptate!</p>
							<a class="link-btn-mas" href="#">Ver más</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		

		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-12">
					<h2 class="text-center m-top-80 m-bottom-40">PRODUCTOS DESTACADOS</h2>
					<div class="productos-destacados-container">
						<div class="item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/producto-silla.jpg" alt="producto silla Muebles Colarte"></a></div>
						<div class="item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/producto-silla.jpg" alt="producto silla Muebles Colarte"></a></div>
						<div class="item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/producto-silla.jpg" alt="producto silla Muebles Colarte"></a></div>
						<div class="item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/producto-silla.jpg" alt="producto silla Muebles Colarte"></a></div>
						<div class="item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/producto-silla.jpg" alt="producto silla Muebles Colarte"></a></div>
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
