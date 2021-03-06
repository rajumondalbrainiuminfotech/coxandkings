<?php
/*Template name: Home page*/
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 */

get_header(); ?>
  <?php
  if ( have_posts() ) {
    while ( have_posts() ) :
      the_post(); ?>
    <section class="banner-home" style="background-image: url(<?php echo get_field('page_banner');?>);">
      <h3><?php echo get_field('banner_text');?></h3>
    </section>

    <section class="home-text-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 col-sm-9 text-center home-txt">
            <h1><?php echo get_field('home_page_title');?></h1>
            <p><?php echo get_field('home_page_content');?></p>
            <div class="cta center">
              <a href="<?php echo get_field('learn_more_link');?>"><span>LEARN MORE ABOUT OUR HERITAGE</span></a>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 home-txt">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
              <h2 class="uppercase font-bold">Experience <img src="<?php echo get_template_directory_uri(); ?>/img/king-icon.png" alt="" title=""> Adventure</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <?php $holidayTypes = get_field('select_holiday_type');
            if( $holidayTypes ): ?>

              <?php foreach( $holidayTypes as $holidayType ): ?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-block">
                  <img class="cld-responsive " src="<?php echo get_field('type_image', $holidayType);?>"alt="" title="">
                  <div class="txt-block">
                    <h3 class="uppercase font-bold"><?php echo $holidayType->name; ?></h3>
                    <p><?php echo $holidayType->description; ?></p>
                    <div class="cta left">
                      <a href="<?php echo get_term_link( $holidayType ); ?>"><span>LEARN MORE</span></a>
                    </div>
                  </div>
                </div>                

              <?php endforeach; ?>

            <?php endif; ?>

          </div>
        </div>
      </div>
    </section>

    <section class="home-row-3">
      <div class="container">
        <div class="row">


              <?php if( have_rows('home_row3') ): ?>

                
                 <?php while ( have_rows('home_row3') ) : the_row(); 
                    
                    $title = get_sub_field('title');
                    $image = get_sub_field('image');
                    $description = get_sub_field('description');
                    $link = get_sub_field('read_more');
                      
                 ?>
                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-block">
                    <figure>
                      <h3 class="uppercase font-bold"><?php echo $title;?></h3>
                      <img class="cld-responsive " src="<?php echo $image;?>" alt="">
                    </figure>
                    <div class="txt-block">  
                    <p><span><?php echo $description;?></span></p>
                    <div class="cta left">
                      <a href="<?php echo $link;?>"><span>LEARN MORE</span></a>
                    </div>
                  </div>
                </div>

                 <?php endwhile; ?>
             <?php endif; ?>
      </div>
    </div>
  </section>


  <section class="home-row-4">
    <div class="container">
      <div class="row">
        <div class="col-7 no-padding col-block">
          <h2 class="uppercase font-bold"><?php the_field('section4_title'); ?></h2>
        </div>
      <div class="col-5 no-padding text-right col-block">
        <div class="cta right">
              <a href="<?php the_field('section4_link'); ?>"><span>LEARN MORE</span></a>
            </div>
      </div>
      </div>
      
    </div>
    <div class="container">
      <div class="row">
      <div class="col-lg-8 col-md-12 col-sm-12 no-padding no-margin">
        <ul class="month-blocks row">
          <li class="col-lg-4 col-md-4 col-6  no-padding">
            <figure> <a href="<?php the_field('jan-feb_url'); ?>">
              <img class="cld-responsive " src="<?php the_field('jan-feb'); ?>" alt="" title="">
              <span class="uppercase font-bold">Jan-Feb</span></a>
            </figure>
          </li>
          <li class="col-lg-4 col-md-4 col-6  no-padding">
              <figure> <a href="<?php the_field('mar-apr_url'); ?>">
                <img class="cld-responsive " src="<?php the_field('mar-apr'); ?>" alt="" title="">
                <span class='uppercase font-bold'>Mar-Apr</span></a></figure>
          </li>
          <li class="col-lg-4 col-md-4 col-6  no-padding">
              <figure> <a href="<?php the_field('may-jun_url'); ?>">
                <img class="cld-responsive " src="<?php the_field('may-jun'); ?>" alt="" title="">
                <span class='uppercase font-bold'>May-Jun</span></a></figure>
          </li>
          <li class="col-lg-4 col-md-4 col-6  no-padding">
              <figure> <a href="<?php the_field('jul-_aug_url'); ?>">
                <img class="cld-responsive " src="<?php the_field('jul-_aug'); ?>" alt="" title="">
                <span class='uppercase font-bold'>Jul- Aug</span></a></figure>
          </li>
          <li class="col-lg-4 col-md-4 col-6 no-padding">
              <figure> <a href="<?php the_field('sep-_oct_url'); ?>">
                <img class="cld-responsive " src="<?php the_field('sep-_oct'); ?>" alt="" title="">
                <span class='uppercase font-bold'>Sep- Oct</span></a></figure>
          </li>
          <li class="col-lg-4 col-md-4 col-6 no-padding">
              <figure> <a href="<?php the_field('nov-_dec_url'); ?>">
                <img class="cld-responsive " src="<?php the_field('nov-_dec'); ?>" alt="" title="">
                <span class='uppercase font-bold'>Nov- Dec</span></a></figure>
          </li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
          <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12 no-padding text-center txt-block pos-rel">
            <figure><img src="<?php echo get_template_directory_uri(); ?>/img/blue-bg.png" class="img-responsive" alt="" title="">
              <div class="col-md-12 text-box">
                <h5>Simply choose a month to travel and discover the very best places to visit at that time of year…</h5>
                <br><span><i>Holiday inspiration from Cox &amp; Kings</i></span>
              </div>
            </figure>
          </div>
          <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12 no-padding text-center txt-block">
            <figure>
            <img src="<?php the_field('section4_image'); ?>" class="img-fluid" alt="" title="">
            </figure>
          </div>
        </div>
      </div>
      </div>
      </div>
    </section>

    <section class="home-row-5"> 
      <div class="container"> 
        <div class="row"> 
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
            <div class="row">
            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-2"> 
              <img alt="" class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/vertical-blue-line.png" class="img-fluid" title=""> 
            </div> 
              <div class="col-lg-4 col-md-6 col-sm-6 col-xs-8 text-center title-text no-padding"> 
                <h2 class="uppercase font-bold">More From Cox &amp; Kings</h2> 
              </div> 
              <div class="col-lg-4 col-md-3 col-sm-3 col-xs-2"> 
                <img alt="" class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/vertical-blue-line.png" class="img-fluid" title=""> 
              </div>
              </div>
            </div> 
          </div>
          <div class="row">
            <?php $holidayTypesMore = get_field('selects_the_types');
            if( $holidayTypesMore ): ?>

              <?php foreach( $holidayTypesMore as $holidayTypemore ): ?>
                <div class="col-block col-md-3 col-6"> 
                  <h3 class="uppercase font-bold"><?php echo $holidayTypemore->name; ?></h3>
                  <figure>
                      <img class="cld-responsive " src="<?php echo get_field('type_image', $holidayTypemore);?>"alt="" title="">
                  </figure>
                  <div class="txt-block">                    
                    <p><?php echo $holidayTypemore->description; ?></p>
                    <div class="cta left">
                      <a href="<?php echo get_term_link( $holidayTypemore ); ?>"><span>LEARN MORE</span></a>
                    </div>
                  </div>
                </div>                

              <?php endforeach; ?>

            <?php endif; ?>

            <div class="col-block col-md-3 col-6"> 
              <h3 class="uppercase font-bold">Brochures</h3> 
              <figure>
              <img alt="" src="<?php echo get_field('brochure_image');?>" title=""> 
              </figure>
              <div class="txt-block"> 
                <p><?php echo get_field('brochure_description');?></p> 
                <div class="cta left">
                  <a href="<?php echo get_field('brochure_link');?>"><span>LEARN MORE</span></a>
                </div> 
              </div> 
            </div>  
          </div> 
        </div> 
      </section>

        
  <?php endwhile; } ?>
      
      <div class="container">
        <section id="cph_New_trustpilot_TA307040F016_trustpilot" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding home-row-6 border-top" style="display:block;">

        <div class="container">
        <!-- TrustBox widget - Carousel -->
        <div class="trustpilot-widget" data-locale="en-GB" data-template-id="53aa8912dec7e10d38f59f36" data-businessunit-id="59cccc580000ff0005ac4238" data-style-height="130px" data-style-width="100%" data-theme="light" data-stars="5" data-schema-type="Organization" style="position: relative;"><iframe frameborder="0" scrolling="no" title="Customer reviews powered by Trustpilot" src="https://widget.trustpilot.com/trustboxes/53aa8912dec7e10d38f59f36/index.html?templateId=53aa8912dec7e10d38f59f36&amp;businessunitId=59cccc580000ff0005ac4238#locale=en-GB&amp;styleHeight=130px&amp;styleWidth=100%25&amp;theme=light&amp;stars=5&amp;schemaType=Organization" style="position: relative; height: 130px; width: 100%; border-style: none; display: block; overflow: hidden;"></iframe></div>
        <!-- End TrustBox widget -->
        </div>

        </section>
      </div>

<?php get_footer(); ?>
      