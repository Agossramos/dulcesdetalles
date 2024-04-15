<?php
include_once ('conexion.php');
include_once ('session.php');

session_start();


	$login=0;	//Usuario no valido

	$email =(isset($_POST['loginName']) && !empty($_POST['loginName']))? trim($_POST['loginName']):"";
	$password =(isset($_POST['loginPassword']) && !empty($_POST['loginPassword']))? trim($_POST['loginPassword']):"";
    $sql = "(SELECT Nombre, Apellido, Email, Contraseña, Tipo
			FROM usuarios
			WHERE Email=?)";

    $consulta = $bd ->prepare($sql);
    $consulta->execute([$email]);
    $rs=$consulta->fetch();

	if ($rs["Email"]==$email ){ //veo que el mail sea uno de los guardados en la bd
		
		if ($rs["Contraseña"] == $password) { //veo que la contraseña guardado sea la ingresada
		

			$login=1;	
			$_SESSION["loginName"] = $email;
			$_SESSION["Apellido"]=$rs["Apellido"];
            $_SESSION["Nombre"]=$rs["Nombre"];
			$_SESSION["Tipo"] = $rs["Tipo"];

		}
	}	
	


	if ($login==0) {
		$_SESSION["usuario"]=""; 
        session_destroy();
	}else{
		header("location:index.php");	

	}
?>
