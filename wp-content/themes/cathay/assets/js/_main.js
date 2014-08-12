/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

// Use this variable to set up the common and page specific functions. If you
// rename this variable, you will also need to rename the namespace below.
var Roots = {
  // All pages
  common: {
    init: function() {
      // JavaScript to be fired on all pages

      /*var isIE8 = jQuery.browser.msie && + jQuery.browser.version === 8;*/

      function setMobileMenu(){
        if(window.innerWidth<768){
          $(".navbar-collapse").css({overflow:"auto", maxHeight: $(window).height() - $(".navbar-header").height() - 30 + "px" });
        }
        else{
          $(".navbar-collapse").css({overflow:"inherit"});
        }
      }

      function setVideoPosition(){
        $('.video-banner-container').css('margin-top',$('.navbar-default').height()+'px');
      }

      function initBackToTop()
      {
        console.log('initBackToTop');
        //back-to-top 
        var wind = $(window);
        $(wind).scroll(function(){
          if ($(wind).scrollTop() > 50){
            $('#back-to-top').fadeIn();
          } else{
            $('#back-to-top').fadeOut();
          }
        });
        
        $('#back-to-top').click(function(){
          var body = (window.opera) ? (document.compatMode === "CSS1Compat" ? $('html') : $('body')) : $('html,body');
          if($(wind).scrollTop() > 0){
            $(body).animate({
              scrollTop: 0
            }, 450);
          }
        });
      }

      function setEmbedVideoSize(){
        var window_height = window.innerHeight;
        //console.log(window_height+" "+$('#video-carousel-container').height()+" "+parseInt($('#video-popup').css('padding-top'),10)+" "+parseInt($('#video-popup').css('padding-bottom'),10)+" "+$('#btn-close-video-popup').height());
        //15 is the offset for scrollbar
        /*var newHeight = window_height - $('#video-carousel-container').height() - parseInt($('#video-popup').css('padding-top'),10) - parseInt($('#video-popup').css('padding-bottom'),10) - $('#btn-close-video-popup').height();*/

        var newHeight;

        //now assume max height of carousel is 190px
        if($('#video-carousel-container').length>0){
          newHeight = window_height - 190 - parseInt($('#video-carousel-container').css('margin-bottom'),10) - parseInt($('#video-popup').css('padding-top'),10) - parseInt($('#video-popup').css('padding-bottom'),10) - $('#btn-close-video-popup').height();
        }
        else{
          newHeight = window_height - parseInt($('#video-popup').css('padding-top'),10) - parseInt($('#video-popup').css('padding-bottom'),10) - $('#btn-close-video-popup').height();
          //console.log(window_height+" "+parseInt($('#video-popup').css('padding-top'),10)+" "+parseInt($('#video-popup').css('padding-bottom'),10)+" "+$('#btn-close-video-popup').height());
        }
        //console.log(newHeight);
        // Resize all videos according to their own aspect ratio
        $allVideos.each(function() {
          var $el = $(this);
          var newWidth = newHeight /  $el.data('aspectRatio');
          var maxWidth = $('body').innerWidth() - parseInt($('#video-popup').css('padding-left'),10) - parseInt($('#video-popup').css('padding-right'),10);
          if(newWidth > maxWidth){
            newWidth = maxWidth;
            newHeight = newWidth * $el.data('aspectRatio');
          }
          $el
          .width(newWidth)
          .height(newHeight);

          $('#embed-video-container').width(newWidth).height(newHeight);
          $(this).parent().width(newWidth).height(newHeight);
        });
      }

      function initVideo(){
        if($('#video-popup').length===0){
          return;
        }

        /*var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);*/

        var yt_int, yt_players={},
             initYT = function() {
                //console.log('initYT 1');
                $("#video-popup .ytplayer").each(function() {
                  //console.log('initYT 1');
                  yt_players[this.id] = new YT.Player(this.id);
                  //console.log('initYT 2');
                });
                //console.log('initYT 2');
             };
        $.getScript("//www.youtube.com/player_api", function() {

           yt_int = setInterval(function(){
              if(typeof YT === "object"){
                initYT();
                clearInterval(yt_int);
              }
              //console.log('getScript');
           },500);
        });

        $('#video-carousel .owl-item').each(function(){
           var slide_index = $(this).index();

           $(this).find('a').click(function(){
            //console.log('video img clicked');
            $('#embed-video-container div').each(function(){
              $(this).css({'visibility':'hidden'/*, 'text-indent':'-9999px'*/});
              /*if ( isIE8 ) {
                $('#video_'+$(this).index()).empty();
              }else{*/
                yt_players['player_'+slide_index].pauseVideo();
                //console.log('restting each video');
              //}
            });
            
            /*if( isIE8 ){
              var filter = false;
              if (typeof videoContentArray === 'undefined') return;
              for(var i=0; i<videoContentArray.length; i++)
              {
                if(videoContentArray[i].section == levelArray[0])
                {
                  if (!filter) { filter = [] }
                  for(var j=0; j<videoContentArray[i].video.length; j++){
                    filter.push(videoContentArray[i].video[j]);
                  }
                }
              }
              
              $('<div id="video_'+ $(this).index() +'_replace">').appendTo('#video_'+$(this).index());
              var videoPath = filter[$(this).index()].path.replace('embed', 'v');       
              var params = { allowScriptAccess: "always" };
              var atts = { id: 'player_'+ $(this).index() };
              var destinationDiv = 'video_'+ $(this).index() +'_replace';
              swfobject.embedSWF(videoPath+"?enablejsapi=1&playerapiid=ytplayer&version=3&rel=0", destinationDiv, "701", "394", "8", null, null, params, atts);
            }*/
            //console.log('index = '+slide_index);
            $('#embed-video-container div').eq(slide_index).css({'visibility':'visible'/*, 'text-indent':'0'*/});
           });
        });
      }

      //fix the mobile menu scrolling problem
      $(document).ready(function(){
         setMobileMenu();
         initBackToTop();

         //fix the left menu
         $("#sidebar").sticky({topSpacing:190,getWidthFrom:".sidebar",responsiveWidth: true});

         /*----------------------init video panel-----------------------*/
        function videoCarouselAfterAction(){
          if(typeof this.owl === "undefined"){
            return;
          }

          var btn_prev = $("#video-carousel-prev");
          var btn_next = $("#video-carousel-next");

          var owl = $('#video-carousel');

          //console.log("peopleCarouselAfterAction "+this.owl);

          if(window.innerWidth>=768 && window.innerWidth<992 && this.owl.owlItems.length < 3){
            $(btn_prev).hide();
            $(btn_next).hide();
            return;
          }

          if(this.owl.currentItem === 0){
            $(btn_prev).hide();
          }
          else{
            $(btn_prev).show();
          }

          if(this.owl.visibleItems[this.owl.visibleItems.length-1] === this.owl.owlItems.length-1){
            $(btn_next).hide();
          }
          else{
            $(btn_next).show();
          }
          //console.log(this.owl.visibleItems[this.owl.visibleItems.length-1]+" "+this.owl.currentItem);
        }

        //if there're more than 3 video, make a carousel
        if($('#video-carousel div').length>3){
          $('#video-carousel').owlCarousel({pagination: false,
                                       items : 4,
                                       itemsDesktop : [1199,4],
                                       itemsDesktopSmall : [991,3],
                                       itemsTablet: false,
                                       itemsMobile : false,
                                       afterInit : function(){
                                        //console.log('afterInit 1');
                                        videoCarouselAfterAction();
                                        //console.log('afterInit 2');
                                        initVideo();
                                      },
                                       afterAction : videoCarouselAfterAction});
          $("#video-carousel-prev").click(function(){
            $('#video-carousel').trigger('owl.prev');
          });
          $("#video-carousel-next").click(function(){
            $('#video-carousel').trigger('owl.next');
          });
        }
        else{
          $('#video-carousel-container').addClass("no-carousel");
          initVideo();
        }

        //init the video size in popup
         $allVideos = $("iframe[src^='//www.youtube.com']");

        // Figure out and save aspect ratio for each video
        $allVideos.each(function(){
          $(this).data('aspectRatio', this.height / this.width).removeAttr('height').removeAttr('width');
        });
        setEmbedVideoSize();

        /*----------------------end init video panel-----------------------*/

         //add div to style list
         $('.content-container li').wrapInner('<div class="list-container"> </div>');

         //add icon to factsheet link
         $('.factsheet-link').append('<i class="fa fa-file-text"></i>');

         /*var mobile_search_field = $('.navbar-collapse .search-field');
         $(mobile_search_field).attr("placeholder","Search");
         $(mobile_search_field).focus(function(){
            if((this).text()==="Search"){
              (this).text("");
            }
         });*/
        $('.video-banner-container').css('margin-top',$('.navbar-default').height()+'px');

        //init the video popup
        $('.fancybox-media').fancybox({
          openEffect  : 'none',
          closeEffect : 'none',
          padding: 0,
          width: '95%',
          height: '95%',
          autoSize : false,
          helpers : {
            media : {}
          }
        });

        $('.btn-show-video-popup').click(function(){
          if($('#video-popup').is(':hidden')){
            $('#video-popup').fadeIn();
          }
        });

        $('#btn-close-video-popup').click(function(){
          $(this).parent().fadeOut();
        });

      });

      $(window).resize(function(){
        setVideoPosition();
        setMobileMenu();
        setEmbedVideoSize();
        
      });
    }
  },
  // Home page
  home: {
    init: function() {
      $(window).stellar();
      var isIE8 = document.all && !document.addEventListener;
      var bannerVar;
      $.localScroll({hash:false,offset:-($('.navbar').height())});

      function setupBannerRotator(){
         if($('.main-banner-text').length > 1){
             $('.main-banner-text:first').addClass('current').fadeIn(500);
             bannerVar = setInterval(function(){textRotate();}, 8000);
         }
      }

      function textRotate(){
         var current = $('#main-banner-text-container > .current');
         current.removeClass('current').children('h2').animate({opacity:0},500,function(){
          //console.log("1");
          $(this).parent().children('p').animate({width:"30px"},300,function(){
            //console.log("2");
            $(this).parent().fadeOut('300',function(){
              //clearInterval(bannerVar);
              //console.log("3");
              if(current.next().length === 0){
                next = $('.main-banner-text:first');
              }
              else{
                next = current.next();
              }
              $(next).children('p').css("width","30px");
              $(next).children('h2').css("opacity","0.001");
              $(next).addClass('current').fadeIn(500,function(){
                //console.log("4");
                $(this).children('p').animate({width:"100%"},300,function(){
                  //console.log("5");
                  $(this).parent().children('h2').animate({opacity:"0.999"},300);
                });
               });
            });
          });
         });
      }

      $(document).ready(function(){
        setupBannerRotator();
        
        if(!isIE8){
          var controller = new ScrollMagic();

          var ceo_tween = TweenMax.from($('#ceo-img'), 1, {autoAlpha: 0});

          new ScrollScene({triggerElement: "#section-ceo", duration: 400, offset: -200})
            .setTween(ceo_tween)
            .addTo(controller);

          var progress_offset = -50;
          $('#section-progress li .list-container').each(function(){
            new ScrollScene({triggerElement: "#section-progress", duration: 200, offset: progress_offset})
            .setTween(TweenMax.from($(this), 1, {autoAlpha: 0, marginLeft: -200}))
            .addTo(controller);

            progress_offset += 10;
          });

          var sd_tween = TweenMax.from($('#sd-img'), 1, {autoAlpha: 0, marginLeft: -300});

          new ScrollScene({triggerElement: "#section-strategy", duration: 400, offset: -200})
            .setTween(sd_tween)
            .addTo(controller);

          var key_offset = -80;
          $('#section-key .key-circle').each(function(){
            new ScrollScene({triggerElement: "#section-key", duration: 200, offset: key_offset})
            .setTween(TweenMax.from($(this), 1, {autoAlpha: 0}))
            .addTo(controller);

            key_offset += 30;
          });

        }
      });
    }
  },
  // About us page, note the change from about-us to about_us.
  about_us: {
    init: function() {
      // JavaScript to be fired on the about us page
    }
  }
};

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Roots;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
