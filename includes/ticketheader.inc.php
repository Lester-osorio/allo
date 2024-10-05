<?php
$pdf->setXY(2, 1.5);
$pdf->MultiCell(73, 4.2, $empresa, 0, 'C', 0, 1);

$pdf->setXY(2, 10);
$pdf->SetFont('Arial', '', 6.9);
$pdf->MultiCell(73, 4.2, 'av guatemala', 0, 'C', 0, 1);

$get_YD = $pdf->GetY();

$pdf->setXY(2, 6);
$pdf->SetFont('Arial', '', 8);
$pdf->MultiCell(73, 4.2, 'NIT:1728237-3', 0, 'C', 0, 1);


//$pdf->setXY(2,$get_YD);
// $pdf->MultiCell(73, 4.2, '954775902', 0,'C',0 ,1);

/*INGRESAR EN ESTA LINEA EL TELEFONO DEL TICKET*/

$pdf->setXY(2, $get_YD);
$pdf->MultiCell(73, 4.2, 'autollantasdelocccidente@gmail.com', 0, 'C', 0, 1);

$get_YH = $pdf->GetY();
