<?php
require_once("conexion.php");
class Trabajo
{
	private $noactual;
	private $remesa;
	private $placas;
	private $manifiesto;
	private $mcia;
	private $tman;	
public function __construct()
		{
			$this->noactual=array();
			$this->remesa=array();
			$this->placas=array();		
			$this->manifiesto=array();
			$this->mcia=array();
			$this->tman=array();
		}
public function get_noactual($iduser){
		$sql="SELECT *  FROM numeracion WHERE id_user='$iduser'";
		$res=mysql_query($sql,Conectar::con());
		while ($reg=mysql_fetch_assoc($res))
		{
			$this->noactual[]=$reg;
		}
			return $this->noactual;
	}
public function mas_manifiesto($iduser,$nor,$nom){
	$sql="UPDATE numeracion SET noremesa='$nor', noman='$nom' WHERE id_user='$iduser';";
	$res=mysql_query($sql,Conectar::con());
	}
public function bus_placas($placas){
		$sql="SELECT *  FROM placas WHERE placa='$placas'";
		$res=mysql_query($sql,Conectar::con());
		while ($reg=mysql_fetch_assoc($res))
		{
			$this->placas[]=$reg;
		}
			return $this->placas;
	}	
public function bus_placas_id($idplaca){
		$sql="SELECT *  FROM placas WHERE id_placa='$idplaca'";
		$res=mysql_query($sql,Conectar::con());
		while ($reg=mysql_fetch_assoc($res))
		{
			$this->placas[]=$reg;
		}
			return $this->placas;
	}	
public function bus_mcia_id($idmcia){
		$sql="SELECT * FROM mcia WHERE id_mcia=$idmcia";
		$res=mysql_query($sql,Conectar::con());
		while ($reg=mysql_fetch_assoc($res))
		{
			$this->mcia[]=$reg;
		}
			return $this->mcia;
	}	

public function add_placas($titular,$cc,$direccion,$tel,$ciudad,$placa,$marca,$config,$placas,$pesov,$poliza,$soat,$fechav,$conductor,$ccc,$direccionc,$lic,$ciudadc,$tenedor,$cct,$direcciont,$telt,$ciudadt){
	$sql="insert into placas values (null,'$titular','$cc','$direccion','$tel','$ciudad','$placa','$marca','$config','$placas','$pesov','$poliza','$soat','$fechav','$conductor','$ccc','$direccionc','$lic','$ciudadc','$tenedor','$cct','$direcciont','$telt','$ciudadt')";
	$res=mysql_query($sql,Conectar::con());	
	}
public function edit_placas($id_placa,$titular,$cc,$direccion,$tel,$ciudad,$placa,$marca,$config,$placas,$pesov,$poliza,$soat,$fechav,$conductor,$ccc,$direccionc,$lic,$ciudadc,$tenedor,$cct,$direcciont,$telt,$ciudadt){
	$sql="UPDATE placas SET
	titular='$titular',
	cc='$cc',
	direccion='$direccion',
	tel='$tel',
	ciudad='$ciudad',
	marca='$marca',
	config='$config',
	placas='$placas',
	peso='$pesov',
	poliza='$poliza',
	soat='$soat',
	fechav='$fechav',
	conductor='$conductor',
	ccc='$ccc',
	direccionc='$direccionc',
	lic='$lic',
	ciudadc='$ciudadc',
	tenedor='$tenedor',
	cct='$cct',
	direcciont='$direcciont',
	telt='$telt',
	ciudadt='$ciudadt'
	WHERE id_placa='$id_placa';";
	$res=mysql_query($sql,Conectar::con());
	}
public function add_mcia($no,$medida,$cant,$naturaleza,$empaque,$codigo,$producto,$lugaro,$diro,$lugard,$dird,$prop,$ccp,$remitente,$ccr,$destinatario,$ccd,$csoat,$poliza){
	$sql="insert into mcia values (null,'$no','$medida','$cant','$naturaleza','$empaque','$codigo','$producto','$lugaro','$diro','$lugard','$dird','$prop','$ccp','$remitente','$ccr','$destinatario','$ccd','$csoat','$poliza')";
	$res=mysql_query($sql,Conectar::con());	
	}
public function add_manifiesto($titulartm,$cctm,$dirtm,$teltm,$ciudadtm,$nom,$fechae,$origen,$destino,$fechag,$id_placa,$id_mcia,$id_mcia2,$id_mcia3,$id_mcia4,$id_mcia5,$total,$fuente,$ica,$npagar,$anticipo,$saldo,$vletras,$lugar,$fechap,$cpagado,$dpagado,$obs,$user,$nomf){
	$sql="INSERT INTO manifiesto VALUES (null,'$titulartm','$cctm','$dirtm','$teltm','$ciudadtm','$nom','$fechae','$origen','$destino','$fechag','$id_placa','$id_mcia','$id_mcia2','$id_mcia3','$id_mcia4','$id_mcia5','$total','$fuente','$ica','$npagar','$anticipo','$saldo','$vletras','$lugar','$fechap','$cpagado','$dpagado','$obs','$user','$nomf')";
	$res=mysql_query($sql,Conectar::con());	
	}
public function get_man($idman){
	$sql="SELECT *  FROM manifiesto WHERE id_m='$idman'";
	//echo $sql;
	$res=mysql_query($sql,Conectar::con());
		while ($reg=mysql_fetch_assoc($res))
		{
			$this->manifiesto[]=$reg;
		}
			return $this->manifiesto;
	}
public function get_no_man($fechah,$iduser){
	$sql="SELECT nom FROM manifiesto WHERE fechae='$fechah' AND iduser='$iduser';";
	$res=mysql_query($sql,Conectar::con());
	while ($reg=mysql_fetch_assoc($res))
	{
		$this->tman[]=$reg;
	}
		return $this->tman;
	}
}
?>