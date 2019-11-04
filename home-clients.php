<div class="clients">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<h2>Nossos Clientes</h2>
			</div>
		</div>
		<div class="row">
			<?php
				wp_reset_query();
				$args = array( 'pagename' => 'nossos-clientes'); 
        $i = 0;
				query_posts($args);
				while ( have_posts() ) : the_post();
				$gallery = get_post_gallery( get_the_ID(), false );
				$ids = explode(',', $gallery['ids']);
				foreach( $ids as $idg ) :	
				$excerpt = get_post($idg)->post_excerpt;
			?>
			<div class="col-xs-4 col-md-2 col-sm-2 col-lg-2">
				<img src="<?=odin_get_image_url($idg, 256, 256)?>" class="img-responsive"/>
			</div>
			<?php
				$i++;   
        if($i==6) break;           
				endforeach;
				endwhile;
				wp_reset_query();
			?>
        </div>
		<div class="row">
			<div class="col-xs-12">
				<hr>
			</div>
		</div>
	</div>
</div>