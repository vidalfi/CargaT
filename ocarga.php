<?php
session_start();
ini_set('zlib.output_compression','On');
ini_set('zlib.output_compression_level','6');
header('Content-Type:text/html;charset=utf-8');
require_once("fs/fsphp.php");
$vengoip = getIP();
if (isset($_SESSION["iduser"]))
{
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="css/ocargue.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/buttons.css">

</head>
<body>
<h2>ORDEN DE CARGUE</h2>
<div id="tfecha">
<table width="207" border="0">
  <tr>
    <td colspan="2">Orden de Cargue No:</td>
    </tr>
  <tr>
    <td width="68">Fecha</td>
    <td width="116"><label>4545</label></td>
  </tr>
  <tr>
    <td>Sucursal</td>
    <td><input name="fecha" id="fecha" size="15" type="date" /></td>
  </tr>
</table>

</div>
<table width="400" border="0">
  <tr>
    <td colspan="2">DATOS DEL CLIENTE</td>
  </tr>
  <tr>
    <td>Nombre: </td>
    <td>Nit o Cc:</td>
  </tr>
  <tr>
    <td><input name="nombre" id="nombre" size="30" type="text"/></td>
    <td><input name="cccliente" id="cccliente" size="15" type="number"/></td>
  </tr>
</table>
<table width="400" border="0">
  <tr>
    <td colspan="3">DATOS DE LA MERCANCIA</td>
  </tr>
  <tr>
    <td colspan="3">Producto:</td>
  </tr>
  <tr>
    <td colspan="3"><input name="producto" id="producto" size="50" type="text"/></td>
  </tr>
  <tr>
    <td>Volumen:</td>
    <td>Cantidad:</td>
    <td>Peso:</td>
  </tr>
  <tr>
    <td><input name="volumencia" id="volumencia" size="18" type="number"/></td>
    <td><input name="cantidadcia" id="cantidadcia" size="18" type="number"/></td>
    <td><input name="pesocia" id="pesocia" size="18" type="number"/></td>
  </tr>
</table>
<table width="600" border="0">
  <tr>
    <td colspan="5">DATOS DEL VEHICULO</td>
  </tr>
  <tr>
    <td>PLACA</td>
    <td>MARCA</td>
    <td>MODELO</td>
    <td>TRAYLER</td>
    <td>COLOR</td>
  </tr>
  <tr>
    <td><input name="placa" id="placa" size="15" /></td>
    <td><input name="marca" id="marca" size="15" /></td>
    <td><input name="modelo" id="modelo" size="15" /></td>
    <td><input name="remolque" id="remolque" size="15" /></td>
    <td><input name="color" id="color" size="15" /></td>
  </tr>
  <tr>
    <td colspan="3">Conductor</td>
    <td colspan="2">Cc:</td>
  </tr>
  <tr>
    <td colspan="3"><input name="conductor" id="conductor" size="50" /></td>
    <td colspan="2"><input name="ccconductor" id="ccconductor" size="50" /></td>
  </tr>
</table>
<table width="400" border="0">
  <tr>
    <td colspan="2">REMITENTE</td>
  </tr>
  <tr>
    <td>Nombre:</td>
    <td>Origen:</td>
  </tr>
  <tr>
    <td><input name="rnombre" id="rnombre" size="50" /></td>
    <td><input name="rorigen" id="rorigen" size="30" /></td>
  </tr>
  <tr>
    <td>Dirección:</td>
    <td>Telefono:</td>
  </tr>
  <tr>
    <td><input name="rdir" id="rdir" size="50" /></td>
    <td><input name="rtel" id="rtel" size="30" /></td>
  </tr>
</table>
<table width="600" border="0">
  <tr>
    <td colspan="4">DATOS DEL DESTINATARIO</td>
  </tr>
  <tr>
    <td width="129">NOMBRE</td>
    <td width="129">DESTINO</td>
    <td width="209">DIRECCIÓN</td>
    <td width="115">TELEFONO</td>
  </tr>
  <tr>
    <td><input name="dnombre1" id="dnombre1" size="25" type="text"/></td>
    <td><input name="ddestino1" id="ddestino1" size="25" type="text"/></td>
    <td><input name="ddir1" id="ddir1" size="30" /></td>
    <td><input name="dtel1" id="dtel1" size="13" type="number"/></td>
  </tr>
  <tr>
    <td><input name="dnombre2" id="dnombre2" size="25" type="text"/></td>
    <td><input name="ddestino2" id="ddestino2" size="25" type="text"/></td>
    <td><input name="ddir2" id="ddir2" size="30" type="text"/></td>
    <td><input name="dtel2" id="dtel2" size="13" type="number"/></td>
  </tr>
  <tr>
    <td><input name="dnombre3" id="dnombre3" size="25" type="text"/></td>
    <td><input name="ddestino3" id="ddestino3" size="25" type="text"/></td>
    <td><input name="ddir3" id="ddir3" size="30" type="text"/></td>
    <td><input name="dtel3" id="dtel3" size="13" type="number"/></td>
  </tr>
  <tr>
    <td><input name="dnombre4" id="dnombre4" size="25" type="text"/></td>
    <td><input name="ddestino4" id="ddestino4" size="25" type="text"/></td>
    <td><input name="ddir4" id="ddir4" size="30" type="text"/></td>
    <td><input name="dtel4" id="dtel4" size="13" type="number"/></td>
  </tr>
  <tr>
    <td><input name="dnombre5" id="dnombre5" size="25" type="text"/></td>
    <td><input name="ddestino5" id="ddestino5" size="25" type="text"/></td>
    <td><input name="ddir5" id="ddir5" size="30" type="text"/></td>
    <td><input name="dtel5" id="dtel5" size="13" type="number"/></td>
  </tr>
  <tr>
    <td><input name="dnombre6" id="dnombre6" size="25" type="text"/></td>
    <td><input name="ddestino6" id="ddestino6" size="25" type="text"/></td>
    <td><input name="ddir6" id="ddir6" size="30" type="text"/></td>
    <td><input name="dtel6" id="dtel6" size="13" type="number"/></td>
  </tr>
  <tr>
    <td><input name="dnombre7" id="dnombre7" size="25" type="text"/></td>
    <td><input name="ddestino7" id="ddestino7" size="25"type="text"/></td>
    <td><input name="ddir7" id="ddir7" size="30" type="text"/></td>
    <td><input name="dtel7" id="dtel7" size="13" type="number"/></td>
  </tr>
  <tr>
    <td><input name="dnombre8" id="dnombre8" size="25" type="text"/></td>
    <td><input name="ddestino8" id="ddestino8" size="25"type="text"/></td>
    <td><input name="ddir8" id="ddir8" size="30" type="text"/></td>
    <td><input name="dtel8" id="dtel8" size="13" type="number"/></td>
  </tr>
</table>
<table width="600" border="0">
  <tr>
    <td>OTROS DATOS</td>
  </tr>
  <tr>
    <td>CONDICIONES ESPECIALES DE CARGUE:</td>
  </tr>
  <tr>
    <td><input name="condiciones" id="condiciones" size="75" type="text"/></td>
  </tr>
  <tr>
    <td>SELLOS DE SEGURIDAD Y/O PRECINTOS:</td>
  </tr>
  <tr>
    <td><input name="sellos" id="sellos" size="75" type="text"/></td>
  </tr>
  <tr>
    <td>EMBALAJE ESPECIAL O DITRIBUCION TECNICA:</td>
  </tr>
  <tr>
    <td><input name="ebalaje" id="ebalaje" size="75" type="text"/></td>
  </tr>
  <tr>
    <td>OBSERVACIONES:</td>
  </tr>
  <tr>
    <td><input name="obs" id="obs" size="75" type="text"/></td>
  </tr>
</table>
<a class="button button-pill button-action" href="#" onclick="enviaroc();" tabindex="3"><span><i class="icon-save icon-2x"></i> Guardar</span></a>
</body>
</html>
<?php
}else{
  echo "<script type='text/javascript'>
  alert('¡Sesión Inválida! , Por favor ingrese nuevamente.');
  window.location='index.php';
  </script>";

}
?>