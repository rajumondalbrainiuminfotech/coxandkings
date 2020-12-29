<?php
    $posts = get_sub_field('select_items');
    $posttype = $posts[0]->post_type;;
?>

<div class="full-width-fill">
    <section class="landing__listings-slider block post-type-<?php echo $posttype; ?>" style="background-color:<?php echo get_sub_field('slider_background_colour'); ?>;">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <h2 style="color: <?php echo get_sub_field('title_colour'); ?>;"><?php echo get_sub_field('title'); ?></h2>
         
         




                </div>




<div class="col-10 col-md-12 offset-1 offset-md-0">

    <div class="owl-carousel landing-carousel owl-theme">
                <?php 



                    if( $posts ): ?>
                        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                            <?php setup_postdata($post); ?>
                            <div class="item">
                                <div class="listings-slider-item">
                                    <div class="top_image" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
                                    <h4><?php if(get_field('caption_title')) : ?>
                                        <span><?php echo get_field('caption_title'); ?></span>
                                    <?php endif; ?>

                                    <?php if(get_field('caption_title')){
                                        echo "... ".get_the_title();
                                    }else{
                                        echo the_title();
                                    }
                                    ?></h4>

                                    <?php if($posttype == "post") : ?>
                                    <span class="author">
                                        <?php echo get_the_author(); ?>
                                    </span>
                                    <span class="date">
                                        <?php echo get_the_date('M j, Y'); ?>
                                    </span>
                                     <?php endif; ?>

                                    <div class="description">
                                        <?php if(get_field('accommodation_short_description')){
                                             if (strlen(get_field('accommodation_short_description'))<90) {
                                                echo get_field('accommodation_short_description');
                                            }else{
                                                echo substr(get_field('accommodation_short_description'),0,90)."...";
                                            }

                                        }else{
                                            if(strlen(get_the_excerpt())<90){
                                                echo get_the_excerpt();
                                            }else{
                                                echo substr(get_the_excerpt(),0,90)."...";
                                            }
                                        }
                                        ?>
                                    </div>
                                    <a href="" class="view-post">View Trip</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                    <?php endif; ?>

                    </div> 

                </div>    
            </div>
        </section>
    </div>




<script>


jQuery('document').ready(function(){
    jQuery('.landing-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
});



    </script>