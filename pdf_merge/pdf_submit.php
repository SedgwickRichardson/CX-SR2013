<?php
include 'PDFMerger.php';

$pdf = new PDFMerger;
$count = 0;
if(isset($_POST['1_1']) && $_POST['1_1']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_A1_Joint_Message_from_the_Chairman_the_Chief_Executive.pdf', 'all');
}
if(isset($_POST['1_2']) && $_POST['1_2']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_A2_Approach_to_Sustainable_Development.pdf', 'all');
}
if(isset($_POST['2_1']) && $_POST['2_1']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_B1_Overview_of_2012.pdf', 'all');
}
if(isset($_POST['2_2']) && $_POST['2_2']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_B2_Selected_awards_for_Cathay_Pacific_and_Dragonair_2012.pdf', 'all');
}
if(isset($_POST['3_1']) && $_POST['3_1']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_C1_Safety_Matters.pdf', 'all');
}
if(isset($_POST['3_2']) && $_POST['3_2']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_C2_Updates_for_2012.pdf', 'all');
}
if(isset($_POST['3_3']) && $_POST['3_3']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_C3_What_Our_Stakeholders_Think.pdf', 'all');
}
if(isset($_POST['3_4']) && $_POST['3_4']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_C4_Our_Safety_Commitments.pdf', 'all');
}
if(isset($_POST['4_1']) && $_POST['4_1']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_D1_Climate_Change_Matters.pdf', 'all');
}
if(isset($_POST['4_2']) && $_POST['4_2']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_D2_Updates_for_2012.pdf', 'all');
}
if(isset($_POST['4_3']) && $_POST['4_3']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_D3_What_Our_Stakeholders_Think.pdf', 'all');
}
if(isset($_POST['4_4']) && $_POST['4_4']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_D4_Our_Climate_Change_Commitments.pdf', 'all');
}
if(isset($_POST['5_1']) && $_POST['5_1']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_E1_Waste_Management_Matters.pdf', 'all');
}
if(isset($_POST['5_2']) && $_POST['5_2']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_E2_Updates_for_2012.pdf', 'all');
}
if(isset($_POST['5_3']) && $_POST['5_3']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_E3_What_Our_Stakeholders_Think.pdf', 'all');
}
if(isset($_POST['5_4']) && $_POST['5_4']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_E4_Our_Waste_Management_Commitments.pdf', 'all');
}
if(isset($_POST['6_1']) && $_POST['6_1']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_F1_Sustainable_Sourcing_Matters.pdf', 'all');
}
if(isset($_POST['6_2']) && $_POST['6_2']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_F2_Updates_for_2012.pdf', 'all');
}
if(isset($_POST['6_3']) && $_POST['6_3']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_F3_What_Our_Stakeholders_Think.pdf', 'all');
}
if(isset($_POST['6_4']) && $_POST['6_4']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_F4_Our_Supply_Chain_and_Procurement_Commitments.pdf', 'all');
}
if(isset($_POST['7_1']) && $_POST['7_1']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_G1_Biodiversity_Matters.pdf', 'all');
}
if(isset($_POST['7_2']) && $_POST['7_2']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_G2_Updates_for_2012.pdf', 'all');
}
if(isset($_POST['7_3']) && $_POST['7_3']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_G3_What_Our_Stakeholders_Think.pdf', 'all');
}
if(isset($_POST['7_4']) && $_POST['7_4']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_G4_Our_Biodiversity_Commitments.pdf', 'all');
}
if(isset($_POST['8_1']) && $_POST['8_1']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_H1_Our_People_Matter.pdf', 'all');
}
if(isset($_POST['8_2']) && $_POST['8_2']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_H2_Updates_for_2012.pdf', 'all');
}
if(isset($_POST['8_3']) && $_POST['8_3']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_H3_Stakeholder_Views.pdf', 'all');
}
if(isset($_POST['9_1']) && $_POST['9_1']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_I1_Overview.pdf', 'all');
}
if(isset($_POST['9_2']) && $_POST['9_2']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_I2_Stakeholder_Review_Committee.pdf', 'all');
}
if(isset($_POST['9_3']) && $_POST['9_3']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_I3_Independent_Assurance_Statement.pdf', 'all');
}
if(isset($_POST['9_4']) && $_POST['9_4']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_I4_Global_Reporting_Initiative.pdf', 'all');
}
if(isset($_POST['9_5']) && $_POST['9_5']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_I5_Reporting_Methodology.pdf', 'all');
}
if(isset($_POST['9_6']) && $_POST['9_6']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_I6_Abbreviations_and_Glossary.pdf', 'all');
}
if(isset($_POST['9_7']) && $_POST['9_7']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_I7_Acknowledgements.pdf', 'all');
}
if(isset($_POST['10_1']) && $_POST['10_1']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_J1_Video_Gallery.pdf', 'all');
}
if(isset($_POST['10_2']) && $_POST['10_2']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_J2_PDF_Download.pdf', 'all');
}
if(isset($_POST['10_3']) && $_POST['10_3']!='')
{
	$count++;
	$pdf->addPDF('../pdf/report/CX_SDR2012_J3_Investor_Relations_Materials.pdf', 'all');
}
if($count==37)
{
	header('Content-disposition: attachment; filename=CX_SDR12_Full_eng.pdf');
	header('Content-type: application/pdf');
	readfile('../pdf/CX_SDR12_Full_eng.pdf');
}
else if($count>0)
	$pdf->merge('download', 'CX_SDR12.pdf');
	
header('Location: http://www.sedgwick-richardson.net/CX-SR2012/resources/pdf-download.html');
?>