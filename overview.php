<?php
/**
 ** Template Name: overview
 **/

get_header(); ?>
    <section class="banner-home" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/italy-banner.png);">
      <!-- <h3>Inspiring Travel for Over 260 Years</h3> -->
    </section>
    <section class="b-crumb-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div  class="b-crumb">
            <a href="#" class="back">Back</a> 
            <div>You are here:</div> 
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Destinations</a></li>
              <li><a href="#">Europe</a></li>
              <li>Italy</li>
            </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="country-tab">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul>
              <li><span>Italy</span></li>
              <li class="active"><a href="#">Overview</a></li>           
              <li><a href="#">Tailor-Made Holidays</a></li>           
              <li><a href="#">Group Tours</a></li>           
              <li><a href="#">Private Travel</a></li>           
              <li><a href="#">Accommodation</a></li>           
              <li><a href="#">Gallery</a></li>           
              <li><a href="#">FAQS</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="inner-txt">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h3>Luxury holidays in Italy by Cox & Kings</h3>
            <p>The long booted leg of Italy stretches out into the Mediterranean Sea, tapping the island of Sicily with its toe. This slender peninsula is brimming with beautiful scenery, gastronomic delights, world-class art and architecture, glorious music, timeless literature and ancient history. Its splendid cultural heritage is the result of a complex past, where centuries of conflict between states, nations and world powers have shaped the land and its people as different rulers have come and gone.</p>

            <p>Once at the heart of the great Roman empire, as well as the Christian world and western civilisation, Rome’s influence extended from North Africa through to present-day Iraq in the east and as far as Great Britain in the north. After the collapse of the empire, powerful city-states began to emerge such as Venice, Siena, Florence, Milan and Lucca. These sparring states then became engulfed by greater powers such as Spain, France and Austria. Unification of Italy only came about in the mid-19th century and, even today, the different cultures of the various regions of Italy still persist.</p>

            <p>From the mountains, castles and Austrian ambience of the South Tyrol in the far north to the Greek temples, bustling markets and faintly Arabic feel of Sicily in the far south, Italy has an extraordinary range of sights to see and differing cultures to experience, all within one country, not to mention sumptuous hotels and villas and food to die for.</p>            
          </div>
          <div class="col-md-5">
            <h3>Explore Italy</h3>
            <p>Click on your destination of interest</p>
            <div class="map-box">
              <img src="<?php echo get_template_directory_uri(); ?>/img/map-italy.png" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="h-divider mt-50 mb-40"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <h3 class="heading1">Key facts</h3>
            <ul class="keyFacts">
              <li>Capital: <strong>Rome</strong></li>
              <li>Flying time from London: <strong>2.75 hours</strong></li>
              <li>Time difference: <strong>+1 GMT</strong></li>
              <li>urrency: <strong></strong>Euro</li>
              <li>Official language(s): <strong>Italian</strong></li>
              <li>Visa requirements: <strong>Not required for UK passport holders</strong></li>
            </ul>
          </div>
          <div class="col-md-6">
            <h3 class="heading1">The Europe Experts</h3>
            <div class="expertPic">
              <img src="<?php echo get_template_directory_uri(); ?>/img/europe-expert-01.png" class="img-fluid">
              <img src="<?php echo get_template_directory_uri(); ?>/img/europe-expert-02.png" class="img-fluid">
            </div>
            <p class="expertsTxt">From Russia to Turkey, Iceland to Italy and everywhere in-between, our Europe experts have travelled extensively. With their insider secrets, they would love to tailor a tour to suit you.</p>
            <div class="callThem">
              Call them on <br><a href="tel:020 3813 9289">020 3813 9289</a>
            </div>  
            <div class="cta left uppercase">
              <a href="#"><span>Discover their personal favourites</span></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="gallery-page">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/img/gallery-img1.png" class="img-fluid">
            <a href="#" class="video-overlay">
              <img src="<?php echo get_template_directory_uri(); ?>/img/gallery-video.svg">
            </a>
            </figure>
          </div>
          <div class="col-md-3">
            <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/img/gallery-img2.png" class="img-fluid">
            </figure>
          </div>
          <div class="col-md-3">
            <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/img/gallery-img3.png" class="img-fluid">
            </figure>
          </div>
          <div class="col-md-3">
            <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/img/gallery-img4.png" class="img-fluid">
            <a href="#" class="viewFullGallery">
              View Full Gallery <img src="<?php echo get_template_directory_uri(); ?>/img/gallery-right.svg">
            </a>
            </figure>
          </div>
        </div>
      </div>
    </section>

    <section class="topThingsToDO bg-light2">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h3 class="heading1 mt-50 mb-40">Top things to do in Italy</h3>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div id="topthings-carousel" class="owl-carousel owl-theme">
              <div class="item">
                <img src="http://fakeimg.pl/401x328/" class="img-fluid">
                <h4 class="subHeadings">Wander plentiful markets</h4>
                <p>Italy is a food lover’s heaven. Each region has its particular specialities and the local markets are the best place to discover the ingredients, as well as daily life and some enthusiastic gesticulating and shouting. Suggestions include the Rialto fish market in Venice, which displays a beautiful (although some might say ugly) array of fruits from the sea; Mercato Centrale in Bologna, beautifully located among a maze of medieval streets selling a mouth-watering range of pasta, meats, fruits and vegetables; and the Ballarò market in Palermo where the southern energy of the Italians is particularly palpable.</p>
              </div>
              <div class="item">
                <img src="http://fakeimg.pl/401x328/" class="img-fluid">
                <h4 class="subHeadings">Explore Pompeii and Herculaneum</h4>
                <p>Pompeii and Herculaneum were buried under ash and mud during the eruption of Vesuvius in 79AD. Considered the most important archaeological sites in Europe due to their exceptional preservation, these towns offer a rare insight into daily Roman life. See houses, shops and public buildings with their contents still intact, as well as the chilling plaster casts of the victims of the eruption.</p>
              </div>
              <div class="item">
                <img src="http://fakeimg.pl/401x328/" class="img-fluid">
                <h4 class="subHeadings">Attend the theatre</h4>
                <p>Some of the finest buildings in Italy are its theatres, and the greatest opera and ballet companies in the world perform in them. One of the most beautiful is La Scala in Milan. The performance schedule here runs from December to July: visit the Museo Teatrale alla Scala for a behind-the-scenes tour and an insight into its magnificent history since its first performance in 1778. Venice has two theatres: La Fenice, which has burned to the ground twice, and the Teatro Verde, an open-air theatre on the island of San Giorgio Maggiore with romantic views across to St Mark’s Square. For something a little different, book tickets for the Arena di Verona, a well-preserved Roman amphitheatre, still used for magnificent open-air opera performances.</p>
              </div>
              <div class="item">
                <img src="http://fakeimg.pl/401x328/" class="img-fluid">
                <h4 class="subHeadings">Attend the theatre</h4>
                <p>Some of the finest buildings in Italy are its theatres, and the greatest opera and ballet companies in the world perform in them. One of the most beautiful is La Scala in Milan. The performance schedule here runs from December to July: visit the Museo Teatrale alla Scala for a behind-the-scenes tour and an insight into its magnificent history since its first performance in 1778. Venice has two theatres: La Fenice, which has burned to the ground twice, and the Teatro Verde, an open-air theatre on the island of San Giorgio Maggiore with romantic views across to St Mark’s Square. For something a little different, book tickets for the Arena di Verona, a well-preserved Roman amphitheatre, still used for magnificent open-air opera performances.</p>
              </div>
            </div>
          </div>
        </div>

       
      </div>
    </section>


    <section class="compass">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h3 class="heading1 mt-50 mb-40">The latest from Compass - our online travel magazine</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <img src="http://fakeimg.pl/293x223/" class="img-fluid">
            <div class="content">
              <h4><a href="#"><span>One Giant Leap </span> …with Joanne Harris</a></h4>
              <p class="meta">
                <a href="#" title="" rel="author">Compass Online</a><br>16 May 2019            
              </p>
              <p>Acclaimed author Joanne Harris recounts an eye-opening trip to the Republic of Congo.
                <span class="extra"></span>                    
              </p>
              <span class="rowlink"><a href="#" class="more">Read more</a></span>
              </div>
          </div>
          <div class="col-md-3">
            <img src="http://fakeimg.pl/293x223/" class="img-fluid">
            <div class="content">
              <h4><a href="#"><span>One Giant Leap </span> …with Joanne Harris</a></h4>
              <p class="meta">
                <a href="#" title="" rel="author">Compass Online</a><br>16 May 2019            
              </p>
              <p>Acclaimed author Joanne Harris recounts an eye-opening trip to the Republic of Congo.
                <span class="extra"></span>                    
              </p>
              <span class="rowlink"><a href="#" class="more">Read more</a></span>
              </div>
          </div>
          <div class="col-md-3">
            <img src="http://fakeimg.pl/293x223/" class="img-fluid">
            <div class="content">
              <h4><a href="#"><span>One Giant Leap </span> …with Joanne Harris</a></h4>
              <p class="meta">
                <a href="#" title="" rel="author">Compass Online</a><br>16 May 2019            
              </p>
              <p>Acclaimed author Joanne Harris recounts an eye-opening trip to the Republic of Congo.
                <span class="extra"></span>                    
              </p>
              <span class="rowlink"><a href="#" class="more">Read more</a></span>
              </div>
          </div>
          <div class="col-md-3">
            <img src="http://fakeimg.pl/293x223/" class="img-fluid">
            <div class="content">
              <h4><a href="#"><span>One Giant Leap </span> …with Joanne Harris</a></h4>
              <p class="meta">
                <a href="#" title="" rel="author">Compass Online</a><br>16 May 2019            
              </p>
              <p>Acclaimed author Joanne Harris recounts an eye-opening trip to the Republic of Congo.
                <span class="extra"></span>                    
              </p>
              <span class="rowlink"><a href="#" class="more">Read more</a></span>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="h-divider mt-20 mb-40"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="cta center uppercase mb-40">
              <a href="#"><span>View Compass</span></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="testimonials">
      <div class="testi-inner">
        <div id="testimonials" class="owl-carousel owl-theme">
          <div class="item">
            <h4>“The historical knowledge that Professor Robin Cormac, our UK guide, shared with us brought Ravenna alive.”</h4>
            <em>Mrs Josephine Rednall</em>
          </div>
          <div class="item">
            <h4>“The historical knowledge that Professor Robin Cormac, our UK guide, shared with us brought Ravenna alive.”</h4>
            <em>Mrs Josephine Rednall</em>
          </div>
          <div class="item">
            <h4>“The historical knowledge that Professor Robin Cormac, our UK guide, shared with us brought Ravenna alive.”</h4>
            <em>Mrs Josephine Rednall</em>
          </div>
        </div>
      </div>      
    </section>

    <section class="insider-info Fourcol">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h3 class="heading1">Insider information to help perfect your trip</h3>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <img src="http://fakeimg.pl/294x243/" class="img-fluid">
            <h4>Climate</h4>
            <p>Discover the temperatures and rainfall you can expect when visiting the main areas of Italy, along with the best time to travel.</p>
            <div class="cta left">
              <a href="#"><span>FIND OUT MORE</span></a>
            </div>
          </div>
          <div class="col-md-3">
            <img src="http://fakeimg.pl/294x243/" class="img-fluid">
            <h4>Travel in Europe</h4>
            <p>Find out more about what you can expect from travelling in Europe – from internal flights to accommodation standards and local transport.</p>
            <div class="cta left">
              <a href="#"><span>FIND OUT MORE</span></a>
            </div>
          </div>
          <div class="col-md-3">
            <img src="http://fakeimg.pl/294x243/" class="img-fluid">
            <h4>FLYING IN STYLE</h4>
            <p>Learn more about the airlines we use to fly to Europe, chosen for reliability and good service; as well as any available upgrade facilities.</p>
            <div class="cta left">
              <a href="#"><span>FIND OUT MORE</span></a>
            </div>
          </div>
          <div class="col-md-3">
            <img src="http://fakeimg.pl/294x243/" class="img-fluid">
            <h4>Documents & Health</h4>
            <p>Before travelling to Europe, please read more about the entry requirements for each country, as well as any general health advice.</p>
            <div class="cta left">
              <a href="#"><span>FIND OUT MORE</span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <section class="experts">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center exp-sales">
            <h3>Begin your journey</h3>
            <p>Contact one of our expert sales consultant</p>
            <a class="tel" href="tel:020 3797 4503">020 3797 4503</a>
            <div class="cta center">
              <a href="#"><span>ENQUIRE ONLINE</span></a>
            </div>
            <figure></figure>
          </div>
          <div class="col-md-6 text-center brochures">
            <h3>Request a brochure</h3>
            <p>Order your copy of the brochure to see the world come to life in print.</p>
            <div class="cta center">
              <a href="#"><span>REQUEST A BROCHURE</span></a>
            </div>
            <figure></figure>
          </div>
        </div>
      </div>
    </section>
    

<?php get_footer(); ?>
      