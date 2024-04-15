<?php
require("conexion.php");
session_start();  
	$loginName = (isset($_SESSION["loginName"]) && !empty($_SESSION["loginName"]))? trim($_SESSION["loginName"]):""; 
	$loginPassword = (isset($_SESSION["loginPassword"]) && !empty($_SESSION["loginPassword"]))? trim($_SESSION["loginPassword"]):""; 
	$tipo= (isset($_SESSION["Tipo"]) && !empty($_SESSION["Tipo"]))? trim($_SESSION["Tipo"]):""; 
	if ($loginName=="") {
	    unset($_SESSION["loginName"]);
	    $_SESSION = array();
		session_destroy();
	}else{
        $sentencia= $bd->query("SELECT ID_Usuario FROM usuarios WHERE Email = '$loginName';");
        $consulta_sql = $sentencia->fetchAll(PDO::FETCH_OBJ);
        foreach($consulta_sql as $dato)
        $idUser = $dato->ID_Usuario;
    }
?>
