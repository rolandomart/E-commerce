<?php
require_once 'fpdf/fpdf.php';
 require_once'conexion.php';

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
	$this->Image('images/textonegro.png', 15, 5,30);
	// Arial bold 15
	$this->SetFont('Arial','B',18);
	// Movernos a la derecha
	$this->Cell(60);
	// Título
	$this->Cell(75,10,'"Muebleria Sur De Mexico"',0,0,'C');
	// Salto de línea
	$this->Ln(15);

    $this->SetFont('Arial','B',16);
	// Movernos a la derecha
	$this->Cell(60);
	// Título
	$this->Cell(75,10,'Reporte De Proveedor',0,0,'C');
	// Salto de línea
	$this->Ln(15);


    $this->SetFont('Arial','B',14);
	$this->Cell(50,10,'Nombre',1,0,'C');
	$this->Cell(40,10,'Telefono',1,0,'C');
	$this->Cell(50,10,'E-mail',1,0,'C');
	$this->Cell(50,10,'Direccion',1,1,'C');
}

// Pie de página
function Footer()
{
	// Posición: a 1,5 cm del final
	$this->SetY(-15);
	// Arial italic 8
	$this->SetFont('Arial','I',8);
	// Número de página
	$this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}

require_once'conexion.php';
$consulta = "SELECT * FROM proveedor";
$resultado = $mysqli->query($consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);

while ($row = $resultado->fetch_assoc()) {
	# code...
	$pdf->Cell(50,10,$row['nombre'],1,0,'C');
	$pdf->Cell(40,10,$row['telefono'],1,0,'C');
	$pdf->Cell(50,10,$row['email'],1,0,'C');
	$pdf->Cell(50,10,$row['direccion'],1,1,'C');
}



$pdf->Output();

?>