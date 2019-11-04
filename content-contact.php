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
		<div class="image"  style="background-image:url('<?=odin_get_image_url( get_post_thumbnail_id( get_the_ID() ), '', ''); ?>');"></div>
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
  <div id="contact-page">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
          <div class="infos">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <span><strong>Endereço</strong></span>
            <span><?=get_post_meta(get_the_ID(), 'Endereço',true);?></span>
          </div>
          <div class="infos">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <span><strong>E-mail</strong></span>
            <span>atendimento@meioambiental.com.br</span>
          </div>
          <div class="infos">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <span><strong>Nossos telefones</strong></span>
            <span>Tel.: +55 32 99823-0726</span>
            <span>Cel.: +55 32 3025-0726</span>           
          </div>
          <div class="infos">
            <i class="fa fa-users" aria-hidden="true"></i>
            <span><strong><a href="<?=esc_url(home_url('/trabalhe-na-ambiental'))?>">Trabalhe Conosco</a></strong></span>
            <span>Venha participar da nossa equipe!</span>
          </div>          
        </div>
        <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
          <div class="row">
            <div class="col-xs-12">
              <ul class="nav nav-pills nav-justified">
                <li class="active"><a data-toggle="tab" href="#contact">Contato</a></li>
              </ul>
            </div>
          </div>
          <div class="tab-content">
            <div id="contact" class="tab-pane fade in active">
              <?=do_shortcode('[contact-form-7 id="167" title="Formulário de contato"]')?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3115.509930754625!2d-43.36089271975763!3d-21.780780529102866!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x33af9fc709457688!2sTrade%20Hotel%20JF!5e0!3m2!1spt-BR!2sbr!4v1569253871170!5m2!1spt-BR!2sbr" width="100%" height="380" frameborder="0" style="border:0;margin-bottom:-5px" allowfullscreen=""></iframe>
</article><!-- #post-## -->
