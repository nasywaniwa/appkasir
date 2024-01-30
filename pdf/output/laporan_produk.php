<?php
date_default_timezone_set("Asia/Kuala_Lumpur");
include "../../koneksi.php";
//  ============================================================+
// File name   : example_006.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
// laporan_peserta_didik.php
// Description : Example 006 for TCPDF class
//               WriteHTML and RTL support
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: WriteHTML and RTL support
 * @author Nicola Asuni
 * @since 2008-03-04
 * @group html
 * @group rtl
 * @group pdf
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->setCreator(PDF_CREATOR);
$pdf->setAuthor('Chelsea Widya');
$pdf->setTitle('Nota Penjualan');
$pdf->setSubject('Nota Penjualan');
$pdf->setKeywords('App Kasir, Nota Penjualan');
// set default header data
$pdf->setHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH,'App Kasir 1.0', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->setDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->setMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->setHeaderMargin(PDF_MARGIN_HEADER);
$pdf->setFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->setAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// // set some language-dependent strings (optional)
// if (@file_exists(dirname(FILE).'/lang/eng.php')) {
// 	require_once(dirname(FILE).'/lang/eng.php');
// 	$pdf->setLanguageArray($l);
// }

// ---------------------------------------------------------

// set font
$pdf->setFont('dejavusans', '', 10);

// add a page
$pdf->AddPage();


// create some HTML content //m bkl jd angka klo F pke huruf bulan nya
$html = '
<p align="center"><strong><bold>Laporan Produk</strong></b></p><br>
<table style="widht:100%; border-collapse:collapse; border: 1px solid black;" border="1">
    <tr style="font-weight:bold; text-align:center;">
        <td style="width:5%;">ID</td>
        <td style="width:20%;">Barcode</td>
        <td style="width:35%;">Nama Produk</td>
        <td style="width:30%;">Harga</td>
        <td style="width:10%;">Stok</td>
    </tr>

';

$sql="SELECT * FROM produk";
$query=mysqli_query($koneksi,$sql);
while($data=mysqli_fetch_array($query)){
    $html.='
    <tr>
        <td>'.$data['ProdukID'].'</td>
        <td>'.$data['Barcode'].'</td>
        <td>'.$data['NamaProduk'].'</td>
        <td>'.$data['Harga'].'</td>
        <td>'.$data['Stok'].'</td>
    </tr>
    ';
}
$html.='
<tr>
    <td colspan="5" align="center"><b>Grandtotal</b></td> 
    
</tr>
</table>
<br><br>
-- Dicetak Pada : '.date('d-F-Y H:i:s').'--
';
// output the HTML content / H untuk jam 24 jam h untuk 12 jam, i menit
$pdf->writeHTML($html, true, false, true, false, '');

//Close and output PDF document
$pdf->Output('Laporan Peserta Didik.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+