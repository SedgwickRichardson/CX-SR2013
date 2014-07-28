<div id="video-popup">
<?
    global $page_ancestor;
    //echo $page_ancestor;
    switch($page_ancestor){
      case 2:
        //echo 'id="child-of-making-the-connection"';
?>
<!-- ------------------Making the Connection--------------------- -->
  <div class="desktop-video-container hidden-xs visible-sm visible-md visible-lg">
    <div id="embed-video-container">
      <div id="video_0" style="visibility: visible; z-index: 999;"><iframe id="player_0" class="ytplayer" width="839" height="472" src="//www.youtube.com/embed/UFHV2bXuLJw?enablejsapi=1&modestbranding=1&showinfo=0&rel=0&autoplay=0" frameborder="0" allowfullscreen></iframe></div>
      <div id="video_1" style="visibility: hidden; z-index: 999;"><iframe id="player_1" class="ytplayer" width="839" height="472" src="//www.youtube.com/embed/BDDDLgVTLaY?enablejsapi=1&modestbranding=1&showinfo=0&rel=0&autoplay=0" frameborder="0" allowfullscreen></iframe></div>
    </div>
    <div id="video-carousel-container">
    <a class="slider-arrow slider-arrow-prev" id="video-carousel-prev" href="javascript:;">Previous</a>
    <a class="slider-arrow slider-arrow-next" id="video-carousel-next" href="javascript:;">Next</a>
    <div id="video-carousel">
      <div class="owl-item">
        <a href="#"><img class="img-responsive" src="<?=get_stylesheet_directory_uri()?>/assets/img/video-thumb-1.jpg"></a>
          <h3>Ivan Chu Video</h3>
          <!-- <p>John Slosar, Chief Executive</p> -->
          <a href="#">Watch video</a>
      </div>
      <div class="owl-item">
        <a href="#"><img class="img-responsive" src="<?=get_stylesheet_directory_uri()?>/assets/img/video-thumb-2.jpg"></a>
          <h3>SD Video</h3>
          <!-- <p>Mark Watson, Head of Environmental Affairs</p> -->
          <a href="#">Watch video</a>
      </div>
    </div>
    </div>
  </div>
  <div class="visible-xs hidden-sm hidden-md hidden-lg">
  <div class="row">
    <div class="col-sm-4 col-md-3">
      <div class="thumbnail">
        <a href="#"><img src="<?=get_stylesheet_directory_uri()?>/assets/img/video-thumb-1.jpg"></a>
        <div class="caption">
          <h3>Ivan Chu Video</h3>
          <!-- <p>John Slosar, Chief Executive</p> -->
          <a href="#">Watch video</a>
        </div>
      </div>
      </div>
      <div class="col-sm-4 col-md-3">
      <div class="thumbnail">
        <a href="#"><img src="<?=get_stylesheet_directory_uri()?>/assets/img/video-thumb-2.jpg"></a>
        <div class="caption">
          <h3>SD Video</h3>
          <!-- <p>Mark Watson, Head of Environmental Affairs</p> -->
          <a href="#">Watch video</a>
        </div>
      </div>
    </div>
  </div>
  </div>
  <a href="javascript:;" id="btn-close-video-popup">Close</a>
<?
        break;
      case 9:
        //echo 'id="child-of-2013-progress"';
        break;
      case 14:
        //echo 'id="child-of-safety"';
?>
<!-- ------------------Safety--------------------- -->
  <div class="desktop-video-container">
    <div id="embed-video-container">
      <div id="video_0" style="visibility: visible; z-index: 999;"><iframe id="player_0" class="ytplayer" width="839" height="472" src="//www.youtube.com/embed/UFHV2bXuLJw?enablejsapi=1&modestbranding=1&showinfo=0&rel=0&autoplay=0" frameborder="0" allowfullscreen></iframe></div>
    </div>
  </div>
  <a href="javascript:;" id="btn-close-video-popup">Close</a>
<?
        break;
      case 16:
        //echo 'id="child-of-climate-change"';
?>
<!-- ------------------Climate change--------------------- -->
  <div class="desktop-video-container">
    <div id="embed-video-container">
      <div id="video_0" style="visibility: visible; z-index: 999;"><iframe id="player_0" class="ytplayer" width="839" height="472" src="//www.youtube.com/embed/UFHV2bXuLJw?enablejsapi=1&modestbranding=1&showinfo=0&rel=0&autoplay=0" frameborder="0" allowfullscreen></iframe></div>
    </div>
  </div>
  <a href="javascript:;" id="btn-close-video-popup">Close</a>
<?
        break;
      case 18:
        //echo 'id="child-of-waste-management"';
?>
<!-- ------------------Waste management--------------------- -->
  <div class="desktop-video-container">
    <div id="embed-video-container">
      <div id="video_0" style="visibility: visible; z-index: 999;"><iframe id="player_0" class="ytplayer" width="839" height="472" src="//www.youtube.com/embed/UFHV2bXuLJw?enablejsapi=1&modestbranding=1&showinfo=0&rel=0&autoplay=0" frameborder="0" allowfullscreen></iframe></div>
    </div>
  </div>
  <a href="javascript:;" id="btn-close-video-popup">Close</a>
<?
        break;
      case 20:
        //echo 'id="child-of-sustainable-sourcing"';
?>
<!-- ------------------Sustainable sourcing--------------------- -->
  <div class="desktop-video-container">
    <div id="embed-video-container">
      <div id="video_0" style="visibility: visible; z-index: 999;"><iframe id="player_0" class="ytplayer" width="839" height="472" src="//www.youtube.com/embed/UFHV2bXuLJw?enablejsapi=1&modestbranding=1&showinfo=0&rel=0&autoplay=0" frameborder="0" allowfullscreen></iframe></div>
    </div>
  </div>
  <a href="javascript:;" id="btn-close-video-popup">Close</a>
<?
        break;
      case 22:
        //echo 'id="child-of-biodiversity"';
?>
<!-- ------------------Biodiversity--------------------- -->
  <div class="desktop-video-container">
    <div id="embed-video-container">
      <div id="video_0" style="visibility: visible; z-index: 999;"><iframe id="player_0" class="ytplayer" width="839" height="472" src="//www.youtube.com/embed/UFHV2bXuLJw?enablejsapi=1&modestbranding=1&showinfo=0&rel=0&autoplay=0" frameborder="0" allowfullscreen></iframe></div>
    </div>
  </div>
  <a href="javascript:;" id="btn-close-video-popup">Close</a>
<?
        break;
      case 24:
        //echo 'id="child-of-our-people"';
?>
<!-- ------------------our people--------------------- -->
  <div class="desktop-video-container hidden-xs visible-sm visible-md visible-lg">
    <div id="embed-video-container">
      <div id="video_0" style="visibility: visible; z-index: 999;"><iframe id="player_0" class="ytplayer" width="839" height="472" src="//www.youtube.com/embed/UFHV2bXuLJw?enablejsapi=1&modestbranding=1&showinfo=0&rel=0&autoplay=0" frameborder="0" allowfullscreen></iframe></div>
      <div id="video_1" style="visibility: hidden; z-index: 999;"><iframe id="player_1" class="ytplayer" width="839" height="472" src="//www.youtube.com/embed/BDDDLgVTLaY?enablejsapi=1&modestbranding=1&showinfo=0&rel=0&autoplay=0" frameborder="0" allowfullscreen></iframe></div>
      <div id="video_2" style="visibility: hidden; z-index: 999;"><iframe id="player_2" class="ytplayer" width="839" height="472" src="//www.youtube.com/embed/qEHgNXE5YAg?enablejsapi=1&modestbranding=1&showinfo=0&rel=0&autoplay=0" frameborder="0" allowfullscreen></iframe></div>
      <div id="video_3" style="visibility: hidden; z-index: 999;"><iframe id="player_3" class="ytplayer" width="839" height="472" src="//www.youtube.com/embed/iw5Uqu49DvA?enablejsapi=1&modestbranding=1&showinfo=0&rel=0&autoplay=0" frameborder="0" allowfullscreen></iframe></div>
      <div id="video_4" style="visibility: hidden; z-index: 999;"><iframe id="player_4" class="ytplayer" width="839" height="472" src="//www.youtube.com/embed/UFHV2bXuLJw?enablejsapi=1&modestbranding=1&showinfo=0&rel=0&autoplay=0" frameborder="0" allowfullscreen></iframe></div>
      <div id="video_5" style="visibility: hidden; z-index: 999;"><iframe id="player_5" class="ytplayer" width="839" height="472" src="//www.youtube.com/embed/BDDDLgVTLaY?enablejsapi=1&modestbranding=1&showinfo=0&rel=0&autoplay=0" frameborder="0" allowfullscreen></iframe></div>
      <div id="video_6" style="visibility: hidden; z-index: 999;"><iframe id="player_6" class="ytplayer" width="839" height="472" src="//www.youtube.com/embed/qEHgNXE5YAg?enablejsapi=1&modestbranding=1&showinfo=0&rel=0&autoplay=0" frameborder="0" allowfullscreen></iframe></div>
      <div id="video_7" style="visibility: hidden; z-index: 999;"><iframe id="player_7" class="ytplayer" width="839" height="472" src="//www.youtube.com/embed/iw5Uqu49DvA?enablejsapi=1&modestbranding=1&showinfo=0&rel=0&autoplay=0" frameborder="0" allowfullscreen></iframe></div>
    </div>
    <div id="video-carousel-container">
    <a class="slider-arrow slider-arrow-prev" id="video-carousel-prev" href="javascript:;">Previous</a>
    <a class="slider-arrow slider-arrow-next" id="video-carousel-next" href="javascript:;">Next</a>
    <div id="video-carousel">
      <div>
        <a href="#"><img class="img-responsive" src="<?=get_stylesheet_directory_uri()?>/assets/img/video-thumb-1.jpg"></a>
          <h3>Career Opportunities Series</h3>
          <!-- <p>John Slosar, Chief Executive</p> -->
          <a href="#">Watch video</a>
      </div>
      <div>
        <a href="#"><img class="img-responsive" src="<?=get_stylesheet_directory_uri()?>/assets/img/video-thumb-2.jpg"></a>
          <h3>Careers On the Ground</h3>
          <!-- <p>Mark Watson, Head of Environmental Affairs</p> -->
          <a href="#">Watch video</a>
      </div>
      <div>
        <a href="#"><img class="img-responsive" src="<?=get_stylesheet_directory_uri()?>/assets/img/video-thumb-3.jpg"></a>
          <h3>A Day in the Life of a Pilot</h3>
          <!-- <p>Chitty Cheung, Director Corporate Affairs</p> -->
          <a href="#">Watch video</a>
      </div>
      <div>
        <a href="#"><img class="img-responsive" src="<?=get_stylesheet_directory_uri()?>/assets/img/video-thumb-4.jpg"></a>
          <h3>IT Trainee Programme</h3>
          <!-- <p>John Slosar, Chief Executive</p> -->
          <a href="#">Watch video</a>
      </div>
      <div>
        <a href="#"><img class="img-responsive" src="<?=get_stylesheet_directory_uri()?>/assets/img/video-thumb-1.jpg"></a>
          <h3>World’s Best Cabin Crew</h3>
          <!-- <p>John Slosar, Chief Executive</p> -->
          <a href="#">Watch video</a>
      </div>
      <div>
        <a href="#"><img class="img-responsive" src="<?=get_stylesheet_directory_uri()?>/assets/img/video-thumb-2.jpg"></a>
          <h3>Jetset TV Kids</h3>
          <!-- <p>Mark Watson, Head of Environmental Affairs</p> -->
          <a href="#">Watch video</a>
      </div>
      <div>
        <a href="#"><img class="img-responsive" src="<?=get_stylesheet_directory_uri()?>/assets/img/video-thumb-3.jpg"></a>
          <h3>Engineer Trainee</h3>
          <!-- <p>Chitty Cheung, Director Corporate Affairs</p> -->
          <a href="#">Watch video</a>
      </div>
      <div>
        <a href="#"><img class="img-responsive" src="<?=get_stylesheet_directory_uri()?>/assets/img/video-thumb-4.jpg"></a>
          <h3>Cabin Crew and Airport Staff </h3>
          <!-- <p>John Slosar, Chief Executive</p> -->
          <a href="#">Watch video</a>
      </div>
    </div>
    </div>
  </div>
  <div class="visible-xs hidden-sm hidden-md hidden-lg">
  <div class="row">
    <div class="col-sm-4 col-md-3">
      <div class="thumbnail">
        <a href="#"><img src="<?=get_stylesheet_directory_uri()?>/assets/img/video-thumb-1.jpg"></a>
        <div class="caption">
          <h3>Career Opportunities Series</h3>
          <!-- <p>John Slosar, Chief Executive</p> -->
          <a href="#">Watch video</a>
        </div>
      </div>
      </div>
      <div class="col-sm-4 col-md-3">
      <div class="thumbnail">
        <a href="#"><img src="<?=get_stylesheet_directory_uri()?>/assets/img/video-thumb-2.jpg"></a>
        <div class="caption">
          <h3>Careers On the Ground</h3>
          <!-- <p>Mark Watson, Head of Environmental Affairs</p> -->
          <a href="#">Watch video</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-md-3">
      <div class="thumbnail">
        <a href="#"><img src="<?=get_stylesheet_directory_uri()?>/assets/img/video-thumb-3.jpg"></a>
        <div class="caption">
          <h3>A Day in the Life of a Pilot</h3>
          <!-- <p>Chitty Cheung, Director Corporate Affairs</p> -->
          <a href="#">Watch video</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-md-3">
      <div class="thumbnail">
        <a href="#"><img src="<?=get_stylesheet_directory_uri()?>/assets/img/video-thumb-4.jpg"></a>
        <div class="caption">
          <h3>IT Trainee Programme</h3>
          <!-- <p>John Slosar, Chief Executive</p> -->
          <a href="#">Watch video</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-md-3">
      <div class="thumbnail">
        <a href="#"><img src="<?=get_stylesheet_directory_uri()?>/assets/img/video-thumb-1.jpg"></a>
        <div class="caption">
          <h3>World’s Best Cabin Crew</h3>
          <!-- <p>John Slosar, Chief Executive</p> -->
          <a href="#">Watch video</a>
        </div>
      </div>
      </div>
      <div class="col-sm-4 col-md-3">
      <div class="thumbnail">
        <a href="#"><img src="<?=get_stylesheet_directory_uri()?>/assets/img/video-thumb-2.jpg"></a>
        <div class="caption">
          <h3>Jetset TV Kids</h3>
          <!-- <p>Mark Watson, Head of Environmental Affairs</p> -->
          <a href="#">Watch video</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-md-3">
      <div class="thumbnail">
        <a href="#"><img src="<?=get_stylesheet_directory_uri()?>/assets/img/video-thumb-3.jpg"></a>
        <div class="caption">
          <h3>Engineer Trainee</h3>
          <!-- <p>Chitty Cheung, Director Corporate Affairs</p> -->
          <a href="#">Watch video</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-md-3">
      <div class="thumbnail">
        <a href="#"><img src="<?=get_stylesheet_directory_uri()?>/assets/img/video-thumb-4.jpg"></a>
        <div class="caption">
          <h3>Cabin Crew and Airport Staff </h3>
          <!-- <p>John Slosar, Chief Executive</p> -->
          <a href="#">Watch video</a>
        </div>
      </div>
    </div>
  </div>
  </div>
  <a href="javascript:;" id="btn-close-video-popup">Close</a>
<?
        break;
      default:
        //echo 'id="child-of-others"';
        break;
    }
?>
</div>