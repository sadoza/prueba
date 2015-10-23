<?php
include ("CargaPlantilla_helper.php");

$htmlCuerpo=CargaVista('cuerpo.php', array(
		'nombre'=>'José', 
		'apellidos'=>'Lopez Diaz'));

include 'plantilla.php';


function & CargaVista($rutaFichero, array  $variablesDeVista=NULL)
{
	if (! file_exists($rutaFichero)) {	
		$htmlError="<div>No existe: $rutaFichero</div>"; // Nada que incluir
		return $htmlError; 
	}
	
	// Creamos variables que hemos pasado en el array
	foreach($variablesDeVista as $nombreVariableArrayEnForeach=>$valorVariableArray)
	{   // OJO al doble $
		$$nombreVariableArrayEnForeach=$valorVariableArray;
	}
	// Interpretamos plantilla
	ob_start();
	include($rutaFichero);
	$html = ob_get_clean();
	return $html;
}
