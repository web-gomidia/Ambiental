<div class="contact">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<h2>Entre em Contato Conosco</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-1 hidden-xs"></div>
			<?php
				wp_reset_query();
				$args = array( 'pagename' => 'contato'); 
				query_posts($args);
				while ( have_posts() ) : the_post();
			?>
			<div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
				<div class="row">
					<div class="col-xs-12">
						<div class="info">
							<p><?=get_post_meta(get_the_ID(), 'Descrição',true)?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="infos">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/map.png" class="img-responsive icon"/>
							<p><?=get_post_meta(get_the_ID(), 'Endereço',true)?></p>
							<p><?=get_post_meta(get_the_ID(), 'Cidade',true)?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
						<div class="infos">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/wpp.png" class="img-responsive icon"/>
							<p><?=get_post_meta(get_the_ID(), 'Telefone',true)?></p>
							<p><?=get_post_meta(get_the_ID(), 'Telefone 2',true)?></p>
						</div>
					</div>
					<div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
						<div class="infos">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail.png" class="img-responsive icon"/>
							<p><?=get_post_meta(get_the_ID(), 'Email',true)?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="social">
							<a href="<?=get_post_meta(18, 'Linkedin',true);?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
							<a href="<?=get_post_meta(18, 'Facebook',true);?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						</div>						
					</div>
				</div>
				<form action="#" method="post" class="form" id="contact" name="contact">
					<input type="hidden" name="captcha" id="cod_captcha" value="" class="captcha" />
					<input type="hidden" name="c_utmz" id="c_utmz" value="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> - <?php echo esc_url( home_url( '/contato' ) ); ?>" />
					<input type="hidden" value="contact" name="format">
					<input value="lascivite" name="emp" type="hidden">
					<input value="send" name="action" type="hidden">
					<input value="contato@lascivite.com.br" name="from_email" type="hidden">
					<input value="Lasciviteé" name="from_name" type="hidden">
					<input value="http://lascivite.com.br" name="site_url" type="hidden">
					<div class="row">
						<div class="col-lg-7 col-sm-7 col-md-7">
							<div class="form-group">
								<input type="text" class="form-control requerid" id="name" name="name" placeholder="Nome" aria-invalid="false" aria-required="true" value="" requerid="requerid"> 
							</div>
						</div>	
						<div class="col-lg-5 col-sm-5 col-md-5">
							<div class="form-group">
								<input type="email" class="form-control requerid" id="email" name="email" placeholder="E-mail" aria-invalid="false" aria-required="true" value="" requerid="requerid"> 
							</div>
						</div>
						<div class="col-lg-12 col-sm-12 col-md-12">
							<div class="form-group">
								<textarea class="form-control required" rows="3" cols="60" name="message" id="message" placeholder="Menssagem"></textarea>
							</div>
						</div>
						<div class="col-lg-12 col-sm-12 col-md-12">
							<center>
								<button class="btn btn-primary" id="sendmail" data-form="contact">Enviar</button>
							</center>
						</div>					    
					</div>
				</form>
			</div>
			<div class="col-xs-12 col-md-4 col-sm-4 col-lg-4">
				<center>
					<img src="<?=get_post_meta(get_the_ID(), 'Imagem',true)?>" class="img-responsive"/>
				</center>
			</div>
			<?php
				endwhile;
				wp_reset_query();
			?>	
        </div>
	</div>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.21174730958!2d-43.35567898551849!3d-21.772064385600448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x989b68ca924a15%3A0xe90fd761df3b9044!2sAv.+Presidente+Itamar+Franco%2C+Juiz+de+Fora+-+MG!5e0!3m2!1spt-BR!2sbr!4v1524507057466" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>