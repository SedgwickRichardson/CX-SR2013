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
	<h3>Factsheet<i class="fa fa-file-text-o"></i></h3>
	<ul>
		<li><a target="_blank" href="<?=get_stylesheet_directory_uri()?>/assets/pdf/factsheet/CX_SDR2013_A1_Sustainability_Governance_Factsheet.pdf">Sustainability Governance (PDF 252kb)</a></li>
		<li><a target="_blank" href="<?=get_stylesheet_directory_uri()?>/assets/pdf/factsheet/CX_SDR2013_A2_Stakeholder_Engagement_and_Issues_Materiality_Factsheet.pdf">Stakeholder Engagement and Issues Materiality (PDF 272kb)</a></li>
		<li><a target="_blank" href="<?=get_stylesheet_directory_uri()?>/assets/pdf/factsheet/CX_SDR2013_A3_Community_Investment_Factsheet.pdf">Community Investment (PDF 1.8mb)</a></li>
	</ul>
</div>
<div class="factsheet-container">
  <h3><a target="_blank" href="<?=get_stylesheet_directory_uri()?>/assets/pdf/CX_SDR2013_Sustainability_All_Around_You.pdf">Sustainability all around you<i class="fa fa-file-image-o"></i></a></h3>
</div>
<?
        break;
      case 14:
        //echo 'id="child-of-safety"';
?>
<div class="factsheet-container">
  <h3>Factsheet<i class="fa fa-file-text"></i></h3>
  <ul>
    <li><a target="_blank" href="<?=get_stylesheet_directory_uri()?>/assets/pdf/factsheet/CX_SDR2013_C1_Safety_Factsheet.pdf">Safety (PDF 467kb)</a></li>
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
    <li><a target="_blank" href="<?=get_stylesheet_directory_uri()?>/assets/pdf/factsheet/CX_SDR2013_D1_Climate_Change_Factsheet.pdf">Climate Change (PDF 1.4mb)</a></li>
  </ul>
</div>
<?
        break;
      case 18:
?>
<div class="factsheet-container">
  <h3>Factsheet<i class="fa fa-file-text"></i></h3>
  <ul>
    <li><a target="_blank" href="<?=get_stylesheet_directory_uri()?>/assets/pdf/factsheet/CX_SDR2013_E1_Waste_Management_Factsheet.pdf">Waste Management (PDF 1.3mb)</a></li>
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
    <li><a target="_blank" href="<?=get_stylesheet_directory_uri()?>/assets/pdf/factsheet/CX_SDR2013_F1_Sustainable_Sourcing_Factsheet.pdf">Sustainable Sourcing (PDF 509kb)</a></li>
  </ul>
</div>
<?
        break;
      case 22:
        //echo 'id="child-of-biodiversity"';
?>
<div class="factsheet-container">
  <h3>Factsheet<i class="fa fa-file-text"></i></h3>
  <ul>
    <li><a target="_blank" href="<?=get_stylesheet_directory_uri()?>/assets/pdf/factsheet/CX_SDR2013_G1_Biodiversity_Factsheet.pdf">Biodiversity (PDF 198kb)</a></li>
  </ul>
</div>
<?
        break;
      case 24:
        //echo 'id="child-of-our-people"';
?>
<div class="factsheet-container">
  <h3>Factsheet<i class="fa fa-file-text"></i></h3>
  <ul>
    <li><a target="_blank" href="<?=get_stylesheet_directory_uri()?>/assets/pdf/factsheet/CX_SDR2013_H1_Our_People_Factsheet.pdf">Our People (PDF 1.3mb)</a></li>
  </ul>
</div>
<?
        break;
      default:
        //echo 'id="child-of-others"';
        break;
    }
?>