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
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Software @noa</title>
<link rel="stylesheet" href="css/nav.css">
</head>
<body class="no-js">
    <script>
		var el = document.getElementsByTagName("body")[0];
		el.className = "";
	</script>
<header>
<div id="headerdiv">
<div id="headerdivtitulo">Bienvenido(a) al sistema: <br>
Direccion IP de red:
</div>
<div id="headerdivres"><b><?php echo $_SESSION["titulo"]; ?>
<br>
<?php echo $vengoip;?></b>
</div>
<?php echo $_SESSION["empresa"]; ?> -<?php echo $_SESSION["ciudad"]; ?>-
</div>
</header>
<nav id="topNav">
	<ul>
		<li><a href="inicio.php" target="contenido" title="Inicio">Inicio</a></li>
		<li><a href="inicio.php" target="contenido" title="Manifiesto">Expedir</a>
			<ul>
				<li><a href="ocarga.php" target="contenido" title="Orden de Carga">Orden de Carga</a></li>
				<li><a href="remesa.php" target="contenido" title="Remesa">Remesa</a></li>
                <li><a href="manifiesto.php" target="contenido" title="Manifiesto">Manifiesto</a></li>
			</ul>
		</li>
		<li><a href="inicio.php" target="contenido" title="Cumplir">Cumplir</a>
        	<ul>
            	<li><a href="cremesa.php" target="contenido" title="Remesa">Remesa</a></li>
                <li><a href="cmanifiesto.php" target="contenido" title="Manifiesto">Manifiesto</a></li>
            </ul>
		</li>
        <li><a href="inicio.php" target="contenido" title="Opciones">Opciones</a>
        	<ul>
            	<li><a href="cremesa.php" target="contenido" title="Remesa">Vehiculos</a></li>
                <li><a href="cmanifiesto.php" target="contenido" title="Manifiesto">Terceros</a></li>
            </ul>
		</li> 
		<li class="last"><a href="#" title="Salida Segura" onClick="window.location='process/salir.php';">Salir</a></li>
	</ul>
</nav>
<script src="js/jquery.js"></script>
<script src="js/modernizr.js"></script>
<script>
	(function($){
		var nav = $("#topNav");
		nav.find("li").each(function() {
		if ($(this).find("ul").length > 0) {
			$("<span>").text("^").appendTo($(this).children(":first"));
			$(this).mouseenter(function() {
				$(this).find("ul").stop(true, true).slideDown();
			});
			$(this).mouseleave(function() {
				$(this).find("ul").stop(true, true).slideUp();
			});
		}
		});
	})(jQuery);
</script>
<object class="contenido" type="text/html" data="inicio.php" width="400" height="400" name="contenido"> </object>
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