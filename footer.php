<footer>
<section class="home-footer">
  <div class="container">
    <div class="row footer">
      <div class="col-lg-9 col-md-12">
        <div class="row">
        <div class="col-md-3 col-sm-3 col-6">
          <?php
            if(is_active_sidebar('foo-col-1')){
            dynamic_sidebar('foo-col-1');
            }
          ?>
        </div>

        <div class="col-md-3 col-sm-3 col-6">          
          <?php
            if(is_active_sidebar('foo-col-2')){
            dynamic_sidebar('foo-col-2');
            }
          ?>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="row">
          <div class="col-md-6 col-sm-6 col-6">
            <?php
              if(is_active_sidebar('foo-col-3')){
              dynamic_sidebar('foo-col-3');
              }
            ?>           
          </div>

          <div class="col-md-6 col-sm-6 col-6">            
            <?php
              if(is_active_sidebar('foo-col-4')){
              dynamic_sidebar('foo-col-4');
              }
            ?>
          </div>
          </div>
        </div>
        </div>
      </div>

      
      <div class="col-lg-3 col-md-12 newsletter-blk">
        

          <div class="newsletter-blk-row-1">
            <h6 class="uppercase font-bold">Sign up to our newsletter</h6>
            <div class="newsletter-inputs">
            <?php echo do_shortcode( '[mailpoet_form id="1"]' ); ?>

            <!-- <input name="" type="text" maxlength="60" id="" placeholder="Enter your Email">
            
            <input type="submit" name="" value="Go" id="" class="btn submit-btn"> -->
            </div>

            </div>

          

          <div class="newsletter-blk-row-2">
            <p class="rTapClick">Call us today: <span class="rTapNumber204221 white_text" style="visibility: visible;">
              <a href="tel:<?php echo get_field('footer_phone_number', 'option'); ?>" style="color: #ffffff;"><?php echo get_field('footer_phone_number', 'option'); ?></a>
            </span></p>
          

            <ul class="social-icons text-right">              
              <li><a href="<?php echo get_field('twitter_link', 'option'); ?>"><i class="fa fa-twitter"></i></a></li>
              <li><a href="<?php echo get_field('youtube_link', 'option'); ?>"><i class="fa fa-youtube-play"></i></a></li>
              <li><a href="<?php echo get_field('facebook_link', 'option'); ?>"><i class="fa fa-facebook"></i></a></li>           
              <li><a href="<?php echo get_field('instagram_link', 'option'); ?>"><i class="fa fa-instagram"></i></a></li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

      

      
      
      
      
      

    
        
          
    <section class="footer-copy"> 
      <div class="container"> 
         
            <div class="row">
              <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 col-block-1"> 
                <ul> 

                <?php if( have_rows('footer_left_logo','option') ): ?>

                
                 <?php while ( have_rows('footer_left_logo','option') ) : the_row(); 
                    
                    $logo_image = get_sub_field('logo_image','option');
                    $logo_link = get_sub_field('logo_link','option');
                      
                 ?>
                 
                 <li>
                    <a href="<?php echo $logo_link;?>">
                      <img alt="" class="img-fluid" src="<?php echo $logo_image;?>" title="">
                    </a>
                  </li>

                 <?php endwhile; ?>
                <?php endif; ?>
                </ul> 
              </div> 
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-block-2 text-right"> 
                 <p><?php echo get_field('copyright_text', 'option'); ?> <?php echo date('Y');?></p> 
	            <?php echo get_field('copyright_text_bottom', 'option'); ?>			
              </div> 
            </div>
          
      </div> 
    </section>


      
      
    </footer>
    <?php wp_footer(); ?>
   <script type="text/javascript">

    jQuery('.menuToggle').click(function(){

        if($(this).hasClass('fa-navicon')){
          $(this).removeClass('fa-navicon').addClass('fa-close');
        }else{
          $(this).removeClass('fa-close').addClass('fa-navicon');          
        }
        
        $('.mainmenu').toggle();
    });
    
    jQuery('.btn-close').click(function(){
        
        $('.custom-holiday-search').hide();
    });

    jQuery(function($) {
      
    $('li.mega-sbar').on('click', function() {
        jQuery('.custom-holiday-search').show();
        $('#mega-menu-wrap-primary #mega-menu-primary li').removeClass('mega-toggle-on');
    });
   
    

    //Destinations tab filter

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        $(".filter-button").removeClass("active")
        $(this).addClass("active")
        
        if(value == "all")
        {
            
            $('.filter').show('1000');

        }
        else
        {

            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
        }
    });

    //Holiday Type Filter

    $(".htype").click(function(){
        var value = $(this).attr('data-filter');
        $(".htype").removeClass("active")
        $(this).addClass("active")
        
        if(value == "all")
        {
            
            $('.filter').show('1000');

        }
        else
        {

            $(".filter").not('.'+value).hide('1000');
            $('.filter').filter('.'+value).show('1000');
        }
    }); 


    //Departure

    $(".departure").click(function(){
        var value = $(this).attr('data-filter');
        $(".departure").removeClass("active")
        $(this).addClass("active")
        
        if(value == "all")
        {
            
            $('.filter').show('1000');

        }
        else
        {

            $(".filter").not('.'+value).hide('1000');
            $('.filter').filter('.'+value).show('1000');
        }
    }); 



    
    // View Full Destination List

    $(".viewFull").click(function(){
      $('.dsti-row .row').css({display:"flex"});
      $(this).hide();
    }); 

    //Holiday options carousel

    $('#holiday-carousel').owlCarousel({
        loop:false,
        margin:18,
        nav:true,
        navText: ["<img src='<?php echo get_template_directory_uri(); ?>/img/holiday-carousel-left-icon.jpg'>","<img src='<?php echo get_template_directory_uri(); ?>/img/holiday-carousel-right-icon.jpg'>"],
        dots:false,
        responsive:{
            0:{
                items:1
            },
            700:{
                items:2
            },
            900:{
                items:3
            },
            1100:{
                items:4
            }
        }
    });

    //Country top things to do carousel

    $('#topthings-carousel').owlCarousel({
        loop:false,
        margin:18,
        nav:true,
        //navText: ["<i class='fas fa-angle-left'></i>","<i class='fas fa-angle-right'></i>"],
        navText: ["<img src='<?php echo get_template_directory_uri(); ?>/img/thingstodo-left.svg'>","<img src='<?php echo get_template_directory_uri(); ?>/img/thingstodo-right.svg'>"],
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

    //Country page Testimonials

    $('#testimonials').owlCarousel({
        loop:true,
        margin:0,
        nav:true,
        //navText: ["<i class='fas fa-angle-left'></i>","<i class='fas fa-angle-right'></i>"],
        navText: ["<img src='<?php echo get_template_directory_uri(); ?>/img/testi-left.svg'>","<img src='<?php echo get_template_directory_uri(); ?>/img/testi-right.svg'>"],
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });


    $(".dropdown dt a").click(function(e) {
        $(".dropdown dd ul").toggle();
        e.preventDefault();
        $(this).toggleClass('open');
      });

      $(".dropdown dd ul li a").click(function() {
        var text = $(this).html();
        $(".dropdown dt a span").html(text);
        $(".dropdown dd ul").hide();
        $(".dropdown dt a").removeClass('open');
      }); 

      $(document).bind('click', function(e) {
          var $clicked = $(e.target);
          if (! $clicked.parents().hasClass("dropdown"))
              $(".dropdown dd ul").hide();
      });


      $('a[data-imagelightbox="g"]').imageLightbox({
        activity: true,
        arrows: true,
        button: true,
        caption: true,
        navigation: true,
        overlay: true,
        quitOnDocClick: false,
        selector: 'a[data-imagelightbox="f"]'
      });



    });



   </script>

   <script>
    //Group Tours select menu
      var x, i, j, selElmnt, a, b, c;
      /*look for any elements with the class "select-destination":*/
      x = document.getElementsByClassName("select-destination");
      for (i = 0; i < x.length; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        /*for each element, create a new DIV that will act as the selected item:*/
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        /*for each element, create a new DIV that will contain the option list:*/
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 1; j < selElmnt.length; j++) {
          /*for each option in the original select element,
          create a new DIV that will act as an option item:*/
          c = document.createElement("DIV");
          c.innerHTML = selElmnt.options[j].innerHTML;
          c.addEventListener("click", function(e) {
              /*when an item is clicked, update the original select box,
              and the selected item:*/
              var y, i, k, s, h;
              s = this.parentNode.parentNode.getElementsByTagName("select")[0];
              h = this.parentNode.previousSibling;
              for (i = 0; i < s.length; i++) {
                if (s.options[i].innerHTML == this.innerHTML) {
                  s.selectedIndex = i;
                  h.innerHTML = this.innerHTML;
                  y = this.parentNode.getElementsByClassName("same-as-selected");
                  for (k = 0; k < y.length; k++) {
                    y[k].removeAttribute("class");
                  }
                  this.setAttribute("class", "same-as-selected");

                  if(s.options[i].innerHTML == "all")
                  {
                      
                      $('.filter').show('1000');

                  }
                  else
                  {
                    //alert(s.options[i].innerHTML);
                      $(".filter").not('.'+s.options[i].innerHTML).hide('1000');
                      $('.filter').filter('.'+s.options[i].innerHTML).show('1000');
                  }

                  break;
                }
              }
              h.click();
          });
          b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function(e) {
          //alert('hii');

            /*when the select box is clicked, close any other select boxes,
            and open/close the current select box:*/
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
          });
      }
      function closeAllSelect(elmnt) {
        /*a function that will close all select boxes in the document,
        except the current select box:*/
        var x, y, i, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        for (i = 0; i < y.length; i++) {
          if (elmnt == y[i]) {
            arrNo.push(i)
          } else {
            y[i].classList.remove("select-arrow-active");
          }
        }
        for (i = 0; i < x.length; i++) {
          if (arrNo.indexOf(i)) {
            x[i].classList.add("select-hide");
          }
        }
      }
      /*if the user clicks anywhere outside the select box,
      then close all select boxes:*/
      document.addEventListener("click", closeAllSelect);


      // $(document).ready(function(){
      //   $("select.country").change(function(){
      //       var selectedCountry = $(this).children("option:selected").val();

      //       //alert("You have selected the country - " + selectedCountry);
      //       if(selectedCountry == "all")
      //       {
                
      //           $('.filter').show('1000');

      //       }
      //       else
      //       {

      //           $(".filter").not('.'+selectedCountry).hide('1000');
      //           $('.filter').filter('.'+selectedCountry).show('1000');
      //       }
            
      //   });
      // });  

      

      </script>
    
  </body>
</html>