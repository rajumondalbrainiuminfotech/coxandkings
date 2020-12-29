<?php
get_header();

$term = get_queried_object(); 

$term_name = $term->name;
$term_id = $term->term_id;

$taxonomy_image_large = get_field('taxonomy_image_large', $term);
$taxonomy_page_title = get_field('taxonomy_page_title', $term);
$taxonomy_page_content = get_field('taxonomy_page_content', $term);
$our_expert_title = get_field('our_expert_title', $term);
$our_expert_text = get_field('our_expert_text', $term);
$expert_image = get_field('expert_image', $term);
$circle_title = get_field('circle_title', $term);
$circle_text = get_field('circle_text', $term);
$enquire_today_url = get_field('enquire_today_url', $term);
$enquire_today_url = get_field('select_the_insider_infortions', $term);


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
				 				  
					
					<?php if( have_rows('select_experts', $term) ): ?>

					<?php $i=1; while( have_rows('select_experts', $term) ): the_row(); 
					// vars
					$post_id = get_sub_field('select_experrts_for_this_country', $term);	
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

<section class="banner-home" style="background-image: url(<?php echo $taxonomy_image_large;?>);">
      <!-- <h3>Inspiring Travel for Over 260 Years</h3> -->
    </section>
    <section class="b-crumb-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div  class="b-crumb">
            <a href="javascript:history.go(-1)" class="back">Back</a> 
            <div>You are here:</div> 
            <ul>
              <li><a href="<?php bloginfo('url');?>">Home</a></li>
              <li><a href="<?php bloginfo('url');?>/destinations">Destinations</a></li>
              <li><?php echo $term_name;?></li>
            </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="inner-txt">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h3><?php echo $taxonomy_page_title;?></h3>
            <?php echo $taxonomy_page_content;?>
          </div>
          <div class="col-md-5">
            <h3>Explore the <?php echo $term_name;?></h3>
            <p style="font-style: italic;">Click on your country of interest</p>
            <div class="map-box">
              <!-- <img class="img-fluid" src="<?php // echo get_template_directory_uri(); ?>/img/map.png"> -->
              <div id="map_wrapper">
                <div id="map_canvas" class="mapping" data-country="nepal, sri lanka"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="related-desti">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center"><h2 class="sectionHdr"><?php echo $term_name;?> Destinations</h2></div>
        </div>
      </div>
      <div class="container dsti-row">
        <div class="row justify-content-md-center">
          <?php 
            $i=0;
            $placeDetails = array();
            if (have_posts()) : while(have_posts()) : the_post();
                
                $title = get_the_title();
                $country_latitude = get_field('country_latitude');
                $country_longitude = get_field('country_longitude');

                $placeDetails[] = $title.'='.$country_latitude.'='.$country_longitude; ?>
                <div class="col-md-3">
                  <div class="product-box">
                    <a href="<?php the_permalink();?>"><img src="<?php echo get_field('small_image');?>" class="img-fluid"></a>
                    <h4><?php echo $title; ?></h4>
                    <p><?php echo get_field('small_text_for_listing_page');?></p> 
                    <div class="cta left">
                      <a href="<?php the_permalink();?>"><span>VIEW DESTINATION</span></a>
                    </div>
                  </div>
                </div>          
            <?php 
            $i++;
            endwhile;
            else : ?>
            <p>Nothing Found!!</p>
            <?php endif;
            //wp_reset_query(); ?>  
           
        </div>
      </div>
      <div class="viewFull text-center">
        <a href="javascript:void(0)">VIEW FULL DESTINATION LIST <span></span></a>
      </div>
    </section>

    <section class="holidayOptions">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center"><h2 class="sectionHdr">Holiday options</h2></div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-12 carouselPadding">
            <div id="holiday-carousel" class="owl-carousel owl-theme">
                <?php 
                    query_posts(array( 
                        'post_type' => 'ck_holiday',
                        'showposts' => 10 
                    ) );  
                ?>
                <?php while (have_posts()) : the_post(); 
                    $regionName = get_field('select_region');
                    if ( $regionName == $term_id ) { ?>
                        <div class="item">
                          <div class="holidayOptionsBox">
                            <img src="<?php echo get_field('list_image');?>" class="img-fluid">                    
                            <div class="tripInfo">
                            <h3><?php the_title();?></h3>  
                            <ul>
                              <li><a href=""><?php echo get_field('group_type');?></a></li>
                              <li><?php echo get_field('general_interest');?></li>
                              <li><?php echo get_field('executive_status');?></li>
                            </ul>
                            <div class="days"><?php echo get_field('tour_span');?></div>
                            <div class="price">From £<?php echo get_field('price_starts_from');?> pp</div>
                            </div>
                            <div class="cta left">
                              <a href="<?php the_permalink();?>"><span>VIEW TRIP</span></a>
                            </div>

                          </div>
                        </div>
                    <?php } ?>                    
                <?php endwhile;?>                
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 viewAllH">
            <div class="cta center">
              <a href="#"><span>VIEW ALL HOLIDAYS</span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
						
												
    
    <section class="expertise">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3 class="heading1">
              <?php echo $our_expert_title;?>
            </h3>
            <p><?php echo $our_expert_text;?></p>
            <div class="cta left">
              <a href="<?php //echo $meet_the_team_url;?><?php echo $_SERVER['REQUEST_URI'];?>?member=<?php echo $term_id;?>">
			  <span>MEET THE TEAM</span></a>
            </div>
          </div>
          <div class="col-md-4">
		  
			<?php if( have_rows('select_experts', $term) ): ?>

			<?php $p=1; while( have_rows('select_experts', $term) ): the_row(); 
			// vars
			$post_id_new = get_sub_field('select_experrts_for_this_country', $term);
			$member_photo_new = get_field("member_photo", $post_id_new);	
            if($p==1){			
			?>
			<img class="img-fluid" src="<?php //echo $expert_image;?><?php echo $member_photo_new['url'];?>" alt="">

			<?php } $p++; endwhile; ?>
			<?php endif; ?>

			<?php wp_reset_query(); ?>
			
          </div>
          <div class="col-md-4">
            <div class="circle-enquire text-center">
              <h4 class="heading1"><?php echo $circle_title;?></h4>
              <p><?php echo $circle_text;?></p>
              <div class="cta center">
                <a href="<?php //echo $enquire_today_url;?><?php echo site_url();?>/enquiry"><span>ENQUIRE TODAY</span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="h-divider"></div>
      </div>
    </section>

    <section class="insider-info">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h3 class="heading1">Insider information to help perfect your trip</h3>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
        	<?php if( have_rows('select_the_insider_infortions', $term) ): ?>

    				<?php while( have_rows('select_the_insider_infortions', $term) ): the_row(); 
    					// vars
    					$post_id = get_sub_field('select_here', $term);	
    					$featured_img_url = get_the_post_thumbnail_url($post_id,'insider-info-small');?>
    					<div class="col-md-4">
    			            <img src="<?php echo $featured_img_url;?>" class="img-fluid" alt="<?php echo get_the_title($post_id);?>">
    			            <h4><?php echo get_the_title($post_id);?></h4>
    			            <?php
    			            $post_content = get_post($post_id);
    						$content = $post_content->post_content;?>
    			            <p><?php echo substr($content, 0,130);?>...</p>
    			            <div class="cta left">
    			              <a href="<?php echo get_the_permalink($post_id);?>"><span>FIND OUT MORE</span></a>
    			            </div>
    			        </div>

    				<?php endwhile; ?>

    			<?php endif; ?>

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
	
<?php } ?>

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
<?php 

get_footer();
?>

	<script>
	
	jQuery(".get_mail").click(function(){		
	var data_email = jQuery(this).attr('data-email');
	//alert(data_email);	
	jQuery("#member_mailid").val(data_email);
	});
		
	</script>

