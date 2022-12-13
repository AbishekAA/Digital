<?php

require('fpdf.php');

//A4 width : 219mm;
//default margin : 10mm each side;
//writabale horizontal : 219- (10*2)=189mm

$pdf = new FPDF('p','mm','A4');

$pdf->AddPage();

    $pdf->Image('carp.png',150,15,40,0); 
    $pdf->SetFont('ARIAL','',6);
    $pdf->Cell(100,2,'18 Ellery Street','',0,'L');$pdf->Ln();
    $pdf->Cell(100,2,'SUVA, FIJI','',0,'L');$pdf->Ln();
    $pdf->Cell(80,2,'G.P.O BOX 412, SUVA','',0,'L');$pdf->SetFont('ARIAL','',7);$pdf->Cell(50,2,'The Company holds Certificate','',0,'L');$pdf->Ln();
    $pdf->SetFont('ARIAL','',6);$pdf->Cell(80,2,'TELEPHONE: 2295697 FAX: 3303990','',0,'L');$pdf->SetFont('ARIAL','',7);$pdf->Cell(50,2,'of Exemption Co. 34','',0,'L');$pdf->Ln();
    // $pdf->Image('cards.jpeg',150,15,40,0);
    $pdf->Ln();
    $pdf->SetFont('Times','B',8);
    $pdf->Cell(20,5,'ACCOUNT No.','LTRB',0,'L');
    $pdf->Cell(120,5,'','',0,'L');
    $pdf->Cell(40,5,'SERVICE CHARGE RATE','',0,'R');
    $pdf->Ln();




$pdf->Output();











?>