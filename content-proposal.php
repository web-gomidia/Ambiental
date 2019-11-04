
<?php
/**
 * The template used for displaying page content.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<article id="post-<?php the_ID(); ?>">
	<header id="header-section">
		<div class="image" style="background-image:url('<?=odin_get_image_url( get_post_thumbnail_id( get_the_ID() ), '', ''); ?>');"></div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<ol class="breadcrumb pull-left">
						<li><a href="<?=esc_url(home_url( '/' ))?>">Home</a></li>
						<li class="active"><?php the_title(); ?></li>
					</ol>					
				</div>
			</div>
		</div>
	</header>
	<div id="proposal">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="text">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-3 hidden-xs"></div>
				<div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
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
							<div class="col-lg-12 col-sm-12 col-md-12">
								<div class="form-group">
									<label for="name" class="control-label">Nome:</label>
									<div class="input-group"> 
										<input type="text" class="form-control requerid" id="name" name="name" aria-invalid="false" aria-required="true" value="" requerid="requerid"> 
										<span class="input-group-addon active btn-primary"><i class="fa fa-user"></i></span>                   
									</div>
								</div>
							</div>	
							<div class="col-lg-7 col-sm-7 col-md-7">
								<div class="form-group">
									<label for="name" class="control-label">E-mail:</label>
									<div class="input-group"> 
										<input type="email" class="form-control requerid" id="email" name="email" aria-invalid="false" aria-required="true" value="" requerid="requerid"> 
										<span class="input-group-addon active btn-primary"><i class="fa fa-envelope"></i></span>                   
									</div>
								</div>
							</div>	
							<div class="col-lg-5 col-sm-5 col-md-5">
								<div class="form-group">
									<label for="name" class="control-label">Telefone:</label>
									<div class="input-group"> 
										<input type="text" class="form-control requerid" id="phone" name="phone" value="" requerid="requerid">
										<span class="input-group-addon active btn-primary"><i class="fa fa-phone"></i></span>                  
									</div>
								</div>
							</div>
							<div class="col-lg-5 col-sm-5 col-md-5">
								<div class="form-group">
									<label for="states" class="control-label">Estado:</label>
									<div class="input-group"> 
										<select class="form-control requerid" id="states" name="states"  requerid="requerid">
											<option value="0" selected="selected">-- Selecione --</option>                    
										</select>
										<span class="input-group-addon active btn-primary"><i class="fa fa-map-marker"></i></span>                 
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-sm-7 col-md-7">
								<div class="form-group">
									<label for="city" class="control-label">Cidade:</label>
									<div class="input-group"> 
										<select class="form-control requerid" id="city" name="city"  requerid="requerid">
											<option value="0" selected="selected">-- Selecione --</option>                    
										</select>
										<span class="input-group-addon active btn-primary"><i class="fa fa-map-marker"></i></span>                 
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-sm-12 col-md-12">
								<div class="form-group">
									<label for="name" class="control-label">Mensagem:</label>
									<div class="input-group"> 
										<textarea class="form-control required" rows="5" cols="60" name="message" id="message"></textarea>
										<span class="input-group-addon active btn-primary"><i class="fa fa-comment"></i></span>                    
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-4 col-md-4">
								<div class="captcha"></div>
								<center>
									<a href="javascript: void(0);" class="reload-captcha label label-primary">RECARREGAR</a>
								</center>
								<br>
							</div>
							<div class="col-lg-8 col-sm-8 col-md-8">
								<div class="form-group">
									<input type="text" class="form-control" name="captcha2" value="<?php echo $_SESSION['captcha']?>" id="captcha2" placeholder="Insira o código da imagem ao lado" />
								</div>
							</div>
							<div class="col-lg-12 col-sm-12 col-md-12">
								<center>
									<button class="btn btn-primary" id="sendmail" data-form="contact">ENVIAR CONTATO</button>
								</center>
							</div>					    
						</div>
					</form>					
				</div>
			</div>
		</div>	
	</div>
</article><!-- #post-## -->
