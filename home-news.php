<div class="news">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<h2>Notícias</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-1 hidden-xs"></div>
            <?php
                wp_reset_query();
                $args = array( 'category_name' => 'noticias','order'=>'DESC', 'orderby'=>'date', 'posts_per_page'=>2); 
                query_posts($args);
                while ( have_posts() ) : the_post();
            ?>
			<div class="col-xs-12 col-md-5 col-sm-5 col-lg-5">
				<div class="notice">
					<div class="image">
						<div class="date">
							<p><?php the_time( 'd' ); ?></p>
							<p><?php the_time( 'M' ); ?></p>
						</div> 
						<a href="<?php the_permalink(); ?>">
							<?=odin_thumbnail( 640, 380, get_the_title(),true); ?>
						</a>
					</div>
					<a href="<?php the_permalink(); ?>">
						<h3><?php the_title(); ?></h3>
					</a>
					<?php the_excerpt(); ?>
					<div class="link text-right">
						<a href="<?php the_permalink(); ?>" class="btn btn-primary">Leia Mais</a>
					</div>
				</div>
			</div>
            <?php                              
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