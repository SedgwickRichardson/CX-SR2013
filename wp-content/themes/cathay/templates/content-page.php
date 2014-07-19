<?=get_template_part('partials/page_title');?>

<a href="#" class="btn-share">Share<i class="fa fa-share-square-o"></i></a>
<div class="content-container">
<?=apply_filters('the_content', $post->post_content);?>
<p class="intro">Our  suppliers are our partners &mdash; we work with over 1,000 of them globally, dealing  with purchases from aircraft and fuel to office supplies and uniforms &mdash; across  the 140 destinations we fly to. We envision a sustainable supply chain within  the Cathay Pacific Group, and working with our suppliers is key to delivering  products and services to our customers sustainably. </p>
<p> We work with our suppliers on a supply  chain sustainability compliance process as part of our risk management process.  Many of our suppliers are companies who also report publicly on their  sustainability performance and hold similar values towards corporate  responsibility as ourselves. </p>
<p> In order to deliver products and services  that are sustainably sourced, we need to work with our suppliers. Developing a  sustainable supply chain is a challenge due to the large amount of items we  purchase, each with varying specifications. In some cases, we may not have  leverage on all our suppliers and have limited influence on the sustainability  attributes of these materials. Moreover, our specifications need to meet very  strict safety standards, particularly if we are taking these items onboard. We  are determined to find solutions to these challenges:</p>
<ul>
  <li>We       participate in best practice sharing sessions locally and internationally:       Cathay Pacific chaired the Swire Sustainable Purchasing Working Group between       2007 and 2013, which looks at synergies within the Swire Group in       embedding sustainable purchasing practices in the Swire Pacific companies.       We were a founding member of the Hong Kong Green Purchasing Charter in       2008. In 2013, we were also one of the founding participants of the       inaugural Sustainable Lifestyles Working Group launched by non-profit sustainability       organisation BSR and sustainability communications firm Futerra.</li>
  <li>We trial       and use alternative materials and implement these across the Cathay       Pacific Group: We often assess the performance of alternative materials.  Once it passes the trial phase, we       implement the material across the whole Group. For example, when we       decided to switch all office paper to sustainably-sourced material, we       assessed different options from recycled paper to paper made from FSC       sources. Since our initial purchase of sustainable office paper in 2008, currently       the majority of office paper, marketing paraphernalia in Hong Kong,       training materials, inflight magazines and team newsletters have switched       to FSC or recycled paper. </li>
  <li>We are       developing guidelines and sustainable specifications for a number of       items: We developed a number of guidelines that list out the sustainable       specifications we need to consider in our purchases. We now have       guidelines for airport lounges, IT equipment, paper, plastic and printing.       We aim to develop more guidelines to support decision-making with our       purchasing team.</li>
</ul>
<h2>Sustainable  purchasing </h2>
<p>Our purchasing practices are set at the highest  professional and ethical standards. Most of the purchasing requirements for both  Cathay Pacific and Dragonair are managed by the Airline Purchasing and Aircraft  Trading Department. In addition to our anti-bribery expectations with all our  staff, we require our purchasing staff to comply with our additional  anti-bribery guidelines outlined in our Purchasing Ethics Policy.</p>
<p>We aim to encourage our suppliers to improve on their  sustainability practices through capacity building and sharing knowledge on  best practices as our approach to sustainable procurement. Our purchasing teams  understand the need to consider sustainable purchasing and responsible supply  chain practices in buying decisions. We require our suppliers to provide clear,  accurate and appropriate reporting of their progress in achieving our Supply  Chain Sustainability Code of Conduct objectives.</p>
<h2>Supply Chain  Sustainability Code of Conduct</h2>
<p>Since the launch of our Supply Chain Sustainability Code of Conduct in  2007, suppliers to Cathay Pacific must provide clear, accurate and appropriate  reporting of their progress toward achieving our objectives contained in this  Code. These include:</p>
<ul>
  <li>Legal and regulatory compliance</li>
  <li>Environmental management</li>
  <li>No use of forced and child  labour</li>
  <li>Appropriate compensation and  working hours</li>
  <li>Health and safety in the  workplace</li>
  <li>No discrimination against  employees</li>
  <li>Upholding human rights in the  workplace</li>
  <li>Having high ethical standards </li>
  <li>Extending social responsibility  to their subcontractors and service providers</li>
  <li>Maintaining documentation and  permitting our inspection</li>
</ul>
<p>In developing and revising the Code, we took account  of the International Labour Organization’s core conventions and other  applicable and recognised labour standards, referred and benchmarked against  the United Nations Global Compact.</p>
<div class="timeline-container clearfix">
  <h3>Timeline for Working with Our Supply Chain</h3>
  <dl class="dl-horizontal">
  	<div class="clearfix">
    <dt>2006</dt>
    <dd>Identified the need for a more coordinated approach to sustainability in our supply chain</dd>
	</div>
	<div class="clearfix">
    <dt>2007</dt>
    <dd>
      <p>Developed and launched our Supplier Corporate, Social 
        and Environmental Responsibility Code of Conduct</p>
      <p>First questionnaires sent to Hong Kong-based suppliers
    </dd>
    </div>
	<div class="clearfix">
    <dt>2008</dt>
    <dd>Launched online tool for suppliers to complete questionnaire regarding their compliance with our Code.
      New suppliers are contractually committed to meeting our Code of Conduct</dd>
      </div>
	<div class="clearfix">
    <dt>2009</dt>
    <dd>
      <p>Revised the Code of Conduct to include ethics</p>
    </dd>
    </div>
	<div class="clearfix">
    <dt>2010</dt>
    <dd>
      <p>First publication of the Supply Chain Sustainability Newsletter distributed to local and outport suppliers</p>
      <p>Outport-based suppliers asked to complete questionnaire<br>
        for the first time</p>
    </dd>
    </div>
	<div class="clearfix">
    <dt>2011</dt>
    <dd>Development of a framework for supply chain compliance checking</dd>
    </div>
	<div class="clearfix">
    <dt>2012</dt>
    <dd>Revised and renamed the Code as Supply Chain Sustainability Code of Conduct</dd>
	</div>
  </dl>
</div>
<h2>Sustainable  sourcing</h2>
<p>It is our goal to ensure that we establish sustainable  sourcing practices throughout our operations. We started embedding these  practices by understanding the consumption of resources across different  business units. To understand how we can achieve our sourcing goals, commonly  procured items were identified and areas where there is potential for reduced  usage were assessed. More information is provided in the <a href="http://cx-sr2013.local.com/waste-management/">Waste Management</a> section of our report.</p>
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