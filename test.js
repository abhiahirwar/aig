// Copyright 2018 - PPP

jQuery(document).ready(function () {
  'use strict';
  
  var de_header_style = 1;
  var de_header_layout = 1; // 1 - default, 2 - extended
  var de_header_color = 1; // 1 -default, 2 - light style
  var de_header_sticky = 1; // 1 - default, 2 - scroll
  var de_header_mobile_sticky; // 1 - default, 2 - scroll
  var de_menu_separator = 1; // 1 - dotted, 2 - brder, 3 - circle, 4 - square, 5 - plus, 0 - none
  var de_color_style = 1; // 1 - default, 2 - light style
  var de_font_style = 1; // 1 - default, 2 - alternate font style

  var mobile_menu_show = 0;
  var grid_size = 10;
  var col = 4;
  var temp_col = col;
  var sr = 466 / 700;

  if (de_color_style == 2) { $('body').addClass('de_light'); }
  if (de_font_style == 2) { $('head').append('<link rel="stylesheet" href="css/font-style-2.css" type="text/css" />');}
  if (de_header_style == 2) { $('header').addClass('transparent'); }
  if (de_menu_separator == 2) { 
    $('#mainmenu').addClass('line-separator');
  } else if (de_menu_separator == 3) {
    $('#mainmenu').addClass('circle-separator');
  } else if (de_menu_separator == 4) {
    $('#mainmenu').addClass('square-separator');
  } else if (de_menu_separator == 5) {
    $('#mainmenu').addClass('plus-separator');
  } else if (de_menu_separator == 6) {
    $('#mainmenu').addClass('strip-separator');
  } else if (de_menu_separator == 0) {
    $('#mainmenu').addClass('no-separator');
  }
  if (de_header_layout == 2) { $('header').addClass('de_header_2'); $('header .info').show(); }
  if (de_header_color == 2) { $('header').addClass('header-light'); }
  if (de_header_sticky ==2) { $('header').addClass('header-scroll'); }
  if (de_header_mobile_sticky) { $('header').addClass('header-mobile-sticky'); }

  //--------------------------------------------------------------------------------
  // magnificPopup
  //--------------------------------------------------------------------------------
  
  var startWindowScroll = 0;
  jQuery('.simple-ajax-popup-align-top').magnificPopup({
    type: 'ajax',
    fixedContentPos: true,
    fixedBgPos: true,
    overflowY: 'auto',
    callbacks: {
      beforeOpen: function() {
        startWindowScroll = $(window).scrollTop();
      },
      open: function() {
        if ( $('.mfp-content').height() < $(window).height() ) {
          $('body').on('touchmove', function (e) {
            e.preventDefualt();
          });
        }
      },
      clsoe: function() {
        $(window).scrollTop(startWindowScroll);
        $('body').off('touchmove');
      }
    }
  });

  jQuery('.simple-ajax-popup').magnificPopup({
    type: 'ajax'
  });

  // zoom gallery
  jQuery('.zoom-gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    closeOnContentClick: false,
    closeBtnInside: false,
    mainClass: 'mfp-width-zoom mfp-img-mobile',
    imgae: {
      verticalFit: true,
      titleSrc: function (item) {
        return item.el.attr('title');
      }
    },
    gallery: {
      enabled: true
    },
    zoom: {
      enabled: true,
      duration: 300, //don't forget to change the duration also in CSS
      opener: function (element) {
        return element.find('img');
      }
    }
  });

  //popup youtubem video, gamps
  
  jQuery('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });

  // image popup

  $('.image-popup-vertical-fit').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    mainClass: 'mfp-img-mobile',
    image: {
      verticalFit: true
    }
  });

  $('.image-popup-fit-width').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    imgae: {
      verticalFit: false
    }
  });

  $('.image-popup-no-margins').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    closeBtnInside: false,
    fixedContentPos: true,
    mainClass: 'mfp-no-margins mfp-width-zoom', //class to remove default margin from left and right side
    image: {
      verticalFit: true
    },
    zoom: {
      enabled: true,
      duration: 300 // don't forget to change the duration also in CSS
    }
  });

  $('.image-popup-gallery').magnificPopup({
    type: 'image',
    closeOnContentClick: false,
    closeBtnInside: false,
    mainClass: 'mfp-width-zoom mfp-img-mobile',
    image: {
      verticalFit: true,
      titleSrc: function (item) {
        return item.el.attr('title');
        // return item.el.attr('title') + '&middot; <a class="image-source-link" href="+item.el.attr('data-source')+'" target="_blank">image source</a>
      }
    },
    gallery: {
      enabled: true
    }
  });

  // wow jquery

  new WOW().init();

  //------------------------------------------------------------
  // init
  //------------------------------------------------------------
  
  function init_de() {
    enquire.register("screen and (max-width: 993px)", {
      match: function() {
        $('header').addClass("header-mobile");
      },
      unmatch: function() {
        #('header').removeClass("header-mobile");
      }
    });

    var $window = jQuery(window);
    jQuery('section[data-type="backgorund"].each(function () {
      var $bgobj = jQuery(this); //assigning the object

        jQuery(window).scroll(function () {
          enquire.register("screen and (min-width: 993px)", {
            match: function () {
              var yPos = -($window.scrollTop() / $bgobj.data('speed'));
              var coords = '50% ' + yPos + 'px';
              $bgobj.css({ backgroundPosition: coords });
            }
          });
        });
        document.createElement("article");
        document.createElement("section");
      });

      jQuery('.de-team-list').each(function () {
        jQuery(this).find("img").on('load', function() {
          var w = jQuery(this).css("width");
          var h = jQuery(this).css("height");
          //nh = (h.substring(0, h.length - 2)/2)-48;

          jQuery(this).parent().parent().find(".team-pic").css("height", h);
          jQuery(this).parent().parent().find(".team-desc").css("width", w);
          jQuery(this).parent().parent().find(".team-desc").css("height", h);
          jQuery(this).parent().parent().find(".team-desc").css("top", h);
        
        }).each(function () {
          if (this.complete) $(this).load();
        });
      });

      jQuery(".de-team-list").on("mouseenter", function () {
        var h;
        h = jQuery(this).find("img").css("height");
        jQuery(this).find(".team-desc").stop(true).animate({ 'top': "0px" }, 350, 'easeOutQuad');
        jQuery(this).find("img").stop(true).animate({ 'margin-top': "-100px" }, 400, 'easeOutQuad');
      }).on("mouseleave", function () {
        var h;
        h = jQuery(this).find("img").css("height");
        jQuery(this).find(".team-desc"),stop(true).animate({ 'top': h }, 350, 'easeOutQuad');
        jQuery(this).find("img").stop(true).animate({ 'margin-top': "0px" }, 400, 'easeOutQuad');
      });

      // portfolio
      
    }
  
}
