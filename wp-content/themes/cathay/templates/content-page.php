<?=get_template_part('partials/page_title');?>

<a href="#" class="btn-share">Share<i class="fa fa-share-square-o"></i></a>

<div class="content-container">
<?//=apply_filters('the_content', $post->post_content);?>
<div class="row quote-photo-container clearfix">
  <div class="col-sm-4 quote-photo"><img class="img-responsive" src="http://cx-sr2013.local.com/wp-content/themes/cathay/assets/img/ceo.jpg" alt="" /></div>
  <div class="col-sm-8 quote-text">
    <blockquote>
      <p>“We are committed to practicing sustainable development as it is the right thing to do for our planet, people and communities. We are in it for the long term in order for our business to be successful and sustainable.”</p>
    </blockquote>
  </div>
</div>
<p>Cathay Pacific has an unwavering commitment to sustainability. Since 2010, we have been developing our Sustainable Development Strategy to bring about positive change and minimise the impact of our operations on the environment. Only then can our business operate far into the future. This is a significant challenge, but it is also an opportunity for progress.</p>
<p>The involvement of our stakeholders is an indispensible part of this business vision.  We have been listening to our diverse stakeholders’ needs and concerns, and we are responding by engaging and working with them to find solutions to reduce our impacts and reach our targets.</p>
<p>I am proud of our staff team who are passionate about influencing positive sustainability behaviour, and challenging stakeholders to think out of the box about the way things are done, be it with their colleagues or our suppliers. They work collaboratively across functions to identify issues, best practices and improvements, to ensure that sustainability are considered when making operational decisions. We will continue to encourage these practices so more of our staff understand sustainability is a key part of our airline’s business vision. I invite you to view the <a href="http://cx-sr2013.local.com/resources/video-gallery/">video stories</a> featured in this year’s report for a glimpse of what some of them have made possible.</p>
<p>At the International Air Transport Association (IATA) Annual General Meeting in June 2013, Cathay Pacific, together with other members, endorsed the resolution for the industry to implement carbon neutral growth from 2020, also known as “CNG2020”, by means of a single market-based measure (MBM). For a number of years, Cathay Pacific has been closely involved in discussions on international aviation CO<sub>2</sub> emissions regulation, most notably as part of IATA’s Climate Change Task Force.  It was therefore very welcome news in October when the International Civil Aviation Organization (ICAO) Assembly, comprising  191 states, agreed to proceed with the development of a global mechanism to tackle international aviation emissions.</p>
<p>As the first comprehensive agreement on climate change for any global industrial sector, the period between now and the next ICAO Assembly in 2016 will be critical in the formation of the “building blocks” of this scheme. We also acknowledge the positive move made by the European Union (EU) in November to ‘stop the clock’ on extending the EU Emissions Trading Scheme (ETS) to international aviation to provide space for ICAO to reach such an agreement.<br />
  At Cathay Pacific, we have been clear about our own environmental commitments so we are naturally supportive of the ICAO agreement. With the industry commitment to CNG2020 and our own CO<sub>2</sub> reduction target firmly in place, we are moving in the right direction towards a more sustainable future for aviation.</p>
<p>In the mean time, our industry continues to face a highly volatile operating environment.  We have to be flexible in dealing with “new norms” and be adaptive to the demands of a rapidly changing operating environment. In 2013, whilst our passenger business was generally robust, fuel prices remained on a high plateau and the cargo market continued to be weak. In addition to responding to these short to medium term difficulties, we are also future-proofing our business by continuously strengthening ourselves in different ways — with our fleet, the network, flight frequencies, our products and services, the loyalty and Frequent Flyer programmes, and importantly, our team of people.  Specifically, Cathay Pacific continued to invest in modernising our aircrafts, which will enable us to reduce fuel usage, carbon emissions, and noise pollution to the local community, and hence creating value for our stakeholders.</p>
<p>We are confident that our investments are going to pay dividends in the long run, and together with our outstanding team which is the best in the business, our best days lie ahead.</p>
<img src="http://cx-sr2013.local.com/wp-content/themes/cathay/assets/img/ceo-signature.jpg" alt="" />
<p><strong>Ivan Chu</strong><br />
  Chief Executive</p>
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