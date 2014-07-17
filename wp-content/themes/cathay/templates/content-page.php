<?=get_template_part('partials/page_title');?>

<a href="#" class="btn-share">Share<i class="fa fa-share-square-o"></i></a>

<div class="content-container">
<?//=apply_filters('the_content', $post->post_content);?>
<div class="container award-container cx-award-container">
  <h3>Cathay Pacific</h3>
  <div class="row">
    <div class="col-sm-6">
      <ul>
        <li>Inflight Retailer of the Year</li>
      </ul>
    </div>
    <div class="col-sm-6">
      <ul>
        <li>2013 Frontier Awards</li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <ul>
        <li>Best Airline Business Class</li>
      </ul>
    </div>
    <div class="col-sm-6">
      <ul>
        <li>2013 Business Traveller China Awards</li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <ul>
        <li>Award for 10,000 Hours of Volunteer Service</li>
        <li>World’s Best Cabin Staff</li>
        <li>Best Transpacific Airlinef</li>
      </ul>
    </div>
    <div class="col-sm-6">
      <ul>
        <li>Social Welfare Department HKSAR</li>
        <li>Skytrax World Airline Awards</li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <ul>
        <li>My Favourite Aircraft Seat Design (First Class) </li>
        <li>My Favourite Inflight Entertainment</li>
        <li>My Favourite Service Team in the Skies </li>
      </ul>
    </div>
    <div class="col-sm-6">
      <ul>
        <li>U Magazine Travel Awards 2013</li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <ul>
        <li>Airlines Service  Award</li>
      </ul>
    </div>
    <div class="col-sm-6">
      <ul>
        <li>CAPITAL WEEKLY Service Awards 2013</li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <ul>
        <li>The Most Favourite Airline Award</li>
        <li>Green Pioneer in Travel Industry Award </li>
      </ul>
    </div>
    <div class="col-sm-6">
      <ul>
        <li>12th Best Travel Agency Awards, Weekend Weekly</li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <ul>
        <li>Tourism for Tomorrow Award Finalist</li>
      </ul>
    </div>
    <div class="col-sm-6">
      <ul>
        <li>World Travel and Tourism Council</li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <ul>
        <li>2013 Hong Kong Awards for Environmental Excellence – Gold Award (Transport and Logistics)</li>
      </ul>
    </div>
    <div class="col-sm-6">
      <ul>
        <li>Environmental Campaign Committee (ECC)</li>
      </ul>
    </div>
  </div>
</div>
<div class="container award-container ka-award-container">
  <h3>Dragonair</h3>
  <div class="row">
    <div class="col-sm-6">
      <ul>
        <li>World&rsquo;s  Best Regional Airline</li>
      </ul>
    </div>
    <div class="col-sm-6">
      <ul>
        <li>2013 World Airline Awards (Skytrax)</li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <ul>
        <li>Best  Regional Airline</li>
      </ul>
    </div>
    <div class="col-sm-6">
      <ul>
        <li>24th Annual TTG Travel Awards 2013</li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <ul>
        <li>Best Airline Economy Class</li>
      </ul>
    </div>
    <div class="col-sm-6">
      <ul>
        <li>2013 Business Traveller China Award</li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <ul>
        <li>Asia  Excellence Brand Award</li>
      </ul>
    </div>
    <div class="col-sm-6">
      <ul>
        <li>Yazhou Zhoukan 2013 Asia Excellence Brand Award</li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <ul>
        <li>Yahoo! Emotive Brand Awards 2012-2013 Airline Category</li>
      </ul>
    </div>
    <div class="col-sm-6">
      <ul>
        <li>Yahoo! Emotive Brand Award 2012 – 2013</li>
      </ul>
    </div>
  </div>
</div>
<?
if(get_field("next_page",$post->ID)){
	$p = get_field("next_page",$post->ID);
	$permalink = get_permalink($p);
	echo '<div class="bottom-next-page-container clearfix">';
	echo '<a href="'.$permalink.'" class="btn-next-page"><i class="fa fa-arrow-circle-o-right fa-2x pull-right"></i></a>';
	echo '</div>';
}
?>
<div class="bottom-factsheet-container hidden-sm hidden-md hidden-lg">
	<?=get_template_part('partials/factsheet'); ?>
</div>