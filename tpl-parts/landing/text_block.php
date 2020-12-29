<div class="full-width-fill" style="background-color:<?php echo get_sub_field('block_background_colour'); ?>;">
    <section class="landing__text-block block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
            <?php if(get_sub_field('title')) : ?>
                <?php
                if( get_row_layout() == 'intro_text_block' ):
                    ?>
                    <h1><?php echo get_sub_field('title'); ?></h1>
                <?php else : ?>
                    <h2><?php echo get_sub_field('title'); ?></h2>
                <?php endif; ?>

            <?php endif; ?> 
            <?php echo get_sub_field('content'); ?>
            <?php if(get_sub_field('call_to_action')['title']) : ?>
                <div class="landing__call-to-action">
                    <h3 class="headline">
                        <?php echo get_sub_field('call_to_action')['title']; ?>
                    </h3>
                    <div class="details">
                        <p class="subtitle"><?php echo get_sub_field('call_to_action')['subtitle']; ?></p>
                        <a href="tel:<?php echo get_sub_field('call_to_action')['telephone_number']; ?>"
                        class="tel_no"><?php echo get_sub_field('call_to_action')['telephone_number']; ?>
                        </a>
                    </div>
                    <a class="button" href="<?php echo get_sub_field('call_to_action')['link']['url']; ?>">
                        <span><?php echo get_sub_field('call_to_action')['link']['title']; ?></span>
                    </a>
                    
                </div>
            <?php endif; ?>
                </div>
            </div>   
        </div>
    </section>
</div>