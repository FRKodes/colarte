<?php
/**
 * Template part for displaying contact page content in page.php
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
				<h2>¡DALE VIDA A TU RESTAURANTE!</h2>
			</div>
		</div>
	</div>
	
	<div class="container entry-content">
		<div class="row contact-first-block">
			<div class="col-xs-12 col-md-11 ml-auto">
				
				<div class="container contact-inner-block">
					<div class="row">
						<div class="col-xs-12 col-md-4 col-lg-3 ml-auto mr-auto">
							<?php the_content(); ?>
						</div>
						<div class="col-xs-12 col-md-6 mr-auto form">
							<form action="">
								<div class="form-group">
									<input type="text" name="" class="form-control" placeholder="Nombre" data-validate="required">
								</div>
								<div class="form-group flex">
									<input type="text" name="" class="form-control fifty" placeholder="Email" data-validate="required|email">
									<input type="text" name="" class="form-control fifty phone" placeholder="Teléfono">
								</div>
								<div class="form-group">
									<textarea name="mensaje" id="mensaje" placeholder="Mensaje" cols="30" rows="10" class="form-control"></textarea>
								</div>
								<div class="form-group radio">
									<input type="radio" class="form-control"> Me quiero suscribir al newsletter
								</div>
								<div class="form-group">
									<input type="text" class="btn btn-primary send-btn ml-auto" value="ENVIAR">
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="entry-footer">
		<div class="container-fluid">
			<div class="row m-top-40 m-bottom-80">
				<div class="address-container">
					<div class="address">
						<h3>FÁBRICA:</h3>
						<p>
							Independencia #368-C <br>
							Colonia Los Puestos <br>
							Tlaquepaque Jalisco México. C.P. 45638
						</p>
					</div>
				</div>
				
				<div class="map-container">
					<div id="map"></div>
				</div>

			</div>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->

<script>
function initMap() {
	var muebles_colarte = {lat: 20.603679, lng: -103.263382};
	var map = new google.maps.Map(
	document.getElementById('map'), {zoom: 11, center: muebles_colarte});
	var marker = new google.maps.Marker({position: muebles_colarte, map: map});
}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBR2bxbHLtJj9agfUxeojUUiusyxKaxso8&callback=initMap"> </script>