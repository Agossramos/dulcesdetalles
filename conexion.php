<?php 
$dbhost="127.0.0.1"; 
$dbport ="";

$contrasena = "";
$usuario = "root";
$nombre_bd = "bddulcesdetalles";

try {
	$bd = new PDO (   // esta conexion esta echa con pdo, que pdo es una clase, creo una instancia que se llama bd
		'mysql:host=localhost;
		dbname='.$nombre_bd,
		$usuario,
		$contrasena,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	);
} catch (Exception $e) {
	echo "Problema con la conexion: ".$e->getMessage();
}
?>


