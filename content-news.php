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
	<div id="news">
		<div class="container">
			<div class="row">
				<div class="col-xs-1 hidden-xs"></div>
				<div class="col-xs-12 col-md-10 col-sm-10 col-lg-10">
					<div class="row">
						<?php
							wp_reset_query();
							$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
							$args = array( 'category_name' => 'noticias','order'=>'DESC', 'orderby'=>'date', 'paged' => $paged ); 
							query_posts($args);
							while ( have_posts() ) : the_post();
						?>
						<div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
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
						<?php endwhile; ?>	
					</div>
					<div class="row">
						<div class="col-xs-12">
							<?php
								odin_paging_nav();
								wp_reset_query();						
							?>
						</div>
					</div>						
	            </div>
			</div>
		</div>	
	</div>
</article><!-- #post-## -->
