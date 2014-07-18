<a href="#" class="btn-share">Share<i class="fa fa-share-square-o"></i></a>

<div class="content-container">
	<div class="circles">
		<div class="circle circle1 big" data-stellar-ratio="0.5"></div>
		<div class="circle circle2 small" data-stellar-ratio="0.2"></div>
		<div class="circle circle3 small" data-stellar-ratio="0.9"></div>
		<div class="circle circle4 big" data-stellar-ratio="0.6"></div>

	</div>

<div class="col-md-8 col-md-offset-2">
	<h1>Connecting with Lorem Ipsum</h1>
	<h2>Lorem ipsum dolor sit amet, consectetur adipisicing eli. Provid ent, recusandae, volu ptatibus quos earum in excepturi sapiente fa esse ducimus delectus asper iores at maiores ea. </h2>
</div>

<div class="spacer clearfix"></div>

<div class="col-md-4 col-md-offset-4 text-center">
	<img src="<?=get_stylesheet_directory_uri()?>/assets/img/circle-temp.png" />
	<h3>Joint Message from the Chairman & the Chief Executive</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, recusandae, voluptatibus quos earum. Dolor em que, reiciendis, architecto blanditiis vero officia earum molestias saepe laborum</p>
</div>

<div class="col-md-6 col-md-offset-3 text-center arrow">
	<img src="<?=get_stylesheet_directory_uri()?>/assets/img/home-arrow-down.png" />
</div>

<div class="col-md-4 col-md-offset-4 text-center">
	<img src="<?=get_stylesheet_directory_uri()?>/assets/img/circle-temp.png" />
	<h3>Joint Message from the Chairman & the Chief Executive</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, recusandae, voluptatibus quos earum. Dolor em que, reiciendis, architecto blanditiis vero officia earum molestias saepe laborum</p>
</div>

<div class="col-md-6 col-md-offset-3 text-center arrow">
	<img src="<?=get_stylesheet_directory_uri()?>/assets/img/home-arrow-down.png" />
</div>

<div class="col-md-4 col-md-offset-4 text-center">
	<img src="<?=get_stylesheet_directory_uri()?>/assets/img/circle-temp.png" />
	<h3>Sustainable Development Strategy</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, recusandae, voluptatibus quos earum. Dolor em que, reiciendis, architecto blanditiis vero officia earum molestias saepe laborum</p>
</div>

<div class="col-md-6 col-md-offset-3 text-center arrow">
	<img src="<?=get_stylesheet_directory_uri()?>/assets/img/home-arrow-down.png" />
</div>

<div class="col-md-8 col-md-offset-2 text-center">
	<img class="img-responsive" src="<?=get_stylesheet_directory_uri()?>/assets/img/bubbles.png" />
	<h3>Key Matters</h3>
	<div class="col-md-6 col-md-offset-3 text-center">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, recusandae, voluptatibus quos earum. Dolor em que, reiciendis, architecto blanditiis vero officia earum molestias saepe laborum</p>
	</div>
</div>

<div class="col-md-6 col-md-offset-3 text-center arrow">
	<img src="<?=get_stylesheet_directory_uri()?>/assets/img/home-arrow-down.png" />
</div>

<div class="col-md-4 col-md-offset-4 text-center">
	<img src="<?=get_stylesheet_directory_uri()?>/assets/img/circle-temp.png" />
	<h3>2013 Progress</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, recusandae, voluptatibus quos earum. Dolor em que, reiciendis, architecto blanditiis vero officia earum molestias saepe laborum</p>
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
