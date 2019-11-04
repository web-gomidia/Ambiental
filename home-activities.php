<div class="activities">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<h2>Nossas Atividades</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-2 hidden-xs"></div>
            <?php
                wp_reset_query();
                $args = array( 'category_name' => 'nossas-atividades','order'=>'DESC', 'orderby'=>'date', 'posts_per_page'=>5); 
                query_posts($args);
                while ( have_posts() ) : the_post();
            ?>
			<div class="col-xs-6 col-md-2 col-sm-2 col-lg-2">
				<div class="activity">
					<center>
						<a href="<?=esc_url( home_url( '/nossas-atividades/' ) )?>">
							<?=odin_thumbnail( 64, 64, get_the_title(),true); ?>
						</a>
						<a href="<?=esc_url( home_url( '/nossas-atividades/' ) )?>">
							<h3><?php the_title(); ?></h3>
						</a>
					</center>
				</div>
			</div>
            <?php                              
                endwhile;
                wp_reset_query();
            ?> 	
        </div>
	</div>
</div>