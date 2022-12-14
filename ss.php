<?php

require('fpdf.php');

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();


class FPDF
{
protected $FontSpacingPt;      // current font spacing in points
protected $FontSpacing;        // current font spacing in user units

function SetFontSpacing($size)
{
    if($this->FontSpacingPt==$size)
        return;
    $this->FontSpacingPt = $size;
    $this->FontSpacing = $size/$this->k;
    if ($this->page>0)
        $this->_out(sprintf('BT %.3f Tc ET', $size));
}

protected function _dounderline($x, $y, $txt)
{
    // Underline text
    $up = $this->CurrentFont['up'];
    $ut = $this->CurrentFont['ut'];
    $w = $this->GetStringWidth($txt)+$this->ws*substr_count($txt,' ')+(strlen($txt)-1)*$this->FontSpacing;
    return sprintf('%.2F %.2F %.2F %.2F re f',$x*$this->k,($this->h-($y-$up/1000*$this->FontSize))*$this->k,$w*$this->k,-$ut/1000*$this->FontSizePt);
}
}







//set font to arial, bold, 14pt

$pdf->SetFontSpacing(3);
$pdf->Cell(0, 10, 'Test of letter spacing with underline', 0, 1);
$pdf->SetFontSpacing(0);
$pdf->Cell(0, 10, 'Test of letter spacing with underline');
$pdf->Output();




?>