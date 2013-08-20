<?php 
session_start();
ini_set('zlib.output_compression','On');
ini_set('zlib.output_compression_level','6');
header('Content-Type:text/html;charset=utf-8');
date_default_timezone_set('America/New_York');
setlocale(LC_ALL, 'es_ES@euro', 'es_ES', 'esp');
require_once("class/classphp.php");
$fechahoy = date("Y/m/d");
$tra=new Trabajo();

$res=$tra->get_no_man($fechahoy,$_SESSION["iduser"]);
$totalm=count($res);
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>.</title>
<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<h1>
Usuario: <?php echo $_SESSION["usuario"];?>
</h1>
<br >
<h1>
Manifiestos Hoy: <?php echo $totalm;?>
</h1>

</body>
</html>