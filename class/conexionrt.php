<?php
session_start();
class Conectar 
{
public static function con()
	{
		$conexion=mysql_connect("localhost","root","AngieDaniela7");
		mysql_query("SET NAMES 'utf8'");
		mysql_select_db("altrans");
		return $conexion;
	}
}
?>