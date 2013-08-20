<?php
session_start();
require_once("../class/conexion.php");
/*$bma=$_GET['mprint'];
$bpa=$_GET['pprint'];
$bca=$_GET['cprint'];
if ($_SESSION["usuario"])
{
/*$sql="SELECT * FROM manifiesto WHERE id_m='$bma'";
$fila=mysql_query($sql, $con);
$mactual=mysql_fetch_array($fila);

$sql1="SELECT * FROM placas WHERE id_placa=$bpa";
$fila1=mysql_query($sql1, $con);
$pactual=mysql_fetch_array($fila1);

$sql2="SELECT * FROM mcia WHERE id_mcia=$bca";
$fila2=mysql_query($sql2, $con);
$cactual=mysql_fetch_array($fila2);*/
?>	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.:: cubee.co MANIFIESTO DE CARGA NATRANS cubee.co ::.</title>
<link type="text/css" rel="stylesheet" href="../css/impres.css" />
<script language="JavaScript">

<!-- Begin
function printPage() {
if (window.print) {
agree = confirm('¿Quieres imprimir la página?');
if (agree) window.print();
   }
   
}

</script>
</head>

<body onload="printPage()">
<DIV ID="capa0">
<p align="center" style="font-size:16px; font-weight: bold;">FORMATO MANIFIESTO UNICO DE CARGA</p>
<p align="center" style="font-size:12px; font-weight:bold">MINISTERIO DE TRANSPORTE </p>
<p align="center" style="font-size:11px; font-weight:bold">DIRECCIÓN DE TRANSITO Y TRANSPORTE</p>


<p>&nbsp;</p>
<p align="left" style="font-size:16px; font-weight:bold">NARIÑENSE DE TRANSPORTISTAS LTDA CRA 2 No 5E 2 34 TEL 7251075 CEL 3122261945  3113431834 IPIALES</p>
</DIV >

<div id="logon"><img src="../img/logona.png" width="90" height="65" /> </div>
<!--<div id="#"><img src="#" width="518" height="315" /> </div>-->
<div id="nomanifiesto">
  <p align="center" style="font-size:10px; font-weight:bold; background:#DFD8D8; ">NUMERO MANIFIESTO ELECTRONICO DE GARGA</p>
<p align="center" style="font-size:16px; font-weight:bold"><?php echo $mactual['nom']?></p>
<p align="center" style="font-size:12px; font-weight:bold; background:#DFD8D8" >CODIGO NUMERICO CONSECUTIVO</p>

</div>
<DIV ID="capa1">
<p align="center" style="font-size:12px">FECHA DE EXPEDICION</p>
<p align="center" class="salida" "><?php echo fechanormal($mactual['fechae'])?></p>
</DIV>
<DIV ID="capa2">
<p align="center" style="font-size:12px">ORIGEN DEL VIAJE</p>
<p align="center" style="font-size:14px"><?php echo chao_tilde($mactual['origen'])?></p>
</DIV>
<DIV ID="capa3">
<p align="center" style="font-size:12px">DESTINO DEL VIAJE</p>
<p align="center" style="font-size:14px"><?php echo chao_tilde($mactual['destino'])?></p>
</DIV>
<div id="capa4">
<p align="center" style="font-size:12px">FECHA LIMITE ENTREGA CARGA</p>
<p align="center" style="font-size:14px"><?php echo fechanormal($mactual['fechag'])?></p>
</div>
<div id="capa5">
<p align="center" style="font-size:14px; font-weight:bold">
INFORMACION DEL TITULAR DEL MANIFIESTO Y DEL VEHICULO
</p>
</div>
<div id="capa6">
<p align="center" style="font-size:12px">TITULAR MANIFIESTO</p>
<p align="center" style="font-size:14px"><?php echo chao_tilde($pactual['titular'])?></p>
</div>
<div id="capa7">
<p align="center" style="font-size:12px">DOCUMENTO DE IDENTIFICACION No.</p>
<p align="center" style="font-size:14px"><?php echo chao_tilde($pactual['cc'])?></p>
</div>
<div id="capa8">
<p align="center" style="font-size:12px">DIRECCION</p>
<p align="center" style="font-size:14px"><?php echo chao_tilde($pactual['direccion'])?></p>
</div>
<div id="capa9">
<p align="center" style="font-size:12px">TELEFONO</p>
<p align="center" style="font-size:14px"><?php echo chao_tilde($pactual['tel'])?></p>
</div>
<div id="capa10">
<p align="center" style="font-size:12px">CIUDAD</p>
<p align="center" style="font-size:14px"><?php echo chao_tilde($pactual['ciudad'])?></p>
</div>
<div id="capa11">
<p align="center" style="font-size:12px">PLACA</p>
<p align="center" style="font-size:14px"><?php echo chao_tilde($pactual['placa'])?></p>
</div>
<div id="capa12">
<p align="center" style="font-size:12px">MARCA</p>
<p align="center" style="font-size:14px"><?php echo chao_tilde($pactual['marca'])?></p>
</div>
<div id="capa13">
<p align="center" style="font-size:12px">CONFIGURACION</p>
<p align="center" style="font-size:14px"><?php echo chao_tilde($pactual['config'])?></p>
</div>
<div id="capa14">
<p align="center" style="font-size:12px">PLACA SEMIREMOLQUE</p>
<p align="center" style="font-size:14px"><?php echo chao_tilde($pactual['placas'])?></p>
</div>
<div id="capa15">
<p align="center" style="font-size:12px">PESO VACIO</p>
<p align="center" style="font-size:14px"><?php echo chao_tilde($pactual['peso'])?></p>
</div>
<div id="capa16">
<p align="center" style="font-size:12px">NRO POLIZA SOAT</p>
<p align="center" style="font-size:14px"><?php echo chao_tilde($pactual['poliza'])?></p>
</div>
<div id="capa17">
<p align="center" style="font-size:12px">COMPAÑIA DE SEGUROS SOAT</p>
<p align="center" style="font-size:14px"><?php echo chao_tilde($pactual['soat'])?></p>
</div>
<div id="capa18">
<p align="center" style="font-size:10px">VENCIMIENTO SOAT</p>
<p align="center" style="font-size:12px"><?php echo fechanormal($pactual['fechav'])?></p>
</div>
<div id="capa19">
<p align="center" style="font-size:12px">CONDUCTOR</p>
<p align="center" style="font-size:14px"><?php echo chao_tilde($pactual['conductor'])?></p>
</div>
<div id="capa20">
<p align="center" style="font-size:12px">DOCUMENTO DE IDENTIFICACION No.</p>
<p align="center" style="font-size:14px"><?php echo chao_tilde($pactual['ccc'])?></p>
</div>
<div id="capa21">
<p align="center" style="font-size:12px">DIRECCION</p>
<p align="center" style="font-size:14px"><?php echo chao_tilde($pactual['direccionc'])?></p>
</div>
<div id="capa22">
<p align="center" style="font-size:10px">NRO LICENCIA CONDUCTOR</p>
<p align="center" style="font-size:14px"><?php echo chao_tilde($pactual['lic'])?></p>
</div>
<div id="capa23">
<p align="center" style="font-size:12px">CIUDAD</p>
<p align="center" style="font-size:14px"><?php echo chao_tilde($pactual['ciudadc'])?></p>
</div>
<div id="capa24">
<p align="center" style="font-size:14px; font-weight:bold">
INFORMACION DE LA MERCANCIA TRANSPORTADA
</p>
</div>
<div id="capa25">
<p align="center" style="font-size:9px; background:#DFD8D8">NO DE REMESA</p>
<p align="center" style="font-size:10px"><?php echo chao_tilde($cactual['no'])?></p>
</div>
<div id="capa26">
<p align="center" style="font-size:9px; background:#DFD8D8">UN. MEDIDA</p>
<p align="center" style="font-size:10px"><?php echo chao_tilde($cactual['medida'])?></p>
</div>
<div id="capa27">
<p align="center" style="font-size:9px; background:#DFD8D8">CANTIDAD</p>
<p align="center" style="font-size:10px"><?php echo chao_tilde($cactual['cant'])?></p>

</div>
<div id="capa28">
<p align="center" style="font-size:9px; background:#DFD8D8">NATURALEZA</p>
<p align="center" style="font-size:10px"><?php echo chao_tilde($cactual['naturaleza'])?></p>

</div>
<div id="capa29">
<p align="center" style="font-size:9px; background:#DFD8D8">EMPAQUE</p>
<p align="center" style="font-size:10px"><?php echo chao_tilde($cactual['empaque'])?></p>

</div>
<div id="capa30">
<p align="center" style="font-size:9px; background:#DFD8D8">COD. PRODUCTO</p>
<p align="center" style="font-size:10px"><?php echo chao_tilde($cactual['codigo'])?></p>

</div>
<div id="capa31">
<p align="center" style="font-size:9px; background:#DFD8D8">PRODUCTO TRANSPORTADO</p>
<p align="center" style="font-size:10px" ><?php echo chao_tilde($cactual['producto'])?></p>
</div>
<div id="capa32">
<p align="center" style="font-size:9px; background:#DFD8D8">INFORMACION REMITENTE</p>
<p align="center" style="font-size:10px"><?php echo chao_tilde($cactual['infr'])?></p>
</div>
<div id="capa33">
<p align="center" style="font-size:9px; background:#DFD8D8">INF. DEL DESTINATARIO</p>
<p align="center" style="font-size:10px"><?php echo chao_tilde($cactual['infd'])?></p>
</div>
<div id="capa34">
<p align="center" style="font-size:9px; background:#DFD8D8">M. ASEGURADA</p>
<p align="center" style="font-size:10px"><?php echo chao_tilde($cactual['maseg'])?></p>
</div>
<div id="capa35">
<p align="center" style="font-size:9px; background:#DFD8D8">T. SEGURO</p>
<p align="center" style="font-size:10px"><?php echo chao_tilde($cactual['tseg'])?></p>
</div>

<div id="capa36">
<p align="center" style="font-size:14px; font-weight:bold">
RECOMENDACIONES
</p>
</div>
<div id="capa37">
<p align="left" style="font-size:12px; font-style:!important">
VALOR TOTAL DEL VIAJE
</p>
<p align="left" style="font-size:12px; background:#DFD8D8">
RETENCION EN LA FUENTE
</p>
<p align="left" style="font-size:12px; ">
RETENCION ICA
</p>
<p align="left" style="font-size:12px; background:#DFD8D8">
VALOR NETO A PAGAR
</p>
<p align="left" style="font-size:12px">
VALOR ANTICIPO
</p>
<p align="left" style="font-size:12px; background:#DFD8D8">
OTROS
</p>
<p align="left" style="font-size:12px">
  SALDO POR PAGAR
</p>

</div>
<div id="capa38">
<p align="right" style="font-size:12px"><?php echo amoneda($mactual['total'],pesos)?></p>
<p align="right" style="font-size:12px; background:#DFD8D8">
<?php echo amoneda($mactual['fuente'],pesos)?>
</p>
<p align="right" style="font-size:12px"><?php echo amoneda($mactual['ica'],pesos)?></p>
<p align="right" style="font-size:12px; background:#DFD8D8">
<?php echo amoneda($mactual['npagar'],pesos)?>
</p>
<p align="right" style="font-size:12px"><?php echo amoneda($mactual['anticipo'],pesos)?></p>
<p align="right" style="font-size:12px; background:#DFD8D8">
Otros
</p>
<p align="right" style="font-size:12px">
<?php echo amoneda($mactual['saldo'],pesos)?>
</p>
</div>
<div id="capa39">
<p align="center" style="font-size:14px; font-weight:bold">
PAGO DE SALDO
</p>
</div>
<div id="capa40">
<p align="center" style="font-size:10px">LUGAR</p>
<p align="center" style="font-size:12px"><?php echo $mactual['lugar']?></p>

</div>
<div id="capa41">
<p align="center" style="font-size:10px; font-weight:bold">FECHA</p>
<p align="center" style="font-size:12px"><?php echo fechanormal($mactual['fechap'])?></p>

</div>
<div id="capa42">
  <p align="center" style="font-size:10px">CARGUE PAGADO POR:</p>
<p align="center" style="font-size:12px"><?php echo $mactual['cpagado']?></p>

</div>
<div id="capa43">
<p align="center" style="font-size:10px">DESCARGUE PAGADO POR:</p>
<p align="center" style="font-size:12px"><?php echo $mactual['dpagado']?></p>

</div>
<div id="capa44">
  <p align="center" style="font-size:14px; font-weight:bold">
PRECIO DEL VIAJE
</p>
</div>
<div id="capa45">
   <p align="justify" style="font-size:12px; ">
<?php echo chao_tilde($mactual['obs'])?></p>
</p>

</div>
<div id="capa46">
<p style="font-size:12px;">VALOR TOTAL DEL VIAJE EN LETRAS: <?php echo chao_tilde($mactual['vletras'])?></p>
</div>
<div id="idmanifiesto">
<p align="justify" style="font-size:10px">   </p>

</div>
<div id="idunico">
<p style="font-size:8px;">ID: -> <?php echo chao_tilde($mactual['id_m'])?> <- </p>
<p style="font-size:12px; font-family: '3 of 9 Barcode';">100<?php echo chao_tilde($mactual['id_m'])?>100</p>
</div>
<div id="capa47">
  <p align="center" style="font-size:14px; font-weight:bold">
FIRMA Y HUELLA TITULAR MANIFIESTO
</p>
</div>
<div id="capa48">
<p align="center" style="font-size:14px; font-weight:bold">
FIRMA Y HUELLA DEL CONDUCTOR
</p>
</div>
</body>
</html>
<?php
/*}else
{
	echo "<script type='text/javascript'>
	alert('Usted no esta autorizado. Por favor ingrese nuevamente.');
	window.location='index.html';
	</script>";
	}*/
?>