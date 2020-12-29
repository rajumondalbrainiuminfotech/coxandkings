<?php
/*
Template Name: Result Holiday
*/
get_header(); 

$post_name = $_REQUEST['countrycode'];
$post = get_page_by_title( $post_name, OBJECT, 'ck_destination' );
$post_id = $post->ID;


$holidaytype = $_REQUEST['holidaytype'];
$traveltype = $_REQUEST['traveltype'];
?>


<div style="clear:both; height:200px;">&nbsp;</div>

<section class="toursFilter">
                <div class="container">
                  <div class="row">
                    <div class="col-md-3">
                        <!--<h6 class="mb-50"><strong>Filter Tours</strong></h6>-->
                      <div class="filterBox">
                        <h5>Destination</h5>
                        <div class="select-destination">
                          <?php                           
                          $count = count(get_field('gallery_images',$post_id));
                          if( have_rows('child_destinations',$post_id) ): ?>
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
                                  while( have_rows('child_destinations',$post_id) ): the_row(); 
                                    $childDestinationId = get_sub_field('select_child_destination',$post_id); ?>                         
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
                      
                  <div class="col-md-9">
                     <!--<div class="filter-top">
                      <span>Showing 13 of 13 destinations</span>
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
                      </div> -->
					  
                      <div class="h-divider mb-10"></div>
                      <div class="items mb-50">                 
			
                          <ul id="countryLuxuryTours" class="listing">
                            <?php if( have_rows('select_group_tours',$post_id) ): ?>
                              <?php while( have_rows('select_group_tours',$post_id) ): the_row(); 
                                // vars
                                $post_id_grptours = get_sub_field('select_group_tour',$post_id); 
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
								  
								  
								<?php
								$term=array();
                                $term_list = get_the_terms($post_id_grptours, 'holiday_type');
								
								foreach($term_list as $term_lists){ 
								 $term[]=$term_lists->term_id;
								}
								//print_r($term);
								
								if($holidaytype!='undefined'){
								if (in_array($holidaytype, $term)){
								?>
								  
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
								<?php } } else { ?>
								
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
								
								<?php } endwhile; ?>

                            <?php endif; ?>                        
          
                          </ul>
						  
						  
						  
						  <ul id="countryLuxuryTours" class="listing">
                            <?php if( have_rows('select_private_travels',$post_id) ): ?>
                              <?php while( have_rows('select_private_travels',$post_id) ): the_row(); 
                                // vars
                                $post_id_grptours = get_sub_field('select_private_travel',$post_id); 
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
								  
								  
                                <?php
								$term=array();
                                $term_list = get_the_terms($post_id_grptours, 'holiday_type');
								
								foreach($term_list as $term_lists){ 
								 $term[]=$term_lists->term_id;
								}
								//print_r($term);
								
								if($traveltype!='undefined'){
								if (in_array($traveltype, $term)){
								?>
								  
								  
								  
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
								  
								<?php } } else { ?>
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
								
								<?php } endwhile; ?>

                            <?php endif; ?>                        
              
                          </ul>
						  

                     
                        
                      </div>
                  </div>
                  </div>
                </div>
              </section> 


                                    <br class="spacer">




<?php get_footer(); ?>