<div class="full-width-fill" style="background-color:<?php echo get_sub_field('block_background_colour'); ?>;">
    <section class="landing__video-lightbox-section block">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 style="text-align: <?php echo get_sub_field('align_title')['value'].";"; ?>"><?php echo get_sub_field('section_title'); ?></h2>
                </div>
            </div>
            <div class="row">
                <?php global $post;?>
                <?php
                if( have_rows('add_video') ):
                    while ( have_rows('add_video') ) : the_row(); ?>
                        <div class="col-12 col-md-6">
                            <div class="video_thumbnail" style="background-image:url(<?php echo get_sub_field('thumbnail')['sizes']['large']; ?>)">
                                <span>
                                <i class="fas fa-play-circle"></i><br>Click to watch
                                </span>
                                <div class="overlay"></div>
                            </div>
                            <h4><?php echo get_sub_field('title'); ?></h4>
                        </div>
                    <?php endwhile;
                endif;
                ?>
            </div>
        </div>


    </section>
</div>