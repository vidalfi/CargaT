<?php
session_start();
require_once("../class/classphp.php");
$tra=new Trabajo();
$usuarioa=$_SESSION["usuario"];

// Consulta Manifiesto y remesa
$noam=$tra->get_noactual($_SESSION["iduser"]);
$noama=$noam[0]["noman"];
$noare=$noam[0]["noremesa"];
$nomfinal=$_SESSION["cod"].$noama;

//compara placas Y ACTUALIZA DATOS
$placa=$tra->bus_placas($_POST["placa"]);
if ($tp=count($placa)==0){
	$aplaca=$tra->add_placas($_POST["propietario"],$_POST["ccp"],$_POST["direccionp"],$_POST["telp"],$_POST["ciudadp"],$_POST["placa"],$_POST["marca"],$_POST["config"],$_POST["placas"],$_POST["pesov"],$_POST["poliza"],$_POST["soat"],$_POST["fechav"],$_POST["conductor"],$_POST["ccc"],$_POST["direccionc"],$_POST["lic"], $_POST["ciudadc"],$_POST["tenedor"],$_POST["cct"],$_POST["direcciont"],$_POST["telt"],$_POST["ciudadt"]);
	$idplaca=mysql_insert_id();
	}else{
	$idplaca=$placa[0]["id_placa"];
	$eplaca=$tra->edit_placas($idplaca,$_POST["propietario"],$_POST["ccp"],$_POST["direccionp"],$_POST["telp"],$_POST["ciudadp"],$_POST["placa"],$_POST["marca"],$_POST["config"],$_POST["placas"],$_POST["pesov"],$_POST["poliza"],$_POST["soat"],$_POST["fechav"],$_POST["conductor"],$_POST["ccc"],$_POST["direccionc"],$_POST["lic"], $_POST["ciudadc"],$_POST["tenedor"],$_POST["cct"],$_POST["direcciont"],$_POST["telt"],$_POST["ciudadt"]);
	}

//agragar mercancia
$mcia=$tra->add_mcia($_POST["nor1"],$_POST["medida1"],$_POST["cant1"],$_POST["naturaleza1"],$_POST["empaque1"],$_POST["codigo1"],$_POST["producto1"],$_POST["lugaro1"],$_POST["diro1"],$_POST["lugard1"],$_POST["dird1"],$_POST["prop1"],$_POST["ccp1"],$_POST["rem1"],$_POST["ccr1"],$_POST["des1"],$_POST["ccd1"],$_POST["seg1"],$_POST["pol1"]);
$idmcia=mysql_insert_id();
$idmcia2=0;
$idmcia3=0;
$idmcia4=0;
$idmcia5=0;

//add manifiesto
$amanifiesto=$tra->add_manifiesto($_POST["titular"],$_POST["cc"],$_POST["direccion"],$_POST["tel"],$_POST["ciudad"],$noama,$_POST["fechae"],$_POST["origen"],$_POST["destino"],$_POST["fechag"],$idplaca,$idmcia,$idmcia2,$idmcia3,$idmcia4,$idmcia5,$_POST["total"],$_POST["fuente"],$_POST["ica"],$_POST["npagar"],$_POST["anticipo"],$_POST["saldo"],$_POST["vletras"],$_POST["lugar"],$_POST["fechap"],$_POST["cpagado"],$_POST["dpagado"],$_POST["obs"],$_SESSION["iduser"],$nomfinal);
$idmanifiesto=mysql_insert_id();

//suma manifiestop y remesa
$noamat=++$noama;
$noaret=++$noare;
$masnumeracion=$tra->mas_manifiesto($_SESSION["iduser"],$noaret,$noamat);

echo "<script type=''>
	window.location='../man-pdf.php?idm=$idmanifiesto';
</script>";
?>