<div class="full-width-fill">
    <section class="landing__content-block block">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 align-center">
                    <h3>
                        <?php echo get_sub_field('content')['title']; ?>
                    </h3>
                    <?php echo get_sub_field('content')['text']; ?>
                </div>
                <div class="col-12 col-md-6">
                    <img src="<?php echo get_sub_field('image')['image']['sizes']['large']; ?>">
                </div>    
           </div>
        </div>
    </section>
</div>