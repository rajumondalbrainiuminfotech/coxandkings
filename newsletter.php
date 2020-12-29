<?php
/**
 ** Template Name: Newsletter
 **/

get_header(); ?>
<?php
  if ( have_posts() ) {
    while ( have_posts() ) :
      the_post(); ?>

     <?php if ( has_post_thumbnail() ) { ?> 
        <section class="banner-home" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
          <!-- <h3>Banner text</h3> -->
        </section>
     <?php  } else { ?>

      <section class="noBanner"></section>

     <?php  } ?>        
    
    <section class="b-crumb-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div  class="b-crumb">
            <a href="#" class="back">Back</a> 
            <div>You are here:</div> 
            <ul>
              <li><a href="<?php bloginfo('url');?>">Home</a></li>
              <li><a href="<?php echo bloginfo('url');?>/publications">Publications</a></li>
              <li>Newsletter</li>
            </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="inner-txt">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1><?php echo get_field('title'); ?></h1>
            <?php the_content();?>
            <div class="h-divider"></div>
          </div>
        </div>
      </div>
    </section>
    <form name="" method="">
     <section class="brochuresTab">
        <div class="container">
          
          <div class="row formSection">
              <div class="col-md-10">
                <div class="row">
                  <div class="col-md-12">The asterisk marks a mandatory field</div>
                </div>
                <div class="row">
                  <div class="col-md-12"><h6>Your details</h6></div>
                </div>
                <div class="row">
                  <div class="col-md-2">Title</div>
                  <div class="col-md-4">
                    <select>
                      <option selected="selected" value="Mr">Mr</option>
                      <option>Mr</option>
                      <option>Mrs</option>
                      <option>Ms</option>
                      <option>Miss</option>
                      <option>Dr</option>
                      <option>Sir</option>
                      <option>Lord</option>
                      <option>Lady</option>
                      <option>Other - please specify</option>
                    </select>
                  </div>
                  <div class="col-md-2">Other</div>
                  <div class="col-md-4"><input type="text" name=""></div>
                </div>
                <div class="row">
                  <div class="col-md-2"><label>First name<span>*</span></label></div>
                  <div class="col-md-4"><input type="text" name=""></div>
                  <div class="col-md-2"><label>Last name<span>*</span></label></div>
                  <div class="col-md-4"><input type="text" name=""></div>
                </div>
                <div class="row">
                  <div class="col-md-2"><label>Email<span>*</span></label></div>
                  <div class="col-md-4"><input type="email" name=""></div>
                </div>
                <div class="row">
                  <div class="col-md-12"><h6>Tell us more</h6></div>
                </div>
                <div class="row">
                  <div class="col-md-7">
                    <label>How did you hear about Cox & Kings?</label>
                    <select name="">
                      <option selected="selected" value="Please select...">Please select...</option>
                      <option value="INBRMAILER">C&amp;K postal mailing</option>
                      <option value="COMPASS18">Compass</option>
                      <option value="ADVT">Press advertisement</option>
                      <option value="ADET">Press article</option>
                      <option value="MP">Magazine advertisement</option>
                      <option value="INBRSEARCH">Search engine</option>
                      <option value="INBRRECOM">Recommended by a friend</option>
                      <option value="TVAG">Recommended by a travel agent</option>
                      <option value="INBRPASTTR">Past traveller</option>
                      <option value="INBRENEWS">Email newsletter</option>
                      <option value="DESTSHOW">Destinations show</option>
                      <option value="RAFRIEND">Friend of the Royal Academy</option>
                      <option value="SURFER">Silversurfers website</option>
                      <option value="INBROTH">Other</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <p>Once you have submitted this form you will receive an email confirmation.</p> 
                    <p>You will also receive future promotional emails from Cox & Kings. You can opt-out of receiving these emails at any time by selecting the unsubscribe option on the emails. If you would like to opt-out now, please click below:</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2"><label>Postal mailings</label></div>
                  <div class="col-md-4"><input type="checkbox" name=""> No thanks</div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <p>Periodically, Cox & Kings also sends out promotional material by post, including our <em>Compass magazine</em>, brochures and special offers.</p>
                    <p>Please let us know whether or not you would like to receive these communications (you can contact us by email, telephone or post at any time to change your permission).</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2"><label>Postal mailings<span>*</span></label></div>
                  <div class="col-md-2"><input type="radio" name="email-mailings"> Yes please</div>
                  <div class="col-md-4"><input type="radio" name="email-mailings"> No thanks</div>
                </div>
                <div class="row">
                  <div class="col-md-12"><p>You can read the full Cox & Kings <a href="#">privacy policy here.</a></p></div>
                </div>
                <div class="row">
                  <div class="col-md-12 text-center"><input type="submit" name="" value="Submit"></div>
                </div>
                
              </div>
          </div>

        </div>
      </div>
    </section>
    </form>

             
          
    
   

  
       
<?php endwhile; } ?>

<?php get_footer(); ?>
      