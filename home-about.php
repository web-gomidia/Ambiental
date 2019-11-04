<div class="about">
	<div class="container">
		<div class="row">
			<div class="col-xs-1 hidden-xs"></div>
			<?php
				wp_reset_query();
				$args = array( 'pagename' => 'a-ambiental'); 
				query_posts($args);
				while ( have_posts() ) : the_post();
			?>
			<div class="col-xs-12 col-md-5 col-sm-5 col-lg-5">
				<h2><?php the_title(); ?></h2>
				<p><?=get_post_meta(get_the_ID(), 'Resumo',true);?></p>
				<a href="<?php the_permalink(); ?>" class="btn btn-primary">Saiba Mais</a>
			</div>
			<?php
				endwhile;
				wp_reset_query();
			?>	
        </div>
	</div>
</div>