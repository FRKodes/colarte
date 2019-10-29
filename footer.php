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
					<h4>CONTACTO</h4>
					<p>
						<a href="mailto:auxiliarcolarte@outlook.com" target="_blank">auxiliarcolarte@outlook.com</a> <br>
						<a href="mailto:moisesadrian30@outlook.com" target="_blank">moisesadrian30@outlook.com</a><br>
					</p>

					<p>
						
						<span class="icon-wa"></span> <a target="_blank" class="underline bold" href="https://api.whatsapp.com/send?phone=523318640767">+52 33 1864 0767</a><br>
						<span class="icon-wa"></span> <a target="_blank" class="underline bold" href="https://api.whatsapp.com/send?phone=523322567319">+52 33 2256 7319</a><br>
						Desde USA: 01 152 33 1864 0767<br>
					</p>

				</div>

				<div class="col-xs-12 col-md-4 col-footer">
					<h2>SUSCÍBETE A NUESTRO BOLETÍN</h2>
					<form action="">
						<div class="form-group">
							<input type="text" class="form-control newsletter" placeholder="Email">
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary send-btn centered" value="SUSCRIBIRME">
						</div>
					</form>
				</div>

				<div class="col-xs-12 col-md-4 col-footer">
					<h4>SÍGUENOS</h4>
					<ul class="social-stuff">
						<li><a href="https://www.facebook.com/MueblesColarteOficial/" target="_blank" title="Muebles Colarte en Facebook" class="icon-fb"></a></li>
						<li><a href="mailto:moisesadrian30@outlook.com" target="_blank" title="Mándanes un correo" class="icon-mail"></a></li>
						<li><a href="http://m.me/MueblesColarteOficial" target="_blank" title="Muebles Colarte en Messenger" class="icon-messenger"></a></li>
						<li><a href="https://www.instagram.com/muebles.colarte/" target="_blank" title="Muebles Colarte en Messenger" class="icon-ig"></a></li>
					</ul>
					<p>
						<b>Domicilio:</b> <br>
						Independencia #368-C <br>
						Colonia Los Puestos <br>
						Tlaquepaque Jalisco México. <br>
						C.P. 45638
					</p>
				</div>
			</div>
			
			<div class="row text-center">
				<div class="col-xs-12 col-md-12">
					<p>
						Visita nuestro <a class="bold" href="/politica-privacidad">Aviso de privacidad</a>
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
