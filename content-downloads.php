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
	<div id="downloads">
		<div class="container">
			<div class="row">
				<?php
					wp_reset_query();
					$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
					$args = array( 'category_name' => 'downloads','order'=>'DESC', 'orderby'=>'date', 'paged' => $paged ); 
					query_posts($args);
					while ( have_posts() ) : the_post();
				?>
				<div class="col-xs-12 col-md-3 col-sm-3 col-lg-3">
					<a href="#" class="download" data-toggle="modal" data-target="#modal" data-file="<?=get_post_meta(get_the_ID(), 'Link',true)?>">
						<div class="download text-center">
							<center>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/download.png" class="img-responsive"/>
							</center>
							<h3><?php the_title(); ?></h3>
							<?php the_content(); ?>
						</div>
					</a>
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
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Deixe os seus dados e receba em seu e-mail</h4>
        </div>
        <div class="modal-body">
          <?=do_shortcode('[contact-form-7 id="275" title="Formulário Download"]')?>
        </div>
      </div>
    </div>
  </div>    
	</div>
</article><!-- #post-## -->
<script>
  jQuery('.download').click(function(){
     jQuery('input[name="your-file"]').val(jQuery(this).attr('data-file'));
  });
</script>