<?php
/**
 ** Template Name: Compass
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
              <li>Compass magazine</li>
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
                <div class="row compassMazn">
                  <div class="col-md-5 compassTxt">
                    <h1><?php echo get_field('page_title'); ?></h1>
                      <?php the_content(); ?>
                                         
                  </div>
                  <div class="col-md-7 colRight">
                    
                    <h2><?php echo get_field('featured_title'); ?></h2>
                    <hr style="clear:both;">
                    <img class="fImage" src="<?php echo get_field('featured_image'); ?>" alt="">
                    <?php echo get_field('featured_content'); ?>
                                       
                    <div class="subscribe">
                      <a href="<?php echo get_field('download_link'); ?>" target="_blank"><i class="fa fa-file-pdf-o"></i> Download pdf</a>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
    </section>



    <form name="" method="">
     <section class="brochuresTab">
        <div class="container">          
          <div class="row">
            <div class="col-md-12">


          <div class="row formSection">
              <div class="col-md-10">
                <div class="row">
                  <div class="col-md-12">
                  	<h3>Subscribe to Compass</h3>
                  	<hr>
                  	The asterisk marks a mandatory field
                  </div>
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

    <section class="allMaz">
       <div class="container">          
          <div class="row">
          	<div class="col-md-12">
          		<h3>Previous issues</h3>
          		<hr>	
          	</div> 
          </div>
          <div class="row">
            <?php if( have_rows('magazines') ): ?>

              

              <?php while( have_rows('magazines') ): the_row(); 

                // vars
                $title = get_sub_field('title');
                $image = get_sub_field('image');
                $content = get_sub_field('content');
                $link = get_sub_field('link');

              ?>

                <div class="col-md-6">
                  <div class="magBox">
                    <div class="row">
                      <div class="col-md-9">
                        <h5><?php echo $title; ?></h5>
                        <?php echo $content; ?>                        
                      </div>
                      <div class="col-md-3">
                        <img src="<?php echo $image; ?>" alt="Compass-Issues" title="Compass-Issues">
                        <div class="downldPdf">
                          <a href="<?php echo $link; ?>" target="_blank"><i class="fa fa-file-pdf-o"></i> Download pdf</a>
                        </div>
                      </div>
                    </div>
                   
                  </div>
                </div>
              <?php endwhile; ?>    

            <?php endif; ?>
          	
          </div>
       </div>
    </section>        
          
    
   

  
       
<?php endwhile; } ?>

<?php get_footer(); ?>
      