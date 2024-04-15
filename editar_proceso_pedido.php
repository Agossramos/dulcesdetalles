<?php
    print_r($_POST);
    if(!isset($_POST['codigo'])){
        header('Location: index.php?mensaje=error');
        
    }

    include 'conexion.php';
    $codigo = $_POST['codigo'];
    $fechaentrega = $_POST['datefechaentrega'];

    $sentencia = $bd->prepare("UPDATE pedidos SET Fecha_Entrega = ? where Nro_Pedido = ?;"); // los signos son los valores que les vamos a pasar
    $resultado = $sentencia->execute([$fechaentrega, $codigo]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=editado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>