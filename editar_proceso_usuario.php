<?php
    print_r($_POST);
    if(!isset($_POST['codigo'])){
        header('Location: index.php?mensaje=error');
        
    }

    include 'conexion.php';
    $codigo = $_POST['codigo'];
    $nombre = $_POST['txtNombre'];
    $apellido = $_POST['txtApellido'];
    $email = $_POST['txtEmail'];
    $tipo = $_POST['txtTipo'];

    $sentencia = $bd->prepare("UPDATE usuarios SET Nombre = ?, Apellido = ?, Email = ?, Tipo = ? where ID_Usuario = ?;"); // los signos son los valores que les vamos a pasar
    $resultado = $sentencia->execute([$nombre, $apellido, $email, $tipo, $codigo]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=editado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>