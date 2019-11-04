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
	<div id="gallery">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<ul class="nav nav-tabs">
						<?php if(get_the_ID() == 68) $cls = 'active'; else $cls = ''; ?>
						<li class="<?=$cls?>"><a data-toggle="tab" href="#gallery_68">Todas</a></li>
						<?php
							$args = array('child_of' => 68);
							$pages = get_pages( $args );
							foreach($pages as $page){
							if($page->ID == get_the_ID()) $cls = 'active'; else $cls = '';
						?>
						<li class="<?=$cls?>"><a data-toggle="tab" href="#gallery_<?=$page->ID?>"><?=get_the_title($page->ID)?></a></li>
						<?php } ?>	
					</ul>					
				</div>
			</div>
		</div>
		<div class="tab-content">
			<?php if(get_the_ID() == 68) $cls = 'active'; else $cls = ''; ?>
			<div id="gallery_68" class="tab-pane fade in <?=$cls?>">
				<div class="gallery">
					<div class="container-fluid">
						<div class="row">
							<?php
								$gallery = get_post_gallery( 68, false );
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
			<?php
				foreach($pages as $page){ 
				if($page->ID == get_the_ID()) $cls = 'active'; else $cls = '';
			?>
			<div id="gallery_<?=$page->ID?>" class="tab-pane fade in <?=$cls?>">
				<div class="gallery">
					<div class="container-fluid">
						<div class="row">
							<?php
								$gallery = get_post_gallery( $page->ID, false );
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
			<?php } ?>
		</div>		
	</div>
</article><!-- #post-## -->
