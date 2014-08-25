<?=get_template_part('partials/page_title');?>

<a href="#" class="btn-share">Share<i class="fa fa-share-square-o"></i></a> <a href="javascript:;" id="back-to-top"><i class="fa fa-chevron-circle-up"></i></a>
<div class="content-container">
<div class="downloadControlContainer" id="reportDownloadControlContainer">
  <div class="downloadSectionTitle">Sustainable Development Report 2013</div>
  <div class="itemDiv clearfix">
    <div class="itemTitle">Download Full Report (English version)</div>
    <a href="<?=get_stylesheet_directory_uri()?>/assets/pdf/CX_SDR13_Full_eng.pdf" target="_blank" class="btn_item_dl"><i class="fa fa-file-text-o"></i>Download</a> </div>
  <div class="itemDiv lastItem" id="reportSelectedNoDiv">
    <div class="clearfix" style="margin-bottom:20px;">
      <div class="itemTitle">Download Report Sections (English version)</div>
      <a href="#" class="btn_item_dl" id="btnReportSelectDownload"><i class="fa fa-file-text-o"></i>Download</a> </div>
    <div class="cartTitle">Selected Downloads <span>(0)</span></div>
    <span class="cartCaption"> 0 files added. Add files from list below and download pdf file to your computer.</span> </div>
</div>
<form id="form1" action="<?=get_stylesheet_directory_uri()?>/pdf_submit.php" method="post">
  <div id="reportDownloadListContainer">
    <div class="sectionTitleContainer">
      <div class="sectionTitleDivContainer firstItem">
        <input type="checkbox" class="downloadCheckBox" name="1_0">
        <div class="sectionTitleDiv clearfix">
          <div class="btnActiveArrow">Making the Connection</div>
          <div class="pdfSize">XXXkB</div>
        </div>
      </div>
      <div class="blueRoundContainerMid expandContentLargeContent" style="display: none;">
        <div class="sectionItem clearfix">
          <input type="checkbox" class="downloadCheckBox" name="1_1">
          <div class="sectionTitle">Making the Connection</div>
          <div class="pdfSize"></div>
        </div>
      </div>
      <div class="arrowBtn"></div>
    </div>
    <div class="sectionTitleContainer">
      <div class="sectionTitleDivContainer">
        <input type="checkbox" class="downloadCheckBox" name="2_0">
        <div class="sectionTitleDiv clearfix">
          <div class="btnActiveArrow">2013 Progress</div>
          <div class="pdfSize">XXXkB</div>
        </div>
      </div>
      <div class="blueRoundContainerMid expandContentLargeContent" style="display: none;">
        <div class="sectionItem clearfix">
          <input type="checkbox" class="downloadCheckBox" name="2_1">
          <div class="sectionTitle">2013 Progress</div>
        </div>
      </div>
      <div class="arrowBtn"></div>
    </div>
    <div class="sectionTitleContainer">
      <div class="sectionTitleDivContainer">
        <input type="checkbox" class="downloadCheckBox" name="3_0">
        <div class="sectionTitleDiv clearfix">
          <div class="btnActiveArrow">Safety</div>
          <div class="pdfSize">XXXkB</div>
        </div>
      </div>
      <div class="blueRoundContainerMid expandContentLargeContent" style="display: none;">
        <div class="sectionItem clearfix">
          <input type="checkbox" class="downloadCheckBox" name="3_1">
          <div class="sectionTitle">Safety</div>
        </div>
      </div>
      <div class="arrowBtn"></div>
    </div>
    <div class="sectionTitleContainer">
      <div class="sectionTitleDivContainer">
        <input type="checkbox" class="downloadCheckBox" name="4_0">
        <div class="sectionTitleDiv clearfix">
          <div class="btnActiveArrow">Climate Change</div>
          <div class="pdfSize">XXXkB</div>
        </div>
      </div>
      <div class="blueRoundContainerMid expandContentLargeContent" style="display: none;">
        <div class="sectionItem clearfix">
          <input type="checkbox" class="downloadCheckBox" name="4_1">
          <div class="sectionTitle">Climate Change</div>
        </div>
      </div>
      <div class="arrowBtn"></div>
    </div>
    <div class="sectionTitleContainer">
      <div class="sectionTitleDivContainer">
        <input type="checkbox" class="downloadCheckBox" name="5_0">
        <div class="sectionTitleDiv clearfix">
          <div class="btnActiveArrow">Waste Management</div>
          <div class="pdfSize">XXXkB</div>
        </div>
      </div>
      <div class="blueRoundContainerMid expandContentLargeContent" style="display: none;">
        <div class="sectionItem clearfix">
          <input type="checkbox" class="downloadCheckBox" name="5_1">
          <div class="sectionTitle">Waste Management</div>
        </div>
      </div>
      <div class="arrowBtn"></div>
    </div>
    <div class="sectionTitleContainer">
      <div class="sectionTitleDivContainer">
        <input type="checkbox" class="downloadCheckBox" name="6_0">
        <div class="sectionTitleDiv clearfix">
          <div class="btnActiveArrow">Sustainable Sourcing</div>
          <div class="pdfSize">XXXkB</div>
        </div>
      </div>
      <div class="blueRoundContainerMid expandContentLargeContent" style="display: none;">
        <div class="sectionItem clearfix">
          <input type="checkbox" class="downloadCheckBox" name="6_1">
          <div class="sectionTitle">Sustainable Sourcing</div>
        </div>
      </div>
      <div class="arrowBtn"></div>
    </div>
    <div class="sectionTitleContainer">
      <div class="sectionTitleDivContainer">
        <input type="checkbox" class="downloadCheckBox" name="7_0">
        <div class="sectionTitleDiv clearfix">
          <div class="btnActiveArrow">Biodiversity</div>
          <div class="pdfSize">XXXkB</div>
        </div>
      </div>
      <div class="blueRoundContainerMid expandContentLargeContent" style="display: none;">
        <div class="sectionItem clearfix">
          <input type="checkbox" class="downloadCheckBox" name="7_1">
          <div class="sectionTitle">Biodiversity</div>
        </div>
      </div>
      <div class="arrowBtn"></div>
    </div>
    <div class="sectionTitleContainer">
      <div class="sectionTitleDivContainer">
        <input type="checkbox" class="downloadCheckBox" name="8_0">
        <div class="sectionTitleDiv clearfix">
          <div class="btnActiveArrow">Our People</div>
          <div class="pdfSize">XXXkB</div>
        </div>
      </div>
      <div class="blueRoundContainerMid expandContentLargeContent" style="display: none;">
        <div class="sectionItem clearfix">
          <input type="checkbox" class="downloadCheckBox" name="8_1">
          <div class="sectionTitle">Our People</div>
        </div>
      </div>
      <div class="arrowBtn"></div>
    </div>
    <div class="sectionTitleContainer">
      <div class="sectionTitleDivContainer">
        <input type="checkbox" class="downloadCheckBox" name="9_0">
        <div class="sectionTitleDiv clearfix">
          <div class="btnActiveArrow">About this Report</div>
          <div class="pdfSize">XXXMB</div>
        </div>
      </div>
      <div class="blueRoundContainerMid expandContentLargeContent" style="display: none;">
        <div class="sectionItem clearfix">
          <input type="checkbox" class="downloadCheckBox" name="9_1">
          <div class="sectionTitle">About this Report</div>
        </div>
      </div>
      <div class="arrowBtn"></div>
    </div>
    <div class="sectionTitleContainer">
      <div class="sectionTitleDivContainer">
        <input type="checkbox" class="downloadCheckBox" name="10_0">
        <div class="sectionTitleDiv clearfix">
          <div class="btnActiveArrow">Resources</div>
          <div class="pdfSize">XXXkB</div>
        </div>
      </div>
      <div class="blueRoundContainerMid expandContentLargeContent" style="display: none;">
        <div class="sectionItem clearfix">
          <input type="checkbox" class="downloadCheckBox" name="10_1">
          <div class="sectionTitle">Resources</div>
        </div>
      </div>
      <div class="arrowBtn"></div>
    </div>
  </div>
</form>
<div class="downloadControlContainer" id="factsheetDownloadControlContainer">
  <div class="downloadSectionTitle" style="padding-top:40px;">Factsheets</div>
  <div class="itemDiv clearfix">
    <div class="itemTitle">Download Full Report (English version)</div>
    <a href="<?=get_stylesheet_directory_uri()?>/assets/pdf/CX_SDR13_factsheet_eng.pdf" target="_blank" class="btn_item_dl"><i class="fa fa-file-text-o"></i>Download</a></a> </div>
  <div class="itemDiv lastItem" id="factsheetSelectedNoDiv">
    <div class="clearfix" style="margin-bottom:20px;">
      <div class="itemTitle">Download Report Sections (English version)</div>
      <a href="#" class="btn_item_dl" id="btnFactsheetSelectDownload"><i class="fa fa-file-text-o"></i>Download</a></a> </div>
    <div class="cartTitle">Selected Downloads <span>(0)</span></div>
    <span class="cartCaption"> 0 files added. Add files from list below and download pdf file to your computer.</span> </div>
</div>
<form id="form2" action="http://sedgwick-richardson.hk/CX-SR2012/resources/pdf_submit_factsheet.php" method="post">
  <div id="factsheetDownloadListContainer">
    <div class="sectionTitleContainer">
      <div class="sectionTitleDivContainer firstItem">
        <input type="checkbox" class="downloadCheckBox" name="11_0">
        <div class="sectionTitleDiv clearfix">
          <div class="btnActiveArrow">Making the Connection</div>
          <div class="pdfSize">2.21MB</div>
        </div>
      </div>
      <div class="blueRoundContainerMid expandContentLargeContent" style="display: none;">
        <div class="sectionItem clearfix">
          <input type="checkbox" class="downloadCheckBox" name="11_1">
          <div class="sectionTitle">Governance of Sustainability</div>
          <div class="pdfSize">252kB</div>
        </div>
        <div class="sectionItem clearfix">
          <input type="checkbox" class="downloadCheckBox" name="11_2">
          <div class="sectionTitle">Stakeholder Engagement and Issues Materiality</div>
          <div class="pdfSize">272kB</div>
        </div>
        <div class="sectionItem clearfix lastItem">
          <input type="checkbox" class="downloadCheckBox" name="11_3">
          <div class="sectionTitle">Community Investment</div>
          <div class="pdfSize">1.8MB</div>
        </div>
      </div>
      <div class="arrowBtn"></div>
    </div>
    <div class="sectionTitleContainer">
      <div class="sectionTitleDivContainer">
        <input type="checkbox" class="downloadCheckBox" name="12_0">
        <div class="sectionTitleDiv clearfix">
          <div class="btnActiveArrow">Safety</div>
          <div class="pdfSize">467kB</div>
        </div>
      </div>
      <div class="blueRoundContainerMid expandContentLargeContent" style="display: none;">
        <div class="sectionItem clearfix lastItem">
          <input type="checkbox" class="downloadCheckBox" name="12_1">
          <div class="sectionTitle">Safety</div>
          <div class="pdfSize">467kB</div>
        </div>
      </div>
      <div class="arrowBtn"></div>
    </div>
    <div class="sectionTitleContainer">
      <div class="sectionTitleDivContainer">
        <input type="checkbox" class="downloadCheckBox" name="13_0">
        <div class="sectionTitleDiv clearfix">
          <div class="btnActiveArrow">Climate Change</div>
          <div class="pdfSize">1.4MB</div>
        </div>
      </div>
      <div class="blueRoundContainerMid expandContentLargeContent" style="display: none;">
        <div class="sectionItem clearfix lastItem">
          <input type="checkbox" class="downloadCheckBox" name="13_1">
          <div class="sectionTitle">Climate Change</div>
          <div class="pdfSize">1.4MB</div>
        </div>
      </div>
      <div class="arrowBtn"></div>
    </div>
    <div class="sectionTitleContainer">
      <div class="sectionTitleDivContainer">
        <input type="checkbox" class="downloadCheckBox" name="14_0">
        <div class="sectionTitleDiv clearfix">
          <div class="btnActiveArrow">Waste Management</div>
          <div class="pdfSize">1.3MB</div>
        </div>
      </div>
      <div class="blueRoundContainerMid expandContentLargeContent" style="display: none;">
        <div class="sectionItem clearfix lastItem">
          <input type="checkbox" class="downloadCheckBox" name="14_1">
          <div class="sectionTitle">Waste Management</div>
          <div class="pdfSize">1.3MB</div>
        </div>
      </div>
      <div class="arrowBtn"></div>
    </div>
    <div class="sectionTitleContainer">
      <div class="sectionTitleDivContainer">
        <input type="checkbox" class="downloadCheckBox" name="15_0">
        <div class="sectionTitleDiv clearfix">
          <div class="btnActiveArrow">Sustainable Sourcing</div>
          <div class="pdfSize">509kB</div>
        </div>
      </div>
      <div class="blueRoundContainerMid expandContentLargeContent" style="display: none;">
        <div class="sectionItem clearfix lastItem">
          <input type="checkbox" class="downloadCheckBox" name="15_1">
          <div class="sectionTitle">Sustainable Sourcing</div>
          <div class="pdfSize">509kB</div>
        </div>
      </div>
      <div class="arrowBtn"></div>
    </div>
    <div class="sectionTitleContainer">
      <div class="sectionTitleDivContainer">
        <input type="checkbox" class="downloadCheckBox" name="16_0">
        <div class="sectionTitleDiv clearfix">
          <div class="btnActiveArrow">Biodiversity</div>
          <div class="pdfSize">198kB</div>
        </div>
      </div>
      <div class="blueRoundContainerMid expandContentLargeContent" style="display: none;">
        <div class="sectionItem clearfix lastItem">
          <input type="checkbox" class="downloadCheckBox" name="16_1">
          <div class="sectionTitle">Biodiversity</div>
          <div class="pdfSize">198kB</div>
        </div>
      </div>
      <div class="arrowBtn"></div>
    </div>
    <div class="sectionTitleContainer">
      <div class="sectionTitleDivContainer">
        <input type="checkbox" class="downloadCheckBox" name="17_0">
        <div class="sectionTitleDiv clearfix">
          <div class="btnActiveArrow">Our People</div>
          <div class="pdfSize">1.3MB</div>
        </div>
      </div>
      <div class="blueRoundContainerMid expandContentLargeContent" style="display: none;">
        <div class="sectionItem clearfix lastItem">
          <input type="checkbox" class="downloadCheckBox" name="17_1">
          <div class="sectionTitle">People</div>
          <div class="pdfSize">1.3MB</div>
        </div>
      </div>
      <div class="arrowBtn"></div>
    </div>
  </div>
</form>
<div class="bottom-next-page-container clearfix">
  <?
if(get_field("next_page",$post->ID)){
	$p = get_field("next_page",$post->ID);
	$permalink = get_permalink($p);
	echo '<a href="'.$permalink.'" class="btn-next-page"><i class="fa fa-arrow-circle-o-right fa-2x pull-right"></i></a>';
}
if(get_field("prev_page",$post->ID)){
	$p = get_field("prev_page",$post->ID);
	$permalink = get_permalink($p);
	echo '<a href="'.$permalink.'" class="btn-prev-page"><i class="fa fa-arrow-circle-o-left fa-2x pull-right"></i></a>';
}
?>
</div>
