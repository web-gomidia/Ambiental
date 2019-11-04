<?php
/**
 * The template used for displaying page content.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<article id="post-<?php the_ID(); ?>">
	<header id="header-section" >
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
	<div id="about">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<?php
						$content = get_the_content();
						$content = preg_replace('/\[gallery ids=[^\]]+\]/', '',  $content );
						$content = apply_filters('the_content', $content );
						echo $content;
					?>
				</div>
			</div>
		</div>
		<div class="gallery">
			<div class="container-fluid">
				<div class="row">
					<?php
						$gallery = get_post_gallery( get_the_ID(), false );
						$ids = explode(',', $gallery['ids']);
						foreach( $ids as $idg ) :
						$excerpt = get_post($idg)->post_excerpt;
					?> 				
					<div class="col-xs-6 col-md-3 col-sm-3 col-lg-3 nopad">
						<div class="image">
							<a href="<?=odin_get_image_url($idg, 800, 600)?>" data-lightbox="gallery" data-title="<?=$excerpt?>">
								<div class="bg"></div>
								<img src="<?=odin_get_image_url($idg, 480, 320)?>" class="img-responsive"/>
							</a>
						</div>
					</div>
					<?php                           	
						endforeach;
					?>
				</div>
			</div>
		</div>		
	</div>
</article><!-- #post-## -->
