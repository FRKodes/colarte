<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage colarte
 * @since 1.0.0
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

		<div class="site-info container">

			<div class="row">
				<div class="col-xs-12 col-md-12 text-center">
					<img class="logo-colarte-footer" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-colarte-footer.png" alt="Logo footer Muebles Colarte">
				</div>
			</div>

			<div class="row text-center middle-align">
				
				<div class="col-xs-12 col-md-4 col-footer">
					<p>
						<b>Contacto:</b> <br>
						<a href="mailto:auxiliarcolarte@outlook.com" target="_blank">auxiliarcolarte@outlook.com</a> <br>
						<a href="mailto:moisesadrian13@outlook.com" target="_blank">moisesadrian13@outlook.com</a><br>
					</p>

					<p>
						Tel: +52 1 33 2256 7319<br>
						Desde Estados Unidos: 01 1521 33 1864 0767<br>
					</p>

					<p>
						<b>Domicilio:</b> <br>
						Independencia #368-C Colonia Los Puestos <br>
						Tlaquepaque Jalisco México. C.P. 45638
					</p>
				</div>

				<div class="col-xs-12 col-md-4 col-footer">
					<h2>SUSCÍBETE A NUESTRO BOLETÍN</h2>
					<form action="">
						<div class="form-group">
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary" value="SUSCRIBIRME">
						</div>
					</form>
				</div>

				<div class="col-xs-12 col-md-4 col-footer">
					<h4>SÍGUENOS</h4>
					<ul class="social-stuff">
						<li><a href="#" target="_blank" title="Muebles Colarte en Facebook" class="icon-fb"></a></li>
						<li><a href="#" target="_blank" title="Mándanes un correo" class="icon-mail"></a></li>
						<li><a href="#" target="_blank" title="Muebles Colarte en Messenger" class="icon-messenger"></a></li>
					</ul>
				</div>
			</div>
			
			<div class="row text-center">
				<div class="col-xs-12 col-md-12">
					<p>
						Visite nuestro: <br>
						<a class="bold" href="#">Aviso de privacidad</a> | <a class="bold" href="#">Términos y condiciones de uso</a>
					</p>
				</div>
			</div>

			<div class="row text-center">
				<div class="col-xs-12 col-md-12">
					<p>
						Desarrollado por <a class="bold" title="Branding + Web Development + Design with love from GDL MX." target="_blank" href="https://blueterrier.mx">Blue Terrier Studio</a>
					</p>
				</div>
			</div>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
