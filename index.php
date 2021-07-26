<?php
require_once 'vendor/autoload.php';

define('K_PATH_IMAGES', 'img/');

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Creator
$pdf->SetCreator("DERI KURNIAWAN");
$pdf->SetTitle("INVOICE DERI KURNIAWAN");
$pdf->SetSubject("TCPDF TUTORIAL USAGE");

// Header and Footer Data
$pdf->setHeaderData("dasha.jpg", 30, 'INVOICE DASHA', 'THIS IS INVOICE | EDUCATION PURPOSE ONLY | EXAMPLE USE TCPDF.ORG LIBRARY', array(40, 40, 40), array(0, 0, 0));
$pdf->setFooterData([0, 0, 0], [0, 0, 0]);
$pdf->setHeaderFont([PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN]);
$pdf->setFooterFont([PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN]);


// Font Style
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// Margin
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP + 30, PDF_MARGIN_RIGHT);
$pdf->setHeaderMargin(PDF_MARGIN_HEADER);
$pdf->setFooterMargin(PDF_MARGIN_FOOTER);

$pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
$pdf->setFontSubsetting(true);
$pdf->SetFont('helvetica', '', 14, true);

// create page
$pdf->AddPage();

// create html element
$html = <<<EOD

<div style="text-align:center;">
    <h1>Thank you for making payment</h1>
    <p>You have already paid sponsorship fee to dasha taran di <span style="color:#ffaa;"><a href="https://www.tiktok.com/@tarankaaa?">tarankaaa.com</a></span></p>
</div>


EOD;


$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// show pdf
$pdf->Output('deri.pdf', 'I');