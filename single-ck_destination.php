<?php
get_header(); 
global $wp;
$currentUrl = home_url( $wp->request ); 
$queryString = $_SERVER['QUERY_STRING']; 
$urlWithQuery = $currentUrl.'/?'.$queryString; 

$term_member = $_REQUEST['member'];
?>


<?php if ($term_member!='') {?>
<div style="clear:both; height:100px;">&nbsp;</div>
<section class="compass">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <h3 class="heading1 mt-50 mb-40">Team Members</h3>
                    </div>
                  </div>
                  <div class="row mar10">
				 				  
					
					<?php 
					$post_id_new3 = get_the_ID();
					if( have_rows('select_experts_destin', $term_member) ): ?>

					<?php $i=1; while( have_rows('select_experts_destin', $term_member) ): the_row(); 
					// vars
					$post_id = get_sub_field('select_experrts_for_this_country_destin', $term_member);	
					$member_photo = get_field("member_photo", $post_id);
					$tem_member_short_description = get_field("tem_member_short_description", $post_id);
					
					$member_insider_trip_image = get_field("member_insider_trip_image", $post_id);
					$member_insider_trip = get_field("member_insider_trip", $post_id);
					
					$member_favourite_experience_image = get_field("member_favourite_experience_image", $post_id);
					$member_favourite_experience = get_field("member_favourite_experience", $post_id);
					
					$member_favoirite_place_image = get_field("member_favoirite_place_image", $post_id);
					$member_favourite_place = get_field("member_favourite_place", $post_id);
					
					$member_favourite_hotel_image = get_field("member_favourite_hotel_image", $post_id);
					$member_favourite_hotel = get_field("member_favourite_hotel", $post_id);
					
					$member_email_address = get_field("member_email_address", $post_id);
					?>
					  
                    <div class="col-md-3 pad10">
                      <img src="<?php echo $member_photo['url'];?>" class="img-fluid">
                      <div class="content">
                        <h4><a href="javascript:void(0)" data-toggle="modal" data-target="#team_member_<?php echo $i;?>">
						<span><?php echo get_the_title($post_id);?> </span></a></h4>
 
                        <p><?php echo $tem_member_short_description;?>
                          <span class="extra"></span>                    
                        </p>
                        <span class="rowlink"><a href="javascript:void(0)" data-toggle="modal" data-target="#team_member_<?php echo $i;?>" class="more">Read more</a>
						</span>
						
						<span class="rowlink"><a href="javascript:void(0)" data-toggle="modal" data-target="#contact_member_<?php echo $i;?>" data-email="<?php echo $member_email_address;?>" class="more get_mail">Contact <?php echo get_the_title($post_id);?></a>
						</span>
						
                        </div>
                    </div>
					
					
					

                    <!-- Team Modal -->
                
                    <div class="modal fade" id="team_member_<?php echo $i;?>" tabindex="-1" role="dialog" aria-labelledby="launchModalTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle"><?php echo get_the_title($post_id);?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="container-fluid">
						
         

                                  <div class="row mb-20">
                                    <div class="col-sm-6">
                                      <img class="img-fluid" src="<?php echo $member_insider_trip_image;?>" alt="" style="width: 100%;border:none;">
                                    </div>
                                    <div class="col-sm-6"> 
                                      <h4>My insider's tip</h4>                                    
                                      <p><?php echo $member_insider_trip;?></p>               
                                    </div>
                                  </div>
								  
								    <div class="row mb-20 reserves">
                                    <div class="col-sm-6">
                                      <img class="img-fluid" src="<?php echo $member_favourite_experience_image;?>" alt="" style="width: 100%;border:none;">
                                    </div>
                                    <div class="col-sm-6"> 
                                      <h4>My favourite experience</h4>                                       
                                      <p><?php echo $member_favourite_experience;?></p>                   
                                    </div>
                                  </div>
								  
								  <div class="row mb-20">
                                    <div class="col-sm-6">
                                      <img class="img-fluid" src="<?php echo $member_favoirite_place_image;?>" alt="" style="width: 100%;border:none;">
                                    </div>
                                    <div class="col-sm-6"> 
                                      <h4>My favourite place</h4>                                    
                                      <p><?php echo $member_favourite_place;?></p>               
                                    </div>
                                  </div>
								  
								    <div class="row mb-20 reserves">
                                    <div class="col-sm-6">
                                      <img class="img-fluid" src="<?php echo $member_favourite_hotel_image;?>" alt="" style="width: 100%;border:none;">
                                    </div>
                                    <div class="col-sm-6">  
                                      <h4>My favourite hotel</h4> 									
                                      <p><?php echo $member_favourite_hotel;?></p>                   
                                    </div>
                                  </div>
   

                            
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
					
					
					<!-- Team Contact Modal -->
                
                    <div class="modal fade" id="contact_member_<?php echo $i;?>" tabindex="-1" role="dialog" aria-labelledby="launchModalTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Send an enquiry to <?php echo get_the_title($post_id);?> at Cox & Kings</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="container-fluid team_contact">
						
							<p>The asterisk marks a mandatory field</p>

							<p>Your details</p> 

                            <?php echo do_shortcode('[contact-form-7 id="664" title="Team Member Contact Form"]');?>  
   

                            
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
					
					<?php $i++; endwhile; ?>
					<?php endif; ?>

					<?php wp_reset_query(); ?>
					
                    
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="h-divider mt-20 mb-40"></div>
                    </div>
                  </div>
    
                </div>
            </section>
			
			<!-- Team Privacy Policy Modal -->
                
                    <div class="modal fade" id="privacy_policy_mod" tabindex="-1" role="dialog" aria-labelledby="launchModalTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Data Protection Privacy Policy</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="container-fluid team_contact">
						
<p>At Cox & Kings we take the protection of your personal data and your privacy very seriously. We will never misuse your data or sell it on to anyone else. This page explains our privacy policy in detail.

What is the purpose of this privacy policy?

This privacy policy is to tell you what personal data we collect from you and why, and what we will do with this data. It also tells you about some of the key rights which you have under data protection laws. From 25 May 2018 onwards, you and your personal data will be protected by the EU General Data Protection Regulation (which is otherwise known as GDPR) and a new UK Data Protection Act 2018. In this privacy policy, we refer to this legislation as data protection laws.

We will only process your personal data as set out in our privacy policy, or otherwise notified to or agreed by you, or as we are otherwise permitted to do in accordance with data protection laws.

When we refer to “you” in this privacy policy, we mean every person who communicates with us in respect of a booking, booking request, enquiry or for any other reason and all persons for whom a booking or booking request is made.

What is our role in relation to your personal data?

For the purposes of data protection laws, we, Cox & Kings Travel Limited, are a data controller in respect of the personal data you provide us with.

Can this privacy policy be changed?

Yes, from time to time we may need to make changes to this privacy policy. These may be required as a result of changes in data protection laws or in the guidance issued by regulators such as the Information Commissioner’s Office (which is usually referred to as the ICO) or where we make changes to our procedures. The latest version of this privacy policy can be found on our website at www.coxandkings.co.uk/data-protection

What is my personal data and what do you mean by process?

When we refer to personal data, we mean any information which relates to an identified or identifiable individual. Where we refer to process or processing, we mean anything which we may do with your personal data including collecting, storing, using, disclosing to third parties and erasing it.

What personal data will we collect from you and why?

In order to respond to an enquiry, administer and fulfil your booking, or send you a brochure or other promotional material, we need to process personal data we obtain from you. This personal data may be obtained from you directly or through any travel agency with whom you make your booking or booking enquiry.

</p>
						
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
					
<?php } else { ?>

  <?php
  if ( have_posts() ) {
    while ( have_posts() ) :
      the_post(); ?>
          <?php $featured_img_url = get_field('large_image'); ?>
          <section class="banner-home" style="background-image: url(<?php echo $featured_img_url;?>);">
            <!-- <h3>Inspiring Travel for Over 260 Years</h3> -->
          </section>
          <section class="b-crumb-wrapper">
            <?php $terms = get_the_terms( $post->ID, 'destination_country' ); ?>
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div  class="b-crumb">
                  <a href="<?php bloginfo('url');?>/destination-country/<?php echo $terms[0]->slug;?>" class="back">Back</a> 
                  <div>You are here:</div> 
                  <ul>
                    <li><a href="<?php bloginfo('url');?>">Home</a></li>
                    <li><a href="<?php bloginfo('url');?>/destinations">Destinations</a></li>
                    <li><a href="<?php bloginfo('url');?>/destination-country/<?php echo $terms[0]->slug;?>"><?php echo $terms[0]->name;?></a></li>
                    <li><?php the_title();?></li>
                    <li><?php if ( $_GET['faq'] == '1') { echo 'FAQ'; } else if ( $_GET['gallery'] == '1') { echo 'Gallery';} else if ( $_GET['accommodation'] == '1') { echo 'Accommodation';} else if ( $_GET['private-travel'] == '1') { echo 'Private Travel';} else if ( $_GET['group-tours'] == '1') { echo 'Group Tours';} else if ( $_GET['tailor-made'] == '1') { echo 'Tailor-Made Holidays';} else echo 'Overview'; ?></li>
                  </ul>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="country-tab">            
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <ul>
                    <li><a href="<?php echo $currentUrl;?>" style="color: #ffffff;"><span><?php the_title();?></span></a></li>
                    <li <?php if ( $queryString == 'overview=1' || $queryString == '' ) { echo 'class="active"';} ?>><a href="<?php echo $currentUrl;?>/?overview=1">Overview</a></li>                                       
                    <li <?php if ( $_GET['group-tours'] == '1') { echo 'class="active"';} ?>><a href="<?php echo $currentUrl;?>/?group-tours=1">Group Tours</a></li>           
                    <li <?php if ( $_GET['private-travel'] == '1') { echo 'class="active"';} ?>><a href="<?php echo $currentUrl;?>/?private-travel=1">Private Travel</a></li><li <?php if ( $queryString == 'tailor-made=1') { echo 'class="active"';} ?>><a href="<?php echo $currentUrl;?>/?tailor-made=1">Tailor-Made Holidays</a></li>           
                    <li <?php if ( $_GET['accommodation'] == '1') { echo 'class="active"';} ?>><a href="<?php echo $currentUrl;?>/?accommodation=1">Accommodation</a></li>           
                    <li <?php if ( $_GET['gallery'] == '1') { echo 'class="active"';} ?>><a href="<?php echo $currentUrl;?>/?gallery=1">Gallery</a></li>
                    <li <?php if ( $_GET['faq'] == '1') { echo 'class="active"';} ?>><a href="<?php echo $currentUrl;?>/?faq=1">FAQs</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </section>

          <?php if ( $queryString == 'overview=1' || $queryString == '' ) { ?>

              <section class="inner-txt">
                <div class="container">
                  <div class="row">
                    <div class="col-md-7">
                      <h3><?php echo get_field('single_page_title');?></h3>
                      <?php echo get_field('single_page_content');?>
                    </div>
                    <div class="col-md-5">
                      <h3>Explore <?php the_title();?></h3>
                      <p style="font-style: italic;">Click on your destination of interest</p>                   
                      <div class="map-box">
                        <?php $title = get_the_title();
                        $country_latitude = get_field('country_latitude');
                        $country_longitude = get_field('country_longitude');
                        $placeDetails[] = $title.'='.$country_latitude.'='.$country_longitude; ?>
                        <!-- <img class="img-fluid" src="<?php // echo get_template_directory_uri(); ?>/img/map.png"> -->
                        <div id="map_wrapper">
                          <div id="map_canvas" class="mapping" data-country="nepal, sri lanka"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="h-divider mt-50 mb-40"></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <h3 class="heading1">Key facts</h3>
                      <?php if( have_rows('enter_key_fact_details') ): ?>
                        <ul class="keyFacts">
                        <?php while( have_rows('enter_key_fact_details') ): the_row(); 
                          // vars
                          $face_title = get_sub_field('face_title');
                          $face_description = get_sub_field('face_description'); ?>
                          <li><?php echo $face_title;?>: <strong><?php echo $face_description;?></strong></li>
                        <?php endwhile; ?>
                        </ul>
                      <?php endif; ?>                  
                    </div>
                    <div class="col-md-6">
                      <h3 class="heading1">The <?php the_title();?> Experts</h3>
                      <div class="expertPic">
					  


			<?php wp_reset_query(); ?>
			
                        <!--<img src="<?php //echo get_template_directory_uri(); ?>/img/europe-expert-01.png" class="img-fluid">
                        <img src="<?php //echo get_template_directory_uri(); ?>/img/europe-expert-02.png" class="img-fluid">-->
						
			<?php 
			$post_id_new2 = get_the_ID();
			if( have_rows('select_experts_destin') ): ?>

			<?php $p=1; while( have_rows('select_experts_destin') ): the_row(); 
			// vars
			$post_id_new = get_sub_field('select_experrts_for_this_country_destin');
			$member_photo_new = get_field("member_photo", $post_id_new);	
            if($p==1 || $p==2){			
			?>
			<img class="img-fluid" src="<?php //echo $expert_image;?><?php echo $member_photo_new['url'];?>" alt="">

			<?php } $p++; endwhile; ?>
			<?php endif; ?>
			
                      </div>
                      <p class="expertsTxt"><?php echo  get_field('expert_content');?></p>
                      <div class="callThem">
                        Call them on <br><a href="tel:<?php echo  get_field('expert_phone_number');?>"><?php echo  get_field('expert_phone_number');?></a>
                      </div>  
                      <div class="cta left uppercase">
                        <a href="<?php echo $_SERVER['REQUEST_URI'];?>?member=<?php echo $post_id_new2;?>">
						<span>Discover their personal favourites</span>
						</a>
                      </div>
                    </div>
                  </div>
                </div>
              </section>

              <section class="gallery-page">
                <div class="container-fluid">
                  <div class="row mar10">
                    <?php 
                    $count = count(get_field('gallery_images'));
                    if( have_rows('gallery_images') ): ?>
                      <?php 
                      $i = 1;
                      while( have_rows('gallery_images') ): the_row(); 
                        $gallery_type         = get_sub_field('gallery_type'); 
                        $video_overlay_image  = get_sub_field('video_overlay_image');
                        $youtube_video_link   = get_sub_field('youtube_video_link');
                        $upload_image         = get_sub_field('upload_image'); 
                        ?>
                        <div class="col-md-3 pad10">
                          <figure>
                            <?php if ($gallery_type == 'Image') { ?>   
                                <img src="<?php echo $upload_image;?>" class="img-fluid">
                            <?php } 
                            else { ?>
                                <img src="<?php echo $video_overlay_image;?>" class="img-fluid">
                            <?php } ?>
                            <?php if ($gallery_type == 'Video') { 
                                $youtube_video_link     = get_sub_field('youtube_video_link');
                                $youtube_video_title    = get_sub_field('youtube_video_title');
                                $youtube_video_content  = get_sub_field('youtube_video_content');?>                    
                                <a href="#" class="video-overlay" data-toggle="modal" data-target="#videoModal" data-vimeo='<?php echo $youtube_video_link;?>' data-content="<?php echo $youtube_video_content;?>" data-title="<?php echo $youtube_video_title;?>">
                                  <img src="<?php echo get_template_directory_uri(); ?>/img/gallery-video.svg">
                                </a>
                            <?php } ?>
                            <?php if( $count == $i ){ ?>
                              <a href="<?php echo $currentUrl;?>/?gallery=1" class="viewFullGallery">
                                View Full Gallery <img src="<?php echo get_template_directory_uri(); ?>/img/gallery-right.svg">
                              </a>
                          <?php } ?>
                          </figure>
                        </div>
                      <?php $i++; endwhile; ?>
                    <?php endif; ?>
                  </div>
                </div>
              </section>

              <section class="topThingsToDO bg-light2">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <h3 class="heading1 mt-50 mb-40">Top things to do in <?php the_title();?></h3>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div id="topthings-carousel" class="owl-carousel owl-theme">

                        <?php if( have_rows('top_things_listing') ): ?>
                          
                          <?php while( have_rows('top_things_listing') ): the_row(); 
                            // vars
                            $image = get_sub_field('image');
                            $title = get_sub_field('title');
                            $description = get_sub_field('description'); ?>
                            <div class="item">
                                <img src="<?php echo $image;?>" class="img-fluid">
                                <h4 class="subHeadings"><?php echo $title;?></h4>
                                <p><?php echo $description;?></p>
                            </div>
                          <?php endwhile; ?>
                          
                        <?php endif; ?>   

                      </div>
                    </div>
                  </div>                 
                </div>
              </section>
            
          <?php }
          else if ( $queryString =='tailor-made=1' ){ ?>
              <section class="inner-txt">
                <div class="container">
                  <div class="row">
                    <div class="col-md-8">
                      <h3>Tailor-made holidays in <?php the_title();?> by Cox & Kings</h3>
                      <p><?php echo get_field('tailor_made_description');?></p>      
                    </div>
                    <div class="col-md-4">
                      <div class="circle-enquire text-center">
                        <h4 class="heading1">Create your <br>dream tour</h4>
                        <p>Our experts are at hand to tailor a completely personalised itinerary to suit your needs</p>
                        <div class="cta center">
                          <a href="#"><span>ENQUIRE TODAY</span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>

              <section class="all-desti">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <h1 class="heading1 mb-40">Destination in <?php the_title();?></h1>
                      <strong>FILTER BY REGION:</strong>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12"> 
                          <div class="destinations-tab">
                              <button class="filter-button active" data-filter="all">All</button>
                              <button class="filter-button" data-filter="North">North</button>
                              <button class="filter-button" data-filter="South">South</button>
                              <button class="filter-button" data-filter="West">West</button>
                              <button class="filter-button" data-filter="East">East</button>
                              <button class="filter-button" data-filter="Central">Central</button>
                          </div>
                          <div class="results">
                            Showing 12 of 12 destinations
                          </div>
                     </div>     
                   </div>

                    <div class="row mar10">
                      <?php 
                      $count = count(get_field('gallery_images'));
                      if( have_rows('child_destinations') ): ?>
                        <?php 
                        $i = 1;
                        while( have_rows('child_destinations') ): the_row(); 
                          $childDestinationId         = get_sub_field('select_child_destination'); ?>                         
                          <div class="gallery_product col-md-3 col-sm-6 col-12 filter pad10 <?php echo get_field('inner_destination_region', $childDestinationId);?>">
                                <img src="<?php echo get_field('small_image', $childDestinationId);?>" class="img-fluid">                      
                                <h4><?php echo get_the_title($childDestinationId);?></h4>
                                <p><?php echo get_field('inner_destination_short_text', $childDestinationId);?></p> 
                                <div class="cta left">
                                  <a href="<?php echo get_permalink($childDestinationId);?>"><span>VIEW DESTINATION</span></a>
                                </div> 
                            </div>
                        <?php $i++; endwhile; ?>
                      <?php endif; ?>
                    </div>

                    <div class="h-divider mb-50"></div>
                      
                    </div>
                  </div>
                </div>
              </section>    

              <section class="all-desti">
                <div class="container">
                  <div class="row">
                    <div class="col-md-8">
                      <h3 class="heading1 mt-0 mb-20">Let us create your dream tour</h3>            
                      <p class="expertsTxt">Our experts will be delighted to tailor a completely personalised itinerary to suit your interests, dates and budget. </p>
                      <div class="callThem mt-30 mb-30">
                        Call them on <br><a href="tel:020 3813 9289">020 3813 9289</a>
                      </div>  
                      <div class="cta left uppercase">
                        <a href="#"><span>ENQUIRE ONLINE</span></a>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/team-italy.png">
                    </div>
                  </div>
                </div>
              </section>
          <?php } 

          else if ( $queryString =='group-tours=1' || $queryString == 'group-tours=1&price=low-to-high' || $queryString == 'group-tours=1&price=high-to-low' || $queryString == 'group-tours=1&duration=low-to-high' || $queryString == 'group-tours=1&duration=high-to-low' || $queryString == 'group-tours=1&savings=1'){ ?>                

              <section class="inner-txt mb-30">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <h3><?php echo the_title();?> group tours </h3>
                      <?php echo get_field('group_tour_description'); ?>           
                    </div>
                  </div>
                </div>
              </section>

              <section class="toursFilter">
                <div class="container">
                  <div class="row">
                    <div class="col-md-3">
                        <h6 class="mb-50"><strong>Filter Tours</strong></h6>
                      <div class="filterBox">
                        <h5>Destination</h5>
                        <div class="select-destination">
                          <?php                           
                          $count = count(get_field('gallery_images'));
                          if( have_rows('child_destinations') ): ?>
                            <?php 
                            $i = 1;
                            /*$pages = get_posts(array(
                              'post_type' => 'ck_destination',
                              'numberposts' => -1,
                              'tax_query' => array(
                                array(
                                  'taxonomy' => 'destination_country',
                                  'field' => 'id',
                                  'terms' => $terms[0]->term_id, // Where term_id of Term 1 is "1".
                                  'include_children' => false
                                )
                              )
                            ));*/ 
                            //print_r($pages); ?>

                            <form>
                              <select class="country">
                                  <option value="">Select Destination</option>
                                  <?php                                  
                                  while( have_rows('child_destinations') ): the_row(); 
                                    $childDestinationId         = get_sub_field('select_child_destination'); ?>                         
                                    <option value="<?php echo strtolower(get_the_title($childDestinationId));?>"><?php echo strtolower(get_the_title($childDestinationId));?></option>
                                  <?php $i++; endwhile; ?>                                 
                              </select>
                            </form>
                          <?php endif; ?>
                        </div>              
                      </div>
                      <div class="filterBox">
                        <h5>Holiday Type</h5>                        
                        <div class="selectHolidayType">
                          <button class="htype" data-filter="all">All</button>             
                          <?php
                          /*Group taxonomy child taxonomy*/
                          $group_term_id = 3;
                          $taxonomy_name = 'holiday_type';
                          $termchildren = get_term_children( $group_term_id, $taxonomy_name );                                                  
                          foreach ( $termchildren as $child ) {                              
                              $term = get_term_by( 'id', $child, $taxonomy_name );  
                              $converted = strtolower(str_replace(' ', '-', $term->name));                            
                              echo '<button class="htype" data-filter="'.$converted.'">'.$term->name.'</button>  ';                              
                          }                          
                          ?> 
                        </div>
                      </div>
                        
                      <div class="filterBox">
                        <h5>Departure</h5>
                        <div class="selectHolidayType">
                          <button class="departure" data-filter="all">All</button> 
                          <?php
                           $month = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');?>                          
                          <?php for($i=0; $i<=12; $i++){ ?>
                            <button class="departure" data-filter="<?php echo strtolower($month[$i]);?>"><?php echo $month[$i];?></button>  
                          <?php } ?>                          
                        </div>
                      </div>
                    </div>
					
					<?php
					$post_id_grptours_new=array();
					if( have_rows('select_group_tours') ): 
					while( have_rows('select_group_tours') ): the_row();

					$post_id_grptours_new[] = get_sub_field('select_group_tour'); 
                             
					endwhile;
					endif;
					
					$count_group = count($post_id_grptours_new);
					?>
                      
                  <div class="col-md-9">
                     <div class="filter-top">
					 
					 <?php if($count_group!=''){?>
                      <span>Showing <?php echo $count_group;?> of <?php echo $count_group;?> destinations</span>
					 <?php } ?>
					 
                      <div class="sortBy">
                        <strong>Sort by:</strong>
                        <dl id='countries' class="dropdown">
                            <dt>
                              <a href="#">
                                <span>
                                  <?php if ( $_GET['price'] == 'low-to-high' ) {
                                    echo 'Price (low to high)';
                                  }
                                  else if( $_GET['price'] == 'high-to-low' ){
                                    echo 'Price (high to low)';
                                  }
                                  else if( $_GET['duration'] == 'low-to-high' ){
                                    echo 'Duration (short to long)';
                                  }
                                  else if( $_GET['duration'] == 'high-to-low' ){
                                    echo 'Duration (long to short)';
                                  } 
                                  else if( $_GET['savings'] == '1' ){
                                    echo 'Saving';
                                  } ?>
                                </span>
                              </a>
                            </dt>
                            <dd>
                              <ul>
                               <li><a>Popularity<span class="value">Popularity</span></a></li>
                               <li><a href="<?php echo $currentUrl;?>/?group-tours=1&price=low-to-high">Price (low to high)<span class="value">Price (low to high)</span></a></li>
                               <li><a href="<?php echo $currentUrl;?>/?group-tours=1&price=high-to-low">Price (high to low)<span class="value">Price (high to low)</span></a></li>
                               <li><a href="<?php echo $currentUrl;?>/?group-tours=1&duration=low-to-high">Duration (short to long)<span class="value">Duration (short to long)</span></a></li>
                               <li><a href="<?php echo $currentUrl;?>/?group-tours=1&duration=high-to-low">Duration (long to short)<span class="value">Duration (long to short)</span></a></li>
                               <li><a href="<?php echo $currentUrl;?>/?group-tours=1&savings=1">Saving<span class="value">Saving</span></a></li>
                              </ul>
                            </dd>
                        </dl>
                      </div>   
                      </div> 
                      <div class="h-divider mb-10"></div>
                      <div class="items mb-50">
                        <?php //echo 'swetabja'.$_GET['price']; ?>
                        <?php if ( $_GET['price'] == 'low-to-high' ) {
                          if( have_rows('select_group_tours') ): 
                              while( have_rows('select_group_tours') ): the_row();
                                
                                $post_id_grptours = get_sub_field('select_group_tour'); 
                                $price_starts_from = get_field('price_starts_from', $post_id_grptours);                                
                                $priceLowToHigh[$price_starts_from] = $post_id_grptours;                                

                              endwhile;
                          endif;
                          ksort($priceLowToHigh);
                          //print_r($priceLowToHigh);?>
                          <ul id="countryLuxuryTours" class="listing">
                            <?php foreach ($priceLowToHigh as $key => $postId) {
                              //echo $postId.'=='; 
                              $featured_img_url = get_the_post_thumbnail_url($postId,'group-tour-small');
                              $grptaxonomy = get_the_terms($postId, 'holiday_type' ); // Get taxonomy of holidays                              
                              $departureMonths = get_field('best_departure_time', $postId);

                              $departureMonths = strtolower(implode(' ', $departureMonths)); //Get the Months in , 
                              //print_r($departureMonths);                           
                              foreach($grptaxonomy as $grptax){                                  
                                $test .= strtolower(str_replace(' ', '-', $grptax->name)).' '; 
                              }                              
                              $related_child_country = strtolower(get_the_title(get_field('related_child_country', $postId)));
                              ?>

                              <li class="panel gallery_product filter <?php echo $test.$departureMonths.' '.$related_child_country;?>">
                                <figure>
                                  <a href="<?php echo get_the_permalink($postId);?>">                  
                                  <img src="<?php echo $featured_img_url;?>" class="img-fluid">
                                  </a>
                                </figure>
                                <div class="content">
                                  <h2><a href="<?php echo get_the_permalink($postId);?>"><?php echo  get_the_title($postId);?></a>
                                  </h2>
                                  <div class="text">
                                    <ul class="features">
                                      <li class="tags"><a href="#HolidayTypePopup" class="simple-link"><span>Superior</span></a><span><?php echo get_field('general_interest', $postId);?></span></li>
                                      <li class="length"><?php echo get_field('tour_span_days', $postId);?> Days <?php echo get_field('tour_span_nights', $postId);?></li>
                                    </ul>
                                    <?php
                                    $post_content = get_post($postId);
                                    $content = $post_content->post_content;?>
                                    <p><?php echo substr($content, 0,150);?>...</p>
                                  </div>
                                  <div class="prices">
                                    <div class="prices_row">
                                      <h4><a href="#">Superior group tour</a></h4>
                                      <ul>
                                        <li class="price">Lead-in price: £<?php echo get_field('lead-in_price', $postId);?> pp</li>
                                        <li class="price">Current prices from: £<?php echo get_field('price_starts_from', $postId);?> pp</li>
                                        <li class="saving">Saving up to £<?php echo get_field('savings_amount', $postId);?> on specific departures when booked by <?php echo get_field('savings_date', $postId);?></li>
                                      </ul>
                                    </div>
                                    <div class="prices_row"></div>
                                  </div>
                                  <ul class="buttons">
                                    <li class="type-group">
                                      <ul>
                                        <li><a href="#" class="btn">Superior group</a></li>
                                        <li><a href="#" class="btn">Superior private</a></li>
                                      </ul>
                                    </li>
                                  </ul>
                                 
                                </div>
                                <br class="spacer">
                              </li>
                            <?php } ?>
                          </ul>
                        <?php }
                        else if ( $_GET['price'] == 'high-to-low') {
                          //echo "swetabja";
                          if( have_rows('select_group_tours') ): 
                              while( have_rows('select_group_tours') ): the_row();
                                
                                $post_id_grptours = get_sub_field('select_group_tour'); 
                                $price_starts_from = get_field('price_starts_from', $post_id_grptours);                                
                                $priceHighToLow[$price_starts_from] = $post_id_grptours;                                

                              endwhile;
                          endif;
                          //print_r($priceHighToLow);
                          krsort($priceHighToLow);
                          //print_r($priceLowToHigh);?>
                          <ul id="countryLuxuryTours" class="listing">
                            <?php foreach ($priceHighToLow as $key => $postId) {
                              //echo $postId.'=='; 
                              $featured_img_url = get_the_post_thumbnail_url($postId,'group-tour-small');
                              $grptaxonomy = get_the_terms($postId, 'holiday_type' ); // Get taxonomy of holidays
                              $departureMonths = get_field('best_departure_time', $postId);

                              $departureMonths = strtolower(implode(' ', $departureMonths)); //Get the Months in , 
                              //print_r($departureMonths);                           
                              foreach($grptaxonomy as $grptax){                                  
                                $test .= strtolower(str_replace(' ', '-', $grptax->name)).' '; 
                              }                              
                              $related_child_country = strtolower(get_the_title(get_field('related_child_country', $postId)));
                              ?>

                              <li class="panel gallery_product filter <?php echo $test.$departureMonths.' '.$related_child_country;?>">
                                <figure>
                                  <a href="<?php echo get_the_permalink($postId);?>">                  
                                  <img src="<?php echo $featured_img_url;?>" class="img-fluid">
                                  </a>
                                </figure>
                                <div class="content">
                                  <h2><a href="<?php echo get_the_permalink($postId);?>"><?php echo  get_the_title($postId);?></a>
                                  </h2>
                                  <div class="text">
                                    <ul class="features">
                                      <li class="tags"><a href="#HolidayTypePopup" class="simple-link"><span>Superior</span></a><span><?php echo get_field('general_interest', $postId);?></span></li>
                                      <li class="length"><?php echo get_field('tour_span_days', $postId);?> Days <?php echo get_field('tour_span_nights', $postId);?></li>
                                    </ul>
                                    <?php
                                    $post_content = get_post($postId);
                                    $content = $post_content->post_content;?>
                                    <p><?php echo substr($content, 0,150);?>...</p>
                                  </div>
                                  <div class="prices">
                                    <div class="prices_row">
                                      <h4><a href="#">Superior group tour</a></h4>
                                      <ul>
                                        <li class="price">Lead-in price: £<?php echo get_field('lead-in_price', $postId);?> pp</li>
                                        <li class="price">Current prices from: £<?php echo get_field('price_starts_from', $postId);?> pp</li>
                                        <li class="saving">Saving up to £<?php echo get_field('savings_amount', $postId);?> on specific departures when booked by <?php echo get_field('savings_date', $postId);?></li>
                                      </ul>
                                    </div>
                                    <div class="prices_row"></div>
                                  </div>
                                  <ul class="buttons">
                                    <li class="type-group">
                                      <ul>
                                        <li><a href="#" class="btn">Superior group</a></li>
                                        <li><a href="#" class="btn">Superior private</a></li>
                                      </ul>
                                    </li>
                                  </ul>
                                 
                                </div>
                                <br class="spacer">
                              </li>
                            <?php } ?>
                          </ul>
                        <?php } 
                        else if ( $_GET['duration'] == 'high-to-low') {
                          //echo "swetabja";
                          if( have_rows('select_group_tours') ): 
                              while( have_rows('select_group_tours') ): the_row();
                                
                                $post_id_grptours = get_sub_field('select_group_tour'); 
                                $tour_span_days = get_field('tour_span_days', $post_id_grptours);                                
                                $priceHighToLow[$tour_span_days] = $post_id_grptours;                                

                              endwhile;
                          endif;
                          //print_r($priceHighToLow);
                          krsort($priceHighToLow);
                          //print_r($priceLowToHigh);?>
                          <ul id="countryLuxuryTours" class="listing">
                            <?php foreach ($priceHighToLow as $key => $postId) {
                              //echo $postId.'=='; 
                              $featured_img_url = get_the_post_thumbnail_url($postId,'group-tour-small');
                              $grptaxonomy = get_the_terms($postId, 'holiday_type' ); // Get taxonomy of holidays
                              $departureMonths = get_field('best_departure_time', $postId);

                              $departureMonths = strtolower(implode(' ', $departureMonths)); //Get the Months in , 
                              //print_r($departureMonths);                           
                              foreach($grptaxonomy as $grptax){                                  
                                $test .= strtolower(str_replace(' ', '-', $grptax->name)).' '; 
                              }                              
                              $related_child_country = strtolower(get_the_title(get_field('related_child_country', $postId)));
                              ?>

                              <li class="panel gallery_product filter <?php echo $test.$departureMonths.' '.$related_child_country;?>">
                                <figure>
                                  <a href="<?php echo get_the_permalink($postId);?>">                  
                                  <img src="<?php echo $featured_img_url;?>" class="img-fluid">
                                  </a>
                                </figure>
                                <div class="content">
                                  <h2><a href="<?php echo get_the_permalink($postId);?>"><?php echo  get_the_title($postId);?></a>
                                  </h2>
                                  <div class="text">
                                    <ul class="features">
                                      <li class="tags"><a href="#HolidayTypePopup" class="simple-link"><span>Superior</span></a><span><?php echo get_field('general_interest', $postId);?></span></li>
                                      <li class="length"><?php echo get_field('tour_span_days', $postId);?> Days <?php echo get_field('tour_span_nights', $postId);?></li>
                                    </ul>
                                    <?php
                                    $post_content = get_post($postId);
                                    $content = $post_content->post_content;?>
                                    <p><?php echo substr($content, 0,150);?>...</p>
                                  </div>
                                  <div class="prices">
                                    <div class="prices_row">
                                      <h4><a href="#">Superior group tour</a></h4>
                                      <ul>
                                        <li class="price">Lead-in price: £<?php echo get_field('lead-in_price', $postId);?> pp</li>
                                        <li class="price">Current prices from: £<?php echo get_field('price_starts_from', $postId);?> pp</li>
                                        <li class="saving">Saving up to £<?php echo get_field('savings_amount', $postId);?> on specific departures when booked by <?php echo get_field('savings_date', $postId);?></li>
                                      </ul>
                                    </div>
                                    <div class="prices_row"></div>
                                  </div>
                                  <ul class="buttons">
                                    <li class="type-group">
                                      <ul>
                                        <li><a href="#" class="btn">Superior group</a></li>
                                        <li><a href="#" class="btn">Superior private</a></li>
                                      </ul>
                                    </li>
                                  </ul>
                                 
                                </div>
                                <br class="spacer">
                              </li>
                            <?php } ?>
                          </ul>
                        <?php } 
                        else if ( $_GET['duration'] == 'low-to-high') {
                          //echo "swetabja";
                          if( have_rows('select_group_tours') ): 
                              while( have_rows('select_group_tours') ): the_row();
                                
                                $post_id_grptours = get_sub_field('select_group_tour'); 
                                $tour_span_days = get_field('tour_span_days', $post_id_grptours);                                
                                $priceHighToLow[$tour_span_days] = $post_id_grptours;                                

                              endwhile;
                          endif;
                          //print_r($priceHighToLow);
                          ksort($priceHighToLow);
                          //print_r($priceLowToHigh);?>
                          <ul id="countryLuxuryTours" class="listing">
                            <?php foreach ($priceHighToLow as $key => $postId) {
                              //echo $postId.'=='; 
                              $featured_img_url = get_the_post_thumbnail_url($postId,'group-tour-small');
                              $grptaxonomy = get_the_terms($postId, 'holiday_type' ); // Get taxonomy of holidays
                              $departureMonths = get_field('best_departure_time', $postId);

                              $departureMonths = strtolower(implode(' ', $departureMonths)); //Get the Months in , 
                              //print_r($departureMonths);                           
                              foreach($grptaxonomy as $grptax){                                  
                                $test .= strtolower(str_replace(' ', '-', $grptax->name)).' '; 
                              }                              
                              $related_child_country = strtolower(get_the_title(get_field('related_child_country', $postId)));
                              ?>

                              <li class="panel gallery_product filter <?php echo $test.$departureMonths.' '.$related_child_country;?>">
                                <figure>
                                  <a href="<?php echo get_the_permalink($postId);?>">                  
                                  <img src="<?php echo $featured_img_url;?>" class="img-fluid">
                                  </a>
                                </figure>
                                <div class="content">
                                  <h2><a href="<?php echo get_the_permalink($postId);?>"><?php echo  get_the_title($postId);?></a>
                                  </h2>
                                  <div class="text">
                                    <ul class="features">
                                      <li class="tags"><a href="#HolidayTypePopup" class="simple-link"><span>Superior</span></a><span><?php echo get_field('general_interest', $postId);?></span></li>
                                      <li class="length"><?php echo get_field('tour_span_days', $postId);?> Days <?php echo get_field('tour_span_nights', $postId);?></li>
                                    </ul>
                                    <?php
                                    $post_content = get_post($postId);
                                    $content = $post_content->post_content;?>
                                    <p><?php echo substr($content, 0,150);?>...</p>
                                  </div>
                                  <div class="prices">
                                    <div class="prices_row">
                                      <h4><a href="#">Superior group tour</a></h4>
                                      <ul>
                                        <li class="price">Lead-in price: £<?php echo get_field('lead-in_price', $postId);?> pp</li>
                                        <li class="price">Current prices from: £<?php echo get_field('price_starts_from', $postId);?> pp</li>
                                        <li class="saving">Saving up to £<?php echo get_field('savings_amount', $postId);?> on specific departures when booked by <?php echo get_field('savings_date', $postId);?></li>
                                      </ul>
                                    </div>
                                    <div class="prices_row"></div>
                                  </div>
                                  <ul class="buttons">
                                    <li class="type-group">
                                      <ul>
                                        <li><a href="#" class="btn">Superior group</a></li>
                                        <li><a href="#" class="btn">Superior private</a></li>
                                      </ul>
                                    </li>
                                  </ul>
                                 
                                </div>
                                <br class="spacer">
                              </li>
                            <?php } ?>
                          </ul>
                        <?php } 
                        else if ( $_GET['savings'] == '1') {
                          //echo "swetabja";
                          if( have_rows('select_group_tours') ): 
                              while( have_rows('select_group_tours') ): the_row();
                                
                                $post_id_grptours = get_sub_field('select_group_tour'); 
                                $savings_amount = get_field('savings_amount', $post_id_grptours);                                
                                $priceHighToLow[$savings_amount] = $post_id_grptours;                                

                              endwhile;
                          endif;
                          //print_r($priceHighToLow);
                          krsort($priceHighToLow);
                          //print_r($priceLowToHigh);?>
                          <ul id="countryLuxuryTours" class="listing">
                            <?php foreach ($priceHighToLow as $key => $postId) {
                              //echo $postId.'=='; 
                              $featured_img_url = get_the_post_thumbnail_url($postId,'group-tour-small');
                              $grptaxonomy = get_the_terms($postId, 'holiday_type' ); // Get taxonomy of holidays
                              $departureMonths = get_field('best_departure_time', $postId);

                              $departureMonths = strtolower(implode(' ', $departureMonths)); //Get the Months in , 
                              //print_r($departureMonths);                           
                              foreach($grptaxonomy as $grptax){                                  
                                $test .= strtolower(str_replace(' ', '-', $grptax->name)).' '; 
                              }                              
                              $related_child_country = strtolower(get_the_title(get_field('related_child_country', $postId)));
                              ?>

                              <li class="panel gallery_product filter <?php echo $test.$departureMonths.' '.$related_child_country;?>">
                                <figure>
                                  <a href="<?php echo get_the_permalink($postId);?>">                  
                                  <img src="<?php echo $featured_img_url;?>" class="img-fluid">
                                  </a>
                                </figure>
                                <div class="content">
                                  <h2><a href="<?php echo get_the_permalink($postId);?>"><?php echo  get_the_title($postId);?></a>
                                  </h2>
                                  <div class="text">
                                    <ul class="features">
                                      <li class="tags"><a href="#HolidayTypePopup" class="simple-link"><span>Superior</span></a><span><?php echo get_field('general_interest', $postId);?></span></li>
                                      <li class="length"><?php echo get_field('tour_span_days', $postId);?> Days <?php echo get_field('tour_span_nights', $postId);?></li>
                                    </ul>
                                    <?php
                                    $post_content = get_post($postId);
                                    $content = $post_content->post_content;?>
                                    <p><?php echo substr($content, 0,150);?>...</p>
                                  </div>
                                  <div class="prices">
                                    <div class="prices_row">
                                      <h4><a href="#">Superior group tour</a></h4>
                                      <ul>
                                        <li class="price">Lead-in price: £<?php echo get_field('lead-in_price', $postId);?> pp</li>
                                        <li class="price">Current prices from: £<?php echo get_field('price_starts_from', $postId);?> pp</li>
                                        <li class="saving">Saving up to £<?php echo get_field('savings_amount', $postId);?> on specific departures when booked by <?php echo get_field('savings_date', $postId);?></li>
                                      </ul>
                                    </div>
                                    <div class="prices_row"></div>
                                  </div>
                                  <ul class="buttons">
                                    <li class="type-group">
                                      <ul>
                                        <li><a href="#" class="btn">Superior group</a></li>
                                        <li><a href="#" class="btn">Superior private</a></li>
                                      </ul>
                                    </li>
                                  </ul>
                                 
                                </div>
                                <br class="spacer">
                              </li>
                            <?php } ?>
                          </ul>
                        <?php } 
                        else{ ?>
                          <ul id="countryLuxuryTours" class="listing">
                            <?php if( have_rows('select_group_tours') ): ?>
                              <?php while( have_rows('select_group_tours') ): the_row(); 
                                // vars
                                $post_id_grptours = get_sub_field('select_group_tour'); 
                                $featured_img_url = get_the_post_thumbnail_url($post_id_grptours,'group-tour-small');
                                $grptaxonomy = get_the_terms($post_id_grptours, 'holiday_type' ); // Get taxonomy of holidays
                                $departureMonths = get_field('best_departure_time', $post_id_grptours);
                                $related_child_country = strtolower(get_the_title(get_field('related_child_country', $post_id_grptours)));
                                //print_r($departureMonths);
                                $departureMonths = strtolower(implode(' ', $departureMonths)); //Get the Months in ,
                                //print_r($grptaxonomy);
                                foreach($grptaxonomy as $grptax){                                  
                                  $test .= strtolower(str_replace(' ', '-', $grptax->name)).' '; 
                                }
                                  $price_starts_from = get_field('price_starts_from', $post_id_grptours);
                                  $field_data[$price_starts_from] = $post_id_grptours;?>
                                  <li class="panel gallery_product filter <?php echo $test.$departureMonths.' '.$related_child_country;?>">
                                    <figure>
                                      <a href="<?php echo get_the_permalink($post_id_grptours);?>">                  
                                      <img src="<?php echo $featured_img_url;?>" class="img-fluid">
                                      </a>
                                    </figure>
                                    <div class="content">
                                      <h2><a href="<?php echo get_the_permalink($post_id_grptours);?>"><?php echo  get_the_title($post_id_grptours);?></a>
                                      </h2>
                                      <div class="text">
                                        <ul class="features">
                                          <li class="tags"><a href="#HolidayTypePopup" class="simple-link"><span>Superior</span></a><span><?php echo get_field('general_interest', $post_id_grptours);?></span></li>
                                          <li class="length"><?php echo get_field('tour_span_days', $post_id_grptours);?> Days <?php echo get_field('tour_span_nights', $post_id_grptours);?></li>
                                        </ul>
                                        <?php
                                        $post_content = get_post($post_id_grptours);
                                        $content = $post_content->post_content;?>
                                        <p><?php echo substr($content, 0,150);?>...</p>
                                      </div>
                                      <div class="prices">
                                        <div class="prices_row">
                                          <h4><a href="#">Superior group tour</a></h4>
                                          <ul>
                                            <li class="price">Lead-in price: £<?php echo get_field('lead-in_price', $post_id_grptours);?> pp</li>
                                            <li class="price">Current prices from: £<?php echo get_field('price_starts_from', $post_id_grptours);?> pp</li>
                                            <li class="saving">Saving up to £<?php echo get_field('savings_amount', $post_id_grptours);?> on specific departures when booked by <?php echo get_field('savings_date', $post_id_grptours);?></li>
                                          </ul>
                                        </div>
                                        <div class="prices_row"></div>
                                      </div>
                                      <ul class="buttons">
                                        <li class="type-group">
                                          <ul>
                                            <li><a href="#" class="btn">Superior group</a></li>
                                            <li><a href="#" class="btn">Superior private</a></li>
                                          </ul>
                                        </li>
                                      </ul>
                                     
                                    </div>
                                    <br class="spacer">
                                  </li>
                              <?php endwhile; ?>

                            <?php endif; ?>                        
                            <?php /*print_r($field_data); 
                            ksort($field_data);
                            print_r($field_data);*/ ?>
                          </ul>
                        <?php } ?>
                      </div>
                  </div>
                  </div>
                </div>
              </section>                      

          <?php } 

          else if ( $queryString =='private-travel=1' || $queryString == 'private-travel=1&price=low-to-high' || $queryString == 'private-travel=1&price=high-to-low' || $queryString == 'private-travel=1&duration=low-to-high' || $queryString == 'private-travel=1&duration=high-to-low' || $queryString == 'private-travel=1&savings=1'){ ?>                

              <section class="inner-txt mb-30">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <h1>Private <?php echo the_title();?> tours </h1>
                      <?php echo get_field('private_travel_description'); ?>           
                    </div>
                  </div>
                </div>
              </section>

              <section class="toursFilter">
                <div class="container">
                  <div class="row">
                    <div class="col-md-3">
                        <h6 class="mb-50"><strong>Filter Tours</strong></h6>
                      <div class="filterBox">
                        <h5>Destination</h5>
                        <div class="select-destination">
                          <?php                           
                          $count = count(get_field('gallery_images'));
                          if( have_rows('child_destinations') ): ?>
                            <?php 
                            $i = 1;
                            /*$pages = get_posts(array(
                              'post_type' => 'ck_destination',
                              'numberposts' => -1,
                              'tax_query' => array(
                                array(
                                  'taxonomy' => 'destination_country',
                                  'field' => 'id',
                                  'terms' => $terms[0]->term_id, // Where term_id of Term 1 is "1".
                                  'include_children' => false
                                )
                              )
                            ));*/ 
                            //print_r($pages); ?>

                            <form>
                              <select class="country">
                                  <option value="">Select Destination</option>
                                  <?php                                  
                                  while( have_rows('child_destinations') ): the_row(); 
                                    $childDestinationId         = get_sub_field('select_child_destination'); ?>                         
                                    <option value="<?php echo strtolower(get_the_title($childDestinationId));?>"><?php echo strtolower(get_the_title($childDestinationId));?></option>
                                  <?php $i++; endwhile; ?>                                 
                              </select>
                            </form>
                          <?php endif; ?>
                        </div>              
                      </div>
                      <div class="filterBox">
                        <h5>Holiday Type</h5>                        
                        <div class="selectHolidayType">                        
                          <?php
                          /*Group taxonomy child taxonomy*/
                          $group_term_id = 3;
                          $taxonomy_name = 'holiday_type';
                          $termchildren = get_term_children( $group_term_id, $taxonomy_name );                                                  
                          foreach ( $termchildren as $child ) {                              
                              $term = get_term_by( 'id', $child, $taxonomy_name );  
                              $converted = strtolower(str_replace(' ', '-', $term->name));                            
                              echo '<button class="htype" data-filter="'.$converted.'">'.$term->name.'</button>  ';                              
                          }                          
                          ?> 
                        </div>
                      </div>
                        
                      <div class="filterBox">
                        <h5>Departure</h5>
                        <div class="selectHolidayType">
                          <?php
                           $month = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');?>                          
                          <?php for($i=0; $i<=12; $i++){ ?>
                            <button class="departure" data-filter="<?php echo strtolower($month[$i]);?>"><?php echo $month[$i];?></button>  
                          <?php } ?>                          
                        </div>
                      </div>
                    </div>
					
					
					<?php
					$post_id_travel_new=array();
					if( have_rows('select_private_travels') ): 
					while( have_rows('select_private_travels') ): the_row();

					$post_id_travel_new[] = get_sub_field('select_private_travel'); 
                             
					endwhile;
					endif;
					
					$count_travel = count($post_id_travel_new);
					?>
                      
                  <div class="col-md-9">
                     <div class="filter-top">
					 
                     <?php if($count_travel!=''){?>
                      <span>Showing <?php echo $count_travel;?> of <?php echo $count_travel;?> destinations</span>
					 <?php } ?>
					 
                      <div class="sortBy">
                        <strong>Sort by:</strong>
                        <dl id='countries' class="dropdown">
                            <dt>
                              <a href="#">
                                <span>
                                  <?php if ( $_GET['price'] == 'low-to-high' ) {
                                    echo 'Price (low to high)';
                                  }
                                  else if( $_GET['price'] == 'high-to-low' ){
                                    echo 'Price (high to low)';
                                  }
                                  else if( $_GET['duration'] == 'low-to-high' ){
                                    echo 'Duration (short to long)';
                                  }
                                  else if( $_GET['duration'] == 'high-to-low' ){
                                    echo 'Duration (long to short)';
                                  } 
                                  else if( $_GET['savings'] == '1' ){
                                    echo 'Saving';
                                  } ?>
                                </span>
                              </a>
                            </dt>
                            <dd>
                              <ul>
                               <li><a>Popularity<span class="value">Popularity</span></a></li>
                               <li><a href="<?php echo $currentUrl;?>/?private-travel=1&price=low-to-high">Price (low to high)<span class="value">Price (low to high)</span></a></li>
                               <li><a href="<?php echo $currentUrl;?>/?private-travel=1&price=high-to-low">Price (high to low)<span class="value">Price (high to low)</span></a></li>
                               <li><a href="<?php echo $currentUrl;?>/?private-travel=1&duration=low-to-high">Duration (short to long)<span class="value">Duration (short to long)</span></a></li>
                               <li><a href="<?php echo $currentUrl;?>/?private-travel=1&duration=high-to-low">Duration (long to short)<span class="value">Duration (long to short)</span></a></li>
                               <li><a href="<?php echo $currentUrl;?>/?private-travel=1&savings=1">Saving<span class="value">Saving</span></a></li>
                              </ul>
                            </dd>
                        </dl>
                      </div>   
                      </div> 
                      <div class="h-divider mb-10"></div>
                      <div class="items mb-50">
                        <?php //echo 'swetabja'.$_GET['price']; ?>
                        <?php if ( $_GET['price'] == 'low-to-high' ) {
                          if( have_rows('select_private_travels') ): 
                              while( have_rows('select_private_travels') ): the_row();
                                
                                $post_id_grptours = get_sub_field('select_private_travel'); 
                                $price_starts_from = get_field('price_starts_from', $post_id_grptours);                                
                                $priceLowToHigh[$price_starts_from] = $post_id_grptours;                                

                              endwhile;
                          endif;
                          ksort($priceLowToHigh);
                          //print_r($priceLowToHigh);?>
                          <ul id="countryLuxuryTours" class="listing">
                            <?php foreach ($priceLowToHigh as $key => $postId) {
                              //echo $postId.'=='; 
                              $featured_img_url = get_the_post_thumbnail_url($postId,'group-tour-small');
                              $grptaxonomy = get_the_terms($postId, 'holiday_type' ); // Get taxonomy of holidays                              
                              $departureMonths = get_field('best_departure_time', $postId);

                              $departureMonths = strtolower(implode(' ', $departureMonths)); //Get the Months in , 
                              //print_r($departureMonths);                           
                              foreach($grptaxonomy as $grptax){                                  
                                $test .= strtolower(str_replace(' ', '-', $grptax->name)).' '; 
                              }                              
                              $related_child_country = strtolower(get_the_title(get_field('related_child_country', $postId)));
                              ?>

                              <li class="panel gallery_product filter <?php echo $test.$departureMonths.' '.$related_child_country;?>">
                                <figure>
                                  <a href="<?php echo get_the_permalink($postId);?>">                  
                                  <img src="<?php echo $featured_img_url;?>" class="img-fluid">
                                  </a>
                                </figure>
                                <div class="content">
                                  <a href="<?php echo get_the_permalink($postId);?>"><h2><?php echo  get_the_title($postId);?></h2></a>
                                  
                                  <div class="text">
                                    <ul class="features">
                                      <li class="tags"><a href="#HolidayTypePopup" class="simple-link"><span>Superior</span></a><span><?php echo get_field('general_interest', $postId);?></span></li>
                                      <li class="length"><?php echo get_field('tour_span_days', $postId);?> Days <?php echo get_field('tour_span_nights', $postId);?></li>
                                    </ul>
                                    <?php
                                    $post_content = get_post($postId);
                                    $content = $post_content->post_content;?>
                                    <p><?php echo substr($content, 0,150);?>...</p>
                                  </div>
                                  <div class="prices">
                                    <div class="prices_row">
                                      <h4><a href="#">Superior group tour</a></h4>
                                      <ul>
                                        <li class="price">Lead-in price: £<?php echo get_field('lead-in_price', $postId);?> pp</li>
                                        <li class="price">Current prices from: £<?php echo get_field('price_starts_from', $postId);?> pp</li>
                                        <li class="saving">Saving up to £<?php echo get_field('savings_amount', $postId);?> on specific departures when booked by <?php echo get_field('savings_date', $postId);?></li>
                                      </ul>
                                    </div>
                                    <div class="prices_row"></div>
                                  </div>
                                  <ul class="buttons">
                                    <li class="type-group">
                                      <ul>                                        
                                        <li><a href="#" class="btn">Superior private</a></li>
                                        <li><a href="#" class="btn">Superior group</a></li>
                                      </ul>
                                    </li>
                                  </ul>
                                 
                                </div>
                                <br class="spacer">
                              </li>
                            <?php } ?>
                          </ul>
                        <?php }
                        else if ( $_GET['price'] == 'high-to-low') {
                          //echo "swetabja";
                          if( have_rows('select_private_travels') ): 
                              while( have_rows('select_private_travels') ): the_row();
                                
                                $post_id_grptours = get_sub_field('select_private_travel'); 
                                $price_starts_from = get_field('price_starts_from', $post_id_grptours);                                
                                $priceHighToLow[$price_starts_from] = $post_id_grptours;                                

                              endwhile;
                          endif;
                          //print_r($priceHighToLow);
                          krsort($priceHighToLow);
                          //print_r($priceLowToHigh);?>
                          <ul id="countryLuxuryTours" class="listing">
                            <?php foreach ($priceHighToLow as $key => $postId) {
                              //echo $postId.'=='; 
                              $featured_img_url = get_the_post_thumbnail_url($postId,'group-tour-small');
                              $grptaxonomy = get_the_terms($postId, 'holiday_type' ); // Get taxonomy of holidays
                              $departureMonths = get_field('best_departure_time', $postId);

                              $departureMonths = strtolower(implode(' ', $departureMonths)); //Get the Months in , 
                              //print_r($departureMonths);                           
                              foreach($grptaxonomy as $grptax){                                  
                                $test .= strtolower(str_replace(' ', '-', $grptax->name)).' '; 
                              }                              
                              $related_child_country = strtolower(get_the_title(get_field('related_child_country', $postId)));
                              ?>

                              <li class="panel gallery_product filter <?php echo $test.$departureMonths.' '.$related_child_country;?>">
                                <figure>
                                  <a href="<?php echo get_the_permalink($postId);?>">                  
                                  <img src="<?php echo $featured_img_url;?>" class="img-fluid">
                                  </a>
                                </figure>
                                <div class="content">
                                  <h2><a href="<?php echo get_the_permalink($postId);?>"><?php echo  get_the_title($postId);?></a>
                                  </h2>
                                  <div class="text">
                                    <ul class="features">
                                      <li class="tags"><a href="#HolidayTypePopup" class="simple-link"><span>Superior</span></a><span><?php echo get_field('general_interest', $postId);?></span></li>
                                      <li class="length"><?php echo get_field('tour_span_days', $postId);?> Days <?php echo get_field('tour_span_nights', $postId);?></li>
                                    </ul>
                                    <?php
                                    $post_content = get_post($postId);
                                    $content = $post_content->post_content;?>
                                    <p><?php echo substr($content, 0,150);?>...</p>
                                  </div>
                                  <div class="prices">
                                    <div class="prices_row">
                                      <h4><a href="#">Superior group tour</a></h4>
                                      <ul>
                                        <li class="price">Lead-in price: £<?php echo get_field('lead-in_price', $postId);?> pp</li>
                                        <li class="price">Current prices from: £<?php echo get_field('price_starts_from', $postId);?> pp</li>
                                        <li class="saving">Saving up to £<?php echo get_field('savings_amount', $postId);?> on specific departures when booked by <?php echo get_field('savings_date', $postId);?></li>
                                      </ul>
                                    </div>
                                    <div class="prices_row"></div>
                                  </div>
                                  <ul class="buttons">
                                    <li class="type-group">
                                      <ul>                                        
                                        <li><a href="#" class="btn">Superior private</a></li>
                                        <li><a href="#" class="btn">Superior group</a></li>
                                      </ul>
                                    </li>
                                  </ul>
                                 
                                </div>
                                <br class="spacer">
                              </li>
                            <?php } ?>
                          </ul>
                        <?php } 
                        else if ( $_GET['duration'] == 'high-to-low') {
                          //echo "swetabja";
                          if( have_rows('select_private_travels') ): 
                              while( have_rows('select_private_travels') ): the_row();
                                
                                $post_id_grptours = get_sub_field('select_private_travel'); 
                                $tour_span_days = get_field('tour_span_days', $post_id_grptours);                                
                                $priceHighToLow[$tour_span_days] = $post_id_grptours;                                

                              endwhile;
                          endif;
                          //print_r($priceHighToLow);
                          krsort($priceHighToLow);
                          //print_r($priceLowToHigh);?>
                          <ul id="countryLuxuryTours" class="listing">
                            <?php foreach ($priceHighToLow as $key => $postId) {
                              //echo $postId.'=='; 
                              $featured_img_url = get_the_post_thumbnail_url($postId,'group-tour-small');
                              $grptaxonomy = get_the_terms($postId, 'holiday_type' ); // Get taxonomy of holidays
                              $departureMonths = get_field('best_departure_time', $postId);

                              $departureMonths = strtolower(implode(' ', $departureMonths)); //Get the Months in , 
                              //print_r($departureMonths);                           
                              foreach($grptaxonomy as $grptax){                                  
                                $test .= strtolower(str_replace(' ', '-', $grptax->name)).' '; 
                              }                              
                              $related_child_country = strtolower(get_the_title(get_field('related_child_country', $postId)));
                              ?>

                              <li class="panel gallery_product filter <?php echo $test.$departureMonths.' '.$related_child_country;?>">
                                <figure>
                                  <a href="<?php echo get_the_permalink($postId);?>">                  
                                  <img src="<?php echo $featured_img_url;?>" class="img-fluid">
                                  </a>
                                </figure>
                                <div class="content">
                                  <h2><a href="<?php echo get_the_permalink($postId);?>"><?php echo  get_the_title($postId);?></a>
                                  </h2>
                                  <div class="text">
                                    <ul class="features">
                                      <li class="tags"><a href="#HolidayTypePopup" class="simple-link"><span>Superior</span></a><span><?php echo get_field('general_interest', $postId);?></span></li>
                                      <li class="length"><?php echo get_field('tour_span_days', $postId);?> Days <?php echo get_field('tour_span_nights', $postId);?></li>
                                    </ul>
                                    <?php
                                    $post_content = get_post($postId);
                                    $content = $post_content->post_content;?>
                                    <p><?php echo substr($content, 0,150);?>...</p>
                                  </div>
                                  <div class="prices">
                                    <div class="prices_row">
                                      <h4><a href="#">Superior group tour</a></h4>
                                      <ul>
                                        <li class="price">Lead-in price: £<?php echo get_field('lead-in_price', $postId);?> pp</li>
                                        <li class="price">Current prices from: £<?php echo get_field('price_starts_from', $postId);?> pp</li>
                                        <li class="saving">Saving up to £<?php echo get_field('savings_amount', $postId);?> on specific departures when booked by <?php echo get_field('savings_date', $postId);?></li>
                                      </ul>
                                    </div>
                                    <div class="prices_row"></div>
                                  </div>
                                  <ul class="buttons">
                                    <li class="type-group">
                                      <ul>                                        
                                        <li><a href="#" class="btn">Superior private</a></li>
                                        <li><a href="#" class="btn">Superior group</a></li>
                                      </ul>
                                    </li>
                                  </ul>
                                 
                                </div>
                                <br class="spacer">
                              </li>
                            <?php } ?>
                          </ul>
                        <?php } 
                        else if ( $_GET['duration'] == 'low-to-high') {
                          //echo "swetabja";
                          if( have_rows('select_private_travels') ): 
                              while( have_rows('select_private_travels') ): the_row();
                                
                                $post_id_grptours = get_sub_field('select_private_travel'); 
                                $tour_span_days = get_field('tour_span_days', $post_id_grptours);                                
                                $priceHighToLow[$tour_span_days] = $post_id_grptours;                                

                              endwhile;
                          endif;
                          //print_r($priceHighToLow);
                          ksort($priceHighToLow);
                          //print_r($priceLowToHigh);?>
                          <ul id="countryLuxuryTours" class="listing">
                            <?php foreach ($priceHighToLow as $key => $postId) {
                              //echo $postId.'=='; 
                              $featured_img_url = get_the_post_thumbnail_url($postId,'group-tour-small');
                              $grptaxonomy = get_the_terms($postId, 'holiday_type' ); // Get taxonomy of holidays
                              $departureMonths = get_field('best_departure_time', $postId);

                              $departureMonths = strtolower(implode(' ', $departureMonths)); //Get the Months in , 
                              //print_r($departureMonths);                           
                              foreach($grptaxonomy as $grptax){                                  
                                $test .= strtolower(str_replace(' ', '-', $grptax->name)).' '; 
                              }                              
                              $related_child_country = strtolower(get_the_title(get_field('related_child_country', $postId)));
                              ?>

                              <li class="panel gallery_product filter <?php echo $test.$departureMonths.' '.$related_child_country;?>">
                                <figure>
                                  <a href="<?php echo get_the_permalink($postId);?>">                  
                                  <img src="<?php echo $featured_img_url;?>" class="img-fluid">
                                  </a>
                                </figure>
                                <div class="content">
                                  <h2><a href="<?php echo get_the_permalink($postId);?>"><?php echo  get_the_title($postId);?></a>
                                  </h2>
                                  <div class="text">
                                    <ul class="features">
                                      <li class="tags"><a href="#HolidayTypePopup" class="simple-link"><span>Superior</span></a><span><?php echo get_field('general_interest', $postId);?></span></li>
                                      <li class="length"><?php echo get_field('tour_span_days', $postId);?> Days <?php echo get_field('tour_span_nights', $postId);?></li>
                                    </ul>
                                    <?php
                                    $post_content = get_post($postId);
                                    $content = $post_content->post_content;?>
                                    <p><?php echo substr($content, 0,150);?>...</p>
                                  </div>
                                  <div class="prices">
                                    <div class="prices_row">
                                      <h4><a href="#">Superior group tour</a></h4>
                                      <ul>
                                        <li class="price">Lead-in price: £<?php echo get_field('lead-in_price', $postId);?> pp</li>
                                        <li class="price">Current prices from: £<?php echo get_field('price_starts_from', $postId);?> pp</li>
                                        <li class="saving">Saving up to £<?php echo get_field('savings_amount', $postId);?> on specific departures when booked by <?php echo get_field('savings_date', $postId);?></li>
                                      </ul>
                                    </div>
                                    <div class="prices_row"></div>
                                  </div>
                                  <ul class="buttons">
                                    <li class="type-group">
                                      <ul>                                        
                                        <li><a href="#" class="btn">Superior private</a></li>
                                        <li><a href="#" class="btn">Superior group</a></li>
                                      </ul>
                                    </li>
                                  </ul>
                                 
                                </div>
                                <br class="spacer">
                              </li>
                            <?php } ?>
                          </ul>
                        <?php } 
                        else if ( $_GET['savings'] == '1') {
                          //echo "swetabja";
                          if( have_rows('select_private_travels') ): 
                              while( have_rows('select_private_travels') ): the_row();
                                
                                $post_id_grptours = get_sub_field('select_private_travel'); 
                                $savings_amount = get_field('savings_amount', $post_id_grptours);                                
                                $priceHighToLow[$savings_amount] = $post_id_grptours;                                

                              endwhile;
                          endif;
                          //print_r($priceHighToLow);
                          krsort($priceHighToLow);
                          //print_r($priceLowToHigh);?>
                          <ul id="countryLuxuryTours" class="listing">
                            <?php foreach ($priceHighToLow as $key => $postId) {
                              //echo $postId.'=='; 
                              $featured_img_url = get_the_post_thumbnail_url($postId,'group-tour-small');
                              $grptaxonomy = get_the_terms($postId, 'holiday_type' ); // Get taxonomy of holidays
                              $departureMonths = get_field('best_departure_time', $postId);

                              $departureMonths = strtolower(implode(' ', $departureMonths)); //Get the Months in , 
                              //print_r($departureMonths);                           
                              foreach($grptaxonomy as $grptax){                                  
                                $test .= strtolower(str_replace(' ', '-', $grptax->name)).' '; 
                              }                              
                              $related_child_country = strtolower(get_the_title(get_field('related_child_country', $postId)));
                              ?>

                              <li class="panel gallery_product filter <?php echo $test.$departureMonths.' '.$related_child_country;?>">
                                <figure>
                                  <a href="<?php echo get_the_permalink($postId);?>">                  
                                  <img src="<?php echo $featured_img_url;?>" class="img-fluid">
                                  </a>
                                </figure>
                                <div class="content">
                                  <h2><a href="<?php echo get_the_permalink($postId);?>"><?php echo  get_the_title($postId);?></a>
                                  </h2>
                                  <div class="text">
                                    <ul class="features">
                                      <li class="tags"><a href="#HolidayTypePopup" class="simple-link"><span>Superior</span></a><span><?php echo get_field('general_interest', $postId);?></span></li>
                                      <li class="length"><?php echo get_field('tour_span_days', $postId);?> Days <?php echo get_field('tour_span_nights', $postId);?></li>
                                    </ul>
                                    <?php
                                    $post_content = get_post($postId);
                                    $content = $post_content->post_content;?>
                                    <p><?php echo substr($content, 0,150);?>...</p>
                                  </div>
                                  <div class="prices">
                                    <div class="prices_row">
                                      <h4><a href="#">Superior group tour</a></h4>
                                      <ul>
                                        <li class="price">Lead-in price: £<?php echo get_field('lead-in_price', $postId);?> pp</li>
                                        <li class="price">Current prices from: £<?php echo get_field('price_starts_from', $postId);?> pp</li>
                                        <li class="saving">Saving up to £<?php echo get_field('savings_amount', $postId);?> on specific departures when booked by <?php echo get_field('savings_date', $postId);?></li>
                                      </ul>
                                    </div>
                                    <div class="prices_row"></div>
                                  </div>
                                  <ul class="buttons">
                                    <li class="type-group">
                                      <ul>                               
                                        <li><a href="#" class="btn">Superior private</a></li>
                                        <li><a href="#" class="btn">Superior group</a></li>
                                      </ul>
                                    </li>
                                  </ul>
                                 
                                </div>
                                <br class="spacer">
                              </li>
                            <?php } ?>
                          </ul>
                        <?php } 
                        else{ ?>
                          <ul id="countryLuxuryTours" class="listing">
                            <?php if( have_rows('select_private_travels') ): ?>
                              <?php while( have_rows('select_private_travels') ): the_row(); 
                                // vars
                                $post_id_grptours = get_sub_field('select_private_travel'); 
                                $featured_img_url = get_the_post_thumbnail_url($post_id_grptours,'group-tour-small');
                                $grptaxonomy = get_the_terms($post_id_grptours, 'holiday_type' ); // Get taxonomy of holidays
                                $departureMonths = get_field('best_departure_time', $post_id_grptours);
                                $related_child_country = strtolower(get_the_title(get_field('related_child_country', $post_id_grptours)));
                                //print_r($departureMonths);
                                $departureMonths = strtolower(implode(' ', $departureMonths)); //Get the Months in ,
                                //print_r($grptaxonomy);
                                foreach($grptaxonomy as $grptax){                                  
                                  $test .= strtolower(str_replace(' ', '-', $grptax->name)).' '; 
                                }
                                  $price_starts_from = get_field('price_starts_from', $post_id_grptours);
                                  $field_data[$price_starts_from] = $post_id_grptours;?>
                                  <li class="panel gallery_product filter <?php echo $test.$departureMonths.' '.$related_child_country;?>">
                                    <figure>
                                      <a href="<?php echo get_the_permalink($post_id_grptours);?>">                  
                                      <img src="<?php echo $featured_img_url;?>" class="img-fluid">
                                      </a>
                                    </figure>
                                    <div class="content">
                                      <h2><a href="<?php echo get_the_permalink($post_id_grptours);?>"><?php echo  get_the_title($post_id_grptours);?></a>
                                      </h2>
                                      <div class="text">
                                        <ul class="features">
                                          <li class="tags"><a href="#HolidayTypePopup" class="simple-link"><span>Superior</span></a><span><?php echo get_field('general_interest', $post_id_grptours);?></span></li>
                                          <li class="length"><?php echo get_field('tour_span_days', $post_id_grptours);?> Days <?php echo get_field('tour_span_nights', $post_id_grptours);?></li>
                                        </ul>
                                        <?php
                                        $post_content = get_post($post_id_grptours);
                                        $content = $post_content->post_content;?>
                                        <p><?php echo substr($content, 0,150);?>...</p>
                                      </div>
                                      <div class="prices">
                                        <div class="prices_row">
                                          <h4><a href="#">Superior group tour</a></h4>
                                          <ul>
                                            <li class="price">Lead-in price: £<?php echo get_field('lead-in_price', $post_id_grptours);?> pp</li>
                                            <li class="price">Current prices from: £<?php echo get_field('price_starts_from', $post_id_grptours);?> pp</li>
                                            <li class="saving">Saving up to £<?php echo get_field('savings_amount', $post_id_grptours);?> on specific departures when booked by <?php echo get_field('savings_date', $post_id_grptours);?></li>
                                          </ul>
                                        </div>
                                        <div class="prices_row"></div>
                                      </div>
                                      <ul class="buttons">
                                        <li class="type-group">
                                          <ul>                                            
                                            <li><a href="#" class="btn">Superior private</a></li>
                                            <li><a href="#" class="btn">Superior group</a></li>
                                          </ul>
                                        </li>
                                      </ul>
                                     
                                    </div>
                                    <br class="spacer">
                                  </li>
                              <?php endwhile; ?>

                            <?php endif; ?>                        
                            <?php /*print_r($field_data); 
                            ksort($field_data);
                            print_r($field_data);*/ ?>
                          </ul>
                        <?php } ?>
                      </div>
                  </div>
                  </div>
                </div>
              </section>                      

          <?php } 

          else if ( $queryString =='accommodation=1' ){ ?>
            <section class="inner-txt mb-30">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <h3>Accommodations in <?php the_title();?> </h3>
                    <?php echo get_field('accommodation_content');?>         
                  </div>
                </div>
              </div>
            </section>

            <section class="toursFilter">
              <div class="container">
                <div class="row">
                  <div class="col-md-3">
                      <h6 class="mb-50"><strong>Filter Hotels</strong></h6>
                    <div class="filterBox">
                      <h5>Destination</h5>
                      <div class="select-destination">
                        <?php                           
                          $count = count(get_field('gallery_images'));
                          if( have_rows('child_destinations') ): ?>
                            <?php 
                            $i = 1; ?>

                            <form>
                              <select class="country">
                                  <option value="">Select Destination</option>
                                  <?php                                  
                                  while( have_rows('child_destinations') ): the_row(); 
                                    $childDestinationId         = get_sub_field('select_child_destination'); ?>                         
                                    <option value="<?php echo strtolower(get_the_title($childDestinationId));?>"><?php echo strtolower(get_the_title($childDestinationId));?></option>
                                  <?php $i++; endwhile; ?>                                 
                              </select>
                            </form>
                          <?php endif; ?>
                      </div>              
                    </div>
                    <div class="filterBox">
                        <h5>Holiday Ratings</h5>
                        <div class="selectHolidayType">
                          <?php
                          $ratings = array('Luxury', 'Superior', 'Good Standard', 'Simple');?>  
                          <button class="departure" data-filter="all">All Hotel Ratings</button>                          
                          <?php for($i=0; $i<=3; $i++){ ?>
                            <button class="departure" data-filter="<?php echo $ratings[$i];?>"><?php echo $ratings[$i];?></button>  
                          <?php } ?>                          
                        </div>
                    </div>                                         
                    
                  </div>
                    
                <div class="col-md-9">
                   <div class="filter-top">
                    <span>Showing 13 of 13 Hotels</span>
                       
                    </div> 
                    <div class="h-divider mb-10"></div>
                    <div class="items mb-50">
                      
                        <ul id="countryLuxuryTours" class="listing">
                          <?php if( have_rows('select_the_accommodations') ): 
                              while( have_rows('select_the_accommodations') ): the_row();
                                
                                $post_id_accomodations = get_sub_field('select_the_accommodation');        
                                $featured_img_url = get_the_post_thumbnail_url($post_id_accomodations,'group-tour-small');
                                $hotel_rating = get_field('hotel_rating', $post_id_accomodations);                                 
                                $accommodation_country = strtolower(get_the_title(get_field('accommodation_country', $post_id_accomodations))); ?>

                                <li class="panel gallery_product filter <?php echo $accommodation_country.' '.$hotel_rating;?>">
                                  <figure>
                                    <a href="<?php echo get_permalink($post_id_accomodations);?>">                  
                                      <img src="<?php echo $featured_img_url;?>" class="img-fluid">
                                    </a>
                                  </figure>
                                  <div class="content">
                                    <h2><a href="<?php echo get_permalink($post_id_accomodations);?>"><?php echo  get_the_title($post_id_accomodations);?></a>
                                    </h2>
                                    <div class="text">
                                      <ul class="features">
                                        <li class="tags">Hotel rating: <a href="#" class="simple-link"><span><?php echo $hotel_rating;?></span></a></li>
                                      </ul>
                                      <?php echo get_field('accommodation_short_description', $post_id_accomodations);?>
                                    </div>
                                    
                                    <ul class="buttons">
                                      <li class="type-group">
                                        <ul>                        
                                          <li><a href="<?php echo get_permalink($post_id_accomodations);?>" class="btn">Read more</a></li>
                                        </ul>
                                      </li>
                                    </ul>
                                   
                                  </div>
                                  <br class="spacer">
                                </li>                        

                            <?php  endwhile;
                          endif; ?>
                          
                        </ul>
                    </div>
                </div>
                </div>
              </div>
            </section>
          <?php } 

          else if ( $queryString =='gallery=1' ){ ?>
            <section class="inner-txt mb-30">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <h3><?php echo get_field('gallery_tab_title');?></h3>
                    <?php echo get_field('gallery_tab_description');?>                    
                  </div>
                </div>
              </div>
            </section>

            <section class="inner-txt mb-30">
              <div class="container">
                <div class="row mar10">


                  <?php if( have_rows('upload_the_gallery_images') ): ?>                    
                    <?php while( have_rows('upload_the_gallery_images') ): the_row(); 
                      // vars
                      $gallery_title = get_sub_field('gallery_image_caption');
                      $gallery_image = get_sub_field('upload_gallery_image'); ?>
                      <div class="col-sm-3 pad10 mb-20">
                        <a href="<?php echo $gallery_image;?>" data-imagelightbox="g" data-ilb2-caption="<?php echo $gallery_title;?>">
                          <img src="<?php echo $gallery_image;?>" class="img-fluid">
                        </a>
                      </div>                      
                    <?php endwhile; ?>
                  <?php endif; ?>   
                  

                </div>
              </div>
            </section>
          <?php } 

          else if ( $queryString =='faq=1' ){ ?>
            <section class="inner-txt mb-30">
              <div class="container topPara">
                <div class="row">
                  <div class="col-md-12">
                    <?php echo get_field('faq_content');?>
                  </div>
                </div>
              </div>
            </section>
          <?php } 
          ?>
        
          <?php if (  $queryString == 'overview=1' || $queryString == ''  ){ ?> 
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
					'posts_per_page' => 4
					
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
                  <div class="row">
                    <div class="col-md-12">
                      <div class="cta center uppercase mb-40">
                        <a href="<?php echo site_url();?>/blog"><span>View Compass</span></a>
                      </div>
                    </div>
                  </div>
                </div>
            </section>

            <section class="testimonials">
              <div class="testi-inner">
                <div id="testimonials" class="owl-carousel owl-theme">
                  <?php $args = array(
                      'post_type' => 'ck_testimonial'
                  );
                  $post_query = new WP_Query($args);
                  if($post_query->have_posts() ) {
                    while($post_query->have_posts() ) {
                      $post_query->the_post(); ?>
                      
                            <div class="item">
                              <h4>"<?php echo get_field('testimonial_content');?>"</h4>
                              <em><?php echo get_field('testimonial_author_name');?></em>
                            </div>
                          
                      <?php }
                  } ?>
                </div>
              </div>      
            </section>

            <section class="insider-info Fourcol">
              <div class="container">
                <div class="row">
                  <div class="col-md-12 text-center">
                    <h3 class="heading1">Insider information to help perfect your trip</h3>
                  </div>
                </div>
              </div>
              <div class="container">
                <div class="row mar10">
                  <?php wp_reset_query();?>
                  <?php if( have_rows('select_the_insider_information') ): ?>
                    <?php while( have_rows('select_the_insider_information') ): the_row(); 
                      // vars
                      $post_id = get_sub_field('select_here'); 
                      $featured_img_url = get_the_post_thumbnail_url($post_id,'insider-info-small');?>
                      <div class="col-md-3 pad10">
                          <a href="<?php echo get_the_permalink($post_id);?>">
                          <img src="<?php echo $featured_img_url;?>" class="img-fluid">
                          <h4><?php echo get_the_title($post_id);?></h4>
                          </a>
                          <?php
                          $post_content = get_post($post_id);
                          $content = $post_content->post_content;?>
                          <a href="<?php echo get_the_permalink($post_id);?>">
                          <p><?php echo substr($content, 0,130);?>...</p>
                          </a>
                          <div class="cta left">
                            <a href="<?php echo get_the_permalink($post_id);?>"><span>FIND OUT MORE</span></a>
                          </div>
                      </div>
                    <?php endwhile; ?>

                  <?php endif; ?>
                  
                </div>
              </div>
            </section>
          <?php } ?>

          <?php if ($queryString !='tailor-made=1') { ?>
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
          <?php } ?>
            



          <!-- Modal -->
          <div class="modal fade bd-example-modal-lg" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <iframe width="100%" height="400" class="video-url-final" src="https://www.youtube.com/embed/gKB5DtyDAzw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                  <div class="videoModalText">
                    <h3><a href="https://www.youtube.com/watch?&amp;v=gKB5DtyDAzw" class="video-url-title"></a></h3>
                    <div class="para video-url-content">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
    <?php endwhile; } ?>
	
	<?php } ?>

<?php get_footer(); ?>
<script type="text/javascript">
  function initialize() {
      var map;
      var bounds = new google.maps.LatLngBounds();
      var mapOptions = {
        scrollwheel: false,
        navigationControl: true,
        mapTypeControl: true,
        zoomControl: true,
        disableDefaultUI: false,
        //styles: grayStyles,
        mapTypeId: 'roadmap',
        styles: [
                {elementType: 'geometry', stylers: [{color: '#ebebeb'}]},
                {elementType: 'labels.text.stroke', stylers: [{color: '#ffffff'}]},
                {elementType: 'labels.text.fill', stylers: [{color: '#000000'}]},
                {
                  featureType: 'administrative.locality',
                  elementType: 'labels.text.fill',
                  stylers: [{color: '#000000'}]
                },
                {
                  featureType: 'poi',
                  elementType: 'labels.text.fill',
                  stylers: [{color: '#bbbbbb'}]
                },
                {
                  featureType: 'poi.park',
                  elementType: 'geometry',
                  stylers: [{color: '#263c3f'}]
                },
                {
                  featureType: 'poi.park',
                  elementType: 'labels.text.fill',
                  stylers: [{color: '#6b9a76'}]
                },
                {
                  featureType: 'road',
                  elementType: 'geometry',
                  stylers: [{color: '#cccccc'}]
                },
                {
                  featureType: 'road',
                  elementType: 'geometry.stroke',
                  stylers: [{color: '#cccccc'}]
                },
                {
                  featureType: 'road',
                  elementType: 'labels.text.fill',
                  stylers: [{color: '#9ca5b3'}]
                },
                {
                  featureType: 'road.highway',
                  elementType: 'geometry',
                  stylers: [{color: '#cccccc'}]
                },
                {
                  featureType: 'road.highway',
                  elementType: 'geometry.stroke',
                  stylers: [{color: '#cccccc'}]
                },
                {
                  featureType: 'road.highway',
                  elementType: 'labels.text.fill',
                  stylers: [{color: '#f3d19c'}]
                },
                {
                  featureType: 'transit',
                  elementType: 'geometry',
                  stylers: [{color: '#2f3948'}]
                },
                {
                  featureType: 'transit.station',
                  elementType: 'labels.text.fill',
                  stylers: [{color: '#d59563'}]
                },
                {
                  featureType: 'water',
                  elementType: 'geometry',
                  stylers: [{color: '#a2a29d'}]
                },
                {
                  featureType: 'water',
                  elementType: 'labels.text.fill',
                  stylers: [{color: '#000000'}]
                },
                {
                  featureType: 'water',
                  elementType: 'labels.text.stroke',
                  stylers: [{color: '#17263c'}]
                },
              ],    
      };

      // Display a map on the page
      map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
      map.setTilt(45);


      /*===================================swetabja dynamic==================================*/

      var currentPlaceArray = <?php echo json_encode($placeDetails); ?>;
      var currentPlaceString = currentPlaceArray.toString();
      //console.log(currentPlaceString);
      var currentPlaceStringDevider = currentPlaceString.split(',');
      //console.log(currentPlaceStringDevider.length);

      // Multiple Markers
      
      var i;
      var availablePlaceArry = [];
      var availablePlaceArryPopUp = [];
      var availablePlaceArryPopUpRough = [];

      for ( i = 0; i < currentPlaceStringDevider.length; i++) {                 
          var hyphensplit = currentPlaceStringDevider[i].split('=');   
          availablePlaceArry[i] = hyphensplit; 
          availablePlaceArryPopUpRough = ['<div class="info_content">' +'<h3>'+hyphensplit[0]+'</h3>' +'<a href="#">EXPLORE '+hyphensplit[0]+'</a>'];   
          availablePlaceArryPopUp[i] =  availablePlaceArryPopUpRough;
      }
      //console.log('availablePlaceArry', availablePlaceArry);    
      console.log('availablePlaceArryPopUp', availablePlaceArryPopUp);          

      /*var markers = [
          ['Maldives', -0.297037, 73.425783],
          ['Nepal', 28.247522, 83.940378],
          ['Bhutan', 27.5142, 90.4336],
          ['India', 28.627190, 77.211235],            
          ['Sri Lanka', 7.588064, 80.661548],
      ];*/

      var markers = availablePlaceArry;

      //console.log(markers);


      // Info Window Content
      /*var infoWindowContent = [
        ['<div class="info_content">' +
          '<h3>NEPAL</h3>' +
          '<a href="#">EXPLORE NEPAL</a>'
        ],
        ['<div class="info_content">' +
          '<h3>BHUTAN</h3>' +
          '<a href="#">EXPLORE BHUTAN</a>'
        ],
        ['<div class="info_content">' +
          '<h3>INDIA</h3>' +
          '<a href="#">EXPLORE INDIA</a>'
        ],
        ['<div class="info_content">' +
          '<h3>MALDIVES</h3>' +
          '<a href="#">EXPLORE MALDIVES</a>'
        ],
        ['<div class="info_content">' +
          '<h3>SRI LANKA</h3>' +
          '<a href="#">EXPLORE SRI LANKA</a>'
        ]
      ];*/
      var infoWindowContent = availablePlaceArryPopUp;
      
      console.log(infoWindowContent);

      // Display multiple markers on a map
      var infoWindow = new google.maps.InfoWindow(),
        marker, i;

      // Loop through our array of markers & place each one on the map  
      for (i = 0; i < markers.length; i++) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
          position: position,
          map: map,
          title: markers[i][0],
          animation: google.maps.Animation.DROP,
          icon: {
            url: "<?php echo get_template_directory_uri(); ?>/img/map-pointer.png", //change your custom marker icon here
            scaledSize: new google.maps.Size(40, 40)
          }
        });

        // Allow each marker to have an info window    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            infoWindow.setContent(infoWindowContent[i][0]);
            infoWindow.open(map, marker);
          }
        })(marker, i));

        // Automatically center the map fitting all markers on the screen
        map.fitBounds(bounds);
      }

      // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
      var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(4);
        google.maps.event.removeListener(boundsListener);
      });

      // color overlay
      var color = "#ffffff"; //Set your tint color. Needs to be a hex value.
      bounds = new google.maps.LatLngBounds(
        new google.maps.LatLng(-84.999999, -179.999999),
        new google.maps.LatLng(84.999999, 179.999999));

      rect = new google.maps.Rectangle({
        bounds: bounds,
        fillColor: color,
        fillOpacity: 0.01,
        strokeWeight: 0,
        map: map
      });

    }
</script>


<script type="text/javascript">
  
    jQuery( document ).ready(function() {
      jQuery('.video-overlay').on( "click", function() {
          var videoUrl = jQuery(this).attr('data-vimeo'); 
          //alert(videoUrl);       
          //var videoUrl = 'https://player.vimeo.com/video/'+videoID+'?autoplay=1'; 
          var videoTitle =  jQuery(this).attr('data-title'); 
          var videoContent =  jQuery(this).attr('data-content');       
          jQuery('.video-url-final').attr('src', videoUrl);
          jQuery('.video-url-title').text(videoTitle);
          jQuery('.video-url-content').text(videoContent);
          console.log( "window loaded" );
      });   

      function stopVideo() {        
          jQuery('.video-url-final').attr('src', '');
          var $frame = $('iframe.video-url-final');
        
          // saves the current iframe source
          var vidsrc = $frame.attr('src');
        
          // sets the source to nothing, stopping the video
          $frame.attr('src', '');
        
          // sets it back to the correct link so that it reloads immediately on the next window open
          $frame.attr('src', vidsrc);
      }
        
      $('#videoModal').on('hidden.bs.modal', function(e) {
          stopVideo();
      });  

    });

    function filterlinkType(id){
      alert(id);
    }
    function filterlinkCountry(id){
      alert(id);
    }
    function filterlinkMonth(id){      
      alert(id);
    }
    
</script>
