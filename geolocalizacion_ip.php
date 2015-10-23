<?php
<?php
try{
	$clienteSOAP = new SoapClient('http://www.webservicex.net/geoipservice.asmx?WSDL');

	$resultado_suma = $clienteSOAP->sumar(2.7, 3.5);
	$resultado_resta = $clienteSOAP->restar(2.7, 3.5);

	echo "la suma de 2.7 mas 3.5 es: " . $resultado_suma . "<br/>";
	echo "la diferencia de 2.7 menos 3.5 es: " . $resultado_resta . "<br/>";

} catch(SoapFault $e){
	var_dump($e);
}
?>