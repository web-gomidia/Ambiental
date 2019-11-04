<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

	<footer id="footer" role="contentinfo">
		<div class="container">
			<div class="menu-footer">
				<div class="row">
					<div class="col-xs-12 col-md-2 col-sm-2 col-lg-2">
						<center>
							<?php odin_the_custom_logo(); ?>
						</center>
					</div>					
					<div class="col-xs-12 col-md-10 col-sm-10 col-lg-10">
						<div class="menu">
							<nav class="collapse navbar-collapse navbar-main-footer" role="navigation">
								<?php
									wp_nav_menu(
										array(
											'theme_location' => 'main-menu',
											'depth'          => 2,
											'container'      => false,
											'menu_class'     => 'nav navbar-nav',
											'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
											'walker'         => new Odin_Bootstrap_Nav_Walker()
										)
									);
								?>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-xs-12 col-md-4 col-sm-4 col-lg-4">
					<div class="locate">
						
						<h4>Endereço</h4>
						<p>Av. Presidente Itamar Franco, 3.840</p>
						<p>salas 507 e 508</p>
					</div>
				</div>
				<div class="col-xs-12 col-md-3 col-sm-3 col-lg-3">
					<div class="locate">
						
						<h4>Vendas</h4>
						<p><?=get_post_meta(18, 'Telefone',true);?>(32) 98847-5381</p>
					</div>
				</div>
				<div class="col-xs-12 col-md-3 col-sm-3 col-lg-3">
					<div class="locate">
						
						<h4>Email</h4>
						<p><?=get_post_meta(18, 'Email',true);?>atendimento@meioambiental.com.br</p>
					</div>
				</div>			
				<div class="col-xs-12 col-md-2 col-sm-2 col-lg-2">
					<div class="social">
						<a href="<?=get_post_meta(18, 'Linkedin',true);?>" class="pull-right"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						<a href="<?=get_post_meta(18, 'Facebook',true);?>" class="pull-right"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div><!-- .container-->
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-10 col-sm-10 col-lg-10">
						<p>&copy; <?php echo date( 'Y' ); ?> <a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a> - <?php _e( 'All rights reserved', 'odin' ); ?></p>
					</div>
					<div class="col-xs-12 col-md-2 col-sm-2 col-lg-2 text-right">
						<a href="https://www.gomidia.com.br" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-go.png"/></a>
					</div>
				</div>
			</div>
		</div>		
	</footer><!-- #footer -->
	<?php wp_footer(); ?>
	<script>
		lightbox.option({
			'albumLabel': ''
		});		
	</script>
</body>
</html>
