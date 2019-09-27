<?php
/**
 * Template part for displaying catalog page content in page.php
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
				<h2>¡CONOCE NUESTRAS COLECCIONES!</h2>
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

	<div class="container-fluid">
		<div class="row">
			<div class="categories-block m-top-40 back-bottom">
				<div class="category-item m-bottom--30">
					<div class="cat-banner chiapas"></div>
					<div class="cat-info chiapas top-0">
						<h2><a href="/coleccion/chiapas">Chiapas</a></h2>
						<a class="link-icon-mas" href="/coleccion/chiapas"><span class="icon-mas"></span></a>
						<p class="block-desc">Colores en su flora y fauna únicos en el mundo.</p>
						<a class="link-btn-mas" href="/coleccion/chiapas">Ver más</a>
					</div>
				</div>
				
				<div class="category-item m-bottom-330 proyectos-item">
					<!-- proyectos  -->
					<div class="cat-banner tequila"></div>
					<div class="cat-info tequila top-0">
						<h2><a href="/coleccion/tequila">Tequila</a></h2>
						<a class="link-icon-mas" href="/coleccion/tequila"><span class="icon-mas"></span></a>
						<p class="block-desc">Agaves, tequila y sus mariachis. Piezas que aportan personalidad a tus espacios.</p>
						<a class="link-btn-mas" href="/coleccion/tequila">Ver más</a>
					</div>
				</div>
				
				<div class="category-item m-bottom--30">
					<!-- blog -->
					<div class="cat-banner tradicional"></div>
					<div class="cat-info tradicional top-0">
						<h2><a href="/coleccion/tradicional">Tradicional</a></h2>
						<a class="link-icon-mas" href="/coleccion/tradicional"><span class="icon-mas"></span></a>
						<p class="block-desc">El folklore de México en su máximo esplendor.</p>
						<a class="link-btn-mas" href="/coleccion/tradicional">Ver más</a>
					</div>
				</div>

				<div class="category-item m-bottom-330 proyectos-item">
					<div class="cat-banner jalisco"></div>
					<div class="cat-info jalisco top-0">
						<h2><a href="/coleccion/jalisco">Jalisco</a></h2>
						<a class="link-icon-mas" href="/coleccion/jalisco"><span class="icon-mas"></span></a>
						<p class="block-desc">La perla tapatía, cultura que representa a México en el mundo.</p>
						<a class="link-btn-mas" href="/coleccion/jalisco">Ver más</a>
					</div>
				</div>

				<div class="category-item m-bottom--30">
					<!-- blog -->
					<div class="cat-banner porfiriana"></div>
					<div class="cat-info porfiriana top-0">
						<h2><a href="/coleccion/porfiriana">Porfiriana</a></h2>
						<a class="link-icon-mas" href="/coleccion/porfiriana"><span class="icon-mas"></span></a>
						<p class="block-desc">Recordando la época de oro de México del sigo XIX</p>
						<a class="link-btn-mas" href="/coleccion/porfiriana">Ver más</a>
					</div>
				</div>

			</div>
		</div>
	</div>


</article><!-- #post-<?php the_ID(); ?> -->