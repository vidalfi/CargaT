<?php
ini_set('zlib.output_compression','On');
ini_set('zlib.output_compression_level','6');
header('Content-Type:text/html;charset=utf-8');
date_default_timezone_set('America/New_York');
setlocale(LC_ALL, 'es_ES@euro', 'es_ES', 'esp');
$fechahoy = date("Y/m/d");
require_once("class/classphp.php");
$tra=new Trabajo();
$noam=$tra->get_noactual($_SESSION["iduser"]);
$noama=$noam[0]["noman"];
$noare=$noam[0]["noremesa"];
?>	
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>.:: Software NOAC Software ::.</title>
<link rel="stylesheet" href="css/manifiesto.css">
<script src="js/funciones.js"></script>
<script src="js/jquery-1.2.1.pack.js"></script>
<script src="js/buscar-js.js"></script>
</head>
<body onload="llamar();" onkeypress="parar();" onclick="parar();">
<form name="manifiesto" action="process/add.php" method="post">
<div id="capa7">
Numero de Manifiesto
<input name="nom" id="nom" type="text" value="<?php echo $noama;?>" />
</div>
<DIV ID="capa1">
 <table>
<tr>
<th>Fecha de expedición</th>
<th>Origen del viaje</th>
<th>Destino del viaje</th>
<th>Fecha de entrega</th>
</tr>
<tr>
<th><input id="fechae" name="fechae" type="text" tabindex="1" value="<?php echo $fechahoy ?>"/> </th>
<th><input id="origen" name="origen" type="text" tabindex="2" onkeyup="document.manifiesto.origen.value=document.manifiesto.origen.value.toUpperCase();"/></th>
<th><input id="destino" name="destino" type="text" tabindex="3" onkeyup="document.manifiesto.destino.value=document.manifiesto.destino.value.toUpperCase();"/></th>
<th><input id="fechag" name="fechag" type="text" tabindex="4" onkeyup = "document.getElementById('fechap').value = document.getElementById('fechag').value;" onchange="document.getElementById('fechap').value = document.getElementById('fechag').value;"/></th>
</tr>
</table>
<table>
<tr>
<th>Titular</th>
<th>Documento Id</th>
<th>Direccion</th>
<th>Telefono</th>
<th>Ciudad</th>
</tr>
<tr>
<th><input id="titular" name="titular" type="text" tabindex="5" onkeyup="document.manifiesto.titular.value=document.manifiesto.titular.value.toUpperCase();"/></th>
<th><input id="cc" name="cc" type="text" tabindex="6"/></th>
<th><input id="direccion" name="direccion" type="text" tabindex="7" onkeyup="document.manifiesto.direccion.value=document.manifiesto.direccion.value.toUpperCase();"/></th>
<th><input id="tel" name="tel" type="text" tabindex="8"/></th>
<th><input id="ciudad" name="ciudad" type="text" tabindex="9" onkeyup="document.manifiesto.ciudad.value=document.manifiesto.ciudad.value.toUpperCase();"/></th>
</tr>
</table>
<table>
<tr>
<th>Placa</th>
<th>Marca</th>
<th>Configuracion</th>
<th>Placa S.</th>
<th>Peso V.</th>
<th>Poliza</th>
<th>Compañia SOAT</th>
<th>Fecha V. S.</th>
</tr>
<tr>
<th><input name="placa" autocomplete="off" type="text" id="placa" tabindex="10" size="7" onkeyup="lookup(this.value); " onblur="fill(); "/>
<div class="suggestionsBox" id="suggestions" style="display: none;" >
				<img src="img/upArrow.png" style="position: relative; top: -12px; left: -30px;" alt="upArrow" />
				<div class="suggestionList" id="autoSuggestionsList">
					&nbsp;
				</div>
          </div>
</th>
<th>
<input name="marca" type="text" id="marca" tabindex="11" onFocus="traerDatos();"/></th>
<th><input name="config" type="text" id="config" tabindex="12" size="10" /></th>
<th><input name="placas" type="text" id="placas" tabindex="13" size="6" /></th>
<th><input id="pesov" name="pesov" type="text" tabindex="14"/></th>
<th width="100"><input name="poliza" type="text" id="poliza" tabindex="15" size="12"/></th>
<th><input name="soat" type="text" id="soat" tabindex="16" size="15" /></th>
<th><input name="fechav" type="text" id="fechav" tabindex="17" size="12" /></th>
</tr>
</table>
<table>
<tr>
<th>Propietario</th>
<th>Documento Id</th>
<th>Direccion</th>
<th>Telefono</th>
<th>Ciudad y Dpto</th>
</tr>
<tr>
<th><input id="propietario" name="propietario" type="text" tabindex="18"/></th>
<th><input id="ccp" name="ccp" type="text" tabindex="19"/></th>
<th><input id="direccionp" name="direccionp" type="text" width="200" tabindex="20"/></th>
<th><input id="telp" name="telp" type="text" tabindex="21"/></th>
<th><input id="ciudadp" name="ciudadp" type="text" tabindex="22"/></th>
</tr>
</table>
<table>
<tr>
<th>Poseedor o Tenedor</th>
<th>Documento Id</th>
<th>Direccion</th>
<th>Telefono</th>
<th>Ciudad y Dpto</th>
</tr>
<tr>
<th><input id="tenedor" name="tenedor" type="text" tabindex="23" onFocus="copiar_tenedor();"/></th>
<th><input id="cct" name="cct" type="text" tabindex="24"/></th>
<th><input id="direcciont" name="direcciont" type="text" width="200" tabindex="25"/></th>
<th><input id="telt" name="telt" type="text" tabindex="26"/></th>
<th><input id="ciudadt" name="ciudadt" type="text" tabindex="27"/></th>
</tr>
</table>
<table>
<tr>
<th>Conductor</th>
<th>Documento Id</th>
<th>Direccion</th>
<th>Licencia</th>
<th>Ciudad y Depto</th>
</tr>
<tr>
<th><input id="conductor" name="conductor" type="text" tabindex="28"/></th>
<th><input id="ccc" name="ccc" type="text" tabindex="29"/></th>
<th><input id="direccionc" name="direccionc" type="text" width="200" tabindex="30"/></th>
<th><input id="lic" name="lic" type="text" tabindex="31"/></th>
<th><input id="ciudadc" name="ciudadc" type="text" tabindex="32"/></th>
</tr>
</table>
</DIV>
<DIV ID="capa2">
<table>
<tr>
<th>No Remesa</th>
<th>U. Medida</th>
<th>Cant</th>
<th>Naturaleza</th>
<th>Empaque</th>
<th>Codigo</th>
<th>Producto Tranasportado</th>
</tr>
<tr>
<th><input name="nor1" type="text" id="nor1" tabindex="33" size="8" value="<?php echo $noare ?>"/> </th>
<th><input name="medida1" type="text" id="medida1" tabindex="34" size="8" /></th>
<th><input name="cant1" type="text" id="cant1" tabindex="35" size="6" /></th>
<th><input name="naturaleza1" type="text" id="naturaleza1" tabindex="36" size="10" /></th>
<th><input name="empaque1" type="text" id="empaque1" tabindex="37" size="8"/></th>
<th><input name="codigo1" type="text" id="codigo1" tabindex="38" size="8" /></th>
<th><textarea name="producto1" cols="50" rows="1" id="producto1" tabindex="39" ></textarea></th>
</tr>
</table>
<table>
  <tr>
    <td colspan="2">ORIGEN - DESTINO</td>
    <td colspan="2">NOMBRE</td>
    <td>Identificacion</td>
  </tr>
  <tr>
    <td>Lugar origen</td>
    <td><input name="lugaro1" type="text" id="lugaro1" size="25" tabindex="40"/></td>
    <td>Propietario</td>
    <td><input name="prop1" type="text" id="prop1" size="25" tabindex="44"/></td>
    <td><input name="ccp1" type="number" id="ccp1" size="12" tabindex="45"/></td>
  </tr>
  <tr>
    <td>Dirección</td>
    <td><input name="diro1" type="text" id="diro1" size="25" tabindex="41"/></td>
    <td>Remitente</td>
    <td><input name="rem1" type="text" id="rem1" size="25" tabindex="46"/></td>
    <td><input name="ccr1" type="number" id="ccr1" size="12" tabindex="47"/></td>
  </tr>
  <tr>
    <td>Lugar destino</td>
    <td><input name="lugard1" type="text" id="lugard1" size="25" tabindex="42"/></td><td>Destinatario</td>
    <td><input name="des1" type="text" id="des1" size="25" tabindex="48"/></td>
    <td><input name="ccd1" type="number" id="ccd1" size="12" tabindex="49"/></td>
  </tr>
  <tr>
    <td>Dirección</td>
    <td><input name="dird1" type="text" id="dird1" size="25" tabindex="43"/></td>
    <td>Cia. Seguros</td>
    <td><input name="seg1" type="text" id="seg1" size="25" tabindex="50"/></td>
    <td><input name="pol1" type="text" id="pol1" size="12" tabindex="51"/></td>
  </tr>
</table>
</DIV>

<DIV ID="capa3">
<table>
<tr>
<th>Total</th>
<th><input name="total" type="text" id="total" tabindex="52" size="20" maxlength="20" onkeyup="document.getElementById('vletras').value=nal(document.getElementById('total').value);" onblur="document.getElementById('vletras').value=nal(document.getElementById('total').value);" onchange="document.getElementById('fuente').value=rFuente(document.getElementById('total').value);" onclick="document.getElementById('vletras').value=nal(document.getElementById('total').value);" onselect="document.getElementById('vletras').value=nal(document.getElementById('total').value);" autocomplete="off" /></th>
</tr>
<tr>
<th>R. Fuente</th>
<th><input name="fuente" type="text" id="fuente" tabindex="53" size="20" maxlength="20" onfocus="document.getElementById('fuente').value=rFuente(document.getElementById('total').value);" autocomplete="off"/></th>
</tr>
<tr>
<th>R. Ica</th>
<th><input name="ica" type="text" id="ica" tabindex="54" size="20" maxlength="20" onfocus="document.getElementById('fuente').value=rFuente(document.getElementById('total').value);"/></th>
</tr>
<tr>
<th>N. Pagar</th>
<th><input name="npagar" type="text" id="npagar" tabindex="55" size="20" maxlength="20" onfocus="document.getElementById('fuente').value=rFuente(document.getElementById('total').value);" autocomplete="off"/></th>
</tr>

<tr>
<th>Anticipo</th>
<th><input name="anticipo" type="text" id="anticipo" tabindex="56" size="20" maxlength="20" onkeyup="document.getElementById('saldo').value=saldos(document.getElementById('npagar').value);" autocomplete="off" /> </th>
</tr>

<tr>
<th>Saldo</th>
<th><input name="saldo" type="text" id="saldo" tabindex="57" size="20" maxlength="20" autocomplete="off"/> </th>
</tr>
<tr>
<th>vletras</th>
<th><textarea name="vletras" cols="40" rows="2" id="vletras" tabindex="58"></textarea></th>
</tr>

</table>
</DIV>
<div id="capa4">
<p align="center">PAGO DE SALDO</p>
<table>
<tr>
<th>Lugar</th>
<th>Fecha</th>
</tr>
<tr>
<th><input name="lugar" type="text" id="lugar" tabindex="59" size="15" maxlength="20"/> </th>
<th><input name="fechap" type="text" id="fechap" tabindex="60" size="15" maxlength="20"/> </th>
</tr>
<tr>
<th>Cargue pagado por</th>
<th><input name="cpagado" type="text" id="cpagado" tabindex="61" size="17" maxlength="21" value="REMITENTE"/> </th>
</tr>

<tr>
<th>Descargue pagado por</th>
<th><input name="dpagado" type="text" id="dpagado" tabindex="62" size="17" maxlength="22" value="DESTINATARIO"/> </th>
</tr>
</table>
</div>
<div id="capa5">
<p align="center">
OBSERVACIONES
</p>
<textarea name="obs" cols="30" rows="4" id="obs" tabindex="63" text="text">**EL SOBREPESO CORRE POR CUENTA O RIESGO DEL PROPIETARIO  Y / O CONDUCTOR DEL VEHÍCULO** - ** LA EMPRESA NO SE RESPONSABILIZA.**</textarea>
</div>
<div id="capa6">
<input name="manifiesto" type="button" value="Guardar" align="top" tabindex="64" onClick="enviar1();"/>
</div>
</form>
</body>
</html>
