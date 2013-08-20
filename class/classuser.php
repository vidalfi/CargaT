<?php
session_start();
require_once("conexion.php");
class Usuarios
{
	public function get_User()
		{
			if (empty($_POST["user"]) or empty($_POST["res"]))
			{
				header("Location: ../index.php?l=x");
				}else{
				$sql="SELECT * FROM usuarios WHERE user='".$_POST["user"]."' and clave='".$_POST["res"]."'";
				$res=mysql_query($sql,Conectar::con());	
				if (mysql_num_rows($res)==0){
					header("Location: ../index.php?l=l");
					}else{
				if ($reg=mysql_fetch_array($res))
					{
						if ($_POST["user"]==$reg["user"]){
							$_SESSION["titulo"]=$reg["titulo"];
							$_SESSION["nombre"]=$reg["nombre"];
							$_SESSION["cc"]=$reg["cc"];
							$_SESSION["usuario"]=$reg["user"];
							$_SESSION["iduser"]=$reg["id"];
							$_SESSION["empresa"]=$reg["empresa"];
							$_SESSION["sigla"]=$reg["sigla"];
							$_SESSION["nit"]=$reg["nit"];
							$_SESSION["dir"]=$reg["dir"];
							$_SESSION["ciudad"]=$reg["ciudad"];
							$_SESSION["tel"]=$reg["tel"];
							$_SESSION["fax"]=$reg["fax"];
							$_SESSION["cel"]=$reg["cel"];
							$_SESSION["cod"]=$reg["cod"];																			
							echo "<script type='text/javascript'> 
								window.location='../home.php';
								
					</script>";
							exit;
							}else{
							header("Location: ../index.php?l=l");
						}
					}
				}			
			}
	} 
}