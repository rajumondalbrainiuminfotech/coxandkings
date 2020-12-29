<?php
get_header(); 
?>


<div class="landing">



<?php
if( have_rows('flexible_content') ):
    while ( have_rows('flexible_content') ) : the_row();
    ?>

        <?php 
            if( get_row_layout() == 'landing_hero' ):
                include(locate_template('tpl-parts/landing/hero.php'));
            endif;
            if( get_row_layout() == 'intro_text_block' ):
                include(locate_template('tpl-parts/landing/text_block.php'));
            endif;
            if( get_row_layout() == 'text_block' ):
                include(locate_template('tpl-parts/landing/text_block.php'));
            endif;
            if( get_row_layout() == 'content_block' ):
                include(locate_template('tpl-parts/landing/content_block.php'));
            endif;
            if( get_row_layout() == 'video_lightbox_section' ):
                include(locate_template('tpl-parts/landing/video_lightbox_section.php'));
            endif;
            if( get_row_layout() == 'single_full_with_video' ):
                include(locate_template('tpl-parts/landing/single_full_with_video.php'));
            endif;
            if( get_row_layout() == 'listings_slider' ):
                include(locate_template('tpl-parts/landing/listings_slider.php'));
            endif;
            if( get_row_layout() == 'testimonial' ):
                include(locate_template('tpl-parts/landing/testimonial.php'));
            endif;
        ?>


    <?php    
    endwhile;
endif;

?>






</div>


<script src="https://kit.fontawesome.com/3e0cb13967.js"></script>

<style>
    .custom-holiday-search{
        display:none;
    }
</style>


<?php
get_footer();
?>