<?php
/**
 ** Template Name: Contact Us
 **/

get_header(); ?>
<?php
  if ( have_posts() ) {
    while ( have_posts() ) :
      the_post(); ?>

     <?php if ( has_post_thumbnail() ) { ?> 
        <section class="banner-home" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
          <!-- <h3>Banner text</h3> -->
        </section>
     <?php  } else { ?>

      <section class="noBanner"></section>

     <?php  } ?>        
    
    <section class="b-crumb-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div  class="b-crumb">
            <a href="#" class="back">Back</a> 
            <div>You are here:</div> 
            <ul>
              <li><a href="<?php bloginfo('url');?>">Home</a></li>
              <li>Contact Cox & Kings</li>
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
            <?php the_content();?>            
            <div class="h-divider"></div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12"> 
            <?php echo get_field('contact_form_area'); ?>
          </div>
        </div> 

        <div class="row">
          <div class="col-md-12"> 
            <?php echo get_field('contact_information'); ?>
          </div>
        </div>
      </div>     
    </section>
    
   

  
       
<?php endwhile; } ?>

<?php get_footer(); ?>
      