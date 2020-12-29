<?php
/*
Template Name: Blog Template
*/
get_header();
?>

<div style="clear:both; height:100px;">&nbsp;</div>
<section class="compass">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <h3 class="heading1 mt-50 mb-40">The latest from Compass - our online travel magazine</h3>
                    </div>
                  </div>
                  <div class="row mar10">
				  
				  
					<?php $args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'orderby' => 'date',
					'order' => 'desc',
					'posts_per_page' => -1
					
					);
					$post_query = new WP_Query($args);
					if($post_query->have_posts() ) {
					while($post_query->have_posts() ) {
					$post_query->the_post(); 
					
					$sub_title = get_field("sub_title");
					$excerpt = get_the_excerpt();
					//if (has_post_thumbnail( $post->ID ) ):
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
					?>
					  
                    <div class="col-md-3 pad10">
                      <img src="<?php echo $image[0]; ?>" class="img-fluid">
                      <div class="content">
                        <h4><a href="<?php the_permalink();?>"><span><?php the_title();?> </span> <?php if($sub_title!=''){?>…<?php echo $sub_title;?><?php } ?></a></h4>
                        <p class="meta">
                          <a href="#" title="" rel="author"><?php the_author(); ?></a><br><?php the_time('j F Y'); ?>           
                        </p>
                        <p><?php echo strip_tags($excerpt);?>
                          <span class="extra"></span>                    
                        </p>
                        <span class="rowlink"><a href="<?php the_permalink();?>" class="more">Read more</a></span>
                        </div>
                    </div>
					
					<?php } } wp_reset_query(); ?>
					
                    
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="h-divider mt-20 mb-40"></div>
                    </div>
                  </div>
    
                </div>
            </section>

<br class="spacer">			
<?php get_footer(); ?>