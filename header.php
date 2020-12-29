<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <title><?php bloginfo('name');?> <?php wp_title();?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class();?>>
    <header>
      <div class="fixed-header no-padding">
                    <div class="headerTopRow no-ipad-padding">
                      <div class="row">
                        <div class="col-4 col-sm-6 d-block d-sm-block d-md-none d-lg-none d-xl-none">
                            <a class="fa fa-navicon menuToggle"></a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-8">
                          
                            <a href="<?php bloginfo('url'); ?>" class="logo">
                              <img class="img-fluid" src="<?php echo get_field('upload_the_logo', 'option'); ?>" alt="" style="width: 226px;">

                            </a>
                        </div>


                        <div class="col-lg-9 col-md-9 no-ipad-padding d-none d-sm-none d-md-block">
                            <ul class="head-contact">
                                <li class="h-call">
                                    <a class="phone rTapClick" href="tel:<?php echo get_field('phone_number', 'option'); ?>">
                                        <!-- <span class="icon i-phone white"></span> 2-->
                                         <span class="rTapNumber204221" style="visibility: visible;">
                                          <?php echo get_field('phone_number', 'option'); ?>
                                        </span>
                                    </a>
                                </li>
                                <li class="h-email">
                                    <a href="<?php bloginfo('url'); ?>/contact-us" class="email">
                                        Enquire by email
                                    </a>
                                </li>
                                <li class="h-search">
                                    <div id="search-site" method="post">
									
									<form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
									<input type="text" name="s" id="s" placeholder="Search our site" class="search-input" />
									<!--<input type="hidden" value="post" name="post_type" id="post_type" />-->
									<input type="submit" name="submit" value="" id="" class="search-icon" style="border-style:None;">
									</form>                                                                                                                                      
                                    <!-- <i class="fa fa-search"></i> -->
                                    </div>
                                </li>
                                <li class="h-trust_pilot d-none d-sm-none d-md-none d-lg-none d-xl-block">
                                    <!-- TrustBox widget - Micro Star -->
                                    <div class="trustpilot-widget" data-locale="en-GB" data-template-id="5419b732fbfb950b10de65e5" data-businessunit-id="59cccc580000ff0005ac4238" data-style-height="24px" data-style-width="100%" data-theme="light" style="position: relative;"><iframe frameborder="0" scrolling="no" title="Customer reviews powered by Trustpilot" src="https://widget.trustpilot.com/trustboxes/5419b732fbfb950b10de65e5/index.html?templateId=5419b732fbfb950b10de65e5&amp;businessunitId=59cccc580000ff0005ac4238#locale=en-GB&amp;styleHeight=24px&amp;styleWidth=100%25&amp;theme=light" style="position: relative; height: 24px; width: 100%; border-style: none; display: block; overflow: hidden;"></iframe></div>
                                    <!-- End TrustBox widget -->
                                </li>
                            </ul>
                        </div>
                        </div>
                    </div>

                    <div class="navigate no-padding header-bottom-border mainmenu">
                        <div class="headerNavRow">
                          <div class="row">
                            <div class="col-md-12">
                              <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
                                <?php
                                  wp_nav_menu( array(
                                    'theme_location' => 'primary',
                                    'menu_class'     => 'primary-menu',
                                   ) );
                                ?>
                              </nav><!-- .main-navigation -->
                              
                            </div>
                            <!-- <div class="col-md-2">
                              <div class="holiday-srch">
                                <a href="">HOLIDAY SEARCH</a>
                              </div>
                            </div> -->
                          </div>
                        </div>
                            
                        </div>

                    </div>

                    
                    <div class="custom-holiday-search">
                      <div class="container">
                        <div class="row">
                          <ul id="Hs_nav" class="dropdown-menu mega-dropdown-menu row h-search-dd">
                            <li class="col-sm-12 no-padding">
                              <ul class="menu-block itemsReordr">
                      
                                <li class="dropdown-submenu col-sm-12 col-md-4 no-padding itmOrdr">
                                    <a class="dropdown-toggle country count-list font-bold HsCountrylistDropdown" data-toggle="dropdown" id="menu1">COUNTRY <b class="fa fa-angle-down caret-arrow" style="display: block;"></b><b class="fa fa-angle-up caret-arrow" style="display: none;"></b></a>
                                </li>

                                <li class="dropdown-submenu col-sm-12 col-md-4 no-padding itmOrdr">
                                    <a id="menu1" class="dropdown-toggle country ht-type font-bold" data-toggle="dropdown">HOLIDAY TYPE<b class="fa fa-angle-down caret-arrow"></b><b class="fa fa-angle-up caret-arrow" style="display: none;"></b></a>

                                </li>

                                <li class="dropdown-submenu col-sm-12 col-md-2 itmOrdr">
                                    <input id="btnHolidaySearch" type="button" value="Search" class="header-menu-btn" onclick="isgcommon.HolidaySearchRedirect_New('0')">

                                </li>
                                <li class="dropdown-submenu col-sm-12 col-md-1 text-center holidaySearchCloseBth itmOrdr">
                                    <a href="javascript:void(0)" class="btn-close">X</a>
                                </li>
                                <li class="col-sm-12 col-md-8 itmOrdr">
                                    <ul role="menu" aria-labelledby="menu1" class="search-list-blk country-list-block" style="display: none;">
                                        <li class="dropdown-header">Select a country</li>
                                        <li>
                                            <ul class="alpha-search-list col-sm-6">
                                                <li>
                                                    <a class="atoc active" href="javascript:void(0)" onclick="showlist('atoc')">A - C</a>
                                                </li>
                                                <li>
                                                    <a class="dtof" href="javascript:void(0)" onclick="showlist('dtof')">D - F</a>
                                                </li>
                                                <li>
                                                    <a class="gtoi" href="javascript:void(0)" onclick="showlist('gtoi')">G - I</a>
                                                </li>
                                                <li>
                                                    <a class="jtol" href="javascript:void(0)" onclick="showlist('jtol')">J - L</a>
                                                </li>
                                                <li>
                                                    <a class="mtoo" href="javascript:void(0)" onclick="showlist('mtoo')">M - O</a>
                                                </li>
                                                <li>
                                                    <a class="ptor" href="javascript:void(0)" onclick="showlist('ptor')">P - R</a>
                                                </li>
                                                <li>
                                                    <a class="stou" href="javascript:void(0)" onclick="showlist('stou')">S - U</a>
                                                </li>
                                                <li>
                                                    <a class="vtoz" href="javascript:void(0)" onclick="showlist('vtoz')">V - Z</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="countrylistonholdysrchnav">
										
											<?php $query = new WP_Query( [
											'post_type'      => 'ck_destination',
											'posts_per_page' => '-1',
											] ); ?>
											<?php if ( $query->have_posts() ) : ?>
											
											<?php for($i=1; $i<=8; $i++){?>
											
                                            <ul id="list<?php echo $i;?>" class="country-list col-6" <?php if($i!=1){?>style="display:none;"<?php } ?>>
											
											<?php $p = 1; while ( $query->have_posts() ) : $query->the_post(); ?>
											
											<?php
											//string.
											$string = get_the_title();
											
											global $post;
											$post_slug = $post->post_name;

											//Get the first character.
											$firstCharacter = $string[0];

											//Get the first character using substr.
											$firstCharacter = substr($string, 0, 1);
											
											if($i==1){
											$set_of_chrctr = array("A", "a", "B", "b", "C", "c");
											} 
											else if($i==2){
											$set_of_chrctr = array("D", "d", "E", "e", "F", "f");
											}
											else if($i==3){
											$set_of_chrctr = array("G", "g", "H", "h", "I", "i");
											}											
											else if($i==4){
											$set_of_chrctr = array("J", "j", "K", "k", "L", "l");
											}											
											else if($i==5){
											$set_of_chrctr = array("M", "m", "N", "n", "O", "o");
											}
											else if($i==6){
											$set_of_chrctr = array("P", "p", "Q", "q", "R", "r");
											}
											else if($i==7){
											$set_of_chrctr = array("S", "s", "T", "t", "U", "u");
											}
											else if($i==8){
											$set_of_chrctr = array("V", "v", "W", "w", "X", "x", "Y", "y", "Z", "z");
											}
											
											if (in_array($firstCharacter, $set_of_chrctr)){
											?>

                                                <li>
                                                   <label class="check"><?php the_title(); ?><input class="chkcount" type="checkbox" value="<?php echo $post_slug; ?>"><!-- <span class="checkmark"></span> --></label>
												</li>

											<?php } $p++; endwhile; ?>
												  
                                            </ul>
											
											<?php } endif; ?>
											                                            											
                                        </li>
                                    </ul>
                                </li>
								
                                <li id="holsearchnewhome" class="col-sm-12 col-md-10 offset-md-1 itmOrdr">
                                  <ul role="menu" aria-labelledby="menu1" class="search-list-blk ht-type-block" style="display: none" id="holitypefrmhndlr">
                                    <li class="dropdown-header">Select one or more holiday types</li>
                                    
                                    <li class="dropdown-header all-ht">
                                      <label class="check" id="gtallHt">All Holiday Types<input type="checkbox" value=""><span class="checkmark"></span></label>
                                    </li>
                                    <div class="row">
                                    <div class="col-sm-6">
                                      <ul class="holiday-list gt">
                                        <li class="dropdown-header">Group Tours</li>
                                        <li><label class="check" id="gtall">All Group Tours<input class="chkgrptour" type="checkbox" value="g"><span class="checkmark"></span></label>
                                        </li>
                                        <li><span>Or Filter by :</span></li>
										
										<?php

										//$category = get_category_by_slug( 'group-tours' );

										$args = array(
										'type'                     => 'post',
										'child_of'                 => 3,
										'orderby'                  => 'name',
										'order'                    => 'ASC',
										'hide_empty'               => FALSE,
										'hierarchical'             => 1,
										'taxonomy'                 => 'holiday_type',
										); 
										$child_categories = get_categories($args );
										
										//print_r($child_categories);

										if ( !empty ( $child_categories ) ){
										foreach ( $child_categories as $child_category ){
																														
										?>
										
										<li>
										<label class="check" id="gtchk"><?php echo $child_category->name;?><input class="chkgrptour" type="checkbox" value="<?php echo $child_category->term_id;?>"><span class="checkmark"></span></label>
                                        </li>
										<?php } } ?>
										
                                        <!--<li><label class="check" id="gtchk">Solo Travellers<input class="chkgrptour" type="checkbox" value="SGLG"><span class="checkmark"></span></label>
                                        </li>
                                        <li><label class="check" id="gtchk">Arts &amp; Culture<input class="chkgrptour" type="checkbox" value="ANC"><span class="checkmark"></span></label>
                                        </li>-->
										
                                      </ul>
                                    </div>
                                    <div class="col-sm-6 border-left">
                                      <ul class="holiday-list pt">
                                        <li class="dropdown-header">Private Travel</li>
                                        <li><label class="check" id="ptall">All Private Travel<input class="chkgrptour" type="checkbox" value="p"><span class="checkmark"></span></label>
                                        </li>
                                        <li><span>Or Filter by :</span></li>
										
										
										<?php

										//$category = get_category_by_slug( 'group-tours' );

										$args = array(
										'type'                     => 'post',
										'child_of'                 => 4,
										'orderby'                  => 'name',
										'order'                    => 'ASC',
										'hide_empty'               => FALSE,
										'hierarchical'             => 1,
										'taxonomy'                 => 'holiday_type',
										); 
										$child_categories = get_categories($args );

										if ( !empty ( $child_categories ) ){
										foreach ( $child_categories as $child_category ){
																														
										?>
										
                                        <li>
										<label class="check" id="ptchk"><?php echo $child_category->name;?><input class="chkgrptour" type="checkbox" value="<?php echo $child_category->term_id;?>"><span class="checkmark"></span></label>
                                        </li>
										
										<?php } } ?>
										
										
                                      </ul>
                                    </div>
                                    </div>
                                  </ul>
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </div>
                      </div>
                                
                    </div>
                    
    </header>
	
	
	<style>
	.new_custom.active { display:block !important;}
	.team_contact input {border-radius: 5px;
    border: 1px solid #ccc;}
	.team_contact .btn-link { color: #007bff !important; }
	.team_contact .member_mailid {display:none;}
	</style>
	
	<script>
	jQuery("#btnHolidaySearch").click(function(){		
	var country_id_new = jQuery(".HsCountrylistDropdown").text();
	var country_id = jQuery.trim(country_id_new);
	var holidaytype = jQuery(".chkgrptour.active").val();
	var traveltype = jQuery(".chkgrptour.active_travel").val();
	
	if(country_id!='COUNTRY'){
	var site_url = "<?php echo site_url();?>/result/?countrycode="+country_id;
	}
	
	if(holidaytype!='undefined'){
	var site_url = "<?php echo site_url();?>/result/?holidaytype="+holidaytype;
	}
	if(traveltype!='undefined'){
	var site_url = "<?php echo site_url();?>/result/?traveltype="+traveltype;
	}
	
	if(country_id!='COUNTRY' && holidaytype!='undefined'){
	var site_url = "<?php echo site_url();?>/result/?countrycode="+country_id+"&holidaytype="+holidaytype;
	}
	
	if(country_id!='COUNTRY' && traveltype!='undefined'){
	var site_url = "<?php echo site_url();?>/result/?countrycode="+country_id+"&traveltype="+traveltype;
	}
	
	if(holidaytype!='undefined' && traveltype!='undefined'){
	var site_url = "<?php echo site_url();?>/result/?holidaytype="+holidaytype+"&traveltype="+traveltype;
	}
	
	if(country_id!='COUNTRY' && holidaytype!='undefined' && traveltype!='undefined'){
	var site_url = "<?php echo site_url();?>/result/?countrycode="+country_id+"&holidaytype="+holidaytype+"&traveltype="+traveltype;
	}
	
	
	
	//alert(traveltype);
	window.location.href=site_url;
	});
	</script>
	
	<script>
	jQuery("#gtchk input").click(function(){		
	var chkgrptour = jQuery(this).addClass('active');
	});
	
	jQuery("#ptchk input").click(function(){		
	var chkgrptour = jQuery(this).addClass('active_travel');
	});
		
	</script>
	

	
	