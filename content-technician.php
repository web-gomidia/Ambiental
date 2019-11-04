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
	<div id="activities">
		<div class="container">
            <?php
                wp_reset_query();
                $args = array( 'category_name' => 'corpo-tecnico','order'=>'DESC', 'orderby'=>'date', 'posts_per_page'=>-1); 
                query_posts($args);
                while ( have_posts() ) : the_post();
            ?>
            <div class="activit">
				<div class="row">
					<div class="col-xs-12 col-md-4 col-sm-4 col-lg-4">
						<center>
							<?=odin_thumbnail( 128, 128, get_the_title(),true)?>
						</center>
					</div>
					<div class="col-xs-12 col-md-8 col-md-8 col-lg-8">
						<h3><?php the_title(); ?></h3>
						<?php the_content(); ?>
					</div>
				</div>
			</div>
            <?php                              
                endwhile;
                wp_reset_query();
            ?>
		</div>		
	</div>
</article><!-- #post-## -->
