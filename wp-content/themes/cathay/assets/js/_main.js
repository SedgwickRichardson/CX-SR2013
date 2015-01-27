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

      /*var isIE8 = $(browser).msie && +$(browser).version === 8;*/
      var isIE8 = false;
      var gallery_url = "http://downloads.cathaypacific.com/cx/aboutus/sd/2013/resources/index.html";
      var isIE;
      var msie = window.navigator.userAgent.indexOf("MSIE ");
      if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)){
        isIE = true;
      }
      else{
        isIE = false;
      }
      //console.log("isIE = "+isIE);

      var isSafari = false;
      if (navigator.userAgent.indexOf('Safari') !== -1 && navigator.userAgent.indexOf('Chrome') === -1){
        isSafari = true;
      }

      if($("html").hasClass("ie8")){
        isIE8 = true;
      }

      function initShare(){
        if($('#shareBox').length===0){return;}
        if($('#headerShareBtn').length===0){return;}
        var isiDevice = /ipad|iphone|ipod/i.test(navigator.userAgent.toLowerCase());

        //console.log('initShare');

        if (isiDevice){
          document.getElementById("headerShareBtn").addEventListener('touchstart',function(){
            $('#shareBox').css('display','block');
          },false);

          $('html').bind('touchstart',function(e) {
            if($(e.target).is('a')){
              return;
            }else {
              $('#shareBox').css('display','none');
            }
          });
        }else{
          $('#headerShareBtn').mouseover(function(){
            $('#shareBox').css('display','inline-block');
          });

          $('#shareBox').mouseover(function(){
            $('#shareBox').css('display','inline-block');
          });

          $('#headerShareBtn').mouseout(function(){
            $('#shareBox').css('display','none');
          });

          $('#shareBox').mouseout(function(){
            $('#shareBox').css('display','none');
          });
        }
      }

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
        //console.log('initBackToTop');
        //back-to-top
        var wind = $(window);
        $(wind).scroll(function(){
          //console.log("scrollTop = "+$(wind).scrollTop());
          if ($(wind).scrollTop() > 50){
            $('#back-to-top').fadeIn();
          } else{
            $('#back-to-top').fadeOut();
          }

          if ($(wind).scrollTop() > 50){
            $('.navbar').addClass('down');
            /*if(window.innerWidth>1200){
              $('#sidebar').css("top","120px");
            }
            else{
              $('#sidebar').css("top","135px");
            }*/
          }
          else
          {
            $('.navbar').removeClass('down');
            if($('.video-banner-container img').length>0){
              $('#sidebar').css("top","190px");
            }
            else{
              /*if(window.innerWidth>1200){
                $('#sidebar').css("top","170px");
              }
              else{*/
                $('#sidebar').css("top","120px");
              //}
            }
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

        var newHeight;

        //now assume max height of carousel is 210px
        if($('#video-carousel-container').length>0){
          newHeight = window_height - 210 - parseInt($('#video-carousel-container').css('margin-bottom'),10) - parseInt($('#video-popup').css('padding-top'),10) - parseInt($('#video-popup').css('padding-bottom'),10) - $('#btn-close-video-popup').height();
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

          //console.log("newWidth = "+newWidth+", newHeight = "+newHeight+", ratio = "+$el.data('aspectRatio'));

          $('#embed-video-container').width(newWidth).height(newHeight);
          $(this).parent().width(newWidth).height(newHeight);
        });
      }

      function initVideo(){
        if($('#video-popup').length===0){
          return;
        }

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
                $('#embed-video-container>div:not(:first)').css('visibility','hidden');
              }
              //console.log('getScript');
           },500);
        });

        function close_video_popup(){
          $('#embed-video-container>div').each(function(){
            var player = yt_players['player_'+$(this).index()];
            if(player.getPlayerState()===1){
              /*if(isIE){
                yt_players['player_'+$(this).index()].stopVideo();
              }
              else{*/
                player.pauseVideo();
              //}
            }
          });

          $('#video-popup').fadeOut();
        }

         $('#btn-close-video-popup').click(close_video_popup);


        $('#video-carousel .owl-item').each(function(){
           var slide_index = $(this).index();

           $(this).find('a').click(function(evt){
            //console.log('video img clicked');
            $('#embed-video-container>div').each(function(){
              if($(this).index()===slide_index){
                return;
              }
              $(this).css({'visibility':'hidden'/*, 'text-indent':'-9999px'*/});
              var player = yt_players['player_'+$(this).index()];
              //console.log('index='+$(this).index()+' player='+player+' status='+player.getPlayerState());
              if(player.getPlayerState()===1){
                /*if(isIE){
                  yt_players['player_'+$(this).index()].stopVideo();
                }
                else{*/
                  player.pauseVideo();
                //}
              }
            });

            $('#embed-video-container div').eq(slide_index).css({'visibility':'visible'/*, 'text-indent':'0'*/});

            evt.stopPropagation();
           });
        });
      }

      //put the codes here to fix the white gap in safari
      $(window).on('load', function() {
        $('.video-banner-container').css('margin-top',$('.navbar-default').height()+'px');
      });

      //fix the mobile menu scrolling problem
      $(document).ready(function(){
         setMobileMenu();
         initBackToTop();
         initShare();
         $('.menu-feedback a, .btn-feedback').addClass('various fancybox fancybox.iframe');
         $('.menu-feedback a, .btn-feedback').attr("href","https://docs.google.com/forms/d/1S20XudajbTiP2m2wjnGNW7YLLPI0MXvVkUxuaxwmIFs/viewform?embedded=true");
         $('.fancybox').fancybox({padding:0});

         //console.log($('.navbar').height());
         $('content-container').localScroll({hash:true,offset:-($('.navbar').height())});

         //fix the left menu
         if(!isSafari){
          if($('.video-banner-container img').length>0){
            if(window.innerWidth<1200){
              $("#sidebar").sticky({topSpacing:130,getWidthFrom:".sidebar",responsiveWidth: true});
            }
            else{
              $("#sidebar").sticky({topSpacing:120,getWidthFrom:".sidebar",responsiveWidth: true});
            }
          }
          else{
            if(window.innerWidth>1200){
              $("#sidebar").sticky({topSpacing:120,getWidthFrom:".sidebar",responsiveWidth: true});
            }
            else{
              $("#sidebar").sticky({topSpacing:140,getWidthFrom:".sidebar",responsiveWidth: true});
            }
          }
        }

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

        //init video popup only if it's later than IE8
        if(!isIE){

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
           $allVideos = $("iframe[src*='//www.youtube.com']");
           //console.log("video no = "+$allVideos.length);

          // Figure out and save aspect ratio for each video
          $allVideos.each(function(){
            $(this).data('aspectRatio', this.height / this.width).removeAttr('height').removeAttr('width');
            //console.log("video ratio = "+$(this).data('aspectRatio'));
          });
          setEmbedVideoSize();

          $('.btn-show-video-popup').click(function(){
            if($('#video-popup').is(':hidden')){
              $('#video-popup').fadeIn();
            }
          });
        }
        else{
          //if it's old browser, direct user to video gallery page
          $('.btn-video-watch,.btn-video-play').attr("href",gallery_url);
        }

        /*----------------------end init video panel-----------------------*/

         //add div to style list
         $('.content-container li').wrapInner('<div class="list-container"> </div>');

         //add icon to factsheet link
         $('.factsheet-link').append('<i class="fa fa-file-text"></i>');

        /*$('.video-banner-container').css('margin-top',$('.navbar-default').height()+'px');*/

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

      });

      $(window).resize(function(){
        setMobileMenu();
        if(!($('html').hasClass('oldie'))){
          setVideoPosition();
          setEmbedVideoSize();
        }
      });
    }
  },
  // Home page
  home: {
    init: function() {
      $(window).stellar();
      var isIE8 = document.all && !document.addEventListener;
      var bannerVar;
      var counter = 0;
      var prevCounter = 0;
      var colorArray = ['color1', 'color2', 'color3', 'color4'];

      $.localScroll({hash:false,offset:-($('.navbar').height())});

      function setupBannerRotator(){
         if($('.main-banner-text').length > 1){
             $('.main-banner-text:first').addClass('current').fadeIn(500);
             bannerVar = setInterval(function(){textRotate();}, 5000);
         }
      }

      function textRotate(){
        prevCounter = counter;
        if (counter < colorArray.length-1) {
          counter++;
        } else {
          counter = 0;
        }
         var current = $('#main-banner-text-container > .current');
         current.removeClass('current').children('h2').animate({opacity:0.001},500,function(){
          //console.log("1");
          $(this).parent().children('p').animate({width:"30px"},300,function(){
            //console.log("2");
            $(this).parent().fadeOut('300',function(){
              //console.log('prevCounter:'+prevCounter+' counter:'+counter);
              $(".overlay").addClass(colorArray[counter]).removeClass(colorArray[prevCounter]);


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
        $('img[usemap]').rwdImageMaps();

        if(!isIE8){
          var controller = new ScrollMagic();

          var ceo_tween = TweenMax.from($('#ceo-img'), 1, {autoAlpha: 0});

          new ScrollScene({triggerElement: "#section-ceo", duration: 400, offset: -200})
            .setTween(ceo_tween)
            .addTo(controller);

          var progress_offset = -150;
          $('#section-progress li .list-container').each(function(){
            new ScrollScene({triggerElement: "#section-progress", duration: 350, offset: progress_offset})
            .setTween(TweenMax.from($(this), 1, {autoAlpha: 0, marginLeft: -200}))
            .addTo(controller);

            progress_offset += 0;
          });

          var sd_tween = TweenMax.from($('#sd-img'), 1, {autoAlpha: 0, left: -300});

          new ScrollScene({triggerElement: "#section-strategy", duration: 400, offset: -200})
            .setTween(sd_tween)
            .addTo(controller);

          var key_offset = -180;
          new ScrollScene({triggerElement: "#section-key", duration: 200, offset: key_offset})
          .setTween(TweenMax.from($('#section-key #circle-safety'), 1, {left:229, top: 130, autoAlpha: 0}))
          .addTo(controller);
          key_offset += 30;
          new ScrollScene({triggerElement: "#section-key", duration: 200, offset: key_offset})
          .setTween(TweenMax.from($('#section-key #circle-climate'), 1, {left:230, autoAlpha: 0}))
          .addTo(controller);
          key_offset += 30;
          new ScrollScene({triggerElement: "#section-key", duration: 200, offset: key_offset})
          .setTween(TweenMax.from($('#section-key #circle-waste'), 1, {left:230, top:178,autoAlpha: 0}))
          .addTo(controller);
          key_offset += 30;
          new ScrollScene({triggerElement: "#section-key", duration: 200, offset: key_offset})
          .setTween(TweenMax.from($('#section-key #circle-sourcing'), 1, {left:190, top:175,autoAlpha: 0}))
          .addTo(controller);
          key_offset += 30;
          new ScrollScene({triggerElement: "#section-key", duration: 200, offset: key_offset})
          .setTween(TweenMax.from($('#section-key #circle-bio'), 1, {left:162, autoAlpha: 0}))
          .addTo(controller);
          key_offset += 30;
          new ScrollScene({triggerElement: "#section-key", duration: 200, offset: key_offset})
          .setTween(TweenMax.from($('#section-key #circle-people'), 1, {left:192, top: 132,autoAlpha: 0}))
          .addTo(controller);


          var acheive_offset = -80;
          $('#section-acheive .logo').each(function(){
            new ScrollScene({triggerElement: "#section-acheive", duration: 200, offset: acheive_offset})
            .setTween(TweenMax.from($(this), 1, {autoAlpha: 0}))
            .addTo(controller);

            acheive_offset += 40;
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
  },
  video_gallery: {
    init: function() {
      // JavaScript to be fired on the about us page
      $(document).ready(function(){
        $(".various").fancybox({
          width   : '95%',
          height    : '95%',
          autoSize  : false,
          openEffect  : 'none',
          closeEffect : 'none',
          padding: 0
        });
      });
    }
  },
  search_result: {
    init: function() {
      // JavaScript to be fired on the about us page
    }
  },
  pdf_download: {
    init: function() {
      // JavaScript to be fired on the about us page
      $(document).ready(function(){
        $("#btnReportSelectDownload").click(function(){
          if($('#reportDownloadListContainer .sectionItem input:checkbox:checked').length>0){
            $("#form1").submit();
          }
          return false;
        });

        $("#btnFactsheetSelectDownload").click(function(){
          if($('#factsheetDownloadListContainer .sectionItem input:checkbox:checked').length>0){
            $("#form2").submit();
          }
          return false;
         });

        function stakeHolderExpandableInit(){
          var reportSelectCount = 0;

          $('.expandContentLargeContent').each(function(){
            $(this).css('display','none');
          });

          $('.sectionTitleDivContainer').each(function(){
            $(this).click(
              function(e){

                if($(e.target).is('input')){
                  return;
                }

                if($('.expandContentLargeContent').eq($('.sectionTitleDivContainer').index($(this))).css('display') === 'none')
                {
                  $('.expandContentLargeContent').eq($('.sectionTitleDivContainer').index($(this))).css('display','block');
                  $('.sectionTitleContainer').eq($('.sectionTitleDivContainer').index($(this))).addClass('expandActive');
                  $('.arrowBtn').eq($('.sectionTitleDivContainer').index($(this))).addClass('active');
                  $('.arrowBtn').eq($('.sectionTitleDivContainer').index($(this))).click(function(){
                    $(this).parents().children('.expandContentLargeContent').css('display','none');
                    $(this).parents().children('.sectionTitleContainer').removeClass('expandActive');
                    $(this).removeClass('active');
                  });
                }else{
                  $('.expandContentLargeContent').eq($('.sectionTitleDivContainer').index($(this))).css('display','none');
                  $('.sectionTitleContainer').eq($('.sectionTitleDivContainer').index($(this))).removeClass('expandActive');
                  $('.arrowBtn').eq($('.sectionTitleDivContainer').index($(this))).removeClass('active');
                }
            });
          });

          $('#reportDownloadListContainer input').change(function () {
            if($(this).is(':checked') && $(this).parent().is('.sectionTitleDivContainer')) {
               $('.expandContentLargeContent').eq($('.sectionTitleDivContainer').index($(this).parent())).find('.downloadCheckBox').attr('checked', true);
            } else {
              $('.expandContentLargeContent').eq($('.sectionTitleDivContainer').index($(this).parent())).find('.downloadCheckBox').attr('checked', false);
            }
            var checkTotal = 0;
            checkTotal = $('#reportDownloadListContainer .sectionItem input:checked').length;
            $("#reportSelectedNoDiv span").html("(" + checkTotal + ")");
            $("#reportSelectedNoDiv .cartCaption").html(checkTotal+' files added. Add files from list below and download pdf file to your computer.');
          });

          $('#factsheetDownloadListContainer input').change(function(){
            if($(this).parent().is('.sectionTitleDivContainer')){//if it's the parent checkbox
               if($(this).is(':checked')){
                $(this).parent().siblings('.expandContentLargeContent').find('input').prop('checked', true);
                //console.log('parent checked');
               }
               else{
                $(this).parent().siblings('.expandContentLargeContent').find('input').prop('checked', false);
                //console.log('parent unchecked');
               }
            }
            else{//if it's the child checkbox
              if($(this).is(':checked')){
                if($(this).parent().siblings('.sectionItem').find('input:not(:checked)').length===0){
                  //all child checkbox are checked
                  $(this).parent().parent().siblings('.sectionTitleDivContainer').find('input').prop('checked', true);
                }
              }
              else{
                if($(this).parent().siblings('.sectionItem').find('input:checked').length===0){
                  $(this).parent().parent().siblings('.sectionTitleDivContainer').find('input').prop('checked', false);
                }
              }
            }
            /*if($(this).is(':checked') && $(this).parent().is('.sectionTitleDivContainer')) {
              $(this).parent().siblings('.expandContentLargeContent').find('input').attr('checked', true);
               //$('.expandContentLargeContent').eq($('.sectionTitleDivContainer').index($(this).parent())).find('.downloadCheckBox').attr('checked', true);
               console.log("checked");
            } else {
              $('.expandContentLargeContent').eq($('.sectionTitleDivContainer').index($(this).parent())).find('.downloadCheckBox').attr('checked', false);
              console.log("not checked "+$('.expandContentLargeContent').eq($('.sectionTitleDivContainer').index($(this).parent())));
            }*/
            var checkTotal = 0;
            checkTotal = $('#factsheetDownloadListContainer .sectionItem input:checked').length;

            $("#factsheetSelectedNoDiv span").html("(" + checkTotal + ")");
            $("#factsheetSelectedNoDiv .cartCaption").html(checkTotal+' files added. Add files from list below and download pdf file to your computer.');
          });
        }

        stakeHolderExpandableInit();

      });
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