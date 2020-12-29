<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 */

get_header(); ?>
    <section class="banner-home" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/home-banner.jpg);">
      <h3>Inspiring Travel for Over 260 Years</h3>
    </section>

    <section class="home-text-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center home-txt">
            <h1>Luxury Tours and Tailor-Made Holidays by Cox &amp; Kings</h1>
            <p>Cox &amp; Kings offers high quality travel to the world's most captivating destinations. Whether you seek luxury, adventure or a mix of both, our holidays are designed by experts and brought to life by the finest guides.</p>
            <div class="cta center">
              <a href="#"><span>LEARN MORE ABOUT OUR HERITAGE</span></a>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 home-txt">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
              <h2 class="uppercase font-bold">Experience <img src="<?php echo get_template_directory_uri(); ?>/img/king-icon.png" alt="" title=""> Adventure</h2>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-block">
              <img class="cld-responsive " src="<?php echo get_template_directory_uri(); ?>/img/0070018192_384_240.jpg"alt="" title="">
              <div class="txt-block">
                <h3 class="uppercase font-bold">Group Tours</h3>
                <p>Our high quality small group tours offer superb value – combining sightseeing with expert guides, signature experiences and free time to relax...</p>
                <div class="cta left">
                  <a href="#"><span>LEARN MORE</span></a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-block">
              <img class="cld-responsive " src="<?php echo get_template_directory_uri(); ?>/img/0070017904_384_240.jpg" alt="" title="">
              <div class="txt-block">
                <h3 class="uppercase font-bold">Tailor-made Holidays</h3>
                <p>Our private travel service offers the opportunity to have an itinerary designed for you by one of our experts to fit your interests, dates and budget...</p>
                <div class="cta left">
                  <a href="#"><span>LEARN MORE</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="home-row-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-block">
            <figure>
              <h3 class="uppercase font-bold">SOLO TRAVELLERS</h3>
              <img class="cld-responsive " src="<?php echo get_template_directory_uri(); ?>/img/0070000128_465_465.jpg" alt="" title="">
            </figure>
            <div class="txt-block">  
            <p><span>Discover a range of group tour holidays for solo travellers, with no single supplement.</span></p>
            <div class="cta left">
              <a href="#"><span>LEARN MORE</span></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-block">
          <figure>
            <h3 class="uppercase font-bold">DISCOVER TAIWAN</h3><img src="<?php echo get_template_directory_uri(); ?>/img/0070020259_465_465.jpg" alt="" title="">
          </figure>
          <div class="txt-block">
            <p><span>A less explored treasure, Taiwan offers breathtaking scenery, exotic cultures and hospitable people.</span></p>
            <div class="cta left">
              <a href="#"><span>LEARN MORE</span></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-block">
          <figure>
            <h3 class="uppercase font-bold">NEW GROUP TOUR FOR 2019</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/img/0070020176_465_465.jpg" alt="" title="">
          </figure>
          <div class="txt-block"> 
            <p><span>Explore all three states of the southern Caucasus in our new and exciting tour for 2019.</span></p>
            <div class="cta left">
              <a href="#"><span>LEARN MORE</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="home-row-4">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-10 no-padding col-block">
          <h2 class="uppercase font-bold">Our Guide to Seasonal Travel</h2>
        </div>
      <div class="col-md-6 col-sm-2 no-padding text-right col-block">
        <div class="cta right">
              <a href="#"><span>LEARN MORE</span></a>
            </div>
      </div>
      </div>
      
    </div>
    <div class="container">
      <div class="row">
      <div class="col-lg-8 col-md-12 col-sm-12 no-padding no-margin">
        <ul class="month-blocks row">
          <li class="col-lg-4 col-md-4 col-sm-4  no-padding">
            <figure> <a href="#">
              <img class="cld-responsive " src="<?php echo get_template_directory_uri(); ?>/img/0050017271_465_465.jpg" alt="" title="">
              <span class="uppercase font-bold">Jan-Feb</span></a>
            </figure>
          </li>
          <li class="col-lg-4 col-md-4 col-sm-4  no-padding">
              <figure> <a href="#">
                <img class="cld-responsive " src="<?php echo get_template_directory_uri(); ?>/img/0050017310_465_465.jpg" alt="" title="">
                <span class='uppercase font-bold'>Mar-Apr</span></a></figure>
          </li>
          <li class="col-lg-4 col-md-4 col-sm-4  no-padding">
              <figure> <a href="#">
                <img class="cld-responsive " src="<?php echo get_template_directory_uri(); ?>/img/0050017318_465_465.jpg" alt="" title="">
                <span class='uppercase font-bold'>May-Jun</span></a></figure>
          </li>
          <li class="col-lg-4 col-md-4 col-sm-4  no-padding">
              <figure> <a href="#">
                <img class="cld-responsive " src="<?php echo get_template_directory_uri(); ?>/img/0050017334_465_465.jpg" alt="" title="">
                <span class='uppercase font-bold'>Jul- Aug</span></a></figure>
          </li>
          <li class="col-lg-4 col-md-4 col-sm-4 no-padding">
              <figure> <a href="#">
                <img class="cld-responsive " src="<?php echo get_template_directory_uri(); ?>/img/0050016478_465_465.jpg" alt="" title="">
                <span class='uppercase font-bold'>Sep- Oct</span></a></figure>
          </li>
          <li class="col-lg-4 col-md-4 col-sm-4 no-padding">
              <figure> <a href="#">
                <img class="cld-responsive " src="<?php echo get_template_directory_uri(); ?>/img/0050017301_465_465.jpg" alt="" title="">
                <span class='uppercase font-bold'>Nov- Dec</span></a></figure>
          </li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
          <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12 no-padding text-center txt-block pos-rel">
            <figure><img src="<?php echo get_template_directory_uri(); ?>/img/blue-bg.png" class="img-responsive" alt="" title="">
              <div class="col-md-12 text-box">
                <h5>Simply choose a month to travel and discover the very best places to visit at that time of year…</h5>
                <br><span><i>Holiday inspiration from Cox &amp; Kings</i></span>
              </div>
            </figure>
          </div>
          <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12 no-padding text-center txt-block">
            <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/img/tiger_replace.png" class="img-fluid" alt="" title="">
            </figure>
          </div>
        </div>
      </div>
      </div>
      </div>
    </section>

    <section class="home-row-5"> 
      <div class="container"> 
        <div class="row"> 
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
            <div class="row">
            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-2"> 
              <img alt="" class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/vertical-blue-line.png" class="img-fluid" title=""> 
            </div> 
              <div class="col-lg-4 col-md-6 col-sm-6 col-xs-8 text-center title-text no-padding"> 
                <h2 class="uppercase font-bold">More From Cox &amp; Kings</h2> 
              </div> 
              <div class="col-lg-4 col-md-3 col-sm-3 col-xs-2"> 
                <img alt="" class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/vertical-blue-line.png" class="img-fluid" title=""> 
              </div>
              </div>
            </div> 
          </div>
          <div class="row">
            <div class="col-block col-md-3 col-sm-6"> 
              <h3 class="uppercase font-bold">Arts &amp; culture</h3> 
              <figure>
              <img alt="" src="<?php echo get_template_directory_uri(); ?>/img/arts-and-culture_275x275.jpg" class="img-fluid" title=""> 
              </figure>
              <div class="txt-block"> 
                <p>Encounter the art and culture of a country alongside specialist lecturers.</p> 
                <div class="cta left">
                  <a href="#"><span>LEARN MORE</span></a>
                </div>
              </div> 
            </div> 
            <div class="col-block col-md-3 col-sm-6"> 
              <h3 class="uppercase font-bold">Family adventures</h3>
              <figure> 
              <img alt="" src="<?php echo get_template_directory_uri(); ?>/img/family-holidays_275x275.jpg" class="img-fluid" title="">
              </figure> 
              <div class="txt-block"> 
                <p>Broaden the horizons of family members of all generations.</p> 
                <div class="cta left">
                  <a href="#"><span>LEARN MORE</span></a>
                </div> 
              </div> 
            </div> 
            <div class="col-block col-md-3 col-sm-6"> 
              <h3 class="uppercase font-bold">Photography competition</h3>
              <figure> 
              <img alt="" src="<?php echo get_template_directory_uri(); ?>/img/compass photography competition mpu 275x275.jpg" title="">
              </figure> 
              <div class="txt-block"> 
                <p>This image won last time. If you’ve taken any great photos, enter now.</p> 
                <div class="cta left">
                  <a href="#"><span>LEARN MORE</span></a>
                </div>
              </div> 
            </div> 
            <div class="col-block col-md-3 col-sm-6"> 
              <h3 class="uppercase font-bold">Brochures</h3> 
              <figure>
              <img alt="" src="<?php echo get_template_directory_uri(); ?>/img/order-a-brochure.jpg" title=""> 
              </figure>
              <div class="txt-block"> 
                <p> Order your copy of the brochure to see the world come to life in print.</p> 
                <div class="cta left">
                  <a href="#"><span>LEARN MORE</span></a>
                </div> 
              </div> 
            </div> 
          </div> 
        </div> 
      </section>

      
      <div class="container">
        <section id="cph_New_trustpilot_TA307040F016_trustpilot" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding home-row-6 border-top" style="display:block;">

        <div class="container">
        <!-- TrustBox widget - Carousel -->
        <div class="trustpilot-widget" data-locale="en-GB" data-template-id="53aa8912dec7e10d38f59f36" data-businessunit-id="59cccc580000ff0005ac4238" data-style-height="130px" data-style-width="100%" data-theme="light" data-stars="5" data-schema-type="Organization" style="position: relative;"><iframe frameborder="0" scrolling="no" title="Customer reviews powered by Trustpilot" src="https://widget.trustpilot.com/trustboxes/53aa8912dec7e10d38f59f36/index.html?templateId=53aa8912dec7e10d38f59f36&amp;businessunitId=59cccc580000ff0005ac4238#locale=en-GB&amp;styleHeight=130px&amp;styleWidth=100%25&amp;theme=light&amp;stars=5&amp;schemaType=Organization" style="position: relative; height: 130px; width: 100%; border-style: none; display: block; overflow: hidden;"></iframe></div>
        <!-- End TrustBox widget -->
        </div>

        </section>
      </div>

<?php get_footer(); ?>
      