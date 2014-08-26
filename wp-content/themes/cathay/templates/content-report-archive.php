<?=get_template_part('partials/page_title');?>

<a href="#" class="btn-share">Share<i class="fa fa-share-square-o"></i></a> <a href="javascript:;" id="back-to-top"><i class="fa fa-chevron-circle-up"></i></a>
<div class="content-container">

<div class="clearfix">
            <div class="reportArchiveItem">
              <div class="reportTitle">Report 2012</div>
              <div class="clearfix">
                <img src="<?=get_stylesheet_directory_uri()?>/assets/img/img_report_2012.jpg" alt="" class="reportThumbnail">
                <div class="reportAccess">
                  <div style=""><a target="_blank" href="http://downloads.cathaypacific.com/cx/aboutus/sd/2012/pdf/CX_SDR12_Full_eng.pdf"><i class="fa fa-file-text-o"></i>Download PDF</a><a target="_blank" href="http://downloads.cathaypacific.com/cx/aboutus/sd/2012/"><i class="fa fa-desktop"></i>Go to website</a></div>
                </div>
              </div>
            </div>
            <div class="reportArchiveItem">
              <div class="reportTitle">Report 2011</div>
              <div class="clearfix">
                <img src="<?=get_stylesheet_directory_uri()?>/assets/img/img_report_2011.png" alt="" class="reportThumbnail">
                <div class="reportAccess">
                  <div style=""><a target="_blank" href="http://downloads.cathaypacific.com/cx/aboutus/sd/2011/pdf/CX_SDR11_Full.pdf"><i class="fa fa-file-text-o"></i>Download PDF</a><a target="_blank" href="http://downloads.cathaypacific.com/cx/aboutus/sd/2011/index.htm"><i class="fa fa-desktop"></i>Go to website</a></div>
                </div>
              </div>
            </div>
            <div class="reportArchiveItem">
              <div class="reportTitle">Report 2010</div>
              <div class="clearfix">
                <img src="<?=get_stylesheet_directory_uri()?>/assets/img/img_report_2010.png" alt="" class="reportThumbnail">
                <div class="reportAccess">
                  <div style=""><a target="_blank" href="http://downloads.cathaypacific.com/cx/press/SDreport_en2010.pdf"><i class="fa fa-file-text-o"></i>Download PDF</a><a target="_blank" href="http://downloads.cathaypacific.com/cx/aboutus/sd/2010/index.htm"><i class="fa fa-desktop"></i>Go to website</a></div>
                </div>
              </div>
            </div>
            <div class="reportArchiveItem">
              <div class="reportTitle">Report 2009</div>
              <div class="clearfix">
                <img src="<?=get_stylesheet_directory_uri()?>/assets/img/img_report_2009.png" alt="" class="reportThumbnail">
                <div class="reportAccess">
                  <div style=""><a target="_blank" href="http://downloads.cathaypacific.com/cx/press/SDreport_en2009.pdf"><i class="fa fa-file-text-o"></i>Download PDF</a><a target="_blank" href="http://downloads.cathaypacific.com/cx/aboutus/sd/2009/index.htm"><i class="fa fa-desktop"></i>Go to website</a></div>
                </div>
              </div>
            </div>
            <div class="reportArchiveItem">
              <div class="reportTitle">Report 2008</div>
              <div class="clearfix">
                <img src="<?=get_stylesheet_directory_uri()?>/assets/img/img_report_2008.png" alt="" class="reportThumbnail">
                <div class="reportAccess">
                  <div style=""><a target="_blank" href="http://downloads.cathaypacific.com/cx/press/CSRreport_en2008.pdf"><i class="fa fa-file-text-o"></i>Download PDF</a></div>
                </div>
              </div>
            </div>
            <div class="reportArchiveItem">
              <div class="reportTitle">Report 2007</div>
              <div class="clearfix">
                <img src="<?=get_stylesheet_directory_uri()?>/assets/img/img_report_2007.png" alt="" class="reportThumbnail">
                <div class="reportAccess">
                  <div style=""><a target="_blank" href="http://downloads.cathaypacific.com/cx/press/CSRreport_en2007.pdf"><i class="fa fa-file-text-o"></i>Download PDF</a></div>
                </div>
              </div>
            </div>
            <div class="reportArchiveItem">
              <div class="reportTitle">Report 2006</div>
              <div class="clearfix">
                <img src="<?=get_stylesheet_directory_uri()?>/assets/img/img_report_2006.png" alt="" class="reportThumbnail">
                <div class="reportAccess">
                  <div style=""><a target="_blank" href="http://downloads.cathaypacific.com/cx/press/CSRreport_en2006.pdf"><i class="fa fa-file-text-o"></i>Download PDF</a></div>
                </div>
              </div>
            </div>
            <div class="reportArchiveItem">
              <div class="reportTitle">Report 2005</div>
              <div class="clearfix">
                <img src="<?=get_stylesheet_directory_uri()?>/assets/img/img_report_2005.png" alt="" class="reportThumbnail">
                <div class="reportAccess">
                  <div style=""><a target="_blank" href="http://downloads.cathaypacific.com/cx/press/environmentalreport_en2005.pdf"><i class="fa fa-file-text-o"></i>Download PDF</a></div>
                </div>
              </div>
            </div>
            <div class="reportArchiveItem">
              <div class="reportTitle">Report 2004</div>
              <div class="clearfix">
                <img src="<?=get_stylesheet_directory_uri()?>/assets/img/img_report_2004.png" alt="" class="reportThumbnail">
                <div class="reportAccess">
                  <div style=""><a target="_blank" href="http://downloads.cathaypacific.com/cx/press/environmentalreport_en.pdf"><i class="fa fa-file-text-o"></i>Download PDF</a></div>
                </div>
              </div>
            </div>
            <div class="reportArchiveItem last">
              <div class="reportTitle">Report 2003</div>
              <div class="clearfix">
                <img src="<?=get_stylesheet_directory_uri()?>/assets/img/img_report_2003.png" alt="" class="reportThumbnail">
                <div class="reportAccess">
                  <div style=""><a target="_blank" href="http://downloads.cathaypacific.com/cx/press/environmentalreport_en_2003.pdf"><i class="fa fa-file-text-o"></i>Download PDF</a></div>
                </div>
              </div>
            </div>
          </div>

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
