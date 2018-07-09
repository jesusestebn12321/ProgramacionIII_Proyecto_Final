<?php
include_once('PDF.php');
include_once('myDBC.php');
 
    //Recibimos dentro de una cadena la fecha
 
    //Se crea un objeto de PDF
    //Para hacer uso de los métodos
    
    $pdf = new PDF()
    $pdf->AddPage('P', 'Letter');
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(0,10,"K4ing",0,1,'R');
 
    $pdf->Cell(40,7,'P  R  E  S  E  N  T  E',0, 1 , ' L ');
    $pdf->Ln();
 
    $pdf->ImprimirTexto('textoFijo.txt'); //Texto fijo
 
    //Creamos objeto de la clase myDBC
    //para hacer uso del método seleccionar_persona()
    $consultaPersona = new myDBC();
 
    //En una variable guardamos el array que regresa el método
    $datosPersona = $consultaPersona->seleccionar_persona($mat);
 
    //Array de cadenas para la cabecera
    $cabecera = array("Nombre","Apellido","Cedula", "Correo", "Telefono", "Comentarios");
    $pdf->tabla($cabecera,$datosPersona); //Método que integra a cabecera y datos
 
    $pdf->Output(); //Salida al navegador del pdf
?>
