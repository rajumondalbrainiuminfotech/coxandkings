<?php $posts = get_sub_field('select_items'); $the_post = $posts[0];?>

<div class="full-width-fill">
    <section class="landing__testimonial block" style="background-image:url(<?php echo get_sub_field('testimonials_background')['sizes']['large']; ?>);">
        <div class="container">
            <div class="row">
                <div class="col-10 col-md-8 offset-1 offset-md-2">

                <?php 

                if( $posts ): ?>
                    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
                        <div class="testimonial">
                            <h4><?php echo get_field('testimonial_content'); ?></h4>
                            <span class="author_name"><?php echo get_field('testimonial_author_name'); ?></span>
                        </div>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php endif; ?>

                </div>
            </div>
        </div>
    </section>
</div>