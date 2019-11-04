<div class="slide-home">
	<div id="FirstCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="8000">
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<?php
				wp_reset_query();
				$args = array( 'category_name' => 'slide','order'=>'DESC', 'orderby'=>'date','posts_per_page'=>4); 
				query_posts($args);
				$i=1;
				while ( have_posts() ) : the_post();
				$i==1 ? $action = ' active' : $action = '';
				$link = get_post_meta(get_the_ID(), 'Link',true);
				if ($link) {
			?>             
			<div class="item<?=$action?>">
				<a href="<?=$link?>" target="_blank">
					<?=odin_thumbnail( '', '', get_the_title(),true); ?>
					<div class="carousel-caption">
						<div class="container">
							<div class="row">
								<div class="col-xs-12 col-md-5 col-sm-5 col-lg-5">
									<?php the_content(); ?>
									<a href="<?=$link?>" class="btn btn-primary">Saiba Mais</a>
								</div>
							</div>
						</div>
					</div>
				</a>                 
			</div>  
			<?php } else { ?>
			<div class="item<?=$action?>">
				<?=odin_thumbnail( '', '', get_the_title(),true); ?>
				<div class="carousel-caption">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-md-5 col-sm-5 col-lg-5">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</div>				
			</div>    
			<?php
				}
				$i++;
				endwhile;
				wp_reset_query();
			?>      
		</div>
		<ol class="carousel-indicators hidden-xs">
			<?php for ($i = 0; $i < count(query_posts($args)); $i++) { $i==0 ? $action = ' active' : $action = ''; ?>
				<li data-target="#FirstCarousel" data-slide-to="<?=$i?>" class="<?=$action?>"></li>
			<?php } ?>    
		</ol>
	</div>
</div>