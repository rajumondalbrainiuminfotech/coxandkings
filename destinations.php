<?php
/**
 ** Template Name: Destinations
 **/

get_header(); ?>
<?php
  if ( have_posts() ) {
    while ( have_posts() ) :
      the_post(); ?>
    <section class="banner-home" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/banner-destinations.png);">
      <!-- <h3>Inspiring Travel for Over 260 Years</h3> -->
    </section>
    <section class="b-crumb-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div  class="b-crumb">
            <a href="#" class="back" onclick="window.history.back();">Back</a> 
            <div>You are here:</div> 
            <ul>
              <li><a href="<?php bloginfo('url');?>">Home</a></li>
              <li>Destinations</li>
            </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="inner-txt">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1><?php the_title();?></h1>
            <?php the_content();?>
            <div class="h-divider"></div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="all-desti">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h5>View our vast and diverse range of destinations...</h5>
            <strong>FILTER BY CONTINENT:</strong>
          </div>
        </div>
        <div class="row">
          <?php $allMiddleTerms = get_terms( 'destination_country', array( 'parent' => 0, 'hide_empty' => false, ) ); ?>
          <div class="col-md-12"> 
                <div class="destinations-tab">
                    <button class="filter-button active" data-filter="all">All</button>
                    <?php
                    foreach ($allMiddleTerms as $myterm) {
                      echo '<button class="filter-button" data-filter="'.$myterm->slug.'">'.$myterm->name.'</button>';
                    } ?>

                </div>
                <div class="results">
				
				<?php
				  $destination_cat_new=array();
                    // we get the terms of the taxonomy 'course', but only top-level-terms with (parent => 0)
                    $taxonomy = 'destination_country';
                    $top_level_terms = get_terms( array(
                        'taxonomy'      => $taxonomy,
                        'parent'        => '0',
                        'hide_empty'    => false,
                    ) );                    


                    // only if some terms actually exists, we move on
                    if ($top_level_terms) {                        
                        $i = 0; 
                        foreach ($top_level_terms as $top_level_term) {
                            $top_term_id = $top_level_term->term_id;                            
                            $top_term_name = $top_level_term->name;                            
                            $top_term_tax = $top_level_term->taxonomy;
                            $second_level_terms = get_terms( array(
                                'taxonomy' => $top_term_tax, // you could also use $taxonomy as defined in the first lines
                                'child_of' => $top_term_id,
                                'parent' => $top_term_id, // disable this line to see more child elements (child-child-child-terms)
                                'hide_empty' => false,
                            ) );
							//print_r($second_level_terms);
							$destination_cat_count_child = count($second_level_terms);
							?>
							
							
							<div class="new_custom <?php echo strtolower($top_term_name);?>" style="display:none;">
							<?php if($destination_cat_count_child!=0){?>
							Showing <span class="now-desti"><?php echo $destination_cat_count_child;?></span> of <span class="total-desti"><?php echo $destination_cat_count_child;?></span> <?php if($destination_cat_count_child==1){?>destination<?php } else {?>destinations<?php } ?>
							<?php } else { ?>
							No destination found
							<?php } ?>
							</div>
							
							<?php
                            if ($second_level_terms) {                             
                                foreach ($second_level_terms as $second_level_term) {
									
									$destination_cat_new[] = $second_level_term->term_id;
									
                                    $second_term_name = $second_level_term->name;
                                    $second_term_description = $second_level_term->description; ?>

                                <?php }
                            }
                           
                            $i++;
                        }// END foreach                        

                    }// END if
					
					//print_r($second_level_terms);
					$destination_cat_count = count($destination_cat_new);
					
                    ?> 
				
                  <?php $count_posts = wp_count_posts( 'ck_destination' )->publish; ?>
                  <div class="all">Showing <span class="now-desti"><?php echo $destination_cat_count;?></span> of <span class="total-desti"><?php echo $destination_cat_count;?></span> destinations
                  </div>
				  
				</div>
           </div>     
         </div>

                <div class="row">
                  <?php
				  
                    // we get the terms of the taxonomy 'course', but only top-level-terms with (parent => 0)
                    $taxonomy = 'destination_country';
                    $top_level_terms = get_terms( array(
                        'taxonomy'      => $taxonomy,
                        'parent'        => '0',
                        'hide_empty'    => false,
                    ) );                    


                    // only if some terms actually exists, we move on
                    if ($top_level_terms) {                        
                        $i = 0; 
                        foreach ($top_level_terms as $top_level_term) {
                            echo '<div class="gallery_product col-md-3 col-sm-6 col-12 filter '.$top_level_term->slug.'">';
                            $top_term_id = $top_level_term->term_id;                            
                            $top_term_name = $top_level_term->name;                            
                            $top_term_tax = $top_level_term->taxonomy;
                            $second_level_terms = get_terms( array(
                                'taxonomy' => $top_term_tax, // you could also use $taxonomy as defined in the first lines
                                'child_of' => $top_term_id,
                                'parent' => $top_term_id, // disable this line to see more child elements (child-child-child-terms)
                                'hide_empty' => false,
                            ) );
							
							//print_r($second_level_terms);
							
							
							//$destination_cat_new=array();
                            if ($second_level_terms) {                             
                                foreach ($second_level_terms as $second_level_term) {
									
									//$destination_cat_new[] = $second_level_term->term_id;
									
                                    $second_term_name = $second_level_term->name;
                                    $second_term_description = $second_level_term->description; ?>
                                    <a href="<?php echo get_term_link($second_level_term->slug, 'destination_country');?>">                                    
                                    <img src="<?php echo get_field('taxonomy_image', 'destination_country_'.$second_level_term->term_id);?>" class="img-fluid">
                                    <h2><?php echo $second_term_name;?></h2>
                                    <p><?php echo $second_term_description;?></p>
                                    </a> 
                                    <div class="cta left">
                                      <a href="<?php echo get_term_link($second_level_term->slug, 'destination_country');?>"><span>VIEW DESTINATION</span></a>
                                    </div> 
                                <?php }
                            }
                            echo '</div>';
                            $i++;
                        }// END foreach                        

                    }// END if
					
					
					
                    ?>                    
                    
                </div>
            
          </div>
        </div>
      </div>
    </section>

  
    <section class="experts">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center exp-sales">
            <h3><?php echo get_field('experts_title', 'option'); ?></h3>
            <p><?php echo get_field('experts_text', 'option'); ?></p>
            <a class="tel" href="tel:<?php echo get_field('experts_number', 'option'); ?>"><?php echo get_field('experts_number', 'option'); ?></a>
            <div class="cta center">
              <a href="<?php echo get_field('enquire_online_link', 'option'); ?>"><span>ENQUIRE ONLINE</span></a>
            </div>
            <figure></figure>
          </div>
          <div class="col-md-6 text-center brochures">
            <h3><?php echo get_field('brochure_title', 'option'); ?></h3>
            <p><?php echo get_field('brochure_text', 'option'); ?></p>
            <div class="cta center">
              <a href="<?php echo get_field('request_a_brochure_link', 'option'); ?>"><span>REQUEST A BROCHURE</span></a>
            </div>
            <figure></figure>
          </div>
        </div>
      </div>
    </section>
    
<?php endwhile; } ?>

<?php get_footer(); ?>

<script>
	jQuery(".destinations-tab button").click(function(){	
    //e.preventDefault(); 

    var filter = jQuery(this).attr('data-filter');
	
	jQuery('.new_custom').removeClass('active');
	jQuery('.'+filter).addClass('active');
	
	if(filter!='all'){
	jQuery('.all').hide();
	}else{
	jQuery('.all').show();	
	}
	
	});
</script>      