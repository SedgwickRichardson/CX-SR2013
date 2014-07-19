<?
$page_ancestors = get_ancestors($post->ID, 'page' );
    if(sizeof($page_ancestors)>0){
      $page_ancestor = $page_ancestors[sizeof($page_ancestors)-1];
    }
    else{
      $page_ancestor = $post->ID;
    }
    switch($page_ancestor){
      case 2:
?>
<div class="factsheet-container">
	<h3>Factsheet<i class="fa fa-file-text"></i></h3>
	<ul>
		<li><a href="<?=get_stylesheet_directory_uri()?>/assets/pdf/factsheet/CX_SDR2013_">Sustainability Governance (PDF 258kb)</a></li>
		<li><a href="<?=get_stylesheet_directory_uri()?>/assets/pdf/factsheet/CX_SDR2013_">Stakeholder Engagement and Issues Materiality (PDF 259kb)</a></li>
		<li><a href="<?=get_stylesheet_directory_uri()?>/assets/pdf/factsheet/CX_SDR2013_">Community Investment (PDF 762kb)</a></li>
	</ul>
</div>
<?
        break;
      case 14:
        //echo 'id="child-of-safety"';
?>
<div class="factsheet-container">
  <h3>Factsheet<i class="fa fa-file-text"></i></h3>
  <ul>
    <li><a href="<?=get_stylesheet_directory_uri()?>/assets/pdf/factsheet/CX_SDR2013_">Safety (PDF 258kb)</a></li>
  </ul>
</div>
<?
        break;
      case 16:
        //echo 'id="child-of-climate-change"';
?>
<div class="factsheet-container">
  <h3>Factsheet<i class="fa fa-file-text"></i></h3>
  <ul>
    <li><a href="<?=get_stylesheet_directory_uri()?>/assets/pdf/factsheet/CX_SDR2013_">Climate Change (PDF 258kb)</a></li>
  </ul>
</div>
<?
        break;
      case 18:
?>
<div class="factsheet-container">
  <h3>Factsheet<i class="fa fa-file-text"></i></h3>
  <ul>
    <li><a href="<?=get_stylesheet_directory_uri()?>/assets/pdf/factsheet/CX_SDR2013_E1_Waste_Management_Factsheet.pdf">Waste Management (PDF 258kb)</a></li>
  </ul>
</div>
<?
        //echo 'id="child-of-waste-management"';
        break;
      case 20:
        //echo 'id="child-of-sustainable-sourcing"';
?>
<div class="factsheet-container">
  <h3>Factsheet<i class="fa fa-file-text"></i></h3>
  <ul>
    <li><a href="<?=get_stylesheet_directory_uri()?>/assets/pdf/factsheet/CX_SDR2013_F1_Sustainable_Sourcing_Factsheet.pdf">Sustainable Sourcing (PDF 258kb)</a></li>
  </ul>
</div>
<?
        break;
      case 22:
        //echo 'id="child-of-biodiversity"';
        break;
      case 24:
        //echo 'id="child-of-our-people"';
        break;
      default:
        //echo 'id="child-of-others"';
        break;
    }
?>