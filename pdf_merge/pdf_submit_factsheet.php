<?php
include 'PDFMerger.php';

$pdf = new PDFMerger;
$count = 0;
if(isset($_POST['11_1']) && $_POST['11_1']!='')
{
	$count++;
	$pdf->addPDF('pdf/factsheet/CX_SDR2013_A1_Sustainability_Governance_Factsheet.pdf', 'all');
}
if(isset($_POST['11_2']) && $_POST['11_2']!='')
{
	$count++;
	$pdf->addPDF('pdf/factsheet/CX_SDR2013_A2_Stakeholder_Engagement_and_Issues_Materiality_Factsheet.pdf', 'all');
}
if(isset($_POST['11_3']) && $_POST['11_3']!='')
{
	$count++;
	$pdf->addPDF('pdf/factsheet/CX_SDR2013_A3_Community_Investment_Factsheet.pdf', 'all');
}
if(isset($_POST['12_1']) && $_POST['12_1']!='')
{
	$count++;
	$pdf->addPDF('pdf/factsheet/CX_SDR2013_C1_Safety_Factsheet.pdf', 'all');
}
if(isset($_POST['13_1']) && $_POST['13_1']!='')
{
	$count++;
	$pdf->addPDF('pdf/factsheet/CX_SDR2013_D1_Climate_Change_Factsheet.pdf', 'all');
}
if(isset($_POST['14_1']) && $_POST['14_1']!='')
{
	$count++;
	$pdf->addPDF('pdf/factsheet/CX_SDR2013_E1_Waste_Management_Factsheet.pdf', 'all');
}
if(isset($_POST['15_1']) && $_POST['15_1']!='')
{
	$count++;
	$pdf->addPDF('pdf/factsheet/CX_SDR2013_F1_Sustainable_Sourcing_Factsheet.pdf', 'all');
}
if(isset($_POST['16_1']) && $_POST['16_1']!='')
{
	$count++;
	$pdf->addPDF('pdf/factsheet/CX_SDR2013_G1_Biodiversity_Factsheet.pdf', 'all');
}
if(isset($_POST['17_1']) && $_POST['17_1']!='')
{
	$count++;
	$pdf->addPDF('pdf/factsheet/CX_SDR2013_H1_Our_People_Factsheet.pdf', 'all');
}
if($count==9)
{
	header('Content-disposition: attachment; filename=CX_SDR2013_Factsheet.pdf');
	header('Content-type: application/pdf');
	readfile('pdf/factsheet/CX_SDR2013_Factsheet.pdf');
}
else if($count>0)
	$pdf->merge('download', 'CX_SDR13_FACTSHEET.pdf');
	
header('Location: http://cx-sr2013.local.com/resources/pdf-download/');
?>