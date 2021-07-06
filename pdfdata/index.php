<?php
require 'credenciales.php';
include 'plantilla.php';

$query = "SELECT * FROM colaboradores";
$resultado = $mysqli->query($query);


// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(70,6,$row['nombreColaborador'],1,0,'C');
		$pdf->Cell(20,6,$row['edad_colaborador'],1,0,'C');
		$pdf->Cell(70,6,$row['salioColaborador'],1,1,'C');
	}


$pdf->Output();
?>