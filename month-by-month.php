<?php
/**
 ** Template Name: Month by month
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
          <div class="col-12">
            <h4>The year by month</h4>
          </div>
        </div>
        <div class="row">
            <?php 
            $i = 1;
            if( have_rows('month_pages') ): ?>
              <?php while( have_rows('month_pages') ): the_row(); 

                // vars
                $image = get_sub_field('image');
                $title = get_sub_field('title');
                $content = get_sub_field('content');
                $link = get_sub_field('link');
                $modal_welcome_text = get_sub_field('modal_welcome_text');

                ?>
                <div class="col-sm-4">
                <div class="pubBox">
                  <figure>
                    <a data-toggle="modal" data-target="#launchModal<?php echo $i;?>">
                    <img src="<?php echo $image; ?>" alt="" />
                    </a>
                  </figure>
                  <a data-toggle="modal" data-target="#launchModal<?php echo $i;?>"><h3><?php echo $title; ?></h3></a>
                  <p><?php echo $content; ?></p>
                  <div class="cta left">
                  <!-- <a href="<?php // echo $link; ?>"><span>READ MORE</span></a> -->
                  <a data-toggle="modal" data-target="#launchModal<?php echo $i;?>"><span>READ MORE</span></a>
                  </div>
                </div>
                </div>
                <!-- Modal -->
                
                    <div class="modal fade" id="launchModal<?php echo $i;?>" tabindex="-1" role="dialog" aria-labelledby="launchModalTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Holidays in <?php echo $title; ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="container-fluid">
                              <div class="row mb-20 reserves">
                                <div class="col-sm-6">
                                  <img class="img-fluid" src="<?php echo $image; ?>" alt="">
                                </div>
                                <div class="col-sm-6">
                                  <p><?php echo $modal_welcome_text;?></p>
                                </div>                            
                              </div>
                              <?php 
                              $j = 1;
                              if( have_rows('modal_holiday_listing') ): ?>
                                <?php while( have_rows('modal_holiday_listing') ): the_row();  

                                  $destinationId = get_sub_field('select_destination'); 
                                  $imageUrl = get_field('small_image', $destinationId ); 
                                  $title = get_the_title($destinationId); 
                                  $content = get_field('small_text_for_listing_page', $destinationId ); ?>

                                  <div class="row mb-20 <?php if($j%2==0){echo 'reserves';}?>">
                                    <div class="col-sm-6">
                                      <img class="img-fluid" src="<?php echo $imageUrl;?>" alt="" style="width: 100%;">
                                    </div>
                                    <div class="col-sm-6">
                                      <h4><?php echo $title;?></h4>
                                      <p><?php echo $content;?></p>
                                      <div class="cta left mt-10">
                                        <a href="<?php echo get_the_permalink($destinationId);?>"><span>Discover <?php echo $title;?></span></a>
                                      </div>
                                    </div>
                                  </div>
                                <?php $j++; endwhile; ?>
                              <?php endif; ?>  

                              <!-- <div class="row mb-20 reserves">
                                <div class="col-sm-6">
                                  <img class="img-fluid" src="https://www.coxandkings.co.uk/websiteimages2015/mc/5/0/0/0/a-50004006/0050017236_465_380.jpg" alt="">
                                </div>
                                <div class="col-sm-6">
                                  <h4>Botswana</h4>
                                  <p>The Central Kalahari Game Reserve is one of the world’s largest wildlife reserves. However, wildlife can be tough to spot because of the generally dry and arid environment that sees animals scatter. Although January can be one of the warmer months, it is also a period of good rainfall, turning the valleys and pans of the Central Kalahari a lush green, bursting with nutritious grasses. With this come herds of antelope, giraffe and blue wildebeest, naturally followed by predators: cheetahs, leopards, black-backed jackals and Kalahari black-maned lions. January also spells the low season for tourists due to bursts of heavy rain. If you can cope with rain, you will have the area and animals all to yourself.</p>
                                  <div class="cta left mt-10">
                                    <a href="#"><span>Discover Botswana</span></a>
                                  </div>
                                </div>                            
                              </div>
                              <div class="row mb-20">
                                <div class="col-sm-6">
                                  <img class="img-fluid" src="https://www.coxandkings.co.uk/websiteimages2015/mc/5/0/0/0/a-50004002/0050016903_465_380.jpg" alt="">
                                </div>
                                <div class="col-sm-6">
                                  <h4>Cambodia</h4>
                                  <p>Cambodia often experiences extremely hot temperatures and high rainfall, but January is the exception and the best time to visit in regards to the climate. Popular between November and April, January is the driest month and tends to be cooler. The clear blue skies make it the best time to head out to explore impressive temples like Angkor Wat, enjoy relaxing boat trips along the Tonle Sap lake seeing Cambodia’s floating villages and relax on the beaches of the southern coast.</p>
                                  <div class="cta left mt-10">
                                    <a href="#"><span>Discover Cambodia</span></a>
                                  </div>
                                </div>
                              </div> -->
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                   

              <?php $i++; endwhile; ?>
            <?php endif; ?>  
          </div>
        </div>
      </div>
    </section>
    
   
    
  
       
<?php endwhile; } ?>

<?php get_footer(); ?>
      