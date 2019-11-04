<div class="technician">
	<div class="bg"></div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<h2>Corpo Técnico</h2>
			</div>
		</div>
		<div id="technicianCarousel" class="carousel slide carousel-fade" data-ride="carousel">
			<div class="carousel-inner">
				<?php
					wp_reset_query();
					$args = array( 'category_name' => 'corpo-tecnico','order'=>'DESC', 'orderby'=>'date', 'posts_per_page'=>-1); 
					query_posts($args);
					$i = 0;
					while ( have_posts() ) : the_post();
					if($i == 0) $cls = 'active'; else $cls = '';
				?>
				<div class="item <?=$cls?>">
					<div class="body">
						<div class="row">
							<div class="col-xs-1 hidden-xs"></div>
							<div class="col-xs-12 col-md-5 col-sm-5 col-lg-5">
								<div class="text">
									<?php the_excerpt(); ?>
								</div>
							</div>
							<div class="col-xs-12 col-md-5 col-sm-5 col-lg-5">
								<center>
									<div class="image">
										<div class="bgimage"></div>
										<?=odin_thumbnail( 128, 128, get_the_title(),true); ?>
									</div>
								</center>
							</div>
						</div>
					</div>
				</div>
				<?php
					$i++;
					endwhile;
					wp_reset_query();
				?> 	
			</div>
			<div class="row">
				<div class="col-xs-1 hidden-xs"></div>
				<div class="col-xs-12 col-md-5 col-sm-5 col-lg-5 text-center">
					<a class="leftarrow" href="#technicianCarousel" data-slide="prev"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/go.png"/></a>
					<a class="rightarrow" href="#technicianCarousel" data-slide="next"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/go.png"/></a>
				</div>
			</div>
		</div>		
	</div>
</div>