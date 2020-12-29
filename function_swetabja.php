<?php

add_image_size( 'destination-inner-large', 1570, 450, true );
add_image_size( 'insider-info-small', 400, 328, true );
add_image_size( 'group-tour-small', 245, 245, true );

add_action( 'init', 'codex_destination_init' );

function codex_destination_init() {
   $labels = array(
       'name'               => _x( 'destinations', 'post type general name', 'your-plugin-textdomain' ),
       'singular_name'      => _x( 'destination', 'post type singular name', 'your-plugin-textdomain' ),
       'menu_name'          => _x( 'Destination', 'admin menu', 'your-plugin-textdomain' ),
       'name_admin_bar'     => _x( 'Destination', 'add new on admin bar', 'your-plugin-textdomain' ),
       'add_new'            => _x( 'Add New', 'Destination', 'your-plugin-textdomain' ),
       'add_new_item'       => __( 'Add New Destination', 'your-plugin-textdomain' ),
       'new_item'           => __( 'New Destination', 'your-plugin-textdomain' ),
       'edit_item'          => __( 'Edit Destination', 'your-plugin-textdomain' ),
       'view_item'          => __( 'View Destination', 'your-plugin-textdomain' ),
       'all_items'          => __( 'All Destination', 'your-plugin-textdomain' ),
       'search_items'       => __( 'Search Destinations', 'your-plugin-textdomain' ),
       'parent_item_colon'  => __( 'Parent Destinations:', 'your-plugin-textdomain' ),
       'not_found'          => __( 'No Destinations found.', 'your-plugin-textdomain' ),
       'not_found_in_trash' => __( 'No Destinations found in Trash.', 'your-plugin-textdomain' )
   );
   
   $args = array(
       'labels'             => $labels,
       'description'        => __( 'Description.', 'your-plugin-textdomain' ),
       'public'             => true,
       'publicly_queryable' => true,
       'show_ui'            => true,
       'show_in_menu'       => true,
       'query_var'          => true,
       'rewrite'            => array( 'slug' => 'destination' ),
       'capability_type'    => 'post',
       'has_archive'        => true,
       'hierarchical'       => false,
       'menu_position'      => null,
       'supports'           => array( 'title', 'editor', 'author', 'thumbnail' )
   );
   
   register_post_type( 'ck_destination', $args );
}


function ck_country() {  
    register_taxonomy(  
        'destination_country',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
        array('ck_destination', 'ck_holiday'),        //post type name
        array(  
            'hierarchical' => true,  
            'label' => 'Region',  //Display name
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'destination-country', // This controls the base slug that will display before each term
                'with_front' => false // Don't display the category base before 
            )
        )  
    );  
}  
add_action( 'init', 'ck_country');



/*Holiday Custom Post type*/
add_action( 'init', 'codex_holiday_init' );

function codex_holiday_init() {
   $labels = array(
       'name'               => _x( 'holidays', 'post type general name', 'your-plugin-textdomain' ),
       'singular_name'      => _x( 'holidays', 'post type singular name', 'your-plugin-textdomain' ),
       'menu_name'          => _x( 'holiday', 'admin menu', 'your-plugin-textdomain' ),
       'name_admin_bar'     => _x( 'holiday', 'add new on admin bar', 'your-plugin-textdomain' ),
       'add_new'            => _x( 'Add New', 'holiday', 'your-plugin-textdomain' ),
       'add_new_item'       => __( 'Add New holiday', 'your-plugin-textdomain' ),
       'new_item'           => __( 'New holiday', 'your-plugin-textdomain' ),
       'edit_item'          => __( 'Edit holiday', 'your-plugin-textdomain' ),
       'view_item'          => __( 'View holiday', 'your-plugin-textdomain' ),
       'all_items'          => __( 'All holiday', 'your-plugin-textdomain' ),
       'search_items'       => __( 'Search holidays', 'your-plugin-textdomain' ),
       'parent_item_colon'  => __( 'Parent holidays:', 'your-plugin-textdomain' ),
       'not_found'          => __( 'No holidays found.', 'your-plugin-textdomain' ),
       'not_found_in_trash' => __( 'No holidays found in Trash.', 'your-plugin-textdomain' )
   );
   
   $args = array(
       'labels'             => $labels,
       'description'        => __( 'Description.', 'your-plugin-textdomain' ),
       'public'             => true,
       'publicly_queryable' => true,
       'show_ui'            => true,
       'show_in_menu'       => true,
       'query_var'          => true,
       'rewrite'            => array( 'slug' => 'holiday' ),
       'capability_type'    => 'post',
       'has_archive'        => true,
       'hierarchical'       => false,
       'menu_position'      => null,
       'supports'           => array( 'title', 'editor', 'author', 'thumbnail' )
   );
   
   register_post_type( 'ck_holiday', $args );
}

function ck_holiday_type() {  
    register_taxonomy(  
        'holiday_type',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
        'ck_holiday',        //post type name
        array(  
            'hierarchical' => true,  
            'label' => 'Holiday Type',  //Display name
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'holiday-type', // This controls the base slug that will display before each term
                'with_front' => false // Don't display the category base before 
            )
        )  
    );  
}  
add_action( 'init', 'ck_holiday_type');


/*Testimonial Post type*/
add_action( 'init', 'codex_testimonial_init' );

function codex_testimonial_init() {
   $labels = array(
       'name'               => _x( 'testimonials', 'post type general name', 'your-plugin-textdomain' ),
       'singular_name'      => _x( 'testimonial', 'post type singular name', 'your-plugin-textdomain' ),
       'menu_name'          => _x( 'Testimonial', 'admin menu', 'your-plugin-textdomain' ),
       'name_admin_bar'     => _x( 'Testimonial', 'add new on admin bar', 'your-plugin-textdomain' ),
       'add_new'            => _x( 'Add New', 'Testimonial', 'your-plugin-textdomain' ),
       'add_new_item'       => __( 'Add New Testimonial', 'your-plugin-textdomain' ),
       'new_item'           => __( 'New Testimonial', 'your-plugin-textdomain' ),
       'edit_item'          => __( 'Edit Testimonial', 'your-plugin-textdomain' ),
       'view_item'          => __( 'View Testimonial', 'your-plugin-textdomain' ),
       'all_items'          => __( 'All Testimonial', 'your-plugin-textdomain' ),
       'search_items'       => __( 'Search Testimonials', 'your-plugin-textdomain' ),
       'parent_item_colon'  => __( 'Parent Testimonials:', 'your-plugin-textdomain' ),
       'not_found'          => __( 'No Testimonials found.', 'your-plugin-textdomain' ),
       'not_found_in_trash' => __( 'No Testimonials found in Trash.', 'your-plugin-textdomain' )
   );
   
   $args = array(
       'labels'             => $labels,
       'description'        => __( 'Description.', 'your-plugin-textdomain' ),
       'public'             => true,
       'publicly_queryable' => true,
       'show_ui'            => true,
       'show_in_menu'       => true,
       'query_var'          => true,
       'rewrite'            => array( 'slug' => 'testimonial' ),
       'capability_type'    => 'post',
       'has_archive'        => true,
       'hierarchical'       => false,
       'menu_position'      => null,
       'supports'           => array( 'title', 'editor', 'author', 'thumbnail' )
   );
   
   register_post_type( 'ck_testimonial', $args );
}


/*Insider information Post type*/
add_action( 'init', 'codex_ck_insider_info_init' );

function codex_ck_insider_info_init() {
   $labels = array(
       'name'               => _x( 'insiderinformations', 'post type general name', 'your-plugin-textdomain' ),
       'singular_name'      => _x( 'insiderinformation', 'post type singular name', 'your-plugin-textdomain' ),
       'menu_name'          => _x( 'Insider Informations', 'admin menu', 'your-plugin-textdomain' ),
       'name_admin_bar'     => _x( 'Insider Informations', 'add new on admin bar', 'your-plugin-textdomain' ),
       'add_new'            => _x( 'Add New', 'Insider Information', 'your-plugin-textdomain' ),
       'add_new_item'       => __( 'Add New Insider Information', 'your-plugin-textdomain' ),
       'new_item'           => __( 'New Insider Information', 'your-plugin-textdomain' ),
       'edit_item'          => __( 'Edit Insider Information', 'your-plugin-textdomain' ),
       'view_item'          => __( 'View Insider Information', 'your-plugin-textdomain' ),
       'all_items'          => __( 'All Insider Information', 'your-plugin-textdomain' ),
       'search_items'       => __( 'Search Insider Informations', 'your-plugin-textdomain' ),
       'parent_item_colon'  => __( 'Parent Insider Informations:', 'your-plugin-textdomain' ),
       'not_found'          => __( 'No Insider Informations found.', 'your-plugin-textdomain' ),
       'not_found_in_trash' => __( 'No Insider Informations found in Trash.', 'your-plugin-textdomain' )
   );
   
   $args = array(
       'labels'             => $labels,
       'description'        => __( 'Description.', 'your-plugin-textdomain' ),
       'public'             => true,
       'publicly_queryable' => true,
       'show_ui'            => true,
       'show_in_menu'       => true,
       'query_var'          => true,
       'rewrite'            => array( 'slug' => 'insider-information' ),
       'capability_type'    => 'post',
       'has_archive'        => true,
       'hierarchical'       => false,
       'menu_position'      => null,
       'supports'           => array( 'title', 'editor', 'author', 'thumbnail' )
   );
   
   register_post_type( 'ck_insider_info', $args );
}


/*Accommodation Post type*/
add_action( 'init', 'codex_accommodation_init' );

function codex_accommodation_init() {
   $labels = array(
       'name'               => _x( 'accommodation', 'post type general name', 'your-plugin-textdomain' ),
       'singular_name'      => _x( 'accommodation', 'post type singular name', 'your-plugin-textdomain' ),
       'menu_name'          => _x( 'Accommodation', 'admin menu', 'your-plugin-textdomain' ),
       'name_admin_bar'     => _x( 'Accommodation', 'add new on admin bar', 'your-plugin-textdomain' ),
       'add_new'            => _x( 'Add New', 'Accommodation', 'your-plugin-textdomain' ),
       'add_new_item'       => __( 'Add New Accommodation', 'your-plugin-textdomain' ),
       'new_item'           => __( 'New Accommodation', 'your-plugin-textdomain' ),
       'edit_item'          => __( 'Edit Accommodation', 'your-plugin-textdomain' ),
       'view_item'          => __( 'View Accommodation', 'your-plugin-textdomain' ),
       'all_items'          => __( 'All Accommodation', 'your-plugin-textdomain' ),
       'search_items'       => __( 'Search Accommodations', 'your-plugin-textdomain' ),
       'parent_item_colon'  => __( 'Parent Accommodations:', 'your-plugin-textdomain' ),
       'not_found'          => __( 'No Accommodations found.', 'your-plugin-textdomain' ),
       'not_found_in_trash' => __( 'No Accommodations found in Trash.', 'your-plugin-textdomain' )
   );
   
   $args = array(
       'labels'             => $labels,
       'description'        => __( 'Description.', 'your-plugin-textdomain' ),
       'public'             => true,
       'publicly_queryable' => true,
       'show_ui'            => true,
       'show_in_menu'       => true,
       'query_var'          => true,
       'rewrite'            => array( 'slug' => 'accommodation' ),
       'capability_type'    => 'post',
       'has_archive'        => true,
       'hierarchical'       => false,
       'menu_position'      => null,
       'supports'           => array( 'title', 'editor', 'author', 'thumbnail' )
   );
   
   register_post_type( 'ck_accommodation', $args );
}


$authUrl = 'https://ckukdhruvcmsapi.azurewebsites.net/api/Authentication/token';
$tourUrl = 'https://ckukdhruvcmsapi.azurewebsites.net/api/tours/tours';
$countryUrl = 'https://ckukdhruvcmsapi.azurewebsites.net/api/destinations/countries';


$authResponse = wp_remote_post( $authUrl );
$authKey = wp_remote_retrieve_body( $authResponse );
//echo $body;

//$tourUrl = 'https://ckukdhruvcmsapi.azurewebsites.net/api/tours/tours';
$args = array(
    'headers' => array(
        'Authorization' => 'Bearer ' . $authKey
    )
);
$responseTour = wp_remote_get( $tourUrl, $args );
$bodyTours = json_decode( $responseTour['body'] );
//print_r($bodytours);

/*foreach ($bodyTours as $bodyTour) {
    $tour_code = $bodyTour->tour_code;
    $tourDetailsUrl = 'https://ckukdhruvcmsapi.azurewebsites.net/api/tours/tours/'.$tour_code;
    $args = array(
        'headers' => array(
            'Authorization' => 'Bearer ' . $authKey
        )
    );
    $responseTourDetails = wp_remote_get( $tourDetailsUrl, $args );
    $bodyTourDetails = json_decode( $responseTourDetails['body'] );
    
    //$tour_code = $bodyTour->tour_code;
}*/
//$url = 'https://ckukdhruvcmsapi.azurewebsites.net/api/tours/tours';

$args = array(
    'headers' => array(
        'Authorization' => 'Bearer ' . $authKey
    )
);
$responseCountry = wp_remote_get( $countryUrl, $args );
$bodyCountry = json_decode( $responseCountry['body'] );

//print_r($bodyCountry);
/*foreach ($bodyCountry as $country) {
    $country_code = $country->country_code;
    $CountryDetailsUrl = 'https://ckukdhruvcmsapi.azurewebsites.net/api/destinations/countries/'.$country_code;
    $args = array(
        'headers' => array(
            'Authorization' => 'Bearer ' . $authKey
        )
    );
    $responseCountryDetails = wp_remote_get( $CountryDetailsUrl, $args );
    $bodyCountryDetails = json_decode( $responseCountryDetails['body'] );
    
    echo $country_name = $bodyCountryDetails->country_name;
}*/

/*Hotel Custom Post type*/
add_action( 'init', 'codex_hotel_init' );

function codex_hotel_init() {
  $labels = array(
   'name'               => _x( 'Hotels', 'post type general name', 'your-plugin-textdomain' ),
   'singular_name'      => _x( 'Hotels', 'post type singular name', 'your-plugin-textdomain' ),
   'menu_name'          => _x( 'Hotel', 'admin menu', 'your-plugin-textdomain' ),
   'name_admin_bar'     => _x( 'Hotel', 'add new on admin bar', 'your-plugin-textdomain' ),
   'add_new'            => _x( 'Add New', 'Hotel', 'your-plugin-textdomain' ),
   'add_new_item'       => __( 'Add New Hotel', 'your-plugin-textdomain' ),
   'new_item'           => __( 'New Hotel', 'your-plugin-textdomain' ),
   'edit_item'          => __( 'Edit Hotel', 'your-plugin-textdomain' ),
   'view_item'          => __( 'View Hotel', 'your-plugin-textdomain' ),
   'all_items'          => __( 'All Hotel', 'your-plugin-textdomain' ),
   'search_items'       => __( 'Search Hotels', 'your-plugin-textdomain' ),
   'parent_item_colon'  => __( 'Parent Hotels:', 'your-plugin-textdomain' ),
   'not_found'          => __( 'No Hotels found.', 'your-plugin-textdomain' ),
   'not_found_in_trash' => __( 'No Hotels found in Trash.', 'your-plugin-textdomain' )
  );
 
  $args = array(
   'labels'             => $labels,
   'description'        => __( 'Description.', 'your-plugin-textdomain' ),
   'public'             => true,
   'publicly_queryable' => true,
   'show_ui'            => true,
   'show_in_menu'       => true,
   'query_var'          => true,
   'rewrite'            => array( 'slug' => 'Hotel' ),
   'capability_type'    => 'post',
   'has_archive'        => true,
   'hierarchical'       => false,
   'menu_position'      => null,
   'supports'           => array( 'title', 'editor', 'author', 'thumbnail' )
  );
 register_post_type( 'ck_hotel', $args );
}

/*Excursion Custom Post type*/
add_action( 'init', 'codex_excursion_init' );

function codex_excursion_init() {
  $labels = array(
   'name'               => _x( 'Excursions', 'post type general name', 'your-plugin-textdomain' ),
   'singular_name'      => _x( 'Excursions', 'post type singular name', 'your-plugin-textdomain' ),
   'menu_name'          => _x( 'Excursion', 'admin menu', 'your-plugin-textdomain' ),
   'name_admin_bar'     => _x( 'Excursion', 'add new on admin bar', 'your-plugin-textdomain' ),
   'add_new'            => _x( 'Add New', 'Excursion', 'your-plugin-textdomain' ),
   'add_new_item'       => __( 'Add New Excursion', 'your-plugin-textdomain' ),
   'new_item'           => __( 'New Excursion', 'your-plugin-textdomain' ),
   'edit_item'          => __( 'Edit Excursion', 'your-plugin-textdomain' ),
   'view_item'          => __( 'View Excursion', 'your-plugin-textdomain' ),
   'all_items'          => __( 'All Excursion', 'your-plugin-textdomain' ),
   'search_items'       => __( 'Search Excursions', 'your-plugin-textdomain' ),
   'parent_item_colon'  => __( 'Parent Excursions:', 'your-plugin-textdomain' ),
   'not_found'          => __( 'No Excursions found.', 'your-plugin-textdomain' ),
   'not_found_in_trash' => __( 'No Excursions found in Trash.', 'your-plugin-textdomain' )
  );
 
  $args = array(
   'labels'             => $labels,
   'description'        => __( 'Description.', 'your-plugin-textdomain' ),
   'public'             => true,
   'publicly_queryable' => true,
   'show_ui'            => true,
   'show_in_menu'       => true,
   'query_var'          => true,
   'rewrite'            => array( 'slug' => 'Excursion' ),
   'capability_type'    => 'post',
   'has_archive'        => true,
   'hierarchical'       => false,
   'menu_position'      => null,
   'supports'           => array( 'title', 'editor', 'author', 'thumbnail' )
  );
 register_post_type( 'ck_excursion', $args );
}

/*Excursion Custom Post type*/
add_action( 'init', 'codex_meet_the_team_init' );

function codex_meet_the_team_init() {
  $labels = array(
   'name'               => _x( 'Teams', 'post type general name', 'your-plugin-textdomain' ),
   'singular_name'      => _x( 'Teams', 'post type singular name', 'your-plugin-textdomain' ),
   'menu_name'          => _x( 'Team', 'admin menu', 'your-plugin-textdomain' ),
   'name_admin_bar'     => _x( 'Team', 'add new on admin bar', 'your-plugin-textdomain' ),
   'add_new'            => _x( 'Add New', 'Team', 'your-plugin-textdomain' ),
   'add_new_item'       => __( 'Add New Team', 'your-plugin-textdomain' ),
   'new_item'           => __( 'New Team', 'your-plugin-textdomain' ),
   'edit_item'          => __( 'Edit Team', 'your-plugin-textdomain' ),
   'view_item'          => __( 'View Team', 'your-plugin-textdomain' ),
   'all_items'          => __( 'All Team', 'your-plugin-textdomain' ),
   'search_items'       => __( 'Search Teams', 'your-plugin-textdomain' ),
   'parent_item_colon'  => __( 'Parent Teams:', 'your-plugin-textdomain' ),
   'not_found'          => __( 'No Teams found.', 'your-plugin-textdomain' ),
   'not_found_in_trash' => __( 'No Teams found in Trash.', 'your-plugin-textdomain' )
  );
 
  $args = array(
   'labels'             => $labels,
   'description'        => __( 'Description.', 'your-plugin-textdomain' ),
   'public'             => true,
   'publicly_queryable' => true,
   'show_ui'            => true,
   'show_in_menu'       => true,
   'query_var'          => true,
   'rewrite'            => array( 'slug' => 'meet-the-teams' ),
   'capability_type'    => 'post',
   'has_archive'        => true,
   'hierarchical'       => false,
   'menu_position'      => null,
   'supports'           => array( 'title', 'editor', 'author', 'thumbnail' )
  );
 register_post_type( 'ck_meet_the_team', $args );
}
