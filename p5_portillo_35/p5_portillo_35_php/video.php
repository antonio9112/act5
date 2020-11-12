<?php

	// Cadenas de caracteres:
	$cadena01 = "patron";
	$cadena02 = "patrones";
	$cadena03 = "PATRONes";

	// Patrones:
	$patron01 = "/patron/";    // La cadena contiene 'patron', en min�scula
	$patron02 = "/patron/i";   // La cadena contiene 'patron', en may�sculas o min�sculas
	$patron03 = "/^patron$/";  // La cadena es ex�ctamente 'patron', en min�scula

	// Resultado:
	echo "CADENA: [".$cadena01."]<br />";
	echo "�La cadena contiene 'patron' en min�scula?: ".preg_match($patron01, $cadena01)."<br />";
	echo "�La cadena contiene 'patron' en may�sculas o min�sculas?: ".preg_match($patron02, $cadena01)."<br />";
	echo "�La cadena es ex�ctamente 'patron', en min�sculas?: ".preg_match($patron03, $cadena01)."<br />";
	echo "---------------------<p />";

	echo "CADENA: [".$cadena02."]<br />";
	echo "�La cadena contiene 'patron' en min�scula?: ".preg_match($patron01, $cadena02)."<br />";
	echo "�La cadena contiene 'patron' en may�sculas o min�sculas?: ".preg_match($patron02, $cadena02)."<br />";
	echo "�La cadena es ex�ctamente 'patron', en min�sculas?: ".preg_match($patron03, $cadena02)."<br />";
	echo "---------------------<p />";

	echo "CADENA: [".$cadena03."]<br />";
	echo "�La cadena contiene 'patron' en min�scula?: ".preg_match($patron01, $cadena03)."<br />";
	echo "�La cadena contiene 'patron' en may�sculas o min�sculas?: ".preg_match($patron02, $cadena03)."<br />";
	echo "�La cadena es ex�ctamente 'patron', en min�sculas?: ".preg_match($patron03, $cadena03)."<br />";

?>