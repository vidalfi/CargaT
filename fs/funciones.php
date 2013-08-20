<?php
function chao_tilde($entra)
{
$traduce=array( 'á' => '&aacute;' , 'é' => '&eacute;' , 'í' => '&iacute;' , 'ó' => '&oacute;' , 'ú' => '&uacute;' , 'ñ' => '&ntilde;' , 'Ñ' => '&Ntilde;' , 'ä' => '&auml;' , 'ë' => '&euml;' , 'ï' => '&iuml;' , 'ö' => '&ouml;' , 'ü' => '&uuml;');
$sale=strtr( $entra , $traduce );
return $sale;
}
function fnumero_dec($numero){
$punto   = '.';
$longitud = strlen($numero);
$pos = strpos($numero, $punto);
if ($pos===false or $pos===""){
	$nodecimal = ($longitud-$pos)-1;
	$entero = substr($numero,-$nodecimal);
return number_format($numero,'','.','');
	}else{
	$entero = substr($numero,0,$pos);
	$nodecimal = ($longitud-$pos)-1;
	$decimal = substr($numero,-$nodecimal);
return number_format($numero,$nodecimal,'.','');
	}
}


function amoneda($numero, $moneda){
$longitud = strlen($numero);
$punto = substr($numero, -1,1);
$punto2 = substr($numero, 0,1);
$separador = ".";
if($punto == "."){
$numero = substr($numero, 0,$longitud-1);
$longitud = strlen($numero);
}
if($punto2 == "."){
$numero = "0".$numero;
$longitud = strlen($numero);
}
$num_entero = strpos ($numero, $separador);
$centavos = substr ($numero, ($num_entero));
$l_cent = strlen($centavos);
if($l_cent == 4){$centavos = $centavos."0";}
elseif($l_cent == 3){$centavos = $centavos;}
elseif($l_cent > 3){$centavos = substr($centavos, 0,3);}
$entero = substr($numero, -$longitud,$longitud-$l_cent);
if(!$num_entero){
	$num_entero = $longitud;
	$centavos = ".00";
	$entero = substr($numero, -$longitud,$longitud);
}

$start = floor($num_entero/3);
$res = $num_entero-($start*3);
if($res == 0){$coma = $start-1; $init = 0;}else{$coma = $start; $init = 3-$res;}
$d= $init; $i = 0; $c = $coma;
	while($i <= $num_entero){
		if($d == 3 && $c > 0){$d = 0; $sep = ","; $c = $c-1;}else{$sep = "";}
		$final .=  $sep.$entero[$i];
		$i = $i+1; // todos los digitos
		$d = $d+1; // poner las comas
	}
	if($moneda == "pesos")  {$moneda = "";
	return $moneda."$".$final.$centavos;
	}
	elseif($moneda == "dolares"){$moneda = "USD";
	return $moneda." ".$final.$centavos;
	}
	elseif($moneda == "euros")  {$moneda = "EUR";
	return $final.$centavos." ".$moneda;
	}
}
function fechanormal($fecha){
    ereg( "([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})", $fecha, $mifecha);
    $lafecha=$mifecha[3]."/".$mifecha[2]."/".$mifecha[1];
    return $lafecha;
} 
function formatearnoencolumna($noorg){
    // reemplazamos las comas y alamacenamos sin comas
    $sinComas= str_replace(",","&cedil;",html_entity_decode($noorg));
    // cambiamo las nuevas lineas por saltos de linea para mostrar en html
    $mensajeParaMostrar= strtoupper (str_replace("\n","<br />",$sinComas));
    // cambiamo el codigo de las comas en minusculas para mostrar
    $mensajeParaMostrar= str_replace("CEDIL","cedil",$mensajeParaMostrar);
    // reemplazamos las nuevas lineas por comas
    $mensaje= str_replace("\n",",",$sinComas);       
    // contamos los separadores
    $nuLineas=count(explode(",", $mensaje));
    // Mostramos en pantalla los datos
    //echo $nuLineas.' lineas<br />'.$mensajeParaMostrar;

$pieces = explode(",", $mensaje);
$mensaje2="";
for ($i = 0; $i < $nuLineas; $i++) {
    $t=0;
	$t = strlen($pieces[$i]);
	
	if ($t==1 or $t==0){
		$mq="\n";
	}
else{
	//$mq="$".$pieces[$i] . "<br />";
	$punto   = '.';
$longitud = strlen($pieces[$i]);
$pos = strpos($pieces[$i], $punto);
if ($pos===false or $pos===""){
	$nodecimal = ($longitud-$pos)-2;
	$entero = substr($pieces[$i],-$nodecimal);
$mq= number_format($pieces[$i],'','.','') . "\n";
	}else{
	$entero = substr($pieces[$i],0,$pos);
	$nodecimal = ($longitud-$pos)-2;
	$decimal = substr($pieces[$i],-$nodecimal);
$mq= number_format($pieces[$i],$nodecimal,'.','') . "\n";
	}

	
}
$mensaje2 = $mensaje2 . $mq ;
}
return $mensaje2;
}
function corta($palabra,$num){ $largo=strlen($palabra); $cadena=substr($palabra,0,$num); return $cadena=$cadena . " ..."; } 
function Numero_con_ceros($numero){
	$a=strlen($numero);
	switch ($a){
		case 1:
			return $r= "0000000" . $numero;
			break;
		case 2:
			return $r= "000000" . $numero;
			break;
		case 3:
			return $r= "00000" . $numero;
			break;
		case 4:
			return $r= "0000" . $numero;
			break;
		case 5:
			return $r= "000" . $numero;
			break;
		case 6:
			return $r= "00" . $numero;
			break;
		case 7:
			return $r= "0" . $numero;
			break;

			}
	}

?>