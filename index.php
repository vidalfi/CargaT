<?php
require_once("class/cabeza.php")?>
<!doctype html>
<html><head><meta charset="utf-8">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/buttons.css">
<title>..:: Software de @noac.co ::..</title>
<script src="js/md5-min.js"></script>
<script src="js/fscon.js"></script>
<body onload="document.getElementById('user').focus();">
<h1>Ingreso al Sistema</h1>
<div id="caja"><form method="post" name="login" action="exe/logueo.php">
<div id="capa0"><div id="capaerror">
	    <?php if (isset($_GET) and $_GET["l"]=="x"){echo "Los campos están vacíos";} if (isset($_GET) and $_GET["l"]=="l"){echo "Datos Incorrectos";}?></div>
<table id="tablalogin">
	<tr>
    <td width="150">Usuario:</td>
    <td width="166">
    <input name="user" type="text" class="login" autocomplete="off" id="user" tabindex="1"/>
    </td>
</tr>
<tr>
	<td>Contraseña:</td>
    <td>
    <input name="pass" id="pass" type="password" class="login" tabindex="2" onkeyup="document.getElementById('res').value= hex_md5(document.getElementById('pass').value);"/> <input id="res" name="res" value=" hex_md5(document.getElementById('pass').value;" type="hidden" />
    </td>
</tr>
<tr>
	<td>
    </td>
	<td>
    <a class="button button-rounded button-flat-primary" href="#" onclick="enviar2();" tabindex="3"><span><i class="icon-off icon-large"></i> Entrar</span></a>
    </td>
</tr>
</table>
</div></form></div>
<footer class="footer">
<p>Sofware de @noac.co ..:: Actualización 6 de Julio de <?php echo date (Y);?> ::..</p>
</footer></body></html>