<?php
/**
 ** Template Name: Brochures
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
              <li>Brochure request</li>
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
            <h1><?php echo get_field('page_title'); ?></h1>
            <?php the_content();?>
            <div class="h-divider"></div>
          </div>
        </div>
      </div>
    </section>
    <form name="" method="">
     <section class="brochuresTab">
        <div class="container">
          <div class="row">
            <div class="col-md-12">

            <div class="destinations-tab">
                <button class="filter-button active" data-filter="2019-brochures">2019 Brochures</button>
                <button class="filter-button" data-filter="2020-brochures">2020 Brochures</button>
            </div>
          </div>
        </div>
          <div class="row">
            <div class="col-md-12">
            <div class="row filter 2019-brochures brochureMain">
              <?php if( have_rows('brochures_2019') ): ?>
                <?php while( have_rows('brochures_2019') ): the_row(); 

                  // vars                  
                  $title = get_sub_field('title');
                  $status = get_sub_field('status');
                  $image = get_sub_field('image');
                  $content = get_sub_field('content');
                  $download = get_sub_field('download');


                  ?>
                  <div class="col-md-4 divider">
                  <div class="brochureBox">
                    <article>
                    <h2><?php echo $title; ?></h2>
                    <strong><?php echo $status; ?></strong>
                    <p><?php echo $content; ?></p>
                    <div class="order">
                    <label><i class="fa fa-book"></i> Order copy by post <input type="checkbox" name="<?php echo $title; ?>"></label>
                    </div>
                    <div class="download">
                    <a href="<?php echo $download; ?>" target="_blank"><i class="fa fa-file-pdf-o"></i> Download pdf</a>
                    </div>
                    </article>
                    <figure>                      
                      <img src="<?php echo $image; ?>" alt="" />                      
                    </figure>
                  </div>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?> 
            </div>



            <div class="row filter 2020-brochures brochureMain" style="display: none;">
              <?php if( have_rows('brochures_2020') ): ?>
                <?php while( have_rows('brochures_2020') ): the_row(); 

                  // vars                  
                  $title = get_sub_field('title');
                  $status = get_sub_field('status');
                  $image = get_sub_field('image');
                  $content = get_sub_field('content');
                  $download = get_sub_field('download');


                  ?>
                  <div class="col-md-4 divider">
                  <div class="brochureBox">
                    <article>
                    <h2><?php echo $title; ?></h2>
                    <strong><?php echo $status; ?></strong>
                    <p><?php echo $content; ?></p>
                    <div class="order">
                    <label><i class="fa fa-book"></i>  Pre-order now <input type="checkbox" name="<?php echo $title; ?>"></label>
                    </div>
                    <div class="download">
                    <a href="<?php echo $download; ?>" target="_blank"><i class="fa fa-file-pdf-o"></i> PDF coming soon</a>
                    </div>
                    </article>
                    <figure>                      
                      <img src="<?php echo $image; ?>" alt="" />                      
                    </figure>
                  </div>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="row featured-destinations">
                  <div class="col-md-5 compassTxt">
                    <?php the_field('compass_text'); ?>
                  </div>
                  <div class="col-md-7 colRight">
                    <img class="fImage" src="<?php the_field('featured_destinations_image'); ?>" alt="">
                    <?php the_field('featured_destinations'); ?>
                    <div class="subscribe">
                      <label><i class="fa fa-envelope"></i>  Subscribe now <input type="checkbox" name="subscribe-now"></label>
                      <a href="<?php echo $download; ?>" target="_blank"><i class="fa fa-archive"></i> View archive</a>
                    </div>
                  </div>
              </div>
            </div>
          </div>

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
                  <div class="col-md-2"><label>Telephone</label></div>
                  <div class="col-md-4"><input type="text" name=""></div>
                </div>
                <div class="row">
                  <div class="col-md-12">The online brochure request service is not available to those outside of the UK and Ireland.</div>
                </div>
                <div class="row">
                  <div class="col-md-12"><h6>Your address</h6></div>
                </div>
                <div class="row">
                  <div class="col-md-2"><label>Postcode<span>*</span></label></div>
                  <div class="col-md-4"><input type="text" name=""></div>
                  <div class="col-md-4"><input type="submit" name="" value="Find address"></div>
                </div>
                <div class="row hiddenFields" style="display: none;">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-2"><label>Address line 1<span>*</span></label></div>
                      <div class="col-md-4"><input type="text" name=""></div>
                      <div class="col-md-2"><label>Address line 2</label></div>
                      <div class="col-md-4"><input type="text" name=""></div>
                    </div>
                    <div class="row">
                      <div class="col-md-2"><label>Town</label></div>
                      <div class="col-md-4"><input type="text" name=""></div>
                      <div class="col-md-2"><label>County</label></div>
                      <div class="col-md-4"><input type="text" name=""></div>
                    </div>
                    <div class="row">
                      <div class="col-md-2"><label>Country<span>*</span></label></div>
                      <div class="col-md-4"><input type="text" name="" value="United Kingdom" disabled class="disabled"></div>                      
                    </div>
                  </div>
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
                    <p>Once you have submitted this form you will receive an email confirmation. You will also receive future promotional material by post, including our Compass magazine, brochures and special offers. You can opt-out at any time by contacting us by post, email or telephone. If you would like to opt-out now, please click below:</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2"><label>Postal mailings</label></div>
                  <div class="col-md-4"><input type="checkbox" name=""> No thanks</div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <p>You may also be interested in receiving our email newsletters, which include travel inspiration, special offers, news, articles, competitions and more. Please let us know whether or not you would like to receive these e-communications (you can contact us by email, telephone or post at any time to change your permission).</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2"><label>Email mailings<span>*</span></label></div>
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
      