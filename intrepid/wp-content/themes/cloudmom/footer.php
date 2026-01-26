<?php $general = get_field('general', 'options'); ?>

</main>
  <footer id="footer" class="footer">
    <div class="footer__container container container--jc-center">
      <div class="footer__primary-menu col col--8 col--lg-10 col--md-12 col--sm-12 col--xs-12">
        <?php wp_nav_menu(array(
          'container' => false,
          'menu_class' => 'footer-menu footer-menu--primary',
          'theme_location' => 'footer-primary-menu'
        )); ?>
      </div>

      <div class="footer__secondary-menu col col--6 col--lg-7 col--md-8 col--sm-12 col--xs-12">
        <span class="footer__copyright">© <script>
            var CurrentYear = new Date().getFullYear()
            document.write(CurrentYear)
          </script> CloudMom </span>

        <?php wp_nav_menu(array(
          'container' => false,
          'menu_class' => 'footer-menu footer-menu--secondary',
          'theme_location' => 'footer-secondary-menu'
        )); ?>
      </div>

      <?php if (!empty($general['social_networks'])) { ?>
        <nav class="footer__networks col col--2 col--lg-3 col--md-4 col--sm-12 col--xs-12">
          <ul class="social-networks-menu">
            <?php foreach ($general['social_networks'] as $item) { ?>
              <?php if ($item['name'] != '' && $item['link'] != '') { ?>
                <li class="social-networks-menu__item">
                  <a class="social-networks-menu__icon social-networks-menu__icon--<?= $item['name']; ?>" href="<?= $item['link']; ?>" title="<?= $item['name']; ?>" target="_blank"></a>
                </li>
              <?php } ?>
            <?php } ?>
          </ul>
        </nav>
      <?php } ?>
    </div>
  </footer>
</div>      
          
<?php wp_footer(); ?>

<!-- Popup container -->
<!-- <div id="globalGiveawayPopup" class="popup">
  <div class="popup-content">
    <span id="closePopup" class="close">&times;</span>
    <iframe src="https://gleam.io/okSM6/cloudmom-giveaway-nov-2025" frameBorder="0" allowfullscreen></iframe>
  </div>
</div> -->

<script>
  window.addEventListener('load', function() {
    const popupName = 'globalGiveawayPopupShown';
    const cookieExpiryDays = 1; // Duration to store the cookie

    function setCookie(name, value, days) {
      let expires = "";
      if (days) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
      }
      document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

    function getCookie(name) {
      const nameEQ = name + "=";
      const ca = document.cookie.split(';');
      for(let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
      }
      return null;
    }

    function eraseCookie(name) {
      document.cookie = name + '=; Max-Age=-99999999;';
    }

    // Check if the popup has been shown
    if (!getCookie(popupName)) {
      // Get the popup element and the close button
      var popup = document.getElementById('globalGiveawayPopup');
      var closeBtn = document.getElementById('closePopup');

      // Show the popup
      popup.style.display = 'block';

      // Close the popup when the close button is clicked
      closeBtn.onclick = function() {
        popup.style.display = 'none';
        // Set the cookie to expire in 1 day
        setCookie(popupName, 'true', cookieExpiryDays);
      }

      // Close the popup if the user clicks outside of the popup content
      window.onclick = function(event) {
        if (event.target == popup) {
          popup.style.display = 'none';
          // Set the cookie to expire in 1 day
          setCookie(popupName, 'true', cookieExpiryDays);
        }
      }
    }
  });
</script>



<!------------------- Amazon API Product Carousal ------------------->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js" async></script>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js" defer></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js" defer></script>


<!-- <script src="<?php bloginfo('template_url'); ?>/assets/owl-carousal-amazon/js/jquery-3.5.1.slim.min.js"></script> -->
<script src="<?php bloginfo('template_url'); ?>/assets/owl-carousal-amazon/js/popper.min.js" defer></script>
<script src="<?php bloginfo('template_url'); ?>/assets/owl-carousal-amazon/js/bootstrap.min.js" defer></script>
<script src="<?php bloginfo('template_url'); ?>/assets/owl-carousal-amazon/js/slick/slick.min.js" defer></script>

<script>
  jQuery(document).ready(function() {
    jQuery(".top_listing ul li a").click(function(event) {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = jQuery(this.hash);
        target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');

        if (target.length) {
          jQuery('html,body').animate({
            scrollTop: target.offset().top - 200
          }, 100);
          return false;
        }
      }
    });
  });
  
  // $(window).load(function()
  // {
  //     $('#myModal1').modal('show');
  // });
  jQuery(document).ready(function() {
    // $("#myModal1").modal('show');
    jQuery(window).load(function() {
      jQuery('#myModal1').modal('show');
    });
    //   jQuery(".top_listing ul li a").click(function() {
    //     setTimeout(function() { 
    //       alert("hello 2")
    //     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
    //       var target = jQuery(this.hash);
    //       target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
    //       if (target.length) {
    //         jQuery('html,body').animate({
    //           scrollTop: target.offset().top - 300
    //         }, 800);
    //         return false;
    //       }
    //     }
    //   }, 2000);
    // });
  });

  // jQuery('.top_listing ul li a').on('click', function () {
  //   var href = jQuery(this).attr('href');

  //   jQuery('html, body').animate({

  //     scrollTop: jQuery(href).offset().top - 300 
  // });

  // });

  // jQuery('.top_listing ul li a').on('click', function () {
  //    jQuery('html, body').animate({
  //     scrollTop: jQuery("#prenatal").offset().top - 300 // Means Less header height
  // });

  // });


  // jQuery('#tips').on('click', function () {
  //    jQuery('html, body').animate({
  //     scrollTop: jQuery("#tips").offset().top - 300 // Means Less header height
  // });

  // });


  // jQuery('#belly').on('click', function () {
  //    jQuery('html, body').animate({
  //     scrollTop: jQuery("#belly").offset().top - 300 // Means Less header height
  // });

  // });
</script>


<script>
  //will be empty.Otherwise, it will contain the current selected
  jQuery(document).ready(function() {
    /*
     * If original language is selected, then the value of current_language 
     * language code.
     *
     */
    var current_language = gt_get_cookie('googtrans').split('/').pop();

    // W3 Schools: https://www.w3schools.com/js/js_cookies.asp
    function gt_get_cookie(cname) {
      var name = cname + "=";
      var decodedCookie = decodeURIComponent(document.cookie);
      var ca = decodedCookie.split(';');
      for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
          c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
          return c.substring(name.length, c.length);
        }
      }
      return "";
    }

    if (current_language == '') {
      jQuery('#gtranslate_selector').val('en|en');
    } else if (current_language == 'zh-CN') {
      jQuery('#gtranslate_selector').val('en|zh-CN');
    } else if (current_language == 'fr') {
      jQuery('#gtranslate_selector').val('en|fr');
    }
  });
</script>

<script>
  jQuery('.testimonial_scroll').slick({
    dots: false,
    autoplay: true,
    infinite: true,
    speed: 300,
    arrows: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: false,
          dots: false
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: true,
          autoplay: true,
        }
      }
    ]
  });

  jQuery('.member-slider').slick({
    dots: false,
    autoplay: true,
    arrows: false,
    infinite: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    variableWidth: true,

    responsive: [{
        breakpoint: 1030,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: false,
          dots: false
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          autoplay: false,
        }
      }
    ]
  });
</script>
<!------------------- Amazon API Product Carousal ------------------->
<!-- modal code -->
<!-- Modal -->
<style type="text/css">
  /* @-moz-document url-prefix() {
    .single .wp-block-embed.wp-embed-aspect-16-9 .wp-block-embed__wrapper::before {
        padding-top: 0;
    }
} */
.single .wp-block-embed.wp-embed-aspect-16-9 .wp-block-embed__wrapper::before {
        padding-top: 0;
    }
  /* Modal styles */
  .modals {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 9999;
    /* Sit on top */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: hidden;
    /* Enable scroll if needed */
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.8);
    /* Black w/ opacity */
  }

  .modal-content {
    background-color: #fefefe;
    margin: 2% auto;
    /* 15% from the top and centered */
    padding: 0px 20px;
    border: 1px solid #888;
    max-width: 906px;
    /* Could be more or less, depending on screen size */
    max-height: 550px;

  }

  .close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    text-align: end;
    margin-top: -27px;
    margin-right: -35px;
  }

  .popups {
    /* overflow-y:scroll; */
    height: 750px;
    position: inherit;
  }

  .close:hover,
  .close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
  }

  @media screen and (max-width: 991px) {
    .close {
      margin-right: -17px;
    }

    .modal-content {
      max-width: 700px;
    }
  }

  @media screen and (max-width: 500px) {
    .modal-content {
      max-width: 390px;
      max-height: 550px;
      margin: 15% auto 2% !important;
    }

    .close {
      margin-right: -32px;
      margin-top: -23px;
    }
  }

  /* .rafflepress-iframe{
    height: 1930px !important;
} */
</style>

    
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Open the popup when the image link is clicked
    $(".cstm_popup").on("click", function(e) {
        e.preventDefault();
        console.log("Popup link clicked"); // Debug: Check if the click event is triggered
        $("#popup_container").fadeIn();  // Show the popup container
    });

    // Close the popup when the close button is clicked
    $(".close_btn").on("click", function() {
        console.log("Close button clicked"); // Debug: Check if the close event is triggered
        $("#popup_container").fadeOut();  // Hide the popup container
    });

    // Close the popup if the user clicks outside the content area
    $(window).on("click", function(e) {
        if ($(e.target).is("#popup_container")) {
            console.log("Outside popup content clicked"); // Debug: Check if clicking outside works
            $("#popup_container").fadeOut();  // Hide the popup container
        }
    });
});
</script>


<script>
jQuery(document).ready(function() {
    // Hide <p> tags containing the keyword 'amazonapi'
    jQuery('p:contains("amazonapi")').hide();
    
    // Hide elements containing the shortcode pattern
    jQuery('p').each(function() {
        var text = jQuery(this).text();
        var shortcodePattern = /\[amazonapi[^\]]*\]/; // Regular expression to match the shortcode
        if (shortcodePattern.test(text)) {
            jQuery(this).hide();
        }
    });
});
</script>

<script>
jQuery(document).ready(function() {
    // Hide <p> tags containing the keyword 'amazonapi'
    jQuery('p:contains("rafflepress")').hide();
    
    // Hide elements containing the shortcode pattern
    jQuery('p').each(function() {
        var text = jQuery(this).text();
        var shortcodePattern = /\[rafflepress[^\]]*\]/; // Regular expression to match the shortcode
        if (shortcodePattern.test(text)) {
            jQuery(this).hide();
        }
    });
});
</script>
    
</body>

</html>