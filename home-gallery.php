<div class="gallery">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 text-center">
				<h2>Galeria</h2>
			</div>
		</div>
		<div class="row">
			<?php
				wp_reset_query();
				$args = array( 'pagename' => 'galeria-de-fotos'); 
				query_posts($args);
				while ( have_posts() ) : the_post();
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
				$i++;                            	
				endforeach;			
				endwhile;
				wp_reset_query();
			?>	
        </div>
	</div>
</div>