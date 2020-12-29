<?php
/**
 ** Template Name: About us
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
              <li><?php the_title(); ?></li>
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
            <?php if( have_rows('about_pages') ): ?>
              <?php while( have_rows('about_pages') ): the_row(); 

                // vars
                $image = get_sub_field('image');
                $title = get_sub_field('title');
                $content = get_sub_field('content');
                $link = get_sub_field('link');

                ?>
                <div class="col-sm-4">
                <div class="pubBox">

                  <figure>
                    <a href="<?php echo $link; ?>">
                    <img src="<?php echo $image; ?>" alt="" />
                    </a>
                  </figure>
                  <a href="<?php echo $link; ?>"><h3><?php echo $title; ?></h3></a>
                  <p><?php echo $content; ?></p>
                  <div class="cta left">
                  <a href="<?php echo $link; ?>"><span>READ MORE</span></a>
                  </div>
                </div>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>  
          </div>
        </div>
      </div>
    </section>
    
   

  
       
<?php endwhile; } ?>

<?php get_footer(); ?>
      